// Hamburger Menu Toggle
const hamburger = document.querySelector('.header__sm-menu-btn');
const smMenu = document.querySelector('.header__sm-menu');

if (hamburger && smMenu) {
  hamburger.addEventListener('click', () => {
    smMenu.classList.toggle('header__sm-menu--active');
    hamburger.classList.toggle('header__sm-menu-btn--active');
  });
}

// Close mobile menu when clicking on mobile nav links
const mobileNavLinks = document.querySelectorAll('.header__sm-menu-link a');
mobileNavLinks.forEach(link => {
  link.addEventListener('click', () => {
    if (smMenu && hamburger) {
      smMenu.classList.remove('header__sm-menu--active');
      hamburger.classList.remove('header__sm-menu-btn--active');
    }
  });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Enhanced Scroll Reveal with Intersection Observer
function initScrollReveal() {
  const elements = document.querySelectorAll('.scroll-reveal, .timeline-item, .skill-category, .value-card');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });
  
  elements.forEach(element => {
    observer.observe(element);
  });
}

// Skill Progress Bar Animation with Enhanced Performance
function animateSkillBars() {
  const skillBars = document.querySelectorAll('.skill-progress');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const progressBar = entry.target;
        const percent = progressBar.getAttribute('data-percent');
        
        // Add a small delay for staggered effect
        setTimeout(() => {
          progressBar.style.width = percent + '%';
          progressBar.style.transition = 'width 1.5s cubic-bezier(0.4, 0, 0.2, 1)';
        }, 200);
        
        observer.unobserve(progressBar);
      }
    });
  }, {
    threshold: 0.5,
    rootMargin: '0px 0px -100px 0px'
  });
  
  skillBars.forEach(bar => {
    observer.observe(bar);
  });
}

// Enhanced Timeline Animation
function animateTimeline() {
  const timelineItems = document.querySelectorAll('.timeline-item');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateX(0)';
          entry.target.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        }, 100);
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.3,
    rootMargin: '0px 0px -50px 0px'
  });
  
  timelineItems.forEach((item, index) => {
    item.style.opacity = '0';
    item.style.transform = 'translateX(-30px)';
    item.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    observer.observe(item);
  });
}

// Enhanced Value Cards Animation
function animateValueCards() {
  const valueCards = document.querySelectorAll('.value-card');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          entry.target.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        }, 100);
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.3,
    rootMargin: '0px 0px -50px 0px'
  });
  
  valueCards.forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    observer.observe(card);
  });
}

// Typing Animation Enhancement
function initTypingAnimation() {
  const typingElements = document.querySelectorAll('.typing, .typing-glow');
  
  typingElements.forEach(element => {
    const text = element.textContent;
    element.textContent = '';
    element.style.overflow = 'hidden';
    element.style.whiteSpace = 'nowrap';
    element.style.borderRight = '2px solid #f56942';
    
    let i = 0;
    const typeWriter = () => {
      if (i < text.length) {
        element.textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, 100);
      } else {
        // Start blinking cursor animation
        element.style.animation = 'blink-caret 0.75s step-end infinite';
      }
    };
    
    // Start typing after a delay
    setTimeout(typeWriter, 500);
  });
}

// Parallax Effect with Performance Optimization
function initParallaxEffect() {
  let ticking = false;
  
  function updateParallax() {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.about-hero__img-container, .parallax');
    
    parallaxElements.forEach(element => {
      const speed = element.dataset.speed || 0.5;
      const yPos = -(scrolled * speed);
      element.style.transform = `translateY(${yPos}px)`;
    });
    
    ticking = false;
  }
  
  function requestTick() {
    if (!ticking) {
      requestAnimationFrame(updateParallax);
      ticking = true;
    }
  }
  
  window.addEventListener('scroll', requestTick, { passive: true });
}

// Glow Effect on Hover
function initGlowEffects() {
  const glowElements = document.querySelectorAll('.glow-on-hover, .home-hero__photo-card, .about-hero__img-container');
  
  glowElements.forEach(element => {
    element.addEventListener('mouseenter', () => {
      element.style.transition = 'all 0.3s ease';
    });
    
    element.addEventListener('mouseleave', () => {
      element.style.transition = 'all 0.3s ease';
    });
  });
}

// Enhanced Section Visibility
function initSectionVisibility() {
  const sections = document.querySelectorAll('section');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('section--visible');
        
        // Trigger animations for child elements
        const animatedElements = entry.target.querySelectorAll('.scroll-reveal, .skill-category, .value-card');
        animatedElements.forEach((el, index) => {
          setTimeout(() => {
            el.classList.add('revealed');
          }, index * 100);
        });
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
  });
  
  sections.forEach(section => {
    observer.observe(section);
  });
}

// Performance Optimization: Throttle scroll events
function throttle(func, limit) {
  let inThrottle;
  return function() {
    const args = arguments;
    const context = this;
    if (!inThrottle) {
      func.apply(context, args);
      inThrottle = true;
      setTimeout(() => inThrottle = false, limit);
    }
  }
}

// Initialize all animations when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
  // Initialize all animation functions
  initScrollReveal();
  animateSkillBars();
  animateTimeline();
  animateValueCards();
  initTypingAnimation();
  initParallaxEffect();
  initGlowEffects();
  initSectionVisibility();
  
  // Add smooth scrolling to all internal links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
  
  // Add loading animation
  document.body.classList.add('loaded');
});

// Optimized scroll handler
window.addEventListener('scroll', throttle(() => {
  // Any additional scroll-based animations can go here
}, 16), { passive: true });

// Add CSS classes for enhanced animations
document.addEventListener('DOMContentLoaded', () => {
  // Add animation classes to elements
  const animatedElements = document.querySelectorAll('.skill-category, .value-card, .timeline-item');
  animatedElements.forEach(el => {
    el.classList.add('scroll-reveal');
  });
  
  // Add glow effect classes
  const glowElements = document.querySelectorAll('.home-hero__photo-card, .about-hero__img-container');
  glowElements.forEach(el => {
    el.classList.add('glow-on-hover');
  });
}); 