document.addEventListener('DOMContentLoaded', () => {
    // ============== Navegação Responsiva (Hambúrguer) ==============
    const menuToggle = document.querySelector('.header .menu-toggle');
    const navPrincipal = document.querySelector('.header .nav-principal');

    if (menuToggle && navPrincipal) {
        menuToggle.addEventListener('click', () => {
            navPrincipal.classList.toggle('active');
            menuToggle.classList.toggle('active');
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
        });

        const navLinks = navPrincipal.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 992) {
                    navPrincipal.classList.remove('active');
                    menuToggle.classList.remove('active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }

    // ============== SISTEMA DE ABAS (TABS) COM SUPORTE A HASH ==============
    
    /**
     * Ativa uma aba específica pelo nome (data-aba)
     * @param {string} nomeAba - O valor do atributo data-aba
     */
    function ativarAba(nomeAba) {
        // Remove 'ativo' de todos os botões e conteúdos
        document.querySelectorAll('.aba-link').forEach(function(l) {
            l.classList.remove('ativo');
        });
        document.querySelectorAll('.aba-conteudo').forEach(function(c) {
            c.classList.remove('ativo');
        });

        // Ativa o botão e conteúdo correspondente
        var botaoAlvo = document.querySelector('.aba-link[data-aba="' + nomeAba + '"]');
        var conteudoAlvo = document.getElementById('aba-' + nomeAba);

        if (botaoAlvo && conteudoAlvo) {
            botaoAlvo.classList.add('ativo');
            conteudoAlvo.classList.add('ativo');

            // Scroll suave até a barra de abas
            setTimeout(function() {
                botaoAlvo.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 100);
            return true;
        }
        return false;
    }

    /**
     * Processa o hash da URL e ativa a aba correspondente
     */
    function processarHash() {
        var hash = window.location.hash.substring(1); // Remove o #
        if (!hash) return;

        // Mapeamento de hashes alternativos (ex: #anuidadezero -> anuidade)
        var hashMap = {
            'anuidadezero': 'anuidade',
            'aba-fiscalizamos': 'fiscalizamos',
            'aba-equipe': 'equipe'
        };

        var abaNome = hashMap[hash] || hash;
        ativarAba(abaNome);
    }

    // Configura eventos de clique nas abas
    var abas = document.querySelectorAll('.aba-link[data-aba]');
    abas.forEach(function(aba) {
        aba.addEventListener('click', function(e) {
            e.preventDefault();
            var abaAlvo = this.getAttribute('data-aba');
            
            // Se já está ativo, não faz nada
            if (this.classList.contains('ativo')) return;

            ativarAba(abaAlvo);

            // Atualiza o hash da URL sem recarregar a página
            if (history.replaceState) {
                history.replaceState(null, null, '#' + abaAlvo);
            }
        });
    });

    // Processa o hash ao carregar a página (com pequeno delay para garantir DOM pronto)
    if (abas.length > 0) {
        setTimeout(processarHash, 50);
    }

    // Escuta mudanças de hash (para navegação sem reload)
    window.addEventListener('hashchange', processarHash);
});