<?php
$response2 = apiRequest(
    $api.'Banners',
    'GET',
    [],
    [
        "Authorization: ".$HeaderToken,
        "Token: ".$Token
    ]
);

$Banners = json_decode($response2['body'],true);
?>
<!--BANNER-->
<section id="home" class="hero">
    <div class="hero-slider">
        <?php
        $i = 0;
        foreach($Banners as $b){
        ?>
            <div class="slide <?= $i === 0 ? 'active' : '' ?>" 
                style="background-image: url(<?= $b['Foto'] ?>)">
            </div>
        <?php
            $i++;
        }
        ?>
    </div>

    <div class="hero-nav">
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
    </div>
    <div class="hero-dots"></div>
</section>
<!--SERVIÇOS MAIS PROCURADOS-->
<div id="popup" class="popup-overlay">
    <div class="popup-box">
        <span class="popup-close">&times;</span>
        <img id="popup-img" src="" alt="">
    </div>
</div>
<!--SERVICOS-->
<section id="servicos" class="services-highlight section-padding">
    <div class="container">
        <h2>Serviços Mais Procurados</h2>
        <p>Facilitando o seu dia a dia com acesso rápido aos principais serviços.</p>
        <div class="service-cards">
            <a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarProfissional" class="card">
                <i class="fa-solid fa-helmet-safety"></i>
                <h3>Registro Profissional</h3>
            </a>
            <a href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=CadastrarEmpresa" class="card">
                <i class="fa-solid fa-gear fa-stack-"></i>
                <h3>Registro Empresa</h3>
            </a>

            <a href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=ConsultarArt" class="card">
                <i class="fa-solid fa-regular fa-list-check"></i>
                <h3>TRT - Termo de Responsabilidade Técnica</h3>
            </a>
            <a href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=ConsultarCertidaoSimples" class="card">
                <i class="fa-solid fa-regular fa-clipboard-list"></i>
                <h3>Certidões</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProposicaoConsulta&ID=67&tpProposicao=1&" class="card">
                <i class="fa-solid fa-mobile-gear"></i>
                <h3>Resoluções - Modalidades Técnicas</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProjetoConsulta&ID=67&inEspecie=3&" class="card">
                <i class="fa-solid fa-regular fa-certificate"></i>
                <h3>Tutoriais e Documentos</h3>
            </a>

            <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=ProposicaoConsulta&ID=67&tpProposicao=3&" class="card">
                <i class="fa-solid fa-mobile-screen-button"></i>
                <h3>Anuidade Zero CRT.Pay</h3>
            </a>

            <a href="https://tecnicoquefaz.crtes.gov.br/" class="card">
                <img src="/icons/tecnicoquefaz.png" width="150px" height="80px"/>
            </a>
        </div>
    </div>
</section>
<!--NOTICIAS-->
<section id="noticias" class="swiper section-padding text-center">
  <h2>Notícias</h2>
  <p>As principais notícias para você se manter por dentro do que acontece.</p>
  <br/>
  <div class="swiper-wrapper">
    
      <div class="swiper-slide" style="background-image: url('caminho/para/sua-imagem1.jpg');">
         <a href="#">
            <div class="overlay"></div>
            <div class="slide-content">
               <h3 class="slide-title">CRT-ES participa do 16º Seminário Capixaba de Segurança Contra Incêndio e Pânico</h3>
               <p class="slide-date">02 de julho de 2026</p>
            </div>
         </a>
      </div>

      <div class="swiper-slide" style="background-image: url('caminho/para/sua-imagem2.jpg');">
         <a href="#">
            <div class="overlay"></div>
            <div class="slide-content">
               <h3 class="slide-title">Casa Brasil: Portal conecta técnicos industriais e beneficiários do programa</h3>
               <p class="slide-date">26 de junho de 2026</p>
            </div>
         </a>
      </div>

            <div class="swiper-slide" style="background-image: url('caminho/para/sua-imagem2.jpg');">
         <a href="#">
            <div class="overlay"></div>
            <div class="slide-content">
               <h3 class="slide-title">Casa Brasil: Portal conecta técnicos industriais e beneficiários do programa</h3>
               <p class="slide-date">26 de junho de 2026</p>
            </div>
         </a>
      </div>

            <div class="swiper-slide" style="background-image: url('caminho/para/sua-imagem2.jpg');">
         <a href="#">
            <div class="overlay"></div>
            <div class="slide-content">
               <h3 class="slide-title">Casa Brasil: Portal conecta técnicos industriais e beneficiários do programa</h3>
               <p class="slide-date">26 de junho de 2026</p>
            </div>
         </a>
      </div>

            <div class="swiper-slide" style="background-image: url('caminho/para/sua-imagem2.jpg');">
         <a href="#">
            <div class="overlay"></div>
            <div class="slide-content">
               <h3 class="slide-title">Casa Brasil: Portal conecta técnicos industriais e beneficiários do programa</h3>
               <p class="slide-date">26 de junho de 2026</p>
            </div>
         </a>
      </div>

      </div>
   
   <div class="swiper-button-prev"></div>
   <div class="swiper-button-next"></div>
