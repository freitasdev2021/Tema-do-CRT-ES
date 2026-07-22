<style>
.madeinipatinga p{
    font-size:15px;
}
</style>
<?php
$responsePopup = apiRequest(
    $api.'Popups',
    'GET',
    [],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$Popups = json_decode($responsePopup['body'],true);
$Popup = [
    "Imagem" => $Popups['Popups']['Foto'],
    "Ativo" => $Popups['Ativo']
];
?>
<div id="accessibility-button" class="floating-button"><i class="fa-solid fa-universal-access"></i></div>
    <div id="accessibility-menu" class="side-menu">
    <ul>
        <li><a href="#" id="zoom-in">Zoom In</a></li>
        <li><a href="#" id="zoom-out">Zoom Out</a></li>
        <li><a href="#" id="fonte-grande">Aumentar Fonte</a></li>
        <li><a href="#" id="invert">Inverter cores</a></li>
        <li><a href="#" id="contrast">Contraste</a></li>
        <li><a href="#" id="brightness">Brilho</a></li>
        <li><a href="#" id="grayscale">Escala cinza</a></li>
    </ul>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col imgcool">
                <a href="https://radardatransparencia.atricon.org.br/" target="_blank">
                    <img src="/img/radartransparencia.png" width="200px" height="100px" alt="Radar da Transparência">
                </a>
                <br/>
                <div>
                    <img src="/img/camaraPerdoesRodape.png" width="200px" height="100px" alt="Logo Prefeitura Rodapé">
                </div>
                <p>© 2026 Conselho Regional dos Técnicos Industriais do Espirito Santo. Todos os direitos reservados.</p>
            </div>
            <div class="footer-col">
                <h4>Navegação</h4>
                <ul>
                    <li><a href="#home">Início</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#noticias">Notícias</a></li>
                    <li><a href="#transparencia">Transparência</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Links Úteis</h4>
                <ul>
                    <li><a href="https://leismunicipais.com.br/camara/mg/perdoes">Legislação</a></li>
                    <li><a href="/perguntas-frequentes">Perguntas Frequentes</a></li>
                    <li><a href="/mapa-site">Mapa do Site</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Conecte-se</h4>
                <p>Siga-nos nas redes sociais para ficar por dentro das novidades.</p>
                <div class="social-links">
                    <a href="http://facebook.com/camaradeperdoes/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/camaradeperdoes/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCzkvzY-VZS4yM3XpIzuqmMw" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-col madeinipatinga">
                <a href="https://www.frtecnologiadigital.com.br/" target="_blank">
                    <img src="/img/logoportalfreitas_branco.png" width="120px" height="80px" alt="Logo Prefeitura Rodapé">
                    <p>Desenvolvido em 2026 por FR Tecnologia</p>
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="/script.js"></script>
<script src="/acessibilidade.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        const popup = document.getElementById('popup');
        const popupImg = document.getElementById('popup-img');
        const popupClose = document.querySelector('.popup-close');

        const popupData = {
            ativo: <?= $Popup['Ativo'] ? 'true' : 'false' ?>,
            imagem: "<?= $Popup['Imagem'] ?>"
        };

        /* Abrir */
        function openPopup(src) {
            popupImg.src = src;
            popup.classList.add('active');
        }

        /* Fechar */
        function closePopup() {
            popup.classList.remove('active');

            // salva que foi fechado na sessão
            sessionStorage.setItem('popupFechado', 'true');
        }

        /* Eventos */
        popupClose.addEventListener('click', closePopup);

        popup.addEventListener('click', (e) => {
            if (e.target === popup) {
                closePopup();
            }
        });

        /* AUTO ABRIR */
        window.addEventListener('load', () => {
            const jaFechado = sessionStorage.getItem('popupFechado');

            if (popupData.ativo && popupData.imagem && !jaFechado) {
                setTimeout(() => {
                    openPopup(popupData.imagem);
                }, 800);
            }
        });
    </script>
    <script>
        // Certifique-se de executar isso após o carregamento do Swiper.js
        const swiperNoticias = new Swiper('#noticias', {
            // Configurações básicas
            slidesPerView: 1,
            spaceBetween: 20,
            loop: false, // Mude para true se quiser rolagem infinita

            // Setas de navegação
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Responsividade (Breakpoints)
            breakpoints: {
                // Telas de celulares deitados / tablets pequenos
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                // Tablets padrão
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                // Desktop (Exatamente igual ao seu print)
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                },
            },
        });
    </script>
</body>
</html>