<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

// Se o que foi pedido for um arquivo real (imagem, css, js), retorna ele
if ($uri !== '/' && file_exists($file)) {
    return false; 
}

// Caso contrário, manda tudo para o seu index.php (ou o arquivo onde está o seu código de rotas)
include_once 'index.php';