</section>
<!--CARTILHAS-->
<section class="section-padding text-center">
    <h2>Cartilhas Institucionais</h2>
    <div class="container">
    <div class="cartilhas">
       <div class="cartilha">
            <a href="" target="_blank">
               <img src="">
            </a>
         </div>
         <div class="cartilha">
            <a href="" target="_blank">
               <img src="">
            </a>
         </div>
         <div class="cartilha">
            <a href="" target="_blank">
               <img src="">
            </a>
         </div>
         <div class="cartilha">
            <a href="" target="_blank">
               <img src="">
            </a>
         </div>
         <div class="cartilha">
            <a href="" target="_blank">
               <img src="">
            </a>
         </div>
         <div class="cartilha">
            <a href="" target="_blank">
               <img src="">
            </a>
         </div>
         <div class="cartilha">
            <a href="" target="_blank">
               <img src="">
            </a>
         </div>
   </div>
    </div>
</section>
<!--TABELA DE PREÇOS-->
<section class="section-padding text-center pricing-section">
    <h2>Tabela de Valores 2026</h2>

    <!-- BLOCO: PESSOA FÍSICA -->
    <div class="section-card">
        <h2 class="section-title">Pessoa Física</h2>
        
        <div class="grid-pf">
            <!-- Tabela de Anuidade e Parcelas -->
            <div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Anuidade & Parcelamento</th>
                                <th class="text-right">Valor / Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="highlight-row">
                                <td>Anuidade Pessoa Física (Até 31/03/2026)</td>
                                <td class="text-right">R$ 367,59</td>
                            </tr>
                            <tr>
                                <td>1ª Parcela</td>
                                <td class="text-right">31/01/2026</td>
                            </tr>
                            <tr>
                                <td>2ª Parcela</td>
                                <td class="text-right">28/02/2026</td>
                            </tr>
                            <tr>
                                <td>3ª Parcela</td>
                                <td class="text-right">31/03/2026</td>
                            </tr>
                            <tr>
                                <td>4ª Parcela</td>
                                <td class="text-right">30/04/2026</td>
                            </tr>
                            <tr>
                                <td>5ª Parcela</td>
                                <td class="text-right">31/05/2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="info-box">
                    <strong>Nota sobre o parcelamento:</strong> O parcelamento é gerado em até 05 vezes pelo valor integral diretamente pelo próprio técnico em seu ambiente profissional no SINCETI.
                </div>
            </div>
            
            <!-- Tabela de Taxas e Outros Serviços -->
            <div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Taxas e Serviços Gerais</th>
                                <th class="text-right">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Termo de Responsabilidade Técnica – TRT</td>
                                <td class="text-right">R$ 68,17</td>
                            </tr>
                            <tr>
                                <td>Taxa de Análise de Registro / Reativação</td>
                                <td class="text-right">R$ 68,17</td>
                            </tr>
                            <tr>
                                <td>Segunda via de Carteira Profissional</td>
                                <td class="text-right">R$ 68,17</td>
                            </tr>
                            <tr>
                                <td>Emissão de CAT sem registro (Até 20 TRTs)</td>
                                <td class="text-right">R$ 68,17</td>
                            </tr>
                            <tr>
                                <td>Emissão de CAT sem registro (Acima de 20 TRTs)</td>
                                <td class="text-right">R$ 68,17</td>
                            </tr>
                            <tr>
                                <td>Emissão de CAT com registro de atestado</td>
                                <td class="text-right">R$ 68,17</td>
                            </tr>
                            <tr>
                                <td>Emissão de certidão de outros documentos/anotações</td>
                                <td class="text-right">R$ 68,17</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Cards de Destaque para Descontos -->
        <div class="benefits-container">
            <div class="benefit-card">
                <div class="benefit-title">Ganhe 18% de Desconto</div>
                <div class="benefit-desc">Para o pagamento em cota única efetuado até o dia <strong>31 de janeiro de 2026</strong>.</div>
            </div>
            <div class="benefit-card warning">
                <div class="benefit-title">Ganhe 10% de Desconto</div>
                <div class="benefit-desc">Para o pagamento em cota única efetuado até o dia <strong>28 de fevereiro de 2026</strong>.</div>
            </div>
        </div>
    </div>

    <!-- BLOCO: PESSOA JURÍDICA -->
    <div class="section-card">
        <h2 class="section-title">Pessoa Jurídica</h2>
        
        <p style="color: var(--pricing-muted); margin-top: 0; margin-bottom: 20px; font-size: 0.95rem;">
            O valor da anuidade para pessoa jurídica será fixado de acordo com o <strong>Capital Social</strong> registrado da empresa, com data limite de vencimento em <strong>31 de março de 2026</strong>.
        </p>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Faixa de Capital Social</th>
                        <th class="text-right">Valor da Anuidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Até R$ 50.000,00</td>
                        <td class="text-right">R$ 367,59</td>
                    </tr>
                    <tr>
                        <td>De R$ 50.001,00 até R$ 200.000,00</td>
                        <td class="text-right">R$ 695,36</td>
                    </tr>
                    <tr>
                        <td>De R$ 200.001,00 até R$ 500.000,00</td>
                        <td class="text-right">R$ 1.043,05</td>
                    </tr>
                    <tr>
                        <td>De R$ 500.001,00 até R$ 1.000.000,00</td>
                        <td class="text-right">R$ 1.390,74</td>
                    </tr>
                    <tr>
                        <td>De R$ 1.000.001,00 até R$ 2.000.000,00</td>
                        <td class="text-right">R$ 1.770,04</td>
                    </tr>
                    <tr>
                        <td>De R$ 2.000.001,00 até R$ 10.000.000,00</td>
                        <td class="text-right">R$ 2.086,10</td>
                    </tr>
                    <tr class="highlight-row">
                        <td>Acima de R$ 10.000.001,00</td>
                        <td class="text-right">R$ 2.781,46</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="info-box" style="margin-bottom: 0;">
            <strong>Informações importantes para Empresas:</strong>
            <ul style="margin-top: 10px;">
                <li><strong>Opção de Parcelamento:</strong> Divida em até 05 vezes pelo valor integral (Vencimentos em: 31/01, 28/02, 31/03, 30/04 e 31/05/2026).</li>
                <li><strong>Taxa de Análise de Registro:</strong> R$ 68,17</li>
                <li><strong>Emissão de certidão de quaisquer outros documentos e anotações:</strong> R$ 68,17</li>
            </ul>
        </div>
    </div>

