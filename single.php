<?php get_header(); ?>

<div class="container">
    <br>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <h1><?php the_title(); ?></h1> <!-- Título da notícia -->
            <div class="post-content">
                <?php
                // Exibe o conteúdo completo da postagem
                the_content();
                ?>
            </div>
            <?php
        }
    }
    ?>
</div>

<?php get_footer(); ?>