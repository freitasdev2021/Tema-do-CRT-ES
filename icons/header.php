<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conselho Regional dos Técnicos Industriais do Espirito Santo</title>
  <?php
  wp_head();
  ?>
  <style>
    a{
      text-decoration:none;
    }

    .nav-link:hover,.linkCrt:hover{
        color:#1C5581;
    }

    .navPrincipal .nav-link:hover,.linkCrt:hover{
        color:#6B98B7;
    }

    .search-container {
        position: relative;
        width: 300px;
    }

    .search-container input {
        width: 100%;
        padding: 5px 40px 5px 10px;
        border: 1px solid #ccc;
        border-radius: 50px;
        font-size: 16px;
        box-sizing: border-box;
    }

    .search-container .fa-search {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        color: #aaa;
        pointer-events: none; /* Faz com que o clique no ícone não afete a interação com o input */
    }

    #transparencia{
      margin-left:20px;
    }

    #divLogo{
      margin-left:12px;
    }

    #textoInput{
      margin-left:-20px; 
      margin-bottom:15px;
    }
    /*NAV SUPERIOR*/
    .navSuperior {
      background: #03367b;
      width: 100%;
      height: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      box-sizing: border-box;
      margin-right:20px;
    }

    .navSuperior ul {
      list-style: none;
      display: flex;
      gap: 15px;
      align-items: center;
      margin: 0 40px;
      padding: 0;
    }

    .navSuperior ul li {
      margin: 0;
    }

    .navSuperior ul li a {
      color: white;
      text-decoration: none;
    }
    /*NAV MEIO*/
    .navMeio{
      width: 100%;
      height: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-sizing: border-box;
      flex-wrap:wrap;
      padding: 0 240px;
      height:180px;
    }

    .navMeio span{
      display: flex;
      align-items: center;
      margin-left:0 200px 0 200px;
    }
    /*NAV PRINCIPAL*/
    .navPrincipal {
      background: #E4EBEF;
      width: 100%;
      height: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      box-sizing: border-box;
      flex-wrap:wrap;
    }

    .navPrincipal ul {
      list-style: none;
      display: flex;
      gap: 15px;
      align-items: center;
      margin: 0 40px;
      padding: 0;
      flex-wrap:wrap;
    }

    .navMeio a{
      color:white;
    }

    .navPrincipal ul li {
      margin: 0;
    }

    .navPrincipal ul li a {
      color: #03367b;
      text-decoration: none;
    }

    .navGeral{
      display:flex;
      flex-direction:column;
      justify-content:center;
    }

    .navGeral nav{
      padding:10px 220px;
    }

    .arrasta{
      margin-right:60px;
    }

    @media(max-width:1366px){
      .arrasta{
        margin:0 0px;
      }

      .navGeral nav{
        padding: 0 30px;
      }

      .navMeio{
        padding:0 50px;
      }

      .navPrincipal ul{
        padding:5px;
      }

      #transparencia{
        margin-left:0px;
      }

      #divLogo{
        margin-left:0px;
      }

    }
    /*FIM NAVS*/
    @media (max-width: 600px) {
      .navSuperior ul{
        margin:0 0px;
        display:flex;
        flex-direction:column;
      }

      .mainNoticias,.noticiaDestaque,.linhaNoticias,.linhaNoticias .card{
        width:100%;
      }

      .mainNoticias{
        padding-bottom:60px;
      }

      .linhaNoticias{
        justify-content:center;
        margin-right:5px;
      }

      .navGeral nav{
        padding:5px;
      }

      .navSuperior{
        padding : 0px;
        margin-right:0px;
        justify-content:center;
        flex-direction:column;
      }

      #textoInput{
        margin-left:10px; 
        margin-bottom:5px;
        font-size:12px;
      }

      .navGeral button{
        color:black;
        background-color:white;
      }

      .arrasta{
        margin:0px;
      }

      .navMeio{
        margin:0;
        padding:0;
        flex-direction:column;
        justify-content:center;
        height:300px;
      }

    }

    .dropdown-menu {
        display: none !important; /* Garanta que o menu está escondido por padrão */
    }

    .show > .dropdown-menu {
        display: block !important; /* Exiba o menu apenas quando ativo */
    }

  </style>
