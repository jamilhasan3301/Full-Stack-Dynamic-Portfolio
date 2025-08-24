<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'percentage' => 'required|integer|min:0|max:100',
                'icon' => 'nullable|string|max:255',
                'description' => 'nullable|string'
            ]);

            $skill = Skill::create($validated);

            return back()->with('success', 'Skill added successfully!');
        } catch (\Exception $e) {
            \Log::error('Failed to add skill: ' . $e->getMessage());
            return back()->with('error', 'Failed to add skill. Please try again.');
        }
    }

    public function update(Request $request, Skill $skill)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'percentage' => 'required|integer|min:0|max:100',
                'icon' => 'nullable|string|max:255',
                'description' => 'nullable|string'
            ]);

            $skill->update($validated);

            return back()->with('success', 'Skill updated successfully!');
        } catch (\Exception $e) {
            \Log::error('Failed to update skill: ' . $e->getMessage());
            return back()->with('error', 'Failed to update skill. Please try again.');
        }
    }

    public function destroy(Skill $skill)
    {
        try {
            $skill->delete();
            return back()->with('success', 'Skill deleted successfully!');
        } catch (\Exception $e) {
            \Log::error('Failed to delete skill: ' . $e->getMessage());
            return back()->with('error', 'Failed to delete skill. Please try again.');
        }
    }
}
