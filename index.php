<?php
// 1. SIMULAR O ROUTER (Para funcionar com php -S sem precisar de arquivo extra)
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($uri_path !== '/' && file_exists(__DIR__ . $uri_path)) {
    return false; // Retorna o arquivo (CSS, JS, Imagem) se ele existir
}

include "env.php";
include "api.php";

$rotas = [
    ["path" => "/", "file" => "home.php", "Title" => "Principal", "Description" => "Conselho Regional dos Técnicos Industriais do Espírito Santo (CRT-ES) - Registro profissional, fiscalização, serviços online e informações para técnicos industriais."],
    ["path" => "/Institucional", "file" => "institucional.php", "Title" => "Institucional", "Description" => "Conheça a história, diretoria, conselheiros, missão, visão e valores do CRT-ES. Saiba quem são os Técnicos Industriais do Espírito Santo."],
    ["path" => "/noticia/{id}/{slug}", "file" => "noticia.php", "Title" => "Notícia", "Description" => ""],
    ["path" => "/Noticias", "file" => "noticias.php", "Title" => "Notícias", "Description" => "Confira as últimas notícias do CRT-ES. Informações sobre fiscalização, eventos, cursos e atualizações para técnicos industriais."],
    ["path" => "/Pesquisar", "file" => "pesquisar.php", "Title" => "Pesquisar", "Description" => "Pesquise no site do CRT-ES por notícias, informações sobre registro profissional, fiscalização e serviços para técnicos industriais."],
    ["path" => "/perguntas-frequentes", "file" => "perguntasfrequentes.php", "Title" => "Perguntas Frequentes", "Description" => "Encontre respostas para as dúvidas mais comuns sobre registro profissional, anuidades, TRT, fiscalização e serviços do CRT-ES."],
    ["path" => "/e-sic", "file" => "sic.php", "Title" => "e-Sic", "Description" => "Serviço Eletrônico de Informação ao Cidadão do CRT-ES. Solicite informações públicas de acordo com a Lei de Acesso à Informação."],
    ["path" => "/mapa-site", "file" => "mapasite.php", "Title" => "Mapa do Site", "Description" => "Mapa do site do CRT-ES. Navegue por todas as páginas e seções do portal do Conselho Regional dos Técnicos Industriais do Espírito Santo."],
    ["path" => "/processos-seletivos", "file" => "processosseletivos.php", "Title" => "Processos Seletivos", "Description" => "Acompanhe os processos seletivos e concursos públicos do CRT-ES. Editais, inscrições e resultados para vagas no Conselho."],
    ["path" => "/sei", "file" => "sei.php", "Title" => "Portal SEI", "Description" => "Acesse o Sistema Eletrônico de Informações (SEI) do CRT-ES para tramitação de processos administrativos de forma digital."],
    ["path" => "/dividaativa", "file" => "dividaativa.php", "Title" => "Dívida Ativa", "Description" => "Consulte e regularize débitos de dívida ativa junto ao CRT-ES. Informações sobre cobrança, parcelamento e negociação para profissionais e empresas."],
    ["path" => "/Fiscalizacao", "file" => "fiscalizacao.php", "Title" => "Fiscalização", "Description" => "Conheça a equipe de fiscalização do CRT-ES, saiba o que é fiscalizado e como realizar denúncias. Plano Nacional de Fiscalização Integrada."],
    ["path" => "/Comunicacao", "file" => "comunicacao.php", "Title" => "Comunicação", "Description" => "Canais de comunicação do CRT-ES: galeria de fotos, tutoriais, podcasts, documentos, imprensa e agendamento de palestras e reuniões."],
    ["path" => "/Parceiros", "file" => "parceiros.php", "Title" => "Parceiros", "Description" => "Conheça os parceiros e convênios do CRT-ES com descontos e benefícios exclusivos para técnicos industriais registrados."],
    ["path" => "/Fale", "file" => "fale.php", "Title" => "Fale com o CRT-ES", "Description" => "Entre em contato com o CRT-ES. Canais de atendimento, telefones, e-mail, WhatsApp e formulário para falar com o Conselho Regional dos Técnicos Industriais."]
];

$Pagina = null;
$SEO = ["Title" => "CRT-ES", "Description" => "Conselho Regional dos Técnicos Industriais do Espírito Santo"];

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
        $SEO = ["Title" => $rota['Title'], "Description" => $rota['Description']];
        break;
    }
}

// URL canônica (sem query string)
$canonicalUrl = "https://" . $_SERVER['HTTP_HOST'] . $uri_path;


// 2. VIEW
if ($Pagina) {
    include "views/components/header.php";
    include 'views/' . $Pagina;
    include "views/components/footer.php";
} else {
    http_response_code(404);
    $SEO = ["Title" => "Página não encontrada - CRT-ES", "Description" => ""];
    $canonicalUrl = "https://" . $_SERVER['HTTP_HOST'] . $uri_path;
    include "views/components/header.php";
    echo "Erro 404 - Página não encontrada";
    include "views/components/footer.php";
}
