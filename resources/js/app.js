import './bootstrap';

const links = document.querySelectorAll("a");

window.addEventListener('scroll', () => {
const scrollPosition = window.scrollY;
const viewportHeight = window.innerHeight;

links.forEach(link => {
    const sectionId = link.getAttribute('href');
    const targetSection = document.querySelector(sectionId);
    
    if (targetSection) {
        const sectionTop = targetSection.offsetTop;
        const sectionBottom = sectionTop + targetSection.offsetHeight;

        if (scrollPosition >= sectionTop - viewportHeight / 2 && scrollPosition < sectionBottom - viewportHeight / 2) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    }
});
});