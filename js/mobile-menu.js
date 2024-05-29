const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelectorAll('nav a');
const mobileNavLinks = document.querySelectorAll('#mobile-menu a');

menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('active');
    mobileMenu.classList.toggle('hidden');
    mobileMenu.classList.toggle('block');
});

function setActiveLink(links, activeId) {
    links.forEach(link => {
        link.classList.remove('active-menu');
        if (link.getAttribute('href').includes(activeId)) {
            link.classList.add('active-menu');
        }
    });
}

// Set active menu for desktop
setActiveLink(navLinks, window.location.pathname);

// Set active menu for mobile
setActiveLink(mobileNavLinks, window.location.pathname);