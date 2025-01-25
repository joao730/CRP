// Script básico de animação de fade-in para as seções
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.fade-in');

    // Adiciona animação simples ao rolar para cada seção
    window.addEventListener('scroll', function() {
        let scrollPosition = window.scrollY;
        sections.forEach(function(section) {
            let sectionTop = section.offsetTop;
            if (scrollPosition > sectionTop - window.innerHeight / 1.5) {
                section.classList.add('visible');
            }
        });
    });
});
