@extends('index')
@push('style')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
@endpush
@section('main-content')
<body style="font-family: 'Inter', Arial, sans-serif; background: #fafafa;">
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <h3 style="margin:0;">Jamil</h3>
        </div>
        <div class="navbar-links" style="display: flex; gap: 24px; align-items: center;">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/projects') }}">Projects</a>
            <a href="#contact" class="contact-link">Contact</a>
            <a href="{{ asset('assets/resume.pdf') }}" target="_blank" class="resume-link" style="background:#222; color:#fff; padding:8px 16px; border-radius:6px; font-weight:600;">Resume</a>
        </div>
    </nav>
    <section style="padding: 48px 0 32px 0; max-width:1100px; margin:0 auto;">
        <h2 style="font-size:2.2rem; font-weight:700; margin-bottom:32px; text-align:center;">My Projects</h2>
        <div class="projects-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:32px;">
            <!-- Example Project Card -->
            <div class="project-card" style="background:#fff; border-radius:14px; box-shadow:0 2px 16px rgba(0,0,0,0.06); overflow:hidden; transition:box-shadow 0.2s;">
                <img src="{{ asset('assets/image/pro-card.jpg') }}" alt="Project 1" style="width:100%; height:160px; object-fit:cover;">
                <div style="padding:18px;">
                    <h4 style="margin:0 0 8px 0; font-size:1.2rem; font-weight:600;">Project Title 1</h4>
                    <p style="color:#555; font-size:0.98rem; margin-bottom:12px;">Short project description goes here. Highlight your role, tech stack, and impact.</p>
                    <a href="#" style="color:#42d1f5; text-decoration:underline; font-weight:500;">View Details</a>
                </div>
            </div>
            <div class="project-card" style="background:#fff; border-radius:14px; box-shadow:0 2px 16px rgba(0,0,0,0.06); overflow:hidden; transition:box-shadow 0.2s;">
                <img src="{{ asset('assets/image/pro-card.jpg') }}" alt="Project 2" style="width:100%; height:160px; object-fit:cover;">
                <div style="padding:18px;">
                    <h4 style="margin:0 0 8px 0; font-size:1.2rem; font-weight:600;">Project Title 2</h4>
                    <p style="color:#555; font-size:0.98rem; margin-bottom:12px;">Short project description goes here. Highlight your role, tech stack, and impact.</p>
                    <a href="#" style="color:#42d1f5; text-decoration:underline; font-weight:500;">View Details</a>
                </div>
            </div>
            <!-- Add more project cards as needed -->
        </div>
    </section>
    <footer style="margin-top: 0; text-align: center; padding: 20px 0; background: #fff; border-top: 1px solid #eee;">
        <p>© 2025 Jamil Hasan. All Rights Reserved.</p>
        <div style="margin-top: 10px;">
            <a href="https://facebook.com/jamilhasan3301" target="_blank" rel="noopener" style="margin: 0 10px; color: #3b5998; font-size: 22px;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com/jamilhasan6857" target="_blank" rel="noopener" style="margin: 0 10px; color: #1da1f2; font-size: 22px;">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com/in/ja.mil_bruh" target="_blank" rel="noopener" style="margin: 0 10px; color: #0077b5; font-size: 22px;">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/jamilhasan3301" target="_blank" rel="noopener" style="margin: 0 10px; color: #333; font-size: 22px;">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </footer>
</body>
@endsection 