</section>
<!--TRANSPARENCIA-->
<section class="transparencia-section section-padding text-center">
    <div class="transparencia-grid">
        
        <!-- ITEM 1: Fiscalização -->
        <a href="https://www.cft.org.br/painelfiscalizacao/" target="_blank" rel="noopener noreferrer" class="transparencia-item">
            <div class="transparencia-img-wrapper">
                <img src="/img/linksbanner/fiscalizacao.jpeg" alt="Painel de Fiscalização">
            </div>
            <span class="transparencia-title">Painel de Fiscalização</span>
        </a>

        <!-- ITEM 2: LGPD -->
        <a href="https://www.cft.org.br/painel-lgpd/" target="_blank" rel="noopener noreferrer" class="transparencia-item">
            <div class="transparencia-img-wrapper">
                <img src="/img/linksbanner/lgpd.jpg" alt="Painel LGPD">
            </div>
            <span class="transparencia-title">Painel LGPD</span>
        </a>

        <!-- ITEM 3: Ouvidoria -->
        <a href="https://www.cft.org.br/ouvidoria/" target="_blank" rel="noopener noreferrer" class="transparencia-item">
            <div class="transparencia-img-wrapper">
                <img src="/img/linksbanner/ouvidoria.jpeg" alt="Ouvidoria">
            </div>
            <span class="transparencia-title">Ouvidoria</span>
        </a>

        <!-- ITEM 4: Portal da Transparência -->
        <a href="https://crt-es.implanta.net.br/portaltransparencia/#publico/inicio" target="_blank" rel="noopener noreferrer" class="transparencia-item">
            <div class="transparencia-img-wrapper">
                <img src="/img/linksbanner/transparencia.png" alt="Portal da Transparência">
            </div>
            <span class="transparencia-title">Portal da Transparência</span>
        </a>

        <!-- ITEM 5: Anticorrupção -->
        <a href="#" target="_blank" rel="noopener noreferrer" class="transparencia-item">
            <div class="transparencia-img-wrapper">
                <img src="/img/linksbanner/anticorrupcao.png" alt="Programa Anticorrupção">
            </div>
            <span class="transparencia-title">Programa Anticorrupção</span>
        </a>

        <!-- ITEM 6: Portal Casa Brasil -->
        <a href="#" target="_blank" rel="noopener noreferrer" class="transparencia-item">
            <div class="transparencia-img-wrapper">
                <img src="/img/linksbanner/portalcasabrasil.png" alt="Portal Casa Brasil">
            </div>
            <span class="transparencia-title">Portal Casa Brasil</span>
        </a>

    </div>
