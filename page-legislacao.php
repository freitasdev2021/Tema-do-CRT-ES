<?php
/* Template Name: Missão, Visão e Valores */
get_header();
?>
<style>
    .list-group-item.active {
        background-color: #01255E;
        border-color: #01255E;
    }

    .list-group{
        border-radius:0px; /* Remove a borda de todos os itens */
    }

    h1{
        color: #006BAD;
    }
</style>
<div class="content p-2">
    <div class="col-sm-12 d-flex justify-content-center">
        <img src="<?=url('img/legis.jpg')?>" width="100%;">
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action <?=(viewAtual() == 'legislacao') ? 'active' : ''; ?>" id="list-home-list" data-bs-toggle="list" href="#legislacao" role="tab" aria-controls="list-home">Legislação Federal</a>
                <a class="list-group-item list-group-item-action <?=(viewAtual() == 'outrosDocumentos') ? 'active' : ''; ?>" id="list-profile-list" data-bs-toggle="list" href="#outros" role="tab" aria-controls="list-profile">Outros Documentos</a>
                <a class="list-group-item list-group-item-action <?=(viewAtual() == 'impugnacoes') ? 'active' : ''; ?>" id="list-messages-list" data-bs-toggle="list" href="#impugnacoes" role="tab" aria-controls="list-messages">Impugnações</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="legislacao" role="tabpanel" aria-labelledby="list-home-list">
                    <h1>Legislação Federal</h1>
                    <br>
                    <?php
                    $args = array(
                        'category_name' => 'Legislação Federal', // Nome da categoria
                        'posts_per_page' => 14, // Limite de postagens
                        'post_status' => 'publish', // Apenas postagens publicadas
                    );
                    // echo "<pre>";
                    // print_r(getPostagens($args));
                    // echo "</pre>";
                    foreach(getPostagens($args) as $p){
                        $postContent = postContent($p->post_content);
                        $link = get_template_directory_uri()."/files/".$postContent['link'];
                    ?>
                    <div class="card" style="width: 100%; margin-top:10px;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$p->post_title?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$postContent['conteudo']?></h6>
                            <a href="<?=$link.".pdf" ?>" class="card-link" download>Baixar</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="tab-pane fade" id="outros" role="tabpanel" aria-labelledby="list-profile-list">
                    <h1>Outros Documentos</h1>
                    <br>
                    <?php
                    $args = array(
                        'category_name' => 'Outros Documentos', // Nome da categoria
                        'posts_per_page' => 14, // Limite de postagens
                        'post_status' => 'publish', // Apenas postagens publicadas
                    );
                    // echo "<pre>";
                    // print_r(getPostagens($args));
                    // echo "</pre>";
                    foreach(getPostagens($args) as $p){
                        $postContent = postContent($p->post_content);
                        $link = get_template_directory_uri()."/files/".$postContent['link'];
                    ?>
                    <div class="card" style="width: 100%; margin-top:10px;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$p->post_title?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$postContent['conteudo']?></h6>
                            <a href="<?=$link.".pdf" ?>" class="card-link" download>Baixar</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="tab-pane fade" id="impugnacoes" role="tabpanel" aria-labelledby="list-messages-list">
                    <h1>Impugnações</h1>
                    <br>
                    <?php
                    $args = array(
                        'category_name' => 'Impugnacoes', // Nome da categoria
                        'posts_per_page' => 14, // Limite de postagens
                        'post_status' => 'publish', // Apenas postagens publicadas
                    );
                    // echo "<pre>";
                    // print_r(getPostagens($args));
                    // echo "</pre>";
                    foreach(getPostagens($args) as $p){
                        $postContent = postContent($p->post_content);
                        $link = get_template_directory_uri()."/files/".$postContent['link'];
                    ?>
                    <div class="card" style="width: 100%; margin-top:10px;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$p->post_title?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$postContent['conteudo']?></h6>
                            <a href="<?=$link.".pdf" ?>" class="card-link" download>Baixar</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
