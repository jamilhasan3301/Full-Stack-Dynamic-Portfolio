<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\LoginLog;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        try {
            // Validate the request
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ], [
                'email.required' => 'Email is required',
                'email.email' => 'Please enter a valid email address',
                'password.required' => 'Password is required',
            ]);

            // Get the user if they exist
            $user = User::where('email', $request->email)->first();

            // Attempt to log in
            if (Auth::attempt($credentials, $request->filled('remember'))) {
                // Log successful login
                LoginLog::create([
                    'user_id' => $user->id,
                    'email' => $request->email,
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'was_successful' => true,
                    'attempted_at' => now()
                ]);

                // Regenerate session for security
                $request->session()->regenerate();

                // Get intended URL or default to dashboard
                $redirect = redirect()->intended(route('admin.dashboard'));
                return $redirect->with('success', 'Welcome back!');
            }

            // Log failed login attempt
            LoginLog::create([
                'user_id' => $user ? $user->id : null,
                'email' => $request->email,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'was_successful' => false,
                'failure_reason' => $user ? 'Invalid password' : 'User not found',
                'attempted_at' => now()
            ]);

            return back()
                ->withInput($request->only('email'))
                ->with('error', 'These credentials do not match our records.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log validation error
            LoginLog::create([
                'email' => $request->email ?? 'unknown',
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'was_successful' => false,
                'failure_reason' => 'Validation failed: ' . implode(', ', $e->errors()),
                'attempted_at' => now()
            ]);

            return back()
                ->withErrors($e->validator)
                ->withInput($request->only('email'));
        } catch (\Exception $e) {
            // Log system error
            LoginLog::create([
                'email' => $request->email ?? 'unknown',
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'was_successful' => false,
                'failure_reason' => 'System error: ' . $e->getMessage(),
                'attempted_at' => now()
            ]);

            \Log::error('Login error: ' . $e->getMessage());
            return back()
                ->withInput($request->only('email'))
                ->with('error', 'An error occurred during login. Please try again.');
        }
    }

    public function registration(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required'
            ], [
                'password.confirmed' => 'The password confirmation does not match.',
                'password.min' => 'The password must be at least 8 characters.',
                'email.unique' => 'This email is already registered.'
            ]);

            // Create the user
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'role_id' => 2, // Set default role for new users
            ]);

            // Log the user in
            Auth::login($user);
            
            // Redirect to dashboard
            return redirect()->route('admin.dashboard')
                ->with('success', 'Account created successfully! Welcome to your dashboard.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()
                ->withErrors($e->validator)
                ->withInput($request->only(['name', 'email']));
        } catch (\Exception $e) {
            \Log::error('Registration failed: ' . $e->getMessage());
            return back()
                ->withInput($request->only(['name', 'email']))
                ->with('error', 'Registration failed. Please try again. If the problem persists, contact support.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }
}
