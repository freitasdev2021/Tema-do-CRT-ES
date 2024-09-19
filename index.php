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
<br>
<!--CARTILHAS-->
<div class="registros">
   <div class="col-auto">
      <a href="<?=linque('cartilha-de-etica')?>" target="_blank">
      <img src="<?=url('img/cartilhas/cartilha.jpg')?>" width="500px" height="250px">
      </a>
   </div>
   <div class="col-auto">
      <a href="<?=linque('folder-virtual')?>" target="_blank">
      <img src="<?=url('img/cartilhas/cartilha2.jpg')?>" width="500px" height="250px">
      </a>
   </div>
</div>
<!--TABELAS DE VALORES-->
<br>
<div class="registros p-2" style="background:#F9F9F9;">
   <div class="accordion accordion-flush col-sm-10" id="accordionFlushExample">
      <div class="accordion" id="accordionExample">
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
               <button class="accordion-button text-white" style="background:#006BAD; border:solid white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                PESSOA FÍSICA
               </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
               <div class="accordion-body">
               <ul>
                  <li>Anuidade Pessoa Física: R$ 337,40 (até 31/03/2024)</li>
                  <li>
                    A anuidade referente ao exercício de 2024 poderá ser parcelada em 05 vezes, pelo valor integral, sendo o vencimento da 1ª parcela em 31/01/2024, 2ª parcela em 29/02/2024, 3ª parcela em 31/03/2024, 4ª parcela em 30/04/2024 e 5ª parcela em 31/05/2024. O parcelamento é gerado pelo próprio técnico em seu ambiente profissional no SINCETI.
                  </li>
                  <li>Para o pagamento em cota única até 31 de janeiro de 2024 ganhe 15% de desconto;</li>
                  <li>Para pagamento em cota única até 29 de fevereiro de 2024 ganhe 10% de desconto;</li>
                  <li>Termo de Responsabilidade de Técnica – TRT: R$ 62,57</li>
                  <li>TRT múltiplo: R$ 62,57</li>
                  <li>Taxa de Análise de Registro/reativação de registro: R$ 63,83</li>
                  <li>Segunda via da expedição de carteira profissional: até R$ 63,83</li>
                  <li>Emissão de CAT sem registro de atestado até 20 TRTs: R$ 63,83</li>
                  <li>Emissão de CAT sem registro de atestado acima de 20 TRTs: R$ 129,47</li>
                  <li>Emissão de CAT com registro de atestado: R$ 104,85</li>
              </ul>

               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
               <button class="accordion-button collapsed text-white" style="background:#006BAD; border:solid white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                PESSOA JURÍDICA
               </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <h5>
                    O valor da anuidade para pessoa jurídica será de acordo com o Capital Social registrado, conforme tabela, com data final de pagamento em 31 de março de 2024.
                  </h5>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Capital Social</th>
                        <th>Anuidade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Até R$ 50.000,00</td>
                        <td>R$ 337,40</td>
                      </tr>
                      <tr>
                        <td>De R$ 50.001,00 até R$ 200.000,00</td>
                        <td>R$ 638,25</td>
                      </tr>
                      <tr>
                        <td>De R$ 200.001,00 até R$ 500.000,00</td>
                        <td>R$ 957,39</td>
                      </tr>
                      <tr>
                        <td>De R$ 500.001,00 até R$ 1.000.000,00</td>
                        <td>R$ 1.276,52</td>
                      </tr>
                      <tr>
                        <td>De R$ 1.000.001,00 até R$ 2.000.000,00</td>
                        <td>R$ 1.624,67</td>
                      </tr>
                      <tr>
                        <td>De R$ 2.000.001,00 até R$ 10.000.000,00</td>
                        <td>R$ 1.914,78</td>
                      </tr>
                      <tr>
                        <td>Acima de R$ 10.000.001,00</td>
                        <td>R$ 2.553,03</td>
                      </tr>
                    </tbody>
                  </table>
                  <ul>
                    <li>
                      A anuidade de pessoa jurídica referente ao exercício de 2024 poderá ser parcelada em 05 (cinco) vezes, pelo valor integral, sendo o vencimento da 1ª parcela em 31/01/2024, 2ª parcela em 29/02/2024, 3ª parcela em 31/03/2024, 4ª parcela em 30/04/2024 e 5ª parcela em 31/05/2024.
                    </li>
                    <li>Taxa de Análise de Registro: R$ 310,93</li>
                    <li>Emissão de certidão de quaisquer outros documentos e anotações: R$ 63,83</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--NOTICIAS-->
<?php get_footer();?>
<script>
   $(".caroseu").find("img").addClass("d-block w-100")
</script>