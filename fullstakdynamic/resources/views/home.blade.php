@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <body>
    <header class="header">
      <div class="header__content">
        <div class="header__logo-container">
          <div class="header__logo-img-cont">
            <img src="{{ asset('assets/png/jamil.png') }}" alt=" Image" class="header__logo-img" />
          </div>
          <span class="header__logo-sub">Jamil Hasan</span>
        </div>
        <div class="header__main">
          <ul class="header__links">
             <li class="header__link-wrapper">
              <a href="{{ route('home') }}" class="header__link">Home</a>
            </li>
            <li class="header__link-wrapper">
              <a href="{{ route('about') }}" class="header__link">About</a>
            </li>
            <li class="header__link-wrapper">
              <a href="#projects" class="header__link">Projects</a>
            </li>
            <li class="header__link-wrapper">
              <a href="#contact" class="header__link">Contact</a>
            </li>
          </ul>
          <div class="header__main-ham-menu-cont">
            <img src="{{ asset('assets/svg/ham-menu.svg') }}" alt="hamburger menu" class="header__main-ham-menu" />
            <img src="{{ asset('assets/svg/ham-menu-close.svg') }}"
            alt="hamburger menu close" class="header__main-ham-menu-close d-none" />
          </div>
        </div>
      </div>

    </header>
    <section class="home-hero">
      <div class="home-hero__container">
        <div class="home-hero__content">
          <h1 class="heading-primary typing typing-glow gradient-text zoom-in" id="typing-text">Hey, My name is <span class="highlight-name neon-glow wave-text">Jamil Hasan</span></h1>
          <div class="home-hero__info fade-in-text">
            <p class="text-primary slide-in-text" style="color: white;">
              Hi, I'm <span class="highlight-name gradient-text">Jamil Hasan</span> — a passionate and detail-oriented <span class="typing-role" id="role-text">developer</span> 
              dedicated to crafting meaningful digital experiences. 
              My portfolio showcases a blend of creativity, clean code, 
              and practical problem-solving. 
              Whether it's building scalable web applications,
              exploring new technologies, or refining user interfaces, 
              I approach each project with a mindset of growth and innovation. 
              Welcome to my journey through code and creativity.
            </p>
          </div>
        </div>
        <div class="home-hero__card">
          <div class="profile-card">
            <div class="profile-card__image">
              <img src="{{ asset('assets/png/jamil1.png') }}" alt="Jamil Hasan" class="profile-card__img" />
            </div>
            <div class="profile-card__overlay">
              <div class="profile-card__content">
                <h3 class="profile-card__title">Jamil Hasan</h3>
                <p class="profile-card__subtitle">Full Stack Developer</p>
              </div>
            </div>
          </div>
          <div class="home-hero__cta" style="margin-top: 2rem; text-align: center;">
            <a href="{{ url('/#projects') }}" class="btn btn--gradient hover-reveal">Projects</a>
          </div>
        </div>
        <div class="home-hero__socials">
          <div class="home-hero__social">
            <a href="#" class="home-hero__social-icon-link">
              <img src="{{ asset('assets/png/linkedin-ico.png') }}" alt="icon" class="home-hero__social-icon" />
            </a>
          </div>
          <div class="home-hero__social">
            <a href="#" class="home-hero__social-icon-link">
              <img src="{{ asset('assets/png/github-ico.png') }}" alt="icon" class="home-hero__social-icon" />
            </a>
          </div>
          <div class="home-hero__social">
            <a href="#" class="home-hero__social-icon-link">
              <img src="{{ asset('assets/png/twitter-ico.png') }}" alt="icon" class="home-hero__social-icon" />
            </a>
          </div>
          <div class="home-hero__social">
            <a href="#" class="home-hero__social-icon-link">
              <img src="{{ asset('assets/png/yt-ico.png') }}" alt="icon" class="home-hero__social-icon" />
            </a>
          </div>
          <div class="home-hero__social">
            <a
              href="#"
              class="home-hero__social-icon-link home-hero__social-icon-link--bd-none"
            >
              <img src="{{ asset('assets/png/insta-ico.png') }}" alt="icon" class="home-hero__social-icon"
              />
            </a>
          </div>
        </div>
      </div>
      <div class="home-hero__mouse-scroll-cont">
        <div class="mouse"></div>
      </div>
    </section>
    <section id="achievements" class="achievements sec-pad">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main">My Achievements</span>
          <span class="heading-sec__sub">
            Celebrating milestones and accomplishments in my journey as a developer
          </span>
        </h2>
        <div class="achievements__content">
          <div class="achievement-card">
            <div class="achievement-card__image">
              <img src="{{ asset('assets/png/certificate.png') }}" alt="Certification Achievement" class="achievement-card__img" />
            </div>
            <div class="achievement-card__content">
              <h3 class="achievement-card__title">Web Development Certification</h3>
              <p class="achievement-card__desc">Completed advanced web development course with distinction</p>
              <div class="achievement-card__badge">2023</div>
            </div>
          </div>
          
          <div class="achievement-card">
            <div class="achievement-card__image">
              <img src="{{ asset('assets/png/award.png') }}" alt="Award Achievement" class="achievement-card__img" />
            </div>
            <div class="achievement-card__content">
              <h3 class="achievement-card__title">Best Developer Award</h3>
              <p class="achievement-card__desc">Recognized for outstanding contribution in innovative projects</p>
              <div class="achievement-card__badge">2023</div>
            </div>
          </div>
          
          <div class="achievement-card">
            <div class="achievement-card__image">
              <img src="{{ asset('assets/png/project.png') }}" alt="Project Achievement" class="achievement-card__img" />
            </div>
            <div class="achievement-card__content">
              <h3 class="achievement-card__title">50+ Projects Completed</h3>
              <p class="achievement-card__desc">Successfully delivered diverse projects across multiple technologies</p>
              <div class="achievement-card__badge">2024</div>
            </div>
          </div>
          
          <div class="achievement-card">
            <div class="achievement-card__image">
              <img src="{{ asset('assets/png/team.png') }}" alt="Team Achievement" class="achievement-card__img" />
            </div>
            <div class="achievement-card__content">
              <h3 class="achievement-card__title">Team Leadership</h3>
              <p class="achievement-card__desc">Led development teams in delivering complex enterprise solutions</p>
              <div class="achievement-card__badge">2024</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="projects" class="projects sec-pad">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-bg">
          <span class="heading-sec__main">Projects</span>
          <span class="heading-sec__sub">
          Responsive portfolio website built with HTML, CSS, and Laravel Blade to showcase personal work.
          </span>
        </h2>

        <div class="projects__content">
          <div class="projects__row">
            <div class="projects__row-img-cont">
              <img
                src="{{ asset('assets/jpeg/project-mockup-example.jpeg') }}"
                alt="Software Screenshot"
                class="projects__row-img"
                loading="lazy"
              />
            </div>
            <div class="projects__row-content">
              <h3 class="projects__row-content-title">Project 1</h3>
              <p class="projects__row-content-desc">
              A dynamic web application showcasing project details, skills, and contact information in a user-friendly layout
              </p>
              <a
                href="./project-1.html"
                class="btn btn--med btn--glass dynamicBgClr"
                target="_blank"
                >Case Study</a
              >
            </div>
          </div>
          <div class="projects__row">
            <div class="projects__row-img-cont">
              <img
                src="{{ asset('assets/jpeg/project-mockup-example.jpeg') }}"
                alt="Software Screenshot"
                class="projects__row-img"
                loading="lazy"
              />
            </div>
            <div class="projects__row-content">
              <h3 class="projects__row-content-title">Project 2</h3>
              <p class="projects__row-content-desc">
              A Laravel Blade-powered portfolio site with dynamic project listings and a responsive, modern design.
              </p>
              <a
                href="./project-2.html"
                class="btn btn--med btn--glass dynamicBgClr"
                target="_blank"
                >Case Study</a
              >
            </div>
          </div>
          <div class="projects__row">
            <div class="projects__row-img-cont">
              <img
                src="{{ asset('assets/jpeg/project-mockup-example.jpeg') }}"
                alt="Software Screenshot"
                class="projects__row-img"
                loading="lazy"
              />
            </div>
            <div class="projects__row-content">
              <h3 class="projects__row-content-title">Project 3</h3>
              <p class="projects__row-content-desc">
              Responsive portfolio website built with HTML, CSS, and Laravel Blade to showcase personal work.
              </p>
              <a
                href="./project-3.html"
                class="btn btn--med btn--glass dynamicBgClr"
                target="_blank"
                >Case Study</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact sec-pad">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main heading-sec__main--lt">CONTACT</span>
        </h2>
        <div class="contact__form-container">
          <form action="#" class="contact__form">
            <div class="contact__form-field">
              <label class="contact__form-label" for="name">Name</label>
              <input
                required
                placeholder="Enter Your Name"
                type="text"
                class="contact__form-input"
                name="name"
                id="name"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <input
                required
                placeholder="Enter Your Email"
                type="text"
                class="contact__form-input"
                name="email"
                id="email"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Message</label>
              <textarea
                required
                cols="30"
                rows="10"
                class="contact__form-input"
                placeholder="Enter Your Message"
                name="message"
                id="message"
              ></textarea>
            </div>
            <button type="submit" class="btn btn--gradient contact__btn">
              Submit
            </button>
          </form>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="main-container">
        <div class="main-footer__upper">
          <div class="main-footer__row main-footer__row-1">
            <h2 class="heading heading-sm main-footer__heading-sm">
              <span>Social</span>
            </h2>
            <div class="main-footer__social-cont">
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/linkedin-ico.png') }}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/github-ico.png') }}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/twitter-ico.png') }}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="{{ asset('assets/png/yt-ico.png') }}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon main-footer__icon--mr-none"
                  src="{{ asset('assets/png/insta-ico.png') }}"
                  alt="icon"
                />
              </a>
            </div>
          </div>
          <div class="main-footer__row main-footer__row-2">
            <h4 class="heading heading-sm text-lt">Jamil Hasan</h4>
            <p class="main-footer__short-desc">
             Passionate developer creating modern, user-friendly digital experiences.
            </p>
          </div>
        </div>

        <!-- If you give me some credit or shoutout here by linking to my website, then it will be a big thing for me and will help me a lot :) -->
        <div class="main-footer__lower">
          &copy; Copyright 2025. Made by
          <a rel="noreferrer" target="_blank" href="#"
            >Jamil Hasan</a
          >
        </div>
      </div>
    </footer>

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/animations.js') }}"></script>
    <script>
      // Enhanced typing animation with glow effect and wave text
      window.onload = function() {
        const textElement = document.getElementById('typing-text');
        const roleElement = document.getElementById('role-text');
        
        if (textElement) {
          const text = textElement.textContent;
          textElement.textContent = '';
          
          // Check if it has typing-glow class
          if (textElement.classList.contains('typing-glow')) {
            textElement.style.borderRight = '3px solid #ffd700';
            textElement.style.animation = 'blink-caret-glow 0.75s step-end infinite, text-glow 2s ease-in-out infinite alternate';
          } else {
            textElement.style.borderRight = '3px solid #fff';
          }
          
          let i = 0;
          function type() {
            if (i < text.length) {
              textElement.textContent += text.charAt(i);
              i++;
              setTimeout(type, 100);
            } else {
              setTimeout(() => {
                if (textElement.classList.contains('typing-glow')) {
                  textElement.style.borderRight = '3px solid #ffd700';
                  textElement.style.animation = 'blink-caret-glow 0.75s step-end infinite, text-glow 2s ease-in-out infinite alternate';
                } else {
                  textElement.style.borderRight = 'none';
                }
                
                // Add wave animation to name
                addWaveAnimation();
              }, 1000);
            }
          }
          
          setTimeout(type, 500);
        }
        
        // Role typing animation
        if (roleElement) {
          const roles = ['developer', 'designer', 'creator', 'innovator'];
          let roleIndex = 0;
          
          function typeRole() {
            const currentRole = roles[roleIndex];
            roleElement.textContent = '';
            roleElement.style.borderRight = '2px solid #ffd700';
            
            let j = 0;
            function typeChar() {
              if (j < currentRole.length) {
                roleElement.textContent += currentRole.charAt(j);
                j++;
                setTimeout(typeChar, 150);
              } else {
                setTimeout(() => {
                  roleElement.style.borderRight = 'none';
                  setTimeout(eraseRole, 2000);
                }, 1000);
              }
            }
            
            typeChar();
          }
          
          function eraseRole() {
            const currentText = roleElement.textContent;
            let k = currentText.length;
            
            function eraseChar() {
              if (k > 0) {
                roleElement.textContent = currentText.substring(0, k - 1);
                k--;
                setTimeout(eraseChar, 100);
              } else {
                roleIndex = (roleIndex + 1) % roles.length;
                setTimeout(typeRole, 500);
              }
            }
            
            eraseChar();
          }
          
          setTimeout(typeRole, 3000);
        }
        
        // Add wave animation to name
        function addWaveAnimation() {
          const nameElement = document.querySelector('.wave-text');
          if (nameElement) {
            const name = nameElement.textContent;
            nameElement.innerHTML = '';
            
            for (let i = 0; i < name.length; i++) {
              const span = document.createElement('span');
              span.textContent = name[i];
              span.style.animationDelay = `${i * 0.1}s`;
              nameElement.appendChild(span);
            }
          }
        }
      };

      // Smooth scrolling for navigation links
      document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.header__link[href^="#"]');
        
        navLinks.forEach(link => {
          link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
              const headerHeight = document.querySelector('.header').offsetHeight;
              const targetPosition = targetSection.offsetTop - headerHeight - 20;
              
              window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
              });
            }
          });
        });

        // Handle anchor links in URL on page load
        if (window.location.hash) {
          setTimeout(function() {
            const targetId = window.location.hash;
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
              const headerHeight = document.querySelector('.header').offsetHeight;
              const targetPosition = targetSection.offsetTop - headerHeight - 20;
              
              window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
              });
            }
          }, 100);
        }

        const contactFields = document.querySelectorAll('.contact__form-field');
        
        contactFields.forEach(field => {
          const input = field.querySelector('.contact__form-input');
          const label = field.querySelector('.contact__form-label');
          
          if (input && label) {
            // Add focused class on focus
            input.addEventListener('focus', function() {
              field.classList.add('focused');
            });
            
            // Remove focused class on blur if no value
            input.addEventListener('blur', function() {
              if (!this.value.trim()) {
                field.classList.remove('focused');
              }
            });
            
            // Check if input has value on page load
            if (input.value.trim()) {
              field.classList.add('focused');
            }
          }
        });
      });
    </script>
  </body>
@endsection
