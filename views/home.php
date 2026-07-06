<?php
$response = apiRequest(
    $api.'Noticias',
    'GET',
    [
        "Limite" => 3
    ],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$Noticias = json_decode($response['body'],true);

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

$response3 = apiRequest(
    $api.'Galeria/2',
    'GET',
    [
        "Limite" => 10
    ],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$Vereadores = json_decode($response3['body'],true);
//echo "<pre>";
//print_r($Vereadores);
//echo"</pre>";
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
<!--SERVIÇOS LEGISLATIVOS-->
<!--SERVICOS-->
<section id="servicos" class="services-highlight section-padding">
    <div class="container">
        <h2>Legislação Municipal</h2>
        <p>Facilitando o seu acesso a leis municipais.</p>
        <div class="service-cards">
            <a href="https://leismunicipais.com.br/a2/lei-organica-perdoes-mg" class="card">
                <i class="fas fa-book-bible"></i>
                <h3>Lei Orgânica</h3>
            </a>

            <a href="https://leismunicipais.com.br/a2/regimento-interno-da-camara-perdoes-mg" class="card">
                <i class="fas fa-book-open-reader"></i>
                <h3>Regimento Interno</h3>
            </a>

            <a href="https://leismunicipais.com.br/camara/mg/perdoes" class="card">
                <i class="fas fa-scale-balanced"></i>
                <h3>Leis Municipais</h3>
            </a>
        </div>
    </div>
</section>
<!--VEREADORES-->
<section id="vereadores" class="fotos-events section-padding">
    <div class="container">
        <div class="fotos-header">
            <h2>Parlamentares</h2>
            <p>Conheça os representantes do legislativo municipal.</p>
        </div>

        <div class="fotos-grid">
           <?php 
           foreach($Vereadores as $v): 
            $Vereador = explode('-',$v['DSFoto']);
           ?>
           <div href="<?= $v['URL'] ?>" target="_blank">
                <article class="fotos-card">
                    <div class="fotos-image">
                        <img src="<?= $v['Imagem'] ?>" alt="<?= $Vereador[0] ?>">
                    </div>

                    <div class="fotos-content">
                        <span class="fotos-cargo">
                            <?=$Vereador[1]?> <!-- Presidente, Vice ou Vereador -->
                        </span>

                        <h3><?= $Vereador[0] ?></h3>
                        <a href="<?= $v['URL'] ?>" target="_blank">Conheça o parlamentar</a>
                    </div>
                </article>
           </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--SERVICOS-->
<section id="servicos" class="services-highlight section-padding">
    <div class="container">
        <h2>Serviços Mais Procurados</h2>
        <p>Facilitando o seu dia a dia com acesso rápido aos principais serviços.</p>
        <div class="service-cards">
            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=LeiConsulta&ID=67&inEspecieLei=3" class="card">
                <i class="fas fa-gavel"></i>
                <h3>Decretos Legislativos</h3>
            </a>
            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoTramite&ID=67" class="card">
                <i class="fas fa-landmark"></i>
                <h3>Projeto de Lei Ordinária - Legislativo</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoTramite&ID=67" class="card">
                <i class="fas fa-landmark"></i>
                <h3>Projeto de Lei Ordinária - Executivo</h3>
            </a>
            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoParametro&ID=67" class="card">
                <i class="fas fa-lightbulb"></i>
                <h3>Anteprojeto</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProposicaoConsulta&ID=67&tpProposicao=1&" class="card">
                <i class="fas fa-hand-point-right"></i>
                <h3>Indicação</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoConsulta&ID=67&inEspecie=3&" class="card">
                <i class="fas fa-gavel"></i>
                <h3>Projeto de Decreto Legislativo</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProposicaoConsulta&ID=67&tpProposicao=3&" class="card">
                <i class="fas fa-award"></i>
                <h3>Moção</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoConsulta&ID=67&inEspecie=2&" class="card">
                <i class="fas fa-scale-balanced"></i>
                <h3>Projeto de Lei Complementar</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoConsulta&ID=67&inEspecie=4&" class="card">
                <i class="fas fa-file-signature"></i>
                <h3>Projeto de Resolução</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProposicaoConsulta&ID=67&tpProposicao=2&" class="card">
                <i class="fas fa-file-lines"></i>
                <h3>Requerimento</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoConsulta&ID=67&inEspecie=5&" class="card">
                <i class="fas fa-pen-to-square"></i>
                <h3>Emenda</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoConsulta&ID=67&inEspecie=5&" class="card">
                <i class="fas fa-scroll"></i>
                <h3>Proposta de Emenda a Lei Orgânica</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=Expediente&ID=67&inExpedienteAta=1" class="card">
                <i class="fas fa-calendar-days"></i>
                <h3>Pautas das Reuniões</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=Expediente&ID=67&inExpedienteAta=2" class="card">
                <i class="fas fa-book"></i>
                <h3>Atas das Reuniões</h3>
            </a>

            <a href="https://www.perdoes.mg.leg.br/principal#" class="card">
                <i class="fas fa-user-clock"></i>
                <h3>Justificativa de Ausência</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProposicaoConsulta&ID=67&tpProposicao=5&" class="card">
                <i class="fas fa-file-lines"></i>
                <h3>Portarias</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=LeiConsulta&ID=67&inEspecieLei=4" class="card">
                <i class="fas fa-scale-balanced"></i>
                <h3>Resoluções</h3>
            </a>

            <a href="https://www.perdoes.mg.leg.br/processos-seletivos" class="card">
                <i class="fas fa-file-contract"></i>
                <h3>Contratações</h3>
            </a>

            <a href="https://ilai.memory.com.br/#/entidades/login/9CCNMU/2" class="card">
                <i class="fas fa-chart-line"></i>
                <h3>Transparência</h3>
            </a>

            <a href="<?=$Ouvidoria;?>" class="card">
                <i class="fas fa-comments"></i>
                <h3>Ouvidoria</h3>
            </a>

            <a href="https://www.perdoes.mg.leg.br/parlamentares/aba/comissoes/c" class="card">
                <i class="fas fa-users"></i>
                <h3>Comissões</h3>
            </a>

            <a href="https://www.perdoes.mg.leg.br/gal_img_lis.aspx" class="card">
                <i class="fas fa-images"></i>
                <h3>Galerias</h3>
            </a>

            <a href="/processos-seletivos" class="card">
                <i class="fas fa-user-tie"></i>
                <h3>Concurso Público e Processos Seletivos</h3>
            </a>

            <a href="https://webcidadao.com.br/web-cidadao-web/login?codAux=9CCNMU" class="card">
                <i class="fas fa-money-check-dollar"></i>
                <h3>Contra-cheque web</h3>
            </a>

            <a href="https://ilai.memory.com.br/#/public/pessoal/diarias" class="card">
                <i class="fas fa-plane-departure"></i>
                <h3>Diárias</h3>
            </a>
        </div>
    </div>
</section>
<!--NOTICIAS-->
<section id="noticias" class="news-events section-padding bg-light">
    <div class="container">
        <h2>Fique por Dentro</h2>
        <div class="news-grid">
           <?php foreach($Noticias as $r): ?>
                <article class="news-card">
                    <img src="<?=$r['Capa']?>" alt="<?=$r['Titulo']?>">
                    <div class="news-content">
                        <span><?= $r['Data']; ?></span>
                        <h3><?=$r['Titulo']?></h3>
                        <!-- Note o "/noticia" em minúsculo para bater com a rota -->
                        <a href="/noticia/<?= $r['id'] ?>/<?= limparSlug($r['Titulo']) ?>" class="read-more">
                            Leia Mais <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>

        </div>
        <br/>
        <div class="text-center mt-4">
            <a href="/Noticias" class="btn-secondary">Todas as Notícias e Eventos</a>
        </div>
    </div>
</section>
<!--TRANSPARÊNCIA-->
<section id="transparencia" class="transparency section-padding">
    <div class="container">
        <h2>Portal da Transparência</h2>
        <p>Acompanhe a gestão pública municipal. Dados abertos e de fácil acesso para você.</p>
        <div class="transparency-grid">
            <a href="https://ilai.memory.com.br/#/public/execucaoreceita/menu" target="_blank" class="transparency-card">
                <i class="fas fa-chart-line"></i>
                <h3>Receita</h3>
                <p>Detalhamento da Receita</p>
            </a>
            <a href="https://ilai.memory.com.br/#/public/execucaodespesa/menu" target="_blank" class="transparency-card">
                <i class="fas fa-chart-line"></i>
                <h3>Despesas</h3>
                <p>Detalhamento das Despesas</p>
            </a>
            <a href="https://ilai.memory.com.br/#/public/pessoal/menu" target="_blank" class="transparency-card">
                <i class="fas fa-users-cog"></i>
                <h3>Servidores</h3>
                <p>Informações sobre o quadro de pessoal</p>
            </a>
            <a href="https://ilai.memory.com.br/#/public/licitacoes/menu" target="_blank" class="transparency-card">
                <i class="fas fa-gavel"></i>
                <h3>Licitações e Contratos</h3>
                <p>Processos em andamento e finalizados</p>
            </a>
            <a href="https://ilai.memory.com.br/#/public/fornecedores/menu" target="_blank" class="transparency-card">
                <i class="fas fa-balance-scale"></i>
                <h3>Fornecedores</h3>
                <p>Despesas com Fornecedores</p>
            </a>
            <a href="https://ilai.memory.com.br/#/public/repasse/menu" target="_blank" class="transparency-card">
                <i class="fas fa-file-alt"></i>
                <h3>Repasses</h3>
                <p>Repasses da Câmara</p>
            </a>
        </div>
        <br/>
        <div class="text-center mt-4">
            <a href="https://ilai.memory.com.br/#/entidades/login/9CCNMU/2" target="_blank" class="btn-primary">Acessar Portal Completo <i class="fas fa-external-link-alt"></i></a>
        </div>
    </div>
</section>
<!--INFORMAÇÕES-->
<section id="contato" class="contact-info section-padding bg-light">
    <div class="container">
        <h2>Fale Conosco e Informações Úteis</h2>
        <img src="/img/esic-removebg-preview.png" width="100%" style="margin-bottom:15px;"/>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.562977736507!2d-45.087611599999995!3d-21.09011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b556b40480722d%3A0x61ba8c393a21bb4d!2sC%C3%A2mara%20Municipal%20de%20Perd%C3%B5es!5e0!3m2!1spt-BR!2sbr!4v1773589311463!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="contact-grid" style="margin-top:15px;">
            <div class="contact-card">
                <h3>Endereço</h3>
                <p><i class="fas fa-map-marker-alt"></i> Rua Professor Gomide, nº 159. Bairro Palestina<br>Perdões, MG, CEP: 37260-000</p>
                <a href="https://maps.google.com/?q=Rua+da+Prefeitura,+123" target="_blank" class="link-map">Ver no Mapa <i class="fas fa-external-link-alt"></i></a>
            </div>
            <div class="contact-card">
                <h3>Atendimento</h3>
                <p><i class="fas fa-clock"></i> Segunda a Sexta-feira: 12h às 18h</p>
                <p><i class="fas fa-phone"></i> Telefone: (35) 3864-1380</p>
                <p><i class="fas fa-envelope"></i> Email: contato@cmperdoes.mg.gov.br</p>
                <p><i class="fas fa-monitor"></i> Virtualmente 24/7: <a href="<?= $Ouvidoria ?>">Ouvidoria Online</a></p>
            </div>
            <div class="contact-card">
                <h3>Redes Sociais</h3>
                <div class="social-links">
                    <a href="http://facebook.com/camaradeperdoes/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/camaradeperdoes/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCzkvzY-VZS4yM3XpIzuqmMw" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
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