@extends('layouts.app')
@section('title', 'About')
@section('content')

<!-- Hero Section -->
<section class="about-hero scroll-reveal">
  <div class="about-hero__container">
    <div class="about-hero__content">
      <h1 class="about-hero__title typing-glow">About Me</h1>
      <div class="about-hero__text scroll-reveal">
        <p class="about-hero__desc">
          I'm <span class="highlight neon-glow">Jamil Hasan</span>, a passionate and innovative developer with a deep love for creating meaningful digital experiences. With expertise in modern web technologies and a keen eye for design, I transform ideas into elegant, functional solutions.
        </p>
        <p class="about-hero__desc">
          My journey in technology has been driven by curiosity and a desire to solve real-world problems. I believe in writing clean, maintainable code and creating user experiences that not only look great but also provide genuine value to users.
        </p>
      </div>
    </div>
    <div class="about-hero__img-wrap">
      <div class="about-hero__img-container glow-on-hover scroll-reveal" data-speed="0.5">
        <img src="{{ asset('assets/png/jamil2.png') }}" alt="Jamil Hasan" class="about-hero__img" />
        <div class="about-hero__img-overlay"></div>
      </div>
    </div>
  </div>
</section>

<!-- Experience Section -->
<section class="about-experience scroll-reveal">
  <div class="about-experience__container">
    <h2 class="section-title typing-glow">Experience & Journey</h2>
    <div class="experience-timeline">
      <div class="timeline-item scroll-reveal">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h3>Full Stack Developer</h3>
          <p class="timeline-period">2022 - Present</p>
          <p>Building scalable web applications using modern technologies like Laravel, React, and Node.js. Focused on creating robust backend systems and intuitive frontend interfaces.</p>
        </div>
      </div>
      <div class="timeline-item scroll-reveal">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h3>Frontend Developer</h3>
          <p class="timeline-period">2020 - 2022</p>
          <p>Specialized in creating responsive and accessible user interfaces. Worked with HTML5, CSS3, JavaScript, and various modern frameworks.</p>
        </div>
      </div>
      <div class="timeline-item scroll-reveal">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h3>Web Designer</h3>
          <p class="timeline-period">2018 - 2020</p>
          <p>Designed and developed websites with focus on user experience and visual appeal. Collaborated with clients to bring their visions to life.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Skills Section -->
<section class="about-skills scroll-reveal">
  <div class="about-skills__container">
    <h2 class="section-title typing-glow">Skills & Expertise</h2>
    <div class="skills-grid">
      <div class="skill-category scroll-reveal">
        <h3 class="skill-category__title">Frontend Development</h3>
        <div class="skill-items">
          <div class="skill-item">
            <span class="skill-name">HTML5 & CSS3</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="95"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">JavaScript (ES6+)</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="90"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">React.js</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="85"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">Bootstrap & Tailwind</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="92"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="skill-category scroll-reveal">
        <h3 class="skill-category__title">Backend Development</h3>
        <div class="skill-items">
          <div class="skill-item">
            <span class="skill-name">PHP & Laravel</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="88"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">Node.js & Express</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="82"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">MySQL & MongoDB</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="85"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">RESTful APIs</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="90"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="skill-category scroll-reveal">
        <h3 class="skill-category__title">Tools & Technologies</h3>
        <div class="skill-items">
          <div class="skill-item">
            <span class="skill-name">Git & GitHub</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="92"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">Docker & AWS</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="75"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">Figma & Adobe XD</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="80"></div>
            </div>
          </div>
          <div class="skill-item">
            <span class="skill-name">Agile & Scrum</span>
            <div class="skill-bar">
              <div class="skill-progress" data-percent="85"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="about-values scroll-reveal">
  <div class="about-values__container">
    <h2 class="section-title typing-glow">Core Values</h2>
    <div class="values-grid">
      <div class="value-card scroll-reveal">
        <span class="value-icon">💡</span>
        <h3>Innovation</h3>
        <p>Constantly exploring new technologies and approaches to create cutting-edge solutions that push boundaries and deliver exceptional results.</p>
      </div>
      <div class="value-card scroll-reveal">
        <span class="value-icon">🎯</span>
        <h3>Quality</h3>
        <p>Committed to writing clean, maintainable code and creating user experiences that exceed expectations and stand the test of time.</p>
      </div>
      <div class="value-card scroll-reveal">
        <span class="value-icon">🤝</span>
        <h3>Collaboration</h3>
        <p>Believing in the power of teamwork and effective communication to bring ideas to life and achieve shared goals.</p>
      </div>
      <div class="value-card scroll-reveal">
        <span class="value-icon">📈</span>
        <h3>Growth</h3>
        <p>Continuously learning and evolving, staying updated with industry trends and best practices to deliver the best possible solutions.</p>
      </div>
    </div>
  </div>
</section>

<script>
// Scroll Reveal Animation
document.addEventListener('DOMContentLoaded', function() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
      }
    });
  }, observerOptions);

  // Observe all scroll-reveal elements
  document.querySelectorAll('.scroll-reveal').forEach(el => {
    observer.observe(el);
  });

  // Skill Bar Animation
  const skillObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const progressBars = entry.target.querySelectorAll('.skill-progress');
        progressBars.forEach(bar => {
          const percent = bar.getAttribute('data-percent');
          setTimeout(() => {
            bar.style.width = percent + '%';
          }, 200);
        });
      }
    });
  }, { threshold: 0.5 });

  // Observe skill categories
  document.querySelectorAll('.skill-category').forEach(el => {
    skillObserver.observe(el);
  });

  // Parallax Effect for Hero Image
  window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('[data-speed]');
    
    parallaxElements.forEach(element => {
      const speed = element.getAttribute('data-speed');
      const yPos = -(scrolled * speed);
      element.style.transform = `translateY(${yPos}px)`;
    });
  });

  // Typing Animation for Titles
  function animateTyping(element) {
    if (!element) return;
    
    const text = element.textContent;
    element.textContent = '';
    element.style.borderRight = '2px solid #ffd700';
    
    let i = 0;
    function type() {
      if (i < text.length) {
        element.textContent += text.charAt(i);
        i++;
        setTimeout(type, 100);
      } else {
        setTimeout(() => {
          element.style.borderRight = 'none';
        }, 1000);
      }
    }
    type();
  }

  // Animate typing-glow elements when they come into view
  const typingObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
        entry.target.classList.add('animated');
        animateTyping(entry.target);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.typing-glow').forEach(el => {
    typingObserver.observe(el);
  });
});
</script>

@endsection
