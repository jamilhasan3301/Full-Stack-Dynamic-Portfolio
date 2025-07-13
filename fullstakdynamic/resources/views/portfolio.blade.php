@extends('index')
@push('style')
<link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
@endpush
@section('main-content')
<body>
    <div>
        <!-- Header/Navbar -->
        <nav style="display: flex; align-items: center; justify-content: space-between; padding: 20px 0;" class="navbar">
            <div class="logo">
                <h3 style="margin:0;">Jamil</h3>
            </div>
            <div style="display: flex; gap: 24px; align-items: center;">
                <div><a href="{{ url('/') }}">Home</a></div>
                <div><a href="#about">About</a></div>
                <div><a href="#service">Service</a></div>
                <div><a href="#contact" style="border:1px solid #000; padding:2px 10px; border-radius:5px;">Contact</a></div>
            </div>
        </nav>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-bg-shape"></div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; position: relative; z-index: 1; padding: 40px 0 20px 0;">
            <div style="flex:1;">
                <h2>Hello, I'm<br><span style="font-weight:bold; color:#222;">Jamil Hasan</span></h2>
                <div style="display: flex; gap: 24px; margin: 20px 0;">
                    <div class="stat-card">
                        <span class="stat-icon">🎓</span>
                        <div style="font-size: 18px; font-weight: bold;">15+</div>
                        <div style="font-size: 12px;">Years Exp</div>
                    </div>
                    <div class="stat-card">
                        <span class="stat-icon">📁</span>
                        <div style="font-size: 18px; font-weight: bold;">250+</div>
                        <div style="font-size: 12px;">Projects</div>
                    </div>
                    <div class="stat-card">
                        <span class="stat-icon">🤝</span>
                        <div style="font-size: 18px; font-weight: bold;">58</div>
                        <div style="font-size: 12px;">Clients</div>
                    </div>
                </div>
            </div>
            <div style="flex:0 0 140px; margin-left:100px;">
                <!-- Profile Image -->
                <div class="hero-profile" style="width:140px; height:140px; background:#eee; border-radius:50%; border:3px solid #222; box-shadow:0 4px 24px rgba(0,0,0,0.08); display:flex; align-items:center; justify-content:center; overflow:hidden;">
                    <img src="{{ asset('assets/image/profile.jpeg') }}" alt="Jamil Hasan" style="width:100%; height:100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Section as card -->
    <section style="display: flex; gap: 32px; align-items: center; margin-bottom: 40px;">
        <div class="pro-card" style="width:280px; height:180px; background:#fff; border-radius:16px; border:1px solid #eee; box-shadow:0 2px 16px rgba(0,0,0,0.06); display:flex; align-items:end; justify-content:center; position:relative; overflow:hidden;">
            <!-- Pro Card Image -->
            <img src="{{ asset('assets/image/pro-card.jpg') }}" alt="Pro Card" style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover; border-radius:16px; z-index:0;">
            <!-- Decorative dots under image -->
            <div style="display:flex; gap:6px; margin-bottom:10px; position:relative; z-index:1;">
                <div style="width:30px; height:20px; background:#ccc; border-radius:4px;"></div>
                <div style="width:30px; height:20px; background:#ccc; border-radius:4px;"></div>
                <div style="width:30px; height:20px; background:#ccc; border-radius:4px;"></div>
            </div>
            <span style="position:absolute; top:16px; left:25px; font-size:27px; color:#bbb; z-index:1;">🖌️</span>
        </div>
        <div style="flex:1;">
            <div style="font-size: 22px; font-weight: 500; color:#222;">I am Professional<br>User Experience Designer</div>
            <div style="margin: 18px 0;">
                <hr style="width: 60px; border: 1px solid #000; margin: 8px 0;">
            </div>
            <div style="display: flex; gap: 16px;">
                <a href="#contact">
                    <button style="padding: 8px 18px; border-radius: 6px; border: none; background: #222; color: #fff;">Hire Me</button>
                </a>
                <a href="#portfolio">
                    <button style="padding: 8px 18px; border-radius: 6px; border: 1px solid #222; background: #fff; color: #222;">Portfolio</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Work Process Section with icons -->
    <section style="margin-bottom: 40px;">
        <h3 style="margin-bottom: 12px;">Work Process</h3>
        <div style="display: flex; gap: 32px;">
            <div style="flex:1;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li><span style="font-size:18px;">🔍</span> 1. Research</li>
                    <li><span style="font-size:18px;">📝</span> 2. Wireframe</li>
                    <li><span style="font-size:18px;">🎨</span> 3. Design</li>
                    <li><span style="font-size:18px;">🧪</span> 4. Prototype</li>
                    <li><span style="font-size:18px;">🚀</span> 5. Test & Launch</li>
                </ul>
            </div>
            <div style="display: grid; grid-template-columns: repeat(2, 80px); grid-template-rows: repeat(2, 80px); gap: 12px;">
                <div style="background:#fff; border:1px solid #eee; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.06); display:flex; align-items:center; justify-content:center; font-size:28px;">🔍</div>
                <div style="background:#fff; border:1px solid #eee; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.06); display:flex; align-items:center; justify-content:center; font-size:28px;">📝</div>
                <div style="background:#fff; border:1px solid #eee; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.06); display:flex; align-items:center; justify-content:center; font-size:28px;">🎨</div>
                <div style="background:#fff; border:1px solid #eee; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.06); display:flex; align-items:center; justify-content:center; font-size:28px;">🚀</div>
            </div>
        </div>
    </section>

    <hr style="border:none; border-top:1px solid #eee; margin:40px 0 0 0;">
    <footer style="margin-top: 0; text-align: center;">
        <p>© 2025 Jamil Hasan. All Right Reserved.</p>
    </footer>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
@endsection
