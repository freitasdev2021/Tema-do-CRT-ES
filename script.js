document.addEventListener('DOMContentLoaded', () => {
    // ============== Navegação Responsiva (Hambúrguer) ==============
    const menuToggle = document.querySelector('.header .menu-toggle');
    const navPrincipal = document.querySelector('.header .nav-principal');

    if (menuToggle && navPrincipal) {
        menuToggle.addEventListener('click', () => {
            navPrincipal.classList.toggle('active');
            menuToggle.classList.toggle('active'); // Para animação do ícone
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
        });

        // Fechar o menu ao clicar em um link (apenas em mobile)
        const navLinks = navPrincipal.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 992) { // Considera 992px como breakpoint mobile
                    navPrincipal.classList.remove('active');
                    menuToggle.classList.remove('active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }

    // ============== Rolagem suave para âncoras (se necessário, o HTML já tem scroll-behavior) ==============
    // Este JS só seria necessário para navegadores muito antigos ou para um controle mais granular
    // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    //     anchor.addEventListener('click', function (e) {
    //         e.preventDefault();
    //         document.querySelector(this.getAttribute('href')).scrollIntoView({
    //             behavior: 'smooth'
    //         });
    //     });
    // });
});