</section>
<!--COMO CHEGAR-->
<section class="reach-section">
   <h2 class="titleMain">Como chegar</h2>
   <div class="divider"></div>

   <div class="reach-grid">
      
      <!-- Card 1: Funcionamento -->
      <div class="reach-card">
         <div class="icon-wrapper">
            <i class="fas fa-clock"></i>
         </div>
         <h5>Funcionamento</h5>
         <p><strong>Segunda a Sexta-feira</strong></p>
         <p>8h às 17h</p>
      </div>

      <!-- Card 2: Endereço -->
      <div class="reach-card">
         <div class="icon-wrapper">
            <i class="fa-solid fa-location-dot"></i>
         </div>
         <h5>Endereço</h5>
         <p>Av. Nossa Srª dos Navegantes, Edifício Palácio do Café, 675</p>
         <p>6º Andar, Enseada do Suá</p>
         <p>Vitória - ES | CEP 29.050-912</p>
      </div>

      <!-- Card 3: Contatos -->
      <div class="reach-card" id="contatos">
         <div class="icon-wrapper">
            <i class="fa-solid fa-phone"></i>
         </div>
         <h5>Contatos</h5>
         <ul class="reach-contacts-list">
            <li>
               <span class="highlight-label">Telefones Fixos</span>
               (27) 3100-2019 | (27) 3014-8008
            </li>
            <li>
               <span class="highlight-label">Somente Ligação</span>
               (27) 9 9933-7517
            </li>
            <li>
               <span class="highlight-label">WhatsApp Atendimento</span>
               <a href="https://wa.me/5527996989329" target="_blank" class="whatsapp-link">(27) 9 9698-9329</a>
            </li>
            <li>
               <span class="highlight-label">E-mail Geral</span>
               <a href="mailto:atendimento@crtes.gov.br">atendimento@crtes.gov.br</a>
            </li>
            <li>
               <span class="highlight-label">Cobrança / Dívida Ativa</span>
               <a href="https://api.whatsapp.com/send/?phone=5527998675197&text&type=phone_number&app_absent=0" target="_blank" class="whatsapp-link">(27) 99867-5197</a>
               <br>
               <a href="mailto:regularize@crtes.gov.br" style="font-size: 0.85rem;">regularize@crtes.gov.br</a>
            </li>
         </ul>
      </div>

   </div>

   <!-- Bloco do Mapa Integrado -->
   <div class="reach-map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14966.519294035179!2d-40.2953739!3d-20.3155839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb817f9f8b352cf%3A0xa25a6bb0e005f5b!2sConselho%20Regional%20dos%20T%C3%A9cnicos%20Industriais%20do%20Esp%C3%ADrito%20Santo!5e0!3m2!1spt-BR!2sbr!4v1730234964835!5m2!1spt-BR!2sbr" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen=""></iframe>
   </div>
</section>
<!--FOOTER-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const slides = document.querySelectorAll('.slide');
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');
    const dotsContainer = document.querySelector('.hero-dots');

    let index = 0;
    let intervalo;

    /* Criar bolinhas */
    slides.forEach((_, i) => {
        const dot = document.createElement('span');
        dot.addEventListener('click', () => {
            index = i;
            mostrarSlide(index);
            resetAuto();
        });
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.hero-dots span');

    /* Atualiza slide */
    function mostrarSlide(i) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        slides[i].classList.add('active');
        dots[i].classList.add('active');
    }

    /* Próximo */
    function proximoSlide() {
        index = (index + 1) % slides.length;
        mostrarSlide(index);
    }

    /* Anterior */
    function slideAnterior() {
        index = (index - 1 + slides.length) % slides.length;
        mostrarSlide(index);
    }

    /* Auto */
    function iniciarAuto() {
        intervalo = setInterval(proximoSlide, 5000);
    }

    function resetAuto() {
        clearInterval(intervalo);
        iniciarAuto();
    }

    /* Eventos */
    next.addEventListener('click', () => {
        proximoSlide();
        resetAuto();
    });

    prev.addEventListener('click', () => {
        slideAnterior();
        resetAuto();
    });

    /* Iniciar */
    mostrarSlide(index);
    iniciarAuto();
</script>