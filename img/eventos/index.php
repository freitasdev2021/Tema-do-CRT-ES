<?php 
   get_header();
   if(!isset($_GET['pesquisa'])){
?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner">
      <video src="<?=url('videos/Video Natal.mp4')?>" style="height:440px; width:100%; object-fit: cover;" autoplay muted></video>
   </div>
</div>
<!--SERVIÇOS-->
<div class="contentRegistros p-3">
   <div class="sirvissos">
      <div class="sirv">
         <img src="<?=url('icons/engenheiro.png')?>" alt="..." data-in='<?=url('icons/engenheiro_hover.png')?>' data-out='<?=url('icons/engenheiro.png')?>'>
         <a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarProfissional" class="link">Registro Profissional</a>
      </div>
      <div class="sirv">
         <img src="<?=url('icons/fabrica.png')?>" alt="..." data-in='<?=url('icons/fabrica_hover.png')?>' data-out='<?=url('icons/fabrica.png')?>'>
         <a href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=CadastrarEmpresa" class="link">Registro Empresa</a>
      </div>
      <div class="sirv">
         <img src="<?=url('icons/maquina.png')?>" alt="..." data-in='<?=url('icons/maquina_hover.png')?>' data-out='<?=url('icons/maquina.png')?>'>
         <a href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=ConsultarArt" class="link">TRT - Termo de Responsabilidade Técnica</a>
      </div>
      <div class="sirv">
         <img src="<?=url('icons/documento-de-texto.png')?>" alt="..." data-in='<?=url('icons/documento-de-texto_hover.png')?>' data-out='<?=url('icons/documento-de-texto.png')?>'>
         <a href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=ConsultarCertidaoSimples" class="link">Certidões</a>
      </div>
      <div class="sirv">
         <img src="<?=url('icons/configuracao.png')?>" alt="..." data-in='<?=url('icons/configuracao_hover.png')?>' data-out='<?=url('icons/configuracao.png')?>'>
         <a href="<?=linque('missao')."?section=quemsao"?>" class="link">Modalidades Técnicas</a>
      </div>
      <div class="sirv">
         <img src="<?=url('icons/aprendendo.png')?>" alt="..." data-in='<?=url('icons/aprendendo_hover.png')?>' data-out='<?=url('icons/aprendendo.png')?>'>
         <a href="<?=linque('comunicacao')?>?section=tutoriais" class="link">Tutoriais</a>
      </div>
      <div class="sirv">
         <img src="<?=url('icons/anuidade.png')?>" alt="..." data-in='<?=url('icons/anuidade_hover.png')?>' data-out='<?=url('icons/anuidade.png')?>'>
         <a href="<?=linque('comunicacao')?>?section=anuidade" class="link">Anuidade zero CRTES.PAY</a>
      </div>
   </div>
</div>
<br>
<!--CARTILHAS-->
<h1 class="crtlogocolor titleMain" align="center"><b>Cartilhas Institucionais</b></h1>
<div class="cartilhas">
   <div class="cartilha">
      <a href="<?=linque('cartilha-de-etica')?>" target="_blank">
      <img src="<?=url('img/cartilhas/cartilha.jpg')?>">
      </a>
   </div>
   <div class="cartilha">
      <a href="<?=linque('folder-virtual')?>" target="_blank">
      <img src="<?=url('img/cartilhas/cartilha2.jpg')?>">
      </a>
   </div> 
   <div class="cartilha">
      <a href="<?=linque('com-respeito')?>" target="_blank">
      <img src="<?=url('img/cartilhas/cartilha3.jpg')?>">
      </a>
   </div>
</div>
<!--NOTICIAS-->
<br>
<div class="p-3" style="background:#F5FBF9;">
   <div class="container-fluid my-5">
      <!--CONTEUDO GERAL DAS NOTICIAS-->
      <h1 class="crtlogocolor titleMain" align="center"><b>Notícias</b></h1>
      <br>
      <div class="d-flex justify-content-center">
      <div class="mainNoticias">
         <!--NOTICIA DESTAQUE-->
         <div class="noticiaDestaque">
            <?php
               $args = array(
               'category_name' => 'Noticias', // Nome da categoria
               'posts_per_page' => 1, // Limite de postagens
               'post_status' => 'publish', // Apenas postagens publicadas
               );
               
               foreach(getPostagens($args) as $n){
               $postContent = getNoticias($n->post_content);
               
               $imagens = $postContent['Imagem'];
               $textos = $postContent['Texto'];
               $postUrl = get_permalink($n->ID);
               ?>
               <div class="card">
                  <img src="<?=$imagens?>" class="card-img-top" alt="<?=$n->post_title?>">
                  <div class="card-body">
                        <h6 class="crtlogocolor"><?=$n->post_title?></h6>
                        <strong><a class="logoColor" href="<?=$postUrl?>">Ler Notícia</a></strong>
                  </div>
               </div>
            <?php
            }
            ?>
         </div>
         <!--NOTICIAS-->
         <div class="linhaNoticias">
            <!--PRIMEIRA LINHA DE NOTICIAS-->
            <div class="linhaNoticiasUm">
            <?php
               $args = array(
               'category_name' => 'Noticias', // Nome da categoria
               'posts_per_page' => 2, // Limite de postagens
               'paged'=> 2,
               'post_status' => 'publish', // Apenas postagens publicadas
               );
               
               foreach(getPostagens($args) as $n){
               $postContent = getNoticias($n->post_content);
               
               $imagens = $postContent['Imagem'];
               $textos = $postContent['Texto'];
               $postUrl = get_permalink($n->ID);
               ?>
               <div class="card">
                  <img src="<?=$imagens?>" class="card-img-top" alt="<?=$n->post_title?>">
                  <div class="card-body">
                        <h6 class="crtlogocolor"><?=$n->post_title?></h6>
                        <strong><a class="logoColor" href="<?=$postUrl?>">Ler Notícia</a></strong>
                  </div>
               </div>
            <?php
            }
            ?>
            </div>
            <!--SEGUNDA LINHA DE NOTICIAS-->
            <div class="linhaNoticiasDois">
            <?php
               $args = array(
               'category_name' => 'Noticias', // Nome da categoria
               'posts_per_page' => 2, // Limite de postagens
               'paged'=> 3,
               'post_status' => 'publish', // Apenas postagens publicadas
               );
               
               foreach(getPostagens($args) as $n){
               $postContent = getNoticias($n->post_content);
               
               $imagens = $postContent['Imagem'];
               $textos = $postContent['Texto'];
               $postUrl = get_permalink($n->ID);
               ?>
               <div class="card">
                  <img src="<?=$imagens?>" class="card-img-top" alt="<?=$n->post_title?>">
                  <div class="card-body">
                        <h6 class="crtlogocolor"><?=$n->post_title?></h6>
                        <strong><a class="logoColor" href="<?=$postUrl?>">Ler Notícia</a></strong>
                  </div>
               </div>
            <?php
            }
            ?>
            </div>
         </div>
         <!---->
      </div>
      </div>
      <!--FIM DAS NOTICIAS-->
      
      <!-- Seção de Paginação e Botão "Confira todas as notícias" -->
      <div class="d-flex justify-content-center" style="margin-top:-100px;">
         <a href="<?=linque('noticias')?>" class="btn border-0" style="background:#216191; color:white;">Confira todas as notícias</a>
      </div>
   </div>
</div>
<br>
<!--TABELAS DE VALORES-->
<h1 class="crtlogocolor titleMain" align="center"><b>Tabela de Valores 2025</b></h1>
<br>
<div class="registrosTabela">
<div class="registroTabela p-2">
   <div class="accordion accordion-flush col-sm-12" id="accordionFlushExample">
      <div class="accordion" id="accordionExample">
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
               <button class="accordion-button text-white" style="background:#03367B; border:solid white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                PESSOA FÍSICA
               </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <table class="table table-striped" border="1">
                     <thead>
                        <tr>
                              <th>Descrição</th>
                              <th>Valor</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                              <td>Anuidade Pessoa Física até 31/03/2025</td>
                              <td>R$ 349,92</td>
                        </tr>
                        <tr>
                              <td>Pagamento em cota única até 31 de janeiro de 2025 (15% de desconto)</td>
                              <td>R$ 297,43</td>
                        </tr>
                        <tr>
                              <td>Pagamento em cota única até 28 de fevereiro de 2025 (10% de desconto)</td>
                              <td>R$ 314,93</td>
                        </tr>
                        <tr>
                              <td>Termo de Responsabilidade de Técnica – TRT</td>
                              <td>R$ 64,89</td>
                        </tr>
                        <tr>
                              <td>Taxa de Análise de Registro/reativação de registro</td>
                              <td>R$ 66,20</td>
                        </tr>
                        <tr>
                              <td>Segunda via da expedição de carteira profissional</td>
                              <td>Até R$ 66,20</td>
                        </tr>
                        <tr>
                              <td>Emissão de CAT sem registro de atestado até 20 TRTs</td>
                              <td>R$ 66,20</td>
                        </tr>
                        <tr>
                              <td>Emissão de CAT sem registro de atestado acima de 20 TRTs</td>
                              <td>R$ 134,27</td>
                        </tr>
                        <tr>
                              <td>Emissão de CAT com registro de atestado</td>
                              <td>R$ 108,74</td>
                        </tr>
                        <tr>
                              <td>Emissão de certidão de quaisquer outros documentos e anotações</td>
                              <td>R$ 66,20</td>
                        </tr>
                     </tbody>
                  </table>
                  <hr>
                  <p><strong>Parcele em até 05 vezes pelo valor integral: 1ª parcela em 31/01/2025; 2ª parcela em 28/02/2025; 3ª parcela em 31/03/2025; 4ª parcela em 30/04/2025; 5ª parcela em 31/05/2025. O parcelamento é gerado pelo próprio técnico em seu ambiente profissional no <a href="https://servicos.sinceti.net.br/">SINCETI.</a></strong></p>
                  <ul>
                     <li>Para o pagamento em cota única até 31 de janeiro de 2025 ganhe 15% de desconto: R$ 297,43</li>
                     <li>Para pagamento em cota única até 28 de fevereiro de 2025 ganhe 10% de desconto: R$ 314,93</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
               <button class="accordion-button collapsed text-white" style="background:#03367B; border:solid white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                PESSOA JURÍDICA
               </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <h5>
                  O valor da anuidade para pessoa jurídica será de acordo com o Capital Social registrado, conforme tabela, com data final de pagamento em 31 de março de 2025.
                  </h5>
                  <table class="table table-striped">
                  <thead>
                     <tr>
                           <th>VALOR DO CAPITAL SOCIAL</th>
                           <th>VALOR</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                           <td>Até R$ 50.000,00</td>
                           <td>R$ 349,92</td>
                     </tr>
                     <tr>
                           <td>De R$ 50.001,00 até R$ 200.000,00</td>
                           <td>R$ 661,93</td>
                     </tr>
                     <tr>
                           <td>De R$ 200.001,00 até R$ 500.000,00</td>
                           <td>R$ 992,91</td>
                     </tr>
                     <tr>
                           <td>De R$ 500.001,00 até R$ 1.000.000,00</td>
                           <td>R$ 1.323,88</td>
                     </tr>
                     <tr>
                           <td>De R$ 1.000.001,00 até R$ 2.000.000,00</td>
                           <td>R$ 1.684,95</td>
                     </tr>
                     <tr>
                           <td>De R$ 2.000.001,00 até R$ 10.000.000,00</td>
                           <td>R$ 1.985,82</td>
                     </tr>
                     <tr>
                           <td>Acima de R$ 10.000.001,00</td>
                           <td>R$ 2.647,75</td>
                     </tr>
                  </tbody>
                  </table>
                  <ul>
                    <li>
                     Parcele em até 05 vezes pelo valor integral: 1ª parcela em 31/01/2025, 2ª parcela em 28/02/2025, 3ª parcela em 31/03/2025, 4ª parcela em 30/04/2025 e 5ª parcela em 31/05/2025.
                    </li>
                    <li>Taxa de Análise de Registro: R$ 322,47</li>
                    <li>Emissão de certidão de quaisquer outros documentos e anotações: R$ 66,20</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<br>
<!--LINKS UTEIS-->
<div class="linksUteis">
   <a href="https://www.cft.org.br/painelfiscalizacao/"><img src="<?=url('img/linksbanner/fiscalizacao.jpeg')?>" class="img-thumbnail col-sm-2" target="_blank"></a>
   <a href="https://www.cft.org.br/painel-lgpd/"><img src="<?=url('img/linksbanner/lgpd.jpg')?>" class="img-thumbnail col-sm-2" target="_blank"></a>
   <a href="https://www.cft.org.br/ouvidoria/"><img src="<?=url('img/linksbanner/ouvidoria.jpeg')?>" class="img-thumbnail col-sm-2" target="_blank"></a>
   <a href="https://crt-es.implanta.net.br/portaltransparencia/#publico/inicio"><img src="<?=url('img/linksbanner/transparencia.png')?>" class="img-thumbnail col-sm-2" target="_blank"></a>
</div>
<br>
<!--COMO CHEGAR NO CRT ES-->
<div class="comochegar p-3">
   <h1 class="crtlogocolor titleMain" align="center"><b>Como chegar</b></h1>
   <div class="container-fluid my-5 col-sm-9">
      <hr class="crtlogocolor" style="border:solid 1px #03367b;">
      <div class="row container-fluid my-2 col-sm-11" style="display:flex; justify-content:center; align-items:center;">
         <div class="col-sm-4" align="center">
            <h5><i class="fas fa-clock"></i> Funcionamento</h5>
            <p>Segunda a Sexta-feira</p>
            <p>8h às 17hh</p>
         </div>
         <div class="col-sm-4" align="center">
            <h5><i class="fa-solid fa-location-dot"></i> Endereço Sede</h5>
            <p>
               Av. Nossa Srª dos Navegantes, Edifício Palácio do Café, 675, Sala 701, Enseada do Suá, Vitória - ES, CEP 29.050-912
            </p>
         </div>
         <div class="col-sm-4" id="contatos" align="center">
            <ul>
               <h5><i class="fa-solid fa-phone"></i> Contatos</h5>
               <li>(27) 3100-2019</li>
               <li>(27) 9 9933-7517 (Somente Ligação)</li>
               <li>(27) 9 9689-9239 (Somente WhatsApp)</li>
               <li>atendimento@crtes.gov.br</li>
               <li><strong>Cobrança/Dívida Ativa</strong> (27) 99867-5197 | regularize@crtes.gov.br</li>
            </ul>
         </div>
      </div>
      <div class="row row-cols-1 row-cols-md-12 g-4 noticias">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14966.519294035179!2d-40.2953739!3d-20.3155839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb817f9f8b352cf%3A0xa25a6bb0e005f5b!2sConselho%20Regional%20dos%20T%C3%A9cnicos%20Industriais%20do%20Esp%C3%ADrito%20Santo!5e0!3m2!1spt-BR!2sbr!4v1730234964835!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!-- Seção de Paginação e Botão "Confira todas as notícias" -->
   </div>
   <!--FIM DO COMO CHEGAR-->
</div>
<!--'PARCERIAS'-->
<!------------------------->
<?php 
   }else{
      $pesquisa = $_GET['pesquisa'];
?>
<style>
   ul{
      list-style:none;
   }
</style>
<div class="contentRegistros p-3">
   <p class="titleInterno"><strong><?php printf(esc_html__('Resultados da pesquisa para: '.$pesquisa, 'textdomain'), get_search_query()); ?></strong></p>

   <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
         <a class="logoColor" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <p><?php the_excerpt(); ?></p>
         <hr>
      <?php endwhile; ?>
   <?php else : ?>
      <p><?php esc_html_e('Nenhum resultado encontrado.', 'textdomain'); ?></p>
   <?php endif; ?>
</div>
<?php
   }
get_footer();
?>
<script>
$(document).ready(function() {
   $(".sirvissos .sirv img").hover(
         function() {
            // Quando o mouse passar sobre a imagem
            $(this).attr("src", $(this).attr("data-in"));
         },
         function() {
            // Quando o mouse sair da imagem
            $(this).attr("src", $(this).attr("data-out"));
         }
   );
});
</script>