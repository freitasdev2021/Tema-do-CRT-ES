<?php 
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$response = apiRequest(
    $api.'Noticias/Paginate',
    'GET',
    [
        "Limite" => 6,
        "page" => $pagina_atual
    ],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$result = json_decode($response['body'], true);

$Noticias = $result['data'];
$total_paginas = $result['last_page'];
$total_noticias = $result['total'];
?>

<style>
    .news-events {
        padding: 60px 0;
        background: #f8f9fa;
    }
    
    .news-events h2 {
        text-align: center;
        font-size: 2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
    }
    
    .news-events .subtitle {
        text-align: center;
        color: #7f8c8d;
        margin-bottom: 40px;
        font-size: 1rem;
    }
    
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .news-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid #e0e0e0;
    }
    
    .news-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    
    .news-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background: #e0e0e0;
    }
    
    .news-content {
        padding: 20px;
    }
    
    .news-date {
        display: block;
        font-size: 0.8rem;
        color: #7f8c8d;
        margin-bottom: 10px;
    }
    
    .news-date i {
        margin-right: 5px;
    }
    
    .news-card h3 {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: #2c3e50;
        line-height: 1.4;
    }
    
    .news-card p {
        font-size: 0.85rem;
        color: #555;
        margin-bottom: 15px;
        line-height: 1.5;
    }
    
    .read-more {
        color: #0a3d62;
        font-weight: 600;
        font-size: 0.85rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.3s ease;
    }
    
    .read-more:hover {
        color: #f39c12;
        gap: 10px;
    }
    
    .read-more i {
        font-size: 0.75rem;
    }
    
    /* Paginação */
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    
    .pagination {
        display: flex;
        gap: 5px;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .pagination .page-item {
        display: inline-block;
    }
    
    .pagination .page-link {
        padding: 8px 16px;
        border: 1px solid #e0e0e0;
        background: white;
        color: #2c3e50;
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.2s ease;
        font-size: 0.9rem;
    }
    
    .pagination .page-link:hover {
        background: #0a3d62;
        color: white;
        border-color: #0a3d62;
    }
    
    .pagination .active .page-link {
        background: #0a3d62;
        color: white;
        border-color: #0a3d62;
    }
    
    .pagination .disabled .page-link {
        color: #ccc;
        cursor: not-allowed;
    }
    
    .pagination .disabled .page-link:hover {
        background: white;
        color: #ccc;
        border-color: #e0e0e0;
    }
    
    /* Info de página */
    .page-info {
        text-align: center;
        margin-top: 20px;
        font-size: 0.85rem;
        color: #7f8c8d;
    }
    
    /* Responsivo */
    @media (max-width: 768px) {
        .news-events {
            padding: 40px 0;
        }
        
        .news-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .news-card img {
            height: 180px;
        }
        
        .pagination .page-link {
            padding: 6px 12px;
            font-size: 0.8rem;
        }
    }
</style>

<section id="noticias" class="news-events">
    <div class="container">
        <h2>Fique por Dentro</h2>
        <p class="subtitle">Acompanhe as últimas notícias e atualizações</p>
        
        <div class="news-grid">
            <?php if(!empty($Noticias)): ?>
                <?php foreach($Noticias as $r): ?>
                    <article class="news-card">
                        <img src="<?= htmlspecialchars($r['Capa']) ?>" alt="<?= htmlspecialchars($r['Titulo']) ?>">
                        <div class="news-content">
                            <span class="news-date">
                                <i class="far fa-calendar-alt"></i> <?= date('d/m/Y', strtotime($r['Data'])) ?>
                            </span>
                            <h3><?= htmlspecialchars($r['Titulo']) ?></h3>
                            <p><?= htmlspecialchars(substr(strip_tags($r['Conteudo']), 0, 100)) ?>...</p>
                            <a href="/noticia/<?= $r['id'] ?>/<?= limparSlug($r['Titulo']) ?>" class="read-more">
                                Leia Mais <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">Nenhuma notícia encontrada.</p>
            <?php endif; ?>
        </div>
        
        <!-- Paginação Bootstrap -->
        <?php if($total_paginas > 1): ?>
            <div class="pagination-container">
                <ul class="pagination">
                    <!-- Primeira página -->
                    <li class="page-item <?= ($pagina_atual == 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?pagina=1" aria-label="Primeira">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                    
                    <!-- Anterior -->
                    <li class="page-item <?= ($pagina_atual == 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?pagina=<?= $pagina_atual - 1 ?>" aria-label="Anterior">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                    
                    <!-- Números das páginas -->
                    <?php
                    $inicio = max(1, $pagina_atual - 2);
                    $fim = min($total_paginas, $pagina_atual + 2);
                    
                    if($inicio > 1): ?>
                        <li class="page-item"><a class="page-link" href="?pagina=1">1</a></li>
                        <?php if($inicio > 2): ?>
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <?php for($i = $inicio; $i <= $fim; $i++): ?>
                        <li class="page-item <?= ($pagina_atual == $i) ? 'active' : '' ?>">
                            <a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    
                    <?php if($fim < $total_paginas): ?>
                        <?php if($fim < $total_paginas - 1): ?>
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                        <?php endif; ?>
                        <li class="page-item"><a class="page-link" href="?pagina=<?= $total_paginas ?>"><?= $total_paginas ?></a></li>
                    <?php endif; ?>
                    
                    <!-- Próxima -->
                    <li class="page-item <?= ($pagina_atual == $total_paginas) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?pagina=<?= $pagina_atual + 1 ?>" aria-label="Próxima">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                    
                    <!-- Última página -->
                    <li class="page-item <?= ($pagina_atual == $total_paginas) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?pagina=<?= $total_paginas ?>" aria-label="Última">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="page-info">
                Mostrando <?= (($pagina_atual - 1) * $itens_por_pagina) + 1 ?> até 
                <?= min($pagina_atual * $itens_por_pagina, $total_noticias) ?> de 
                <?= $total_noticias ?> notícias
            </div>
        <?php endif; ?>
    </div>
</section>