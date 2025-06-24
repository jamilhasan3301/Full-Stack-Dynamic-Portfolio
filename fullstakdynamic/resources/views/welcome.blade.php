@extends('index')
@push('style')
@section('main-content')
<body>
    <div>
    <nav style="display: flex; align-item: center;justify-content: space-between" class="navbar">
            <div class="logo">
            <div>
               <h3>jamil</h3>
</div>
            </div>
            <div style="display: flex; align-item: center;justify-items: center">

            <div>
                home
            </div>
            <div>
                about
            </div>
            <div>
                service
            </div>
            </div>
        </nav>
    </div>
    <section id="home" class="hero">
        <div class="intro1">
             <h2>Hello, I'm<span>Jamil Hasan</span></h2>
            <p>UI/UX | Frontend | Designer </p>   
            <div class="button">
               <button> Hire Me</button>
               <button>Download CV</button>
             </div>
        </div>
    </section>
        
    
       <div class="hero1">
            <div>
              <img src="https://avatars.githubusercontent.com/u/196415165?v=4">
            </div>
            <div class="intro">
              <p>I am a professional.</br>
              User Experience Designer</p>
            </div>
        </div>

    <div class="stats">
            <div><a href="#">LinkedIn</a> |</div>
            <div><a href="#">Github</a> |</div>
            <div><a href="#">Email</a> |</div>
    </div>

    <section id="about" class="process">
        <h2>Work Process</h2>
        <ul>
            <li>discover</li>
            <li>Research</li>
            <li>Workframe</li>
            <li>Design</li>  
    </section>
    <section id="portfolio">
        <h2>my project</h2>
        <div class="project">project 1</div>
        <div class="project">project 2</div>
        <div class="project">project 3</div>
        <div class="project">project 4</div>

    </section>
    <footer>
        <p> © 2025 Jamil Hasan. All Right Reserved.</p>
    </footer>
        <script src="{{asset('assets\js\script.js')}}"></script>
</body>
</html>