</head>
<body>
  <main>
    <header class="navGeral">
        <!--INÍCIO DOS NAVS-->
        <!--NAV SUPERIOR-->
        <nav class="navbar navbar-expand-lg" style="background: #03367b; border-bottom:solid white;">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse navSuperior arrasta" id="navbarTogglerDemo02">
            <!-- Lista do lado esquerdo -->
            <ul class="mb-3 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="https://www.cft.org.br/ouvidoria/">Ouvidoria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=linque('fale')?>">Fale com o CRT-ES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=linque('perguntas')?>">Perguntas Frequentes</a>
              </li>
            </ul>
            <!-- Lista do lado direito -->
            <ul class="mb-3 mb-lg-0" style="margin-right:0px;">
              <li class="nav-item">
                <a class="nav-link" href="<?=linque('mapasite')?>">Mapa do Site</a>
              </li>
            </ul>
          </div>
        </nav>
        <!--MEIO-->
        <div class="navMeio" style="background: url(<?php url('bgcapa.jpg')?>); background-size:cover;">
            <span class="arrasta" id="divLogo">
              <a href="<?php echo home_url();?>">
                <img id="logo" src="<?php url('logobranca.png')?>"></img>
              </a>
            </span>
            <span class="arrasta">
              <div>
                <div id="textoInput">
                  <a class="linkCrt" href="https://www.cft.org.br/painel-lgpd/">LGPD</a>
                  <a class="linkCrt" href="https://crt-es.implanta.net.br/portaltransparencia/#publico/inicio" id="transparencia">Transparência e Prestação de Contas</a>
                </div>
                <form class="search-container" action="<?php echo home_url('/'); ?>" method="GET">
                    <input type="text" name="pesquisa" placeholder="Buscar em todo site" style="opacity:0.8">
                    <i class="fa fa-search" style="color:black;"></i>
                </form>
              </div>
            </span>
        </div>
        <!--NAV PRINCIPAL-->
        <nav class="navbar navbar-expand-lg" style="background: #E4EBEF; border-top:solid #216191;">
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
              <strong><a class="nav-link " href="https://servicos.sinceti.net.br/">Espaço do Técnico</a></strong>
            </li>
            <!--SERVIÇOS ONLINE-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Serviços Online
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
              <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarProfissional" target="_blank">Solicitar Registral Profissional</a></li>
              <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarEmpresa" target="_blank">Solicitar Registro de Empresa</a></li>
              <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarProfissionalEmpresa" target="_blank">Pesquisar Profissional/Empresa</a></li>
              <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=ConsultarCertidaoSimples" target="_blank">Validar Certidões</a></li>
              <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=ConsultarArt" target="_blank">Validar TRT</a></li>
              <li><a class="dropdown-item" href="https://www.cft.org.br/certidao-acervo-tecnico/" target="_blank">CAT</a></li>
              <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarDenuncia" target="_blank">Baixar Certidões</a></li>
              </ul>
            </li>
            <!--INSTITUICIONAL-->
            <li class="nav-item">
              <a class="nav-link " href="<?=linque('missao')?>?section=historia">Institucional</a>
            </li>
            <!--FISCALIZAÇÃO-->
            <li class="nav-item">
              <a class="nav-link " href="<?=linque('fiscalizacao')?>?section=fiscalizamos">Fiscalização</a>
            </li>
            <!--COMUNICACAO-->
            <li class="nav-item">
              <a class="nav-link " href="<?=linque('comunicacao')?>?section=agendamentos">Comunicação</a>
            </li>
            <!--FIM DO MENU-->
            </ul>
            <!-- Lista do lado direito -->
            <ul class="mb-3 mb-lg-0 arrasta" id="socialMedia" style="margin-right:0px;">
              <li class="nav-item" style="border-radius:50%;">
                <a class="nav-link " href="#"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li class="nav-item" style="border-radius:10%;">
                <a class="nav-link " href="#"><i class="fa-brands fa-youtube"></i></a>
              </li>
              <li class="nav-item" style="border-radius:10%;">
                <a class="nav-link " href="#"><i class="fa-brands fa-linkedin"></i></a>
              </li>
              <li class="nav-item" style="border-radius:50%;">
                <a class="nav-link " href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </nav>
        <!--FIM DOS NAVS-->
    </header>
  </main>
  <script>
    $(document).ready(function () {

    });
  </script>
</body>
</html>