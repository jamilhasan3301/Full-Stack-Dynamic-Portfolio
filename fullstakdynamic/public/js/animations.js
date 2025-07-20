console.log("✅ animations.js loaded successfully!");

document.addEventListener('DOMContentLoaded', function () {
  // === Animate elements on scroll ===
  const animatedElements = document.querySelectorAll(
    '.about__content, .projects__row, .skills__skill, .contact__form-container'
  );

  const observer = new IntersectionObserver((entries, observerInstance) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in');
        observerInstance.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  animatedElements.forEach(el => observer.observe(el));

  // === Staggered animation delay for skills ===
  const skills = document.querySelectorAll('.skills__skill');
  skills.forEach((skill, i) => {
    skill.style.animationDelay = `${i * 0.1}s`;
  });

  // === Smooth scroll for anchor links ===
  const navLinks = document.querySelectorAll('a[href^="#"]');
  navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        targetEl.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // === Parallax effect for hero section ===
  const heroSection = document.querySelector('.home-hero');
  if (heroSection) {
    window.addEventListener('scroll', () => {
      const offset = window.pageYOffset;
      heroSection.style.transform = `translateY(${offset * -0.5}px)`;
    });
  }

  // === Typing effect for hero title ===
  const heroTitle = document.querySelector('.heading-primary.typing');
  if (heroTitle) {
    const text = heroTitle.textContent;
    heroTitle.textContent = '';
    
    // Check if it has typing-glow class
    if (heroTitle.classList.contains('typing-glow')) {
      heroTitle.style.borderRight = '3px solid #ffd700';
      heroTitle.style.animation = 'blink-caret-glow 0.75s step-end infinite, text-glow 2s ease-in-out infinite alternate';
    } else {
      heroTitle.style.borderRight = '3px solid #fff';
      heroTitle.style.animation = 'blink 1s infinite';
    }

    let i = 0;
    function type() {
      if (i < text.length) {
        heroTitle.textContent += text.charAt(i);
        i++;
        setTimeout(type, 150);
      } else {
        setTimeout(() => {
          if (heroTitle.classList.contains('typing-glow')) {
            heroTitle.style.borderRight = '3px solid #ffd700';
            heroTitle.style.animation = 'blink-caret-glow 0.75s step-end infinite, text-glow 2s ease-in-out infinite alternate';
          } else {
            heroTitle.style.borderRight = 'none';
            heroTitle.style.animation = 'none';
          }
        }, 2000);
      }
    }

    setTimeout(type, 1000);
  }

  // === Hover effect for project cards ===
  const projectCards = document.querySelectorAll('.projects__row');
  projectCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-10px)';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'translateY(0)';
    });
  });

  // === Form focus/blur animation ===
  const inputs = document.querySelectorAll('.contact__form-input, .contact__form-textarea');
  inputs.forEach(input => {
    input.addEventListener('focus', function () {
      this.parentElement.classList.add('focused');
    });
    input.addEventListener('blur', function () {
      if (!this.value) {
        this.parentElement.classList.remove('focused');
      }
    });
  });
});

// === Append animation styles via JS ===
const style = document.createElement('style');
style.textContent = `
  .fade-in {
    animation: fadeInUp 0.8s ease forwards;
  }

  .slide-in-left {
    animation: slideInLeft 0.8s ease forwards;
  }

  .slide-in-right {
    animation: slideInRight 0.8s ease forwards;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(-50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes slideInRight {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes blink {
    0%, 50% {
      border-right-color: #fff;
    }
    51%, 100% {
      border-right-color: transparent;
    }
  }

  .contact__form-field.focused .contact__form-label {
    transform: translateY(-25px) scale(0.8);
    color: #0062b9;
  }

  .projects__row {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .projects__row:hover {
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  }

  .heading-primary.typing {
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid #fff;
    animation: blink 1s infinite;
  }
`;
document.head.appendChild(style);
