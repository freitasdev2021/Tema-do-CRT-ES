<?php get_header();?>
<div class="p-2">
    <div align="center">
        <h3>Eleições Sistema CFT CRT's 2022</h3>
        <h5>Documentos disponibilizados pela Comissão Eleitoral Regional - CER</h5>
    </div>
    <br>
    <div>
        <h3 align="center">Editais</h3>
        <div class="editais">
            <?php
            $args = array(
                'category_name' => 'eleicoes', // Nome da categoria
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
            <div class="edital">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?=$link.".pdf" ?>" target="_blank"><?=$p->post_title?></a>
                        </h5>
                        <p class="card-text"><?=$postContent['conteudo']?></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>      
        </div>
    </div>
    <!--OUTROS DOCUMENTOS-->
    <div>
        <h3 align="center">Outros Documentos</h3>
        <div class="editais">
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
            <div class="edital">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?=$link.".pdf" ?>" target="_blank"><?=$p->post_title?></a>
                        </h5>
                        <p class="card-text"><?=$postContent['conteudo']?></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>      
        </div>
    </div>
</div>
<?php get_footer();?>