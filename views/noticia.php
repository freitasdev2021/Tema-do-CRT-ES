<?php

extract($params);
$response = apiRequest(
    $api.'Noticia/'.$id,
    'GET',
    [],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$Noticia = json_decode($response['body'],true);

$response2 = apiRequest(
    $api.'Noticias',
    'GET',
    [
        "Limite" => 7
    ],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$Noticias = json_decode($response2['body'],true);

$response3 = apiRequest(
    $api.'Organizacao',
    'GET',
    [],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$ORG = json_decode($response3['body'],true);

?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    body {
        background: #ffffff;
        color: #333333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    /* Container principal */
    .main-container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 20px;
    }
    
    /* Breadcrumb */
    .breadcrumb-custom {
        margin-bottom: 20px;
        font-size: 0.85rem;
    }
    
    .breadcrumb-custom a {
        color: #0a3d62;
        text-decoration: none;
    }
    
    .breadcrumb-custom a:hover {
        text-decoration: underline;
    }
    
    /* Notícia principal */
    .noticia-principal {
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 30px;
    }
    
    .titulo-noticia {
        font-size: 1.8rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
        line-height: 1.3;
    }
    
    .meta-noticia {
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 15px;
        margin-bottom: 20px;
        color: #7f8c8d;
        font-size: 0.85rem;
    }
    
    .meta-noticia i {
        margin-right: 5px;
    }
    
    .meta-noticia span {
        margin-right: 15px;
    }
    
    /* Conteúdo */
    .conteudo-noticia {
        line-height: 1.8;
        font-size: 0.95rem;
        color: #2c3e50;
    }
    
    .conteudo-noticia img {
        max-width: 100%;
        height: auto;
        margin: 20px 0;
        border-radius: 4px;
    }
    
    .conteudo-noticia h2 {
        font-size: 1.4rem;
        margin-top: 25px;
        margin-bottom: 15px;
        color: #2c3e50;
        font-weight: 600;
    }
    
    .conteudo-noticia h3 {
        font-size: 1.2rem;
        margin-top: 20px;
        margin-bottom: 10px;
        color: #2c3e50;
        font-weight: 600;
    }
    
    .conteudo-noticia p {
        margin-bottom: 15px;
    }
    
    .conteudo-noticia blockquote {
        border-left: 4px solid #0a3d62;
        background: #f8f9fa;
        padding: 12px 18px;
        margin: 15px 0;
        color: #555;
        font-size: 0.9rem;
    }
    
    /* Sidebar */
    .sidebar {
        position: sticky;
        top: 20px;
    }
    
    .widget-title {
        font-size: 1rem;
        font-weight: 700;
        color: #2c3e50;
        padding-bottom: 8px;
        border-bottom: 2px solid #0a3d62;
        margin-bottom: 15px;
    }
    
    .lista-noticias {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .lista-noticias li {
        border-bottom: 1px solid #e0e0e0;
        padding: 12px 0;
    }
    
    .lista-noticias li:last-child {
        border-bottom: none;
    }
    
    .lista-noticias a {
        text-decoration: none;
        color: #2c3e50;
        display: block;
    }
    
    .lista-noticias a:hover {
        color: #0a3d62;
    }
    
    .item-titulo {
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 0.9rem;
        line-height: 1.4;
    }
    
    .item-data {
        font-size: 0.7rem;
        color: #7f8c8d;
    }
    
    .item-data i {
        margin-right: 3px;
    }
    
    /* Widgets da sidebar */
    .widget {
        background: #f8f9fa;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        padding: 15px;
        margin-top: 20px;
    }
    
    .widget .widget-title {
        border-bottom-color: #e0e0e0;
        margin-bottom: 12px;
    }
    
    .links-uteis {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .links-uteis li {
        margin-bottom: 8px;
    }
    
    .links-uteis a {
        color: #0a3d62;
        text-decoration: none;
        font-size: 0.85rem;
    }
    
    .links-uteis a:hover {
        text-decoration: underline;
    }
    
    /* Responsivo */
    @media (max-width: 768px) {
        .noticia-principal {
            padding: 15px;
        }
        
        .titulo-noticia {
            font-size: 1.3rem;
        }
        
        .main-container {
            padding: 15px;
        }
        
        .sidebar {
            position: static;
            margin-top: 20px;
        }
        
        .meta-noticia span {
            display: inline-block;
            margin-bottom: 5px;
        }
    }
    
    /* Botão voltar (opcional) */
    .btn-voltar {
        background: none;
        border: 1px solid #0a3d62;
        color: #0a3d62;
        padding: 6px 15px;
        border-radius: 4px;
        font-size: 0.8rem;
        margin-bottom: 15px;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
    }
    
    .btn-voltar:hover {
        background: #0a3d62;
        color: white;
    }

    .nav-principal{
        font-size:14px;
    }

    .nav-principal a{
        text-decoration:none;
    }

    footer a{
        text-decoration:none;
    }
</style>

<div class="main-container">
    <div class="container-fluid px-0">
        <div class="row g-3">
            <!-- Conteúdo principal -->
            <div class="col-lg-8">
                <!-- Botão voltar (opcional - remova se não precisar) -->
                <button class="btn-voltar" onclick="history.back()">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
                
                <!-- Breadcrumb (opcional - remova se não precisar) -->
                <div class="breadcrumb-custom">
                    <a href="#"><i class="fas fa-home"></i> Início</a> / 
                    <a href="#">Notícias</a> / 
                    <span class="text-muted"><?= htmlspecialchars($Noticia['Titulo']) ?></span>
                </div>
                
                <!-- Notícia -->
                <article class="noticia-principal">
                    <h1 class="titulo-noticia"><?= htmlspecialchars($Noticia['Titulo']) ?></h1>
                    
                    <div class="meta-noticia">
                        <span><i class="far fa-calendar-alt"></i> <?= date('d/m/Y', strtotime($Noticia['created_at'])) ?></span>
                        <span><i class="far fa-clock"></i> <?= date('H\hi', strtotime($Noticia['created_at'])) ?></span>
                    </div>
                    
                    <div class="conteudo-noticia">
                        <?= $Noticia['Conteudo'] ?>
                    </div>
                </article>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Últimas Notícias -->
                    <div>
                        <div class="widget-title">
                            <i class="fas fa-history"></i> Últimas Notícias
                        </div>
                        <ul class="lista-noticias">
                            <?php
                            foreach($Noticias as $n){
                            ?>
                            <li>
                                <a href="/noticia/<?= $n['id'] ?>/<?= limparSlug($n['Titulo']) ?>">
                                    <div class="item-titulo"><?= $n['Titulo']; ?></div>
                                    <div class="item-data"><i class="far fa-calendar-alt"></i> <?= $n['Data']; ?></div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    
                    <!-- Links Úteis -->
                    <div class="widget">
                        <div class="widget-title">
                            <i class="fas fa-link"></i> Links Úteis
                        </div>
                        <ul class="links-uteis">
                            <li><a href="/#transparencia"><i class="fas fa-external-link-alt"></i> Portal da Transparência</a></li>
                            <li><a href="<?= $Ouvidoria ?>?>"><i class="fas fa-envelope"></i> Ouvidoria</a></li>
                            <li><a href="/#contato"><i class="fas fa-file-alt"></i> Acesso à Informação</a></li>
                        </ul>
                    </div>
                    
                    <!-- Canais de Atendimento -->
                    <div class="widget">
                        <div class="widget-title">
                            <i class="fas fa-headset"></i> Canais de Atendimento
                        </div>
                        <ul class="links-uteis">
                            <li><i class="fas fa-phone"></i> <?= $ORG['Telefone'] ?></li>
                            <li><i class="far fa-envelope"></i> <?= $ORG['Email'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>