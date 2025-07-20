@extends('index')
@push('style')
<link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
@endpush
@section('main-content')
<body>
    <div>
        <nav style="display: flex; align-items: center; justify-content: space-between" class="navbar">
            <div class="logo">
                <h3>jamil</h3>
            </div>
            <div style="display: flex; align-items: center; justify-items: center">
                <div><a href="{{ route('home') }}">home</a></div>
                <div><a href="{{ route('about') }}">about</a></div>
                <div><a href="{{ route('projects') }}">projects</a></div>
                <div><a href="{{ route('contact') }}">contact</a></div>
            </div>
        </nav>
    </div>
    <section class="hero-section" style="min-height:220px;">
        <div class="hero-bg-shape"></div>
        <div style="max-width:500px; margin:40px auto; background:#fff; border-radius:12px; box-shadow:0 2px 16px rgba(0,0,0,0.06); padding:32px;">
            <h2 style="margin-bottom:18px;">Contact Me</h2>
            <form action="#" method="post">
                @csrf
                <div style="margin-bottom:16px;">
                    <label for="name" style="display:block; margin-bottom:6px;">Name</label>
                    <input type="text" id="name" name="name" required style="width:100%; padding:8px; border-radius:6px; border:1px solid #ccc;">
                </div>
                <div style="margin-bottom:16px;">
                    <label for="email" style="display:block; margin-bottom:6px;">Email</label>
                    <input type="email" id="email" name="email" required style="width:100%; padding:8px; border-radius:6px; border:1px solid #ccc;">
                </div>
                <div style="margin-bottom:16px;">
                    <label for="message" style="display:block; margin-bottom:6px;">Message</label>
                    <textarea id="message" name="message" rows="5" required style="width:100%; padding:8px; border-radius:6px; border:1px solid #ccc;"></textarea>
                </div>
                <button type="submit" style="padding:10px 24px; border-radius:6px; background:#222; color:#fff; border:none;">Send</button>
            </form>
        </div>
    </section>
</body>
@endsection
