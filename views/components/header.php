<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($SEO['Title']) ?> - CRT-ES | Conselho Regional dos Técnicos Industriais do Espírito Santo</title>
    <meta name="description" content="<?= htmlspecialchars($SEO['Description']) ?>" />
    <meta name="keywords" content="CRT-ES, Conselho Regional dos Técnicos Industriais, Espírito Santo, técnicos industriais, registro profissional, fiscalização, TRT, SINCETI, anuidade, CFT" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="CRT-ES - Conselho Regional dos Técnicos Industriais do Espírito Santo" />
    <meta name="language" content="pt-br" />
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>" />
    <meta property="og:title" content="<?= htmlspecialchars($SEO['Title']) ?> - CRT-ES" />
    <meta property="og:description" content="<?= htmlspecialchars($SEO['Description']) ?>" />
    <meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/img/logobranca.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="CRT-ES" />
    <meta property="og:locale" content="pt_BR" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?= htmlspecialchars($canonicalUrl) ?>" />
    <meta name="twitter:title" content="<?= htmlspecialchars($SEO['Title']) ?> - CRT-ES" />
    <meta name="twitter:description" content="<?= htmlspecialchars($SEO['Description']) ?>" />
    <meta name="twitter:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/img/logobranca.png" />

    <!-- Schema.org JSON-LD (Dados Estruturados) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "CRT-ES - Conselho Regional dos Técnicos Industriais do Espírito Santo",
      "url": "https://<?= $_SERVER['HTTP_HOST'] ?>/",
      "logo": "https://<?= $_SERVER['HTTP_HOST'] ?>/img/logobranca.png",
      "description": "Conselho Regional dos Técnicos Industriais do Espírito Santo - Autarquia federal responsável pelo registro, fiscalização e regulamentação profissional dos técnicos industriais.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Av. Nossa Srª dos Navegantes, Edifício Palácio do Café, 675 - 6º Andar, Enseada do Suá",
        "addressLocality": "Vitória",
        "addressRegion": "ES",
        "postalCode": "29050-912",
        "addressCountry": "BR"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+55-27-3100-2019",
          "contactType": "customer service",
          "areaServed": "BR",
          "availableLanguage": "Portuguese"
        },
        {
          "@type": "ContactPoint",
          "telephone": "+55-27-3014-8008",
          "contactType": "customer service",
          "areaServed": "BR",
          "availableLanguage": "Portuguese"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/crtespiritosanto",
        "https://www.youtube.com/channel/UC8FQBtUYfMg5haPYKaXo7xw",
        "https://br.linkedin.com/company/crt-es",
        "https://www.instagram.com/crt_es/"
      ]
    }
    </script>

    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Início",
          "item": "https://<?= $_SERVER['HTTP_HOST'] ?>/"
        }<?php if ($uri_path !== '/'): ?>
        ,{
          "@type": "ListItem",
          "position": 2,
          "name": "<?= htmlspecialchars($SEO['Title']) ?>",
          "item": "<?= htmlspecialchars($canonicalUrl) ?>"
        }
        <?php endif; ?>
      ]
    }
    </script>

    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="/acessibilidade.css">
    <link rel="icon" href="/img/icon.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* ==========================================================================
        CSS Modernizado Unificado para Header Geral (CRT-ES)
        ========================================================================== */

        /* Regras Globais do Header */

        .navGeral {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .navGeral a {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        /* 1. NAV SUPERIOR */
        .navGeral .navbar:first-of-type {
            background: #1a5784 !important; /* Cor principal */
            border-bottom: 1px solid rgba(255, 255, 255, 0.15) !important;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navGeral .navSuperior .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 0.25rem 0.75rem !important;
        }

        .navGeral .navSuperior .nav-link:hover {
            color: #ffffff !important;
            transform: translateY(-1px);
        }

        /* Alinhamento das listas */
        .navGeral .navSuperior {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .navGeral .navSuperior ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0 !important;
        }

        /* 2. MEIO DO NAV (Logo e Busca) */
        .navMeio {
            padding: 2rem 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            gap: 2rem;
        }

        /* Gradiente por cima do background para dar contraste */
        .navMeio::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(90deg, rgba(26,87,132,0.95) 0%, rgba(39,68,170,0.85) 100%);
            z-index: 1;
        }

        .navMeio > span {
            position: relative;
            z-index: 2;
        }

        #logo {
            max-height: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }
        #logo:hover {
            transform: scale(1.03);
        }

        /* Links Superiores à Busca (LGPD / Transparência) */
        #textoInput {
            display: flex;
            gap: 1.5rem;
            justify-content: flex-end;
            margin-bottom: 0.75rem;
        }

        .linkCrt {
            color: #ffffff !important;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            opacity: 0.85;
        }
        .linkCrt:hover {
            opacity: 1;
            text-decoration: underline !important;
        }

        /* Barra de Busca Moderna */
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
            width: 320px;
        }

        .search-container input {
            width: 100%;
            padding: 0.6rem 2.5rem 0.6rem 1.2rem;
            border: none;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .search-container input:focus {
            outline: none;
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 340px;
        }

        .search-container i {
            position: absolute;
            right: 1.2rem;
            color: #1a5784 !important;
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        .search-container input:focus + i {
            transform: scale(1.1);
        }

        /* 3. NAV PRINCIPAL (Menu Base) */
        .navGeral .navbar:last-of-type {
            background: #f8fafc !important; 
            border-top: 4px solid #2744aa !important; /* Destaque secundário */
            padding-top: 0;
            padding-bottom: 0;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
        }

        .navPrincipal {
            display: flex !important;
            flex-direction: row !important;
            justify-content: space-between;
            width: 100%;
            align-items: center;
        }

        .principalNav{
            padding:10px;
        }

        .navPrincipal > ul:first-of-type {
            display: flex !important;
            flex-direction: row !important; /* Mantém os itens lado a lado */
            align-items: center;
            list-style: none;
            margin: 0 !important;
            padding: 0;
            flex-wrap: wrap;
        }

        .navPrincipal .nav-item {
            position: relative !important; /* Base para o posicionamento do dropdown */
        }

        /* Links Principais */
        .navPrincipal .nav-link {
            color: #334155 !important;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 1.25rem 1.1rem !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            white-space: nowrap;
        }

        .navPrincipal .nav-link small {
            font-size: 0.7rem;
            color: #2744aa;
            font-weight: bold;
            display: block;
        }

        /* Efeito Hover nos links principais (Linha surgindo embaixo) */
        .navPrincipal > ul:first-of-type > .nav-item > .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0; left: 50%; width: 0; height: 3px;
            background-color: #2744aa;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navPrincipal > ul:first-of-type > .nav-item:hover > .nav-link {
            color: #2744aa !important;
            background: rgba(39, 68, 170, 0.04);
        }

        .navPrincipal > ul:first-of-type > .nav-item:hover > .nav-link::after {
            width: 100%;
        }

        /* CORREÇÃO DOS DROPDOWNS: Oculta por padrão e faz flutuar de forma absoluta */
        .navPrincipal .dropdown-menu {
            display: none !important; 
            position: absolute !important;
            top: 100% !important;
            left: 0 !important;
            z-index: 1000 !important;
            min-width: 250px;
            border: none !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
            border-radius: 8px;
            padding: 0.5rem 0;
            margin-top: 0;
            background-color: #ffffff !important;
        }

        /* Mostra o menu quando o Bootstrap disparar o evento ou via Hover controlado */
        .navPrincipal .dropdown-menu.show {
            display: block !important;
            animation: fadeInMenu 0.2s ease;
        }

        /* Abre os submenus elegantemente ao passar o mouse em telas de desktop */
        @media (min-width: 992px) {
            .navPrincipal .nav-item.dropdown:hover .dropdown-menu {
                display: block !important;
                animation: fadeInMenu 0.2s ease;
            }
        }

        @keyframes fadeInMenu {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .navPrincipal .dropdown-item {
            color: #475569 !important;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.6rem 1.5rem !important;
            display: block;
            width: 100%;
            text-align: left;
            background: transparent !important;
        }

        .navPrincipal .dropdown-item:hover {
            background-color: #1a5784 !important;
            color: #ffffff !important;
            padding-left: 1.75rem !important;
        }

        /* Redes Sociais */
        #socialMedia {
            display: flex;
            gap: 0.5rem;
            align-items: center;
            list-style: none;
            margin: 0 !important;
            padding: 0;
        }

        #socialMedia .nav-item {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e2e8f0;
            border-radius: 50% !important;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        #socialMedia .nav-link {
            padding: 0 !important;
            color: #475569 !important;
            font-size: 1rem;
        }

        #socialMedia .nav-item:hover { transform: scale(1.15); }
        #socialMedia .nav-item:nth-child(1):hover { background: #1877f2; }
        #socialMedia .nav-item:nth-child(1):hover .nav-link { color: #fff !important; }
        #socialMedia .nav-item:nth-child(2):hover { background: #ff0000; }
        #socialMedia .nav-item:nth-child(2):hover .nav-link { color: #fff !important; }
        #socialMedia .nav-item:nth-child(3):hover { background: #0a66c2; }
        #socialMedia .nav-item:nth-child(3):hover .nav-link { color: #fff !important; }
        #socialMedia .nav-item:nth-child(4):hover { background: #e1306c; }
        #socialMedia .nav-item:nth-child(4):hover .nav-link { color: #fff !important; }

        /* Ajustes Responsivos (Mobile) */
        @media (max-width: 991.98px) {
            .navPrincipal {
                flex-direction: column !important;
                align-items: flex-start;
            }
            .navPrincipal > ul:first-of-type {
                flex-direction: column !important;
                width: 100%;
            }
            .navPrincipal .dropdown-menu {
                position: static !important;
                box-shadow: none !important;
                padding-left: 1rem;
                width: 100%;
                display: none;
            }
            .navPrincipal .dropdown-menu.show {
                display: block !important;
            }
            .navMeio {
                flex-direction: column;
                text-align: center;
                padding: 1.5rem;
            }
            #textoInput {
                justify-content: center;
            }
            .search-container {
                width: 100%;
            }
            .navPrincipal .nav-link {
                padding: 0.75rem 1rem !important;
            }
            #socialMedia {
                margin-top: 1rem !important;
                justify-content: center;
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div vw class="enabled">
<div vw-access-button class="active"></div>
<div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
</div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
<header class="navGeral">
    <!--INÍCIO DOS NAVS-->
    <!--NAV SUPERIOR-->
    <nav class="navbar navbar-expand-lg principalNav" style="background: #03367b; border-bottom:solid white;">
        <div class="collapse navbar-collapse navSuperior arrasta" id="navbarTogglerDemo02">
        <!-- Lista do lado esquerdo -->
        <ul class="mb-3 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="https://www.cft.org.br/ouvidoria/">Ouvidoria</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/Fale">Fale com o CRT-ES</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/perguntas-frequentes">Perguntas Frequentes</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/sei">Portal SEI</a>
            </li>
        </ul>
        <!-- Lista do lado direito -->
        <ul class="mb-3 mb-lg-0" style="margin-right:0px;">
            <li class="nav-item">
            <a class="nav-link" href="/mapa-site">Mapa do Site</a>
            </li>
        </ul>
        </div>
    </nav>
    <!--MEIO-->
    <div class="navMeio">
        <span class="arrasta" id="divLogo">
            <a href="">
            <img id="logo" src="/img/logobranca.png"></img>
            </a>
        </span>
        <span class="arrasta">
            <div>
            <div id="textoInput">
                <a class="linkCrt" href="https://www.cft.org.br/painel-lgpd/">LGPD</a>
                <a class="linkCrt" href="https://crt-es.implanta.net.br/portaltransparencia/#publico/inicio" id="transparencia">Transparência e Prestação de Contas</a>
            </div>
            <form class="search-container" action="" method="GET">
                <input type="text" name="pesquisa" placeholder="Buscar em todo site" style="opacity:0.8">
                <i class="fa fa-search" style="color:black;"></i>
            </form>
            </div>
        </span>
    </div>
    <!--NAV PRINCIPAL-->
    <nav class="navbar navbar-expand-lg principalNav" style="background: #E4EBEF; border-top:solid #216191;">
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navPrincipal arrasta" id="navbarTogglerDemo03">
        <!-- Lista do lado esquerdo -->
        <ul class="mb-3 mb-lg-0">
        <!--ESPAÇO DO TÉCNICO-->
        <li class="nav-item">
            <strong><a class="nav-link " href="https://servicos.sinceti.net.br/">Espaço do Técnico<br/> <small>SINCETI</small></a></strong>
        </li>
        <!--SERVIÇOS ONLINE-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdownMenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Serviços Online
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarProfissional" target="_blank">Solicitar Registro Profissional</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarEmpresa" target="_blank">Solicitar Registro de Empresa</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarProfissionalEmpresa" target="_blank">Pesquisar Profissional/Empresa</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=ConsultarCertidaoSimples" target="_blank">Validar Certidões</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=ConsultarArt" target="_blank">Validar TRT</a></li>
            <li><a class="dropdown-item" href="https://www.cft.org.br/certidao-acervo-tecnico/" target="_blank">CAT</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarDenuncia" target="_blank">Baixar Certidões</a></li>
            <li><a class="dropdown-item" href="/sei" >Portal SEI</a></li>
            </ul>
        </li>
        <!--INSTITUICIONAL-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdownMenu2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Institucional
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a class="dropdown-item" href="/Institucional#historia" >História</a></li>
            <li><a class="dropdown-item" href="/Institucional#diretoria" >Diretoria</a></li>
            <li><a class="dropdown-item" href="/Institucional#conselheiros" >Conselheiros</a></li>
            <li><a class="dropdown-item" href="/Institucional#quemsao" >Quem são os Técnicos Industriais?</a></li>
            <li><a class="dropdown-item" href="/Institucional#missao" >Missão, visão e valores</a></li>
            <li><a class="dropdown-item" href="/dividaativa" >Dívida Ativa</a></li>
            <li><a class="dropdown-item" href="" >Carta de Serviços ao Usuário</a></li>  
        </ul>
        </li>
        <!--FISCALIZAÇÃO-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdownMenu3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Fiscalização
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
            <li><a class="dropdown-item" href="/Fiscalizacao#fiscalizamos" >O que fiscalizamos</a></li>
            <li><a class="dropdown-item" href="/Fiscalizacao#equipe" >Equipe de Fiscalização</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarDenuncia" target="_blank">Realizar Denuncia</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarDenuncia" target="_blank">Pesquisar Denuncia</a></li>
            <li><a class="dropdown-item" href="https://www.cft.org.br/plano-nacional-de-fiscalizacao-integrada/" target="_blank">Plano Nacional de Fiscalização Integrada</a></li>
            <li><a class="dropdown-item" href="https://www.cft.org.br/painelfiscalizacao/" target="_blank">Painel da Fiscalização</a></li>
            </ul>
        </li>
        <!--COMUNICACAO-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdownMenu4">
            Comunicação
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
            <li><a class="dropdown-item" href="/Noticias" >Notícias</a></li>
            <li><a class="dropdown-item" href="/Comunicacao#galeria" >Galeria</a></li>
            <li><a class="dropdown-item" href="/Comunicacao#tutoriais" >Tutoriais e Documentos</a></li>
            <li><a class="dropdown-item" href="/Comunicacao#podcasts" >Podcasts</a></li>
            <li><a class="dropdown-item" href="/Comunicacao#painel" >Agendar Palestra e Reuniões</a></li>
            <li><a class="dropdown-item" href="/Comunicacao" >Imprensa</a></li>
            </ul>
        </li>
        <!--BENEFICIOS-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdownMenu5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benefícios
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
            <li><a class="dropdown-item" href="https://tecnicoquefaz.crtes.gov.br/" >Técnico que Faz</a></li>
            <li><a class="dropdown-item" href="/Comunicacao#anuidade" >Anuidade Zero</a></li>
            <li><a class="dropdown-item" href="/Parceiros" >Parcerias com Desconto</a></li>
            <li><a class="dropdown-item" href="https://radaria.crtes.gov.br/" >Radar.IA</a></li>
            </ul>
        </li>
        <!--FIM DO MENU-->
        </ul>
        <!-- Lista do lado direito -->
        <ul class="mb-3 mb-lg-0 arrasta" id="socialMedia" style="margin-right:0px;">
            <li class="nav-item" style="border-radius:50%;">
            <a class="nav-link " href="https://www.facebook.com/crtespiritosanto?_rdc=2&_rdr#"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li class="nav-item" style="border-radius:10%;">
            <a class="nav-link " href="https://www.youtube.com/channel/UC8FQBtUYfMg5haPYKaXo7xw"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li class="nav-item" style="border-radius:10%;">
            <a class="nav-link " href="https://br.linkedin.com/company/crt-es"><i class="fa-brands fa-linkedin"></i></a>
            </li>
            <li class="nav-item" style="border-radius:50%;">
            <a class="nav-link " href="https://www.instagram.com/crt_es/"><i class="fa-brands fa-instagram"></i></a>
            </li>
        </ul>
        </div>
    </nav>
    <!--FIM DOS NAVS-->
</header>