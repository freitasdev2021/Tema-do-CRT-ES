<?php 
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$response = apiRequest(
    $api.'Pesquisa',
    'GET',
    [
        "Limite" => 6,
        "page" => $pagina_atual,
        "Pesquisa" => $_GET['Pesquisa']
    ],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$result = json_decode($response['body'], true);

$Pesquisa = $result['data'];
$total_paginas = $result['last_page'];
$total_noticias = $result['total'];
?>
<style>
    .search-results {
    padding: 80px 0;
    background: #f8f9fa;
}

.search-results h2 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 10px;
    color: #222;
    font-weight: 700;
}

.search-results .subtitle {
    text-align: center;
    color: #777;
    margin-bottom: 50px;
    font-size: 1rem;
}

.results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 25px;
}

.result-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    transition: 0.3s ease;
    border: 1px solid #eee;
}

.result-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 22px rgba(0,0,0,0.12);
}

.result-content {
    padding: 25px;
}

.result-content h3 {
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #222;
    line-height: 1.4;
}

.result-link {
    display: inline-block;
    color: #0d6efd;
    text-decoration: none;
    font-size: 0.95rem;
    word-break: break-all;
    transition: 0.2s;
}

.result-link:hover {
    text-decoration: underline;
    color: #084298;
}

.no-results {
    grid-column: 1 / -1;
    font-size: 1rem;
    color: #666;
    padding: 30px 0;
}

/* Paginação */
.pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

.pagination .page-link {
    border-radius: 8px;
    margin: 0 4px;
    border: none;
    color: #333;
    transition: 0.2s;
}

.pagination .page-item.active .page-link {
    background: #0d6efd;
    color: #fff;
}

.pagination .page-link:hover {
    background: #e9ecef;
}

.page-info {
    text-align: center;
    margin-top: 15px;
    color: #666;
    font-size: 0.95rem;
}
</style>
<section id="pesquisa" class="search-results">
    <div class="container">
        <h2>Resultados da Pesquisa</h2>
        <p class="subtitle">Confira os resultados encontrados para sua busca</p>

        <div class="results-grid">
            <?php if(!empty($Pesquisa)): ?>
                <?php foreach($Pesquisa as $p): ?>
                    <div class="result-card">
                        <div class="result-content">
                            <h3>
                                <?= htmlspecialchars($p['Nome']) ?>
                            </h3>

                            <a href="<?= htmlspecialchars($p['URL']) ?>" 
                               target="_blank" 
                               class="result-link">
                                <?= htmlspecialchars($p['URL']) ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center no-results">
                    Nenhum resultado encontrado.
                </p>
            <?php endif; ?>
        </div>

        <!-- Paginação Bootstrap -->
        <?php if($total_paginas > 1): ?>
            <div class="pagination-container">
                <ul class="pagination">

                    <!-- Primeira -->
                    <li class="page-item <?= ($pagina_atual == 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?pagina=1">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>

                    <!-- Anterior -->
                    <li class="page-item <?= ($pagina_atual == 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?pagina=<?= $pagina_atual - 1 ?>">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>

                    <!-- Números -->
                    <?php
                    $inicio = max(1, $pagina_atual - 2);
                    $fim = min($total_paginas, $pagina_atual + 2);

                    for($i = $inicio; $i <= $fim; $i++): ?>
                        <li class="page-item <?= ($pagina_atual == $i) ? 'active' : '' ?>">
                            <a class="page-link" href="?pagina=<?= $i ?>">
                                <?= $i ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <!-- Próxima -->
                    <li class="page-item <?= ($pagina_atual == $total_paginas) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?pagina=<?= $pagina_atual + 1 ?>">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>

                    <!-- Última -->
                    <li class="page-item <?= ($pagina_atual == $total_paginas) ? 'disabled' : '' ?>">
                        <a class="page-link" href="?pagina=<?= $total_paginas ?>">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="page-info">
                Mostrando
                <?= (($pagina_atual - 1) * $itens_por_pagina) + 1 ?>
                até
                <?= min($pagina_atual * $itens_por_pagina, $total_noticias) ?>
                de
                <?= $total_noticias ?>
                resultados
            </div>
        <?php endif; ?>
    </div>
</section>