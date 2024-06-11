document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const homeSection = document.getElementById('home');
  
    navbarToggler.addEventListener('click', function() {
        const currentTop = parseInt(homeSection.style.top || '95px');
        if (currentTop === 95) {
            homeSection.style.top = `calc(200px + var(--navbar-height))`;
        } else {
            homeSection.style.top = '95px';
        }
    });
  
    // Update CSS custom property to store the navbar height
    const navbarHeight = document.querySelector('header').offsetHeight;
    document.documentElement.style.setProperty('--navbar-height', `${navbarHeight}px`);
});
