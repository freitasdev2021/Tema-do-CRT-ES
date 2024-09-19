<?php get_header();?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
    $args = array(
        'category_name' => 'Banners', // Nome da categoria
        'posts_per_page' => 5, // Limite de postagens
        'post_status' => 'publish', // Apenas postagens publicadas
    );
    // echo "<pre>";
    // print_r(getPostagens($args));
    // echo "</pre>";
    $is_first = true;
    foreach(getPostagens($args) as $p){
        $active_class = $is_first ? 'active' : '';
        $is_first = false;
    ?>
    <div class="carousel-item caroseu <?=$active_class?>">
        <?=$p->post_content?>
    </div>
    <?php
    }
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--LINKS UTEIS-->
<div class="linksUteis">
  <a href=""><img src="<?=url('img/linksbanner/fiscalizacao.jpeg')?>" class="img-thumbnail col-sm-2" target="_blank"></a>
  <a href=""><img src="<?=url('img/linksbanner/lgpd.jpg')?>" class="img-thumbnail col-sm-2" target="_blank"></a>
  <a href=""><img src="<?=url('img/linksbanner/ouvidoria.jpeg')?>" class="img-thumbnail col-sm-2" target="_blank"></a>
  <a href=""><img src="<?=url('img/linksbanner/transparencia.png')?>" class="img-thumbnail col-sm-2" target="_blank"></a>
</div>
<br>
<!--SERVIÇOS-->
<div class="contentRegistros p-3">
  <div class="registros">
    <!---->
    <div class="card registro" align="center">
      <div class="card-body p-2">
        <img src="<?=url('icons/engenheiro.png')?>" width="120px" height="120px">
        <h5 class="card-title">Registro Profissional</h5>
        <a href="#" class="btn col-sm-12" style="background:#034462; color:white;">Acessar</a>
      </div>
    </div>
    <!---->
    <div class="card registro" align="center">
      <div class="card-body p-2">
        <img src="<?=url('icons/fabrica.png')?>" width="120px" height="120px">
        <h5 class="card-title">Registro Empresa</h5>
        <a href="#" class="btn col-sm-12" style="background:#034462; color:white;">Acessar</a>
      </div>
    </div>
    <!---->
    <div class="card registro" align="center">
      <div class="card-body p-2">
        <img src="<?=url('icons/maquina.png')?>" width="120px" height="120px">
        <h5 class="card-title">TRT - Termo de Responsabilidade Técnica</h5>
        <a href="#" class="btn col-sm-12" style="background:#034462; color:white;">Acessar</a>
      </div>
    </div>
    <!---->
    <div class="card registro" align="center">
      <div class="card-body p-2">
        <img src="<?=url('icons/documento-de-texto.png')?>" width="120px" height="120px">
        <h5 class="card-title">Certidões</h5>
        <a href="#" class="btn col-sm-12" style="background:#034462; color:white;">Acessar</a>
      </div>
    </div>
    <!---->
    <div class="card registro" align="center">
      <div class="card-body p-2">
        <img src="<?=url('icons/web-chat.png')?>" width="120px" height="120px">
        <h5 class="card-title">Ouvidoria CFT/CRT's</h5>
        <a href="#" class="btn col-sm-12" style="background:#034462; color:white;">Acessar</a>
      </div>
    </div>
    <!---->
    <div class="card registro" align="center">
      <div class="card-body p-2">
        <img src="<?=url('icons/configuracao.png')?>" width="120px" height="120px">
        <h5 class="card-title">Modalidades Técnicas</h5>
        <a href="#" class="btn col-sm-12" style="background:#034462; color:white;">Acessar</a>
      </div>
    </div>
    <!---->
    <div class="card registro" align="center">
      <div class="card-body p-2">
        <img src="<?=url('icons/aprendendo.png')?>" width="120px" height="120px">
        <h5 class="card-title">Tutorial TRT</h5>
        <a href="#" class="btn col-sm-12" style="background:#034462; color:white;">Acessar</a>
      </div>
    </div>
    <!---->
    <div class="card registro" align="center">
      <div class="card-body p-2">
        <img src="<?=url('icons/file-and-folder.png')?>" width="120px" height="120px">
        <h5 class="card-title">Outros Serviços</h5>
        <a href="#" class="btn col-sm-12" style="background:#034462; color:white;">Acessar</a>
      </div>
    </div>
    <!---->
  </div>
</div>
<?php get_footer();?>
<script>
    $(".caroseu").find("img").addClass("d-block w-100")
</script>