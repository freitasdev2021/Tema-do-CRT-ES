<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRT-ES (Conselho Regional de Técnicos Industriais do Espirito Santo)</title>
    <?php wp_head();?>
    <style>
        /* body{
            margin-top:-30px;
        } */
    </style>
</head>
<body>
<header>
<!--FIRST HEADER-->
<nav class="navbar navbar-expand-lg crtlogobg">
  <div class="container-fluid">
    <a class="text-wrap text-white" href="#" style="text-decoration:none; color:black;"><i class="fa-solid fa-location-dot"></i> Av. Nossa Srª dos Navegantes, Edifício Palácio do Café, 675, Sala 701, Enseada do Suá, Vitória - ES, CEP 29.050-912</a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-brands fa-facebook-f"></i> Facebook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-brands fa-youtube"></i> Youtube</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--SECOND HEADER-->
<div class="row">
  <div class="col-sm-6 d-flex justify-content-center p-3">
    <img src="<?php url('logoheader.png')?>"></img>
  </div>
  <div class="col-sm-6 p-3">
    <ul>
      <h5 class="crtcolor"><i class="fa-solid fa-phone" style="font-size:15px;"></i> Central de Atendimento</h5>
      <li>(27) 3100-2019</li>
      <li>(27) 9 9933-7517 (Somente Ligação)</li>
      <li>(27) 9 9689-9239 (Somente WhatsApp)</li>
      <li>atendimento@crtes.gov.br</li>
      <li><strong>Cobrança/Dívida Ativa</strong> (27) 99867-5197 | regularize@crtes.gov.br</li>
      <li><strong>Funcionamento:</strong><br>Segunda a sexta-feira de 8h às 17h</li>
    </ul>
  </div>
</div>
<!--THREE HEADER-->
<nav class="navbar navbar-expand-lg crtbg ">
  <div class="container-fluid">
    <a class="btn btn-outline-secondary text-white" href="https://servicos.sinceti.net.br/" target="_blank">Espaço do Técnico</a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!--INÍCIO-->
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo home_url()?>">Início</a>
        </li>
        <!--INSTITUICIONAL-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Instituicional
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=linque('missao')."?section=missao"?>">Missão. visão e valores</a></li>
            <li><a class="dropdown-item" href="<?=linque('missao')."?section=historia"?>">História</a></li>
            <li><a class="dropdown-item" href="<?=linque('missao')."?section=quemsao"?>">Modalidades Técnicas</a></li>
            <li><a class="dropdown-item" href="<?php linque('eleicoes')?>">Eleições 2022</a></li>
          </ul>
        </li>
        <!--LEGISLAÇÃO FEDERAL-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Legislação Federal
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=linque('legislacao')."?section=legislacao"?>">Legislação Federal</a></li>
            <li><a class="dropdown-item" href="<?=linque('legislacao')."?section=outrosDocumentos"?>">Outros Documentos</a></li>
            <li><a class="dropdown-item" href="https://www.cft.org.br/resolucoes/" target="_blank">Resolução CFT</a></li>
            <li><a class="dropdown-item" href="<?=linque('legislacao')."?section=impugnacoes"?>">Impugnações</a></li>
          </ul>
        </li>
        <!--TRANSPARÊNCIA-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Transparência
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://crt-es.implanta.net.br/portaltransparencia/#publico/inicio" target="_blank">Portal da Transparência</a></li>
            <li><a class="dropdown-item" href="https://www.cft.org.br/ouvidoria/" target="_blank">Ouvidoria</a></li>
          </ul>
        </li>
        <!--SERVIÇOS ONLINE-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Serviços Online
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarProfissional" target="_blank">Solicitar Registral Profissional</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarEmpresa" target="_blank">Solicitar Registro de Empresa</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarProfissionalEmpresa" target="_blank">Pesquisar Profissional/Empresa</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=ConsultarCertidaoSimples" target="_blank">Validar Certidões</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=ConsultarArt" target="_blank">Validar TRT</a></li>
            <li><a class="dropdown-item" href="https://www.cft.org.br/certidao-acervo-tecnico/" target="_blank">CAT</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarDenuncia" target="_blank">Denuncia</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarDenuncia" target="_blank">Pesquisar Denuncia</a></li>
            <li><a class="dropdown-item" href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarDenuncia" target="_blank">Baixar Certidões</a></li>
          </ul>
        </li>
        <!--PERGUNTAS FREQUENTES-->
        <!--PAINEL DE ANUIDADE-->
        <!--FIM DO MENU-->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
<!--FIM DOS CABECALHOS-->
</header>
<main>