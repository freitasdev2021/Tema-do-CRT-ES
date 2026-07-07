<?php
$response2 = apiRequest(
    $api.'Banners',
    'GET',
    [],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$Banners = json_decode($response2['body'],true);
?>
<!--BANNER-->
<section id="home" class="hero">
    <div class="hero-slider">
        <?php
        $i = 0;
        foreach($Banners as $b){
        ?>
            <div class="slide <?= $i === 0 ? 'active' : '' ?>" 
                style="background-image: url(<?= $b['Foto'] ?>)">
            </div>
        <?php
            $i++;
        }
        ?>
    </div>

    <div class="hero-nav">
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
    </div>
    <div class="hero-dots"></div>
</section>
<!--SERVIÇOS MAIS PROCURADOS-->
<div id="popup" class="popup-overlay">
    <div class="popup-box">
        <span class="popup-close">&times;</span>
        <img id="popup-img" src="" alt="">
    </div>
</div>
<!--SERVICOS-->
<section id="servicos" class="services-highlight section-padding">
    <div class="container">
        <h2>Serviços Mais Procurados</h2>
        <p>Facilitando o seu dia a dia com acesso rápido aos principais serviços.</p>
        <div class="service-cards">
            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=LeiConsulta&ID=67&inEspecieLei=3" class="card">
                <i class="fa-solid fa-helmet-safety"></i>
                <h3>Registro Profissional</h3>
            </a>
            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoTramite&ID=67" class="card">
                <i class="fa-solid fa-gear fa-stack-"></i>
                <h3>Registro Empresa</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoTramite&ID=67" class="card">
                <i class="fa-solid fa-regular fa-list-check"></i>
                <h3>TRT - Termo de Responsabilidade Técnica</h3>
            </a>
            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoParametro&ID=67" class="card">
                <i class="fa-solid fa-regular fa-clipboard-list"></i>
                <h3>Certidões</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProposicaoConsulta&ID=67&tpProposicao=1&" class="card">
                <i class="fa-solid fa-mobile-gear"></i>
                <h3>Resoluções - Modalidades Técnicas</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoConsulta&ID=67&inEspecie=3&" class="card">
                <i class="fa-solid fa-regular fa-certificate"></i>
                <h3>Tutoriais e Documentos</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProposicaoConsulta&ID=67&tpProposicao=3&" class="card">
                <i class="fa-solid fa-mobile-screen-button"></i>
                <h3>Anuidade Zero CRT.Pay</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoConsulta&ID=67&inEspecie=2&" class="card">
                <img src="/icons/tecnicoquefaz.png" width="150px" height="80px"/>
            </a>
        </div>
    </div>
</section>

<!--FOOTER-->
<script>
    const slides = document.querySelectorAll('.slide');
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');
    const dotsContainer = document.querySelector('.hero-dots');

    let index = 0;
    let intervalo;

    /* Criar bolinhas */
    slides.forEach((_, i) => {
        const dot = document.createElement('span');
        dot.addEventListener('click', () => {
            index = i;
            mostrarSlide(index);
            resetAuto();
        });
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.hero-dots span');

    /* Atualiza slide */
    function mostrarSlide(i) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        slides[i].classList.add('active');
        dots[i].classList.add('active');
    }

    /* Próximo */
    function proximoSlide() {
        index = (index + 1) % slides.length;
        mostrarSlide(index);
    }

    /* Anterior */
    function slideAnterior() {
        index = (index - 1 + slides.length) % slides.length;
        mostrarSlide(index);
    }

    /* Auto */
    function iniciarAuto() {
        intervalo = setInterval(proximoSlide, 5000);
    }

    function resetAuto() {
        clearInterval(intervalo);
        iniciarAuto();
    }

    /* Eventos */
    next.addEventListener('click', () => {
        proximoSlide();
        resetAuto();
    });

    prev.addEventListener('click', () => {
        slideAnterior();
        resetAuto();
    });

    /* Iniciar */
    mostrarSlide(index);
    iniciarAuto();
</script>