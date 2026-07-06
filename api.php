<?php

function limparSlug($string) {
    $string = mb_strtolower($string, 'UTF-8');
    $string = preg_replace('/[áàãâä]/u', 'a', $string);
    $string = preg_replace('/[éèêë]/u', 'e', $string);
    $string = preg_replace('/[íìîï]/u', 'i', $string);
    $string = preg_replace('/[óòõôö]/u', 'o', $string);
    $string = preg_replace('/[úùûü]/u', 'u', $string);
    $string = preg_replace('/ç/u', 'c', $string);
    $string = preg_replace('/[^a-z0-9\-]/', '-', $string); // Remove o que não for letra ou número
    $string = preg_replace('/-+/', '-', $string); // Remove traços duplos
    return trim($string, '-');
}


function apiRequest($url, $method = 'GET', $params = [], $headers = []){
    $ch = curl_init();

    // 🔹 Converte método para maiúsculo
    $method = strtoupper($method);

    // 🔹 Se for GET, adiciona os parâmetros na URL
    if ($method === 'GET' && !empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // 🔹 Configura o método
    switch ($method) {
        case 'POST':
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
            break;

        case 'PUT':
        case 'DELETE':
        case 'PATCH':
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
            break;
    }

    // 🔹 Adiciona headers se existirem
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    // 🔹 Executa
    $response = curl_exec($ch);
    $error    = curl_error($ch);
    $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // 🔹 Retorna resultado em array
    return [
        'status' => $status,
        'error'  => $error ?: null,
        'body'   => $response
    ];
}