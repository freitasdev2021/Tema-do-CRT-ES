<style>
    /* necessário para posicionar o dropdown */
.nav-principal li{
    position: relative;
}

/* submenu */
.submenu{
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    list-style: none;
    padding: 10px 0;
    margin: 0;
    min-width: 200px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* itens do submenu */
.submenu li{
    margin-left: 0; /* remove o margin do menu principal */
    font-size:11px;
}

.submenu a{
    padding: 10px 20px;
}

/* abrir no hover */
.dropdown:hover .submenu{
    display: block;
}

.dropdown > a::before{
    content: "▾";
    margin-right: 5px;
}
/* item do menu precisa ser relativo */
.nav-principal li{
    position: relative;
}

/* submenu escondido */
.submenu{
    display: none;
    position: absolute;
    top: 100%;
    left: 0;

    flex-direction: column; /* garante coluna */
    background: white;
    list-style: none;
    padding: 10px 0;
    margin: 0;
    min-width: 300px;

    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* remove margem herdada */
.submenu li{
    margin-left: 0;
    font-size:12px;
}

/* links do submenu */
.submenu a{
    padding: 10px 20px;
}

/* mostrar dropdown */
.dropdown:hover .submenu{
    display: flex; /* usa flex mas em coluna */
}

.dropdown .submenu{
    display:none;
}

</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câmara Municipal de Perdões - MG</title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="/acessibilidade.css">
    <link rel="icon" href="/img/favicon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
<header class="header-cima">
    <div class="header-container-cima">
        <nav class="nav-principal social" id="main-nav">
            <ul>
                <li><a href="http://facebook.com/camaradeperdoes/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=553538641380" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="https://www.instagram.com/camaradeperdoes/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCzkvzY-VZS4yM3XpIzuqmMw"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </nav>
        <form class="search-box" action="/Pesquisar" method="GET">
            <input type="text" class="search-txt" name="Pesquisa" value="<?= isset($_GET['Pesquisa']) ? $_GET['Pesquisa'] : '' ?>" placeholder="Pesquisar...">
            <button type="submit" class="search-btn">
                🔍
            </button>
        </form>
    </div>
</header>

<!--HEADER MEIO-->
<header class="header">
    <div class="header-container">
        <a href="/" class="logo">
            <img src="/img/logo.png" alt="Câmara Municipal de Perdões">
        </a>

        <button class="menu-toggle" aria-expanded="false" aria-controls="main-nav">
            <span class="hamburguer"></span>
            <span class="hamburguer"></span>
            <span class="hamburguer"></span>
        </button>

        <nav class="nav-principal" id="main-nav">
            <ul>
                <li class="dropdown">
                    <a href="#">Câmara</a>
                    <ul class="submenu">
                        <li>
                            <a href="/Institucional">Institucional</a>
                        </li>
                        <li><a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=Vereador&ID=67" target="_blank">Parlamentares</a></li>
                        <li><a href="#contato">Localização</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Transparência</a>
                    <ul class="submenu">
                        <li><a href="https://radardatransparencia.atricon.org.br/" target="_blank">Radar da Transparência Pública</a></li>
                        <li><a href="https://ilai.memory.com.br/#/entidades/login/9CCNMU/2" target="_blank">Portal de Transparência Câmara (novo)</a></li>
                        <li><a href="http://www.escal.com.br/transparencia/frmCamara?CNPJ=25654344000145" target="_blank">Portal de Transparência (Antigo)</a></li>
                        <li><a href="https://ilai.memory.com.br/#/entidades/login/9CCNMT/1" target="_blank">Portal de Transparência Prefeitura</a></li>
                        <li><a href="/e-sic" target="_blank">Acesso à Informação - Esic</a></li>
                        <li><a href="https://sapl.perdoes.mg.leg.br/docadm/pesq-doc-adm" target="_blank">Relatórios de Controle Interno</a></li>
                        <li><a href="https://www.perdoes.mg.leg.br/organograma" target="_blank">Estrutura Organizacional</a></li>
                        <li><a href="http://www.transparencia.mg.gov.br/" target="_blank">Transparência MG</a></li>
                        <li><a href="https://ilai.memory.com.br/#/public/home/prestacaocontas" target="_blank">Prestação de Contas</a></li>
                    </ul>
                </li>
                <li><a href="<?=$Ouvidoria;?>">Ouvidoria</a></li>
                <li><a href="https://www.youtube.com/channel/UCzkvzY-VZS4yM3XpIzuqmMw" target="_blank">TV Câmara</a></li>
                <li><a href="/perguntas-frequentes">Perguntas Frequêntes</a></li>
                <li><a href="https://leismunicipais.com.br/camara/mg/perdoes" target="_blank">Leis Municipais</a></li>
                <li><a href="files/cartaServicos.pdf" download>Carta de Serviços</a></li>
            </ul>
        </nav>
    </div>
</header>