console.log("✅ index.js loaded successfully!");

// --- Responsive Menu Toggle ---
const hamMenuBtn = document.querySelector('.header__main-ham-menu-cont');
const smallMenu = document.querySelector('.header__sm-menu');
const headerHamMenuBtn = document.querySelector('.header__main-ham-menu');
const headerHamMenuCloseBtn = document.querySelector('.header__main-ham-menu-close');
const headerSmallMenuLinks = document.querySelectorAll('.header__sm-menu-link');

if (hamMenuBtn && smallMenu && headerHamMenuBtn && headerHamMenuCloseBtn) {
  hamMenuBtn.addEventListener('click', () => {
    smallMenu.classList.toggle('header__sm-menu--active');

    headerHamMenuBtn.classList.toggle('d-none');
    headerHamMenuCloseBtn.classList.toggle('d-none');
  });
}

if (headerSmallMenuLinks.length > 0 && smallMenu && headerHamMenuBtn && headerHamMenuCloseBtn) {
  headerSmallMenuLinks.forEach(link => {
    link.addEventListener('click', () => {
      smallMenu.classList.remove('header__sm-menu--active');
      headerHamMenuBtn.classList.remove('d-none');
      headerHamMenuCloseBtn.classList.add('d-none');
    });
  });
}

// --- Logo Click Redirect (Laravel route to home) ---
const headerLogoContainer = document.querySelector('.header__logo-container');
if (headerLogoContainer) {
  headerLogoContainer.addEventListener('click', () => {
    window.location.href = '/'; // Laravel home route
  });
}
