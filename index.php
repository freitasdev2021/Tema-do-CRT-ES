<?php
// 1. SIMULAR O ROUTER (Para funcionar com php -S sem precisar de arquivo extra)
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($uri_path !== '/' && file_exists(__DIR__ . $uri_path)) {
    return false; // Retorna o arquivo (CSS, JS, Imagem) se ele existir
}

include "env.php";
include "api.php";

$rotas = [
    ["path" => "/", "file" => "home.php", "Title" => "Principal"],
    ["path" => "/Institucional", "file" => "institucional.php", "Title" => "Institucional"],
    ["path" => "/noticia/{id}/{slug}", "file" => "noticia.php", "Title" => "Notícia"],
    ["path" => "/Noticias", "file" => "noticias.php", "Title" => "Notícias"],
    ["path" => "/Pesquisar", "file" => "pesquisar.php", "Title" => "Pesquisar"],
    ["path" => "/perguntas-frequentes", "file" => "perguntasfrequentes.php", "Title" => "Perguntas Frequentes"],
    ["path" => "/e-sic", "file" => "sic.php", "Title" => "e-Sic"],
    ["path" => "/mapa-site", "file" => "mapasite.php", "Title" => "Mapa do Site"],
    ["path" => "/processos-seletivos", "file" => "processosseletivos.php", "Title" => "Processos Seletivos"],
    ["path" => "/sei", "file" => "sei.php", "Title" => "Portal SEI"],
    ["path" => "/dividaativa", "file" => "dividaativa.php", "Title" => "Divida Ativa"],
    ["path" => "/Fiscalizacao", "file" => "fiscalizacao.php", "Title" => "Fiscalizacao"],
    ["path" => "/Comunicacao", "file" => "comunicacao.php", "Title" => "Comunicação"],
    ["path" => "/Parceiros", "file" => "parceiros.php", "Title" => "Parceiros"]
];

$Pagina = null;

foreach ($rotas as $rota) {
    // Converte a rota amigável em uma expressão regular (Regex)
    // Ex: /noticia/{id}/{slug} vira /noticia/([^/]+)/([^/]+)
    $pattern = preg_replace('/\{[a-zA-Z0-9]+\}/', '([^/]+)', $rota['path']);
    $pattern = "#^" . $pattern . "$#";

    if (preg_match($pattern, $uri_path, $matches)) {
        array_shift($matches); // Remove a URL completa, deixa só as variáveis
        preg_match_all('/\{([a-zA-Z0-9]+)\}/', $rota['path'], $paramNames);
        $paramNames = $paramNames[1];

        $params = array_combine($paramNames, $matches);
        
        $Pagina = $rota['file'];
        $Path = $rota['Title'];
        break;
    }
}


// 2. VIEW
if ($Pagina) {
    include "views/components/header.php";
    include 'views/' . $Pagina;
    include "views/components/footer.php";
} else {
    http_response_code(404);
    echo "Erro 404 - Página não encontrada";
}
