<?php
//INCLUDES

//HOOKS

//carregar css e js
function fr_scripts(){
    wp_enqueue_style('main',urlFile('style.css'));
    wp_enqueue_style('font-awesome',urlFile('fontawesome/css/all.css'));
    wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrapjs','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',array(), '5.3.3', true);
}

function url($anexo){
    echo get_template_directory_uri()."/".$anexo;
}

function urlFile($anexo){
    return get_template_directory_uri()."/".$anexo;
}

function linque($url){
    echo get_permalink(get_page_by_path($url)); 
}

function mudar_diretorio_uploads( $upload ) {
    // Diretório dentro do tema onde os arquivos de upload serão salvos
    $newdir = get_template_directory() . '/files';
    
    // URL para acessar os arquivos
    $newurl = get_template_directory_uri() . '/files';

    // Atualizando os valores do diretório e URL de upload
    $upload['path'] = $newdir;
    $upload['subdir'] = ''; // Remover subdiretório por padrão
    $upload['basedir'] = $newdir;
    $upload['url'] = $newurl;
    $upload['baseurl'] = $newurl;

    return $upload;
}


add_filter('upload_dir', 'mudar_diretorio_uploads');


function getPostagens($args){
    // Obtém as postagens como um array
    $decretos_posts = get_posts( $args );
    
    // Verifica se há postagens e exibe
    if ( !empty( $decretos_posts ) ) {
        return $decretos_posts;
    } else {
        return false;
    }
}

function postContent($content){
    // Localiza a palavra "Baixar" no conteúdo
    $stringConteudo = str_replace('Baixar',"<>",filter_var($content,FILTER_SANITIZE_STRING));
    $conteudo = explode("<>",$stringConteudo);
    // Retorna um array com o link e o conteúdo separados
    return array(
        'link' => $conteudo[0], // Remove espaços em branco
        'conteudo' => $conteudo[1] // Remove espaços em branco
    );
}

function viewAtual(){
    if (isset($_GET['section'])) {
        $section = $_GET['section'];
        return $section; // Exemplo de saída: historia
    }    
}

//
function fr_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom_logo');
    add_theme_support('post_thumbnails');
    register_nav_menu('primary',__('Menu Principal','CRT-ES'));
}

add_action('wp_enqueue_scripts','fr_scripts');
//adicionar recursos do wp
add_action('after_setup','fr_theme_support');