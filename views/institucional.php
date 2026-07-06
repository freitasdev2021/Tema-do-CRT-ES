<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
   .list-group-item.active {
      background-color: #216191;
      border-color: #01255E;
   }
   .list-group{
      border-radius:0px; /* Remove a borda de todos os itens */
   }
   h1{
      color: #216191;
   }
   .corLogo{
      color : #216191;
   }
   .bgCorLogo{
      background:#216191;
   }
   a{
      text-decoration:none;
   }
   .submenu{
      z-index:999;
   }
</style>
<div class="content p-2">
<div class="row">
   <div class="col-4">
      <div class="list-group" id="list-tab" role="tablist">
         <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">História</a>
         <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Organograma</a>
         <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-expresidentes" role="tab" aria-controls="list-expresidentes">Legislaturas</a>
      </div>
   </div>
   <div class="col-8">
      <div class="tab-content" id="nav-tabContent">
         <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <section class="bg-dark text-white py-5">
               <div class="container text-center">
                  <h1 class="display-5 fw-bold">História de Perdões</h1>
                  <p class="lead mb-0">
                     Conheça a origem, fundação e as primeiras legislaturas do município de Perdões – Minas Gerais.
                  </p>
               </div>
            </section>
            <!-- FUNDAÇÃO -->
            <section class="py-5">
               <div class="container">
                  <div class="row justify-content-center mb-4">
                     <div class="col-lg-8 text-center">
                        <h2 class="fw-bold">Fundação do Povoado</h2>
                        <p class="text-muted">
                           Nos caminhos das Gerais, Entradas e Bandeiras marcaram a história de muitos municípios mineiros. Nestas paragens a história não foi diferente. Por volta do ano de 1770, quando o mundo caminhava para o desfecho do século XVIII, chegou aqui um homem português, cujo nome era Romão Fagundes do Amaral, hábil minerador e bastante ambicioso.
                        </p>

                        <p class="text-muted">
                           Sem muito atentar para os éditos da Coroa Portuguesa, vivia à procura de lugares propícios à exploração de riquezas. Nestas terras minerou e enriqueceu. Cruzou linhas históricas e geográficas e hoje temos vestígios de sua teia entrelaçando Perdões, Cana Verde e Campo Belo.
                        </p>

                        <p class="text-muted">
                           Segundo a tradição, Romão Fagundes se tornou fugitivo por manter garimpos clandestinos, sonegando os impostos. Depois de muito se esquivar, resolveu não mais viver às ocultas e fez uma promessa à Coroa, pedindo o seu perdão. Se este lhe fosse concedido, seria retribuído com um cachinho de banana de ouro. Romão Fagundes assegurou ainda que mandaria vir de Portugal a imagem do Senhor Bom Jesus, o que de fato aconteceu.
                        </p>

                        <p class="text-muted">
                           Por iniciativa do Alferes Romão Fagundes do Amaral, foi edificada a Capela Bom Jesus dos Perdões, por volta de 1770, nas proximidades da qual se formou o arraial de Perdões. Desde o início dedicada ao Senhor Bom Jesus, essa igreja é a primitiva Capela do Senhor dos Perdões. Posteriormente foi dedicada a Nossa Senhora do Rosário, quando se construiu a Igreja Matriz.
                        </p>

                        <p class="text-muted">
                           Não sabemos contar quantos passos subiram os gastos degraus que conduzem aos retábulos da fé; não sabemos contar quantas pessoas passaram nesta igreja em busca de esperança e de ressurreição. Não é possível saber nem mesmo quantos descansam sob o telhado tramado da igreja, primeiro cemitério da paróquia.
                        </p>
                     </div>
                  </div>
                  <div class="row g-4">
                     <div class="col-lg-6">
                        <div class="card shadow-sm border-0 h-100">
                           <div class="card-body p-4">
                              <h5 class="fw-bold mb-3">Povoado</h5>
                              <p class="mb-0">
                                 <strong>São Bom Jesus dos Perdões</strong>
                              </p>
                              <small class="text-muted">Origem do município</small>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="card shadow-sm border-0 h-100">
                           <div class="card-body p-4">
                              <h5 class="fw-bold mb-3">Fundadores (por volta de 1770)</h5>
                              <ul class="mb-0">
                                 <li>Romão Fagundes do Amaral</li>
                                 <li>Manoel Luiz Cardoso</li>
                                 <li>Manoel Fernandes Airão</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <div class="accordion" id="accordionExample">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Assessoria Parlamentar
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Tipo de Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Assessoria Parlamentar</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Luciana Aparecida Pereira</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <h6 class="mb-0">
                                       <a href="mailto:assessoriaparlamentar@cmperdoes.mg.gov.br">
                                       assessoriaparlamentar@cmperdoes.mg.gov.br
                                       </a>
                                    </h6>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Assessoria Parlamentar
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p class="mb-2">
                                       Conforme o Regimento Interno, Art. 41 – Ao assessor parlamentar compete assessorar o Presidente da Câmara e os demais membros da Mesa Diretora.
                                    </p>
                                    <p class="mb-0">
                                       <strong>Parágrafo único:</strong> O Assessor Parlamentar poderá ser determinado a prestar serviços na Secretaria da Câmara por tempo determinado.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     Procurado Jurídico da Câmara
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Procurador Jurídico da Câmara</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Estêvão Marques Manso</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <h6 class="mb-0">
                                       <a href="mailto:juridico@cmperdoes.mg.gov.br">
                                       juridico@cmperdoes.mg.gov.br
                                       </a>
                                    </h6>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Procurador Jurídico da Câmara
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p class="mb-2">
                                       Conforme o Regimento Interno, Art. 40 – Ao Assessor Jurídico Consultivo compete exclusivamente analisar as proposições de Lei ou Resoluções quanto à sua legalidade.
                                    </p>
                                    <p class="mb-0">
                                       Podendo, no entanto, participar das reuniões das Comissões permanentes quando solicitado e autorizado pelo Presidente.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Secretária Geral
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Secretária Geral</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Maria Laura de Souza Resende</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <h6 class="mb-0">
                                       <a href="mailto:contato@cmperdoes.mg.gov.br">
                                       contato@cmperdoes.mg.gov.br
                                       </a>
                                    </h6>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Secretária Geral
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p>
                                       Conforme o Regimento Interno, <strong>Capítulo VI – Da Secretaria da Câmara</strong>.
                                    </p>
                                    <p>
                                       <strong>Art. 47</strong> – A Secretaria da Câmara é composta por servidores concursados para os cargos que irão desempenhar.
                                    </p>
                                    <p>
                                       <strong>Art. 48</strong> – Os serviços da Secretaria da Câmara são superintendidos pelo Secretário da Câmara, cabendo a ele levar ao conhecimento do plenário todo e qualquer assunto relacionado à Secretaria.
                                    </p>
                                    <p>
                                       <strong>Art. 49</strong> – Os servidores estáveis da Câmara Municipal poderão, autorizados por Resolução da Mesa Diretora, prestar serviço a outros órgãos do Poder Público.
                                    </p>
                                    <p>
                                       <strong>Art. 50</strong> – Os servidores da Câmara investidos nos cargos de Secretário Municipal ou Diretor equivalente necessitam de autorização legislativa, que especificará o prazo da licença, remuneração e contribuições sociais devidas.
                                    </p>
                                    <p>
                                       <strong>Parágrafo único</strong> – A licença não pode ser superior a quatro anos nem inferior a seis meses.
                                    </p>
                                    <p>
                                       <strong>Art. 51</strong> – Ao 2º Secretário compete substituir o 1º Secretário em caso de falta, ausência ou impedimento, bem como auxiliá-lo no exercício de suas funções.
                                    </p>
                                    <p>
                                       <strong>Parágrafo único</strong> – Compete também despachar requerimentos de férias regulamentares, férias-prêmio, licenças médicas, abono e outros, a critério da Presidência.
                                    </p>
                                    <p>
                                       <strong>Art. 52</strong> – Os secretários substituem, na ordem de sua enumeração, o Presidente na falta, ausência ou impedimento do Vice-Presidente, apenas na direção dos trabalhos da Mesa durante as reuniões.
                                    </p>
                                    <p class="mb-0">
                                       <strong>Parágrafo único</strong> – Quando a ausência ou impedimento durar mais de 10 dias, a substituição ocorrerá em todas as atribuições do titular do cargo.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading4">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                     Secretário da Mesa
                     </button>
                  </h2>
                  <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Secretário da Mesa</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Márcio Oliveira Rodrigues</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <h6 class="mb-0">
                                       <a href="mailto:contato@cmperdoes.mg.gov.br">
                                       contato@cmperdoes.mg.gov.br
                                       </a>
                                    </h6>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Secretário da Mesa da Presidência
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p>
                                       Conforme o Regimento Interno, <strong>Capítulo V – Do Secretário da Mesa, Art. 46</strong>.
                                    </p>
                                    <p><strong>São atribuições do Secretário, além de outras:</strong></p>
                                    <ol class="mb-0">
                                       <li>Verificar e declarar a presença dos Vereadores pelo livro próprio ou realizar a chamada nos casos previstos no Regimento.</li>
                                       <li>Proceder à leitura da Ata e do Expediente.</li>
                                       <li>Assinar, depois do Presidente, as proposições, Resoluções e Atas da Câmara, determinando a publicação do resumo das últimas na imprensa local ou sua afixação em edital no local de costume.</li>
                                       <li>Superintender a redação das Atas das reuniões públicas e redigir as das reuniões secretas.</li>
                                       <li>Tomar nota das observações e reclamações feitas sobre as Atas para retificação nas reuniões seguintes.</li>
                                       <li>Recolher e guardar em boa ordem os projetos, emendas, indicações, requerimentos, representações, moções e pareceres das Comissões para apresentação quando necessário.</li>
                                       <li>Abrir e encerrar o livro de presença, que ficará sob sua guarda.</li>
                                       <li>Fornecer à Secretaria da Câmara os dados relativos ao comparecimento dos Vereadores em cada reunião.</li>
                                       <li>Abrir, numerar, rubricar e encerrar livros destinados aos serviços da Câmara.</li>
                                    </ol>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading5">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                     Assessoria de Comunicação
                     </button>
                  </h2>
                  <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Assessoria de Comunicação</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Tiago Aparecido Freire</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <h6 class="mb-1">
                                       <a href="mailto:comunica@cmperdoes.mg.gov.br">
                                       comunica@cmperdoes.mg.gov.br
                                       </a>
                                    </h6>
                                    <small class="text-muted">E-mail alternativo</small>
                                    <div>
                                       <a href="mailto:midiacamaraperdoes@gmail.com">
                                       midiacamaraperdoes@gmail.com
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Assessoria de Comunicação
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p>
                                       Ao Assessor de Comunicação compete divulgar as atividades da Câmara Municipal, com prioridade para aquelas diretamente relacionadas ao processo legislativo.
                                    </p>
                                    <p>
                                       As ações incluem a distribuição de conteúdos informativos em emissoras de TV e rádio, jornais impressos, portal institucional e redes sociais, além do gerenciamento do trabalho de assessoria de imprensa.
                                    </p>
                                    <p>
                                       Compete também promover ações de relações públicas e divulgação institucional que aproximem o Poder Legislativo da sociedade, tanto por meio de eventos presenciais quanto através de ferramentas digitais de interação.
                                    </p>
                                    <p>
                                       Entre suas atribuições estão apoiar iniciativas que promovam o conhecimento e a cidadania, gerenciar os veículos de comunicação interna e desenvolver programas institucionais voltados à valorização do Poder Legislativo.
                                    </p>
                                    <p class="mb-0">
                                       Também é responsável por dar suporte ao processo legislativo e aos vereadores, fortalecendo a integração entre a comunidade e os trabalhos parlamentares.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading6">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                     PROCON Legislativo e Centro de Atendimento ao Cidadão (CAC)
                     </button>
                  </h2>
                  <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">PROCON Legislativo e Centro de Atendimento ao Cidadão (CAC)</h6>
                                 </div>
                              </div>
                              <!-- Responsáveis -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsáveis pela unidade</small>
                                    <p class="mb-1">Glênia Aparecida Francisca Santos – PROCON</p>
                                    <p class="mb-0">Estefânia Freire Pimenta – CAC</p>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <div>
                                       <a href="mailto:proconcamara@cmperdoes.mg.gov.br">
                                       proconcamara@cmperdoes.mg.gov.br
                                       </a>
                                    </div>
                                    <div>
                                       <a href="mailto:proconcamaraperdoes@gmail.com">
                                       proconcamaraperdoes@gmail.com
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h (segunda a sexta-feira)</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       (PROCON) Programa de Proteção e Defesa do Consumidor e (CAC) Centro de Atendimento ao Cidadão.
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p>
                                       O <strong>CAC – Centro de Atendimento ao Cidadão</strong> é um órgão vinculado à Presidência da Câmara Municipal de Perdões/MG, instituído pela Resolução nº 959/2015, com o objetivo de atender a população, especialmente em aspectos sociais, orientando e auxiliando o cidadão em diversas demandas.
                                    </p>
                                    <p>
                                       Integra-se ao CAC o <strong>PROCON Câmara</strong>, serviço voltado à orientação e atendimento de consumidores (pessoas físicas ou jurídicas) residentes ou sediados no município, auxiliando na resolução de demandas relacionadas à compra de produtos ou contratação de serviços.
                                    </p>
                                    <hr>
                                    <strong>Funções do CAC</strong>
                                    <ol>
                                       <li>Elaboração de currículos.</li>
                                       <li>Emissão de certidão de regularidade de CPF e CNPJ.</li>
                                       <li>Certidão de quitação eleitoral.</li>
                                       <li>Emissão de taxas de IPVA e licenciamento de veículos.</li>
                                       <li>Cadastros em sistemas governamentais (GOV, INSS e Carteira de Trabalho Digital).</li>
                                       <li>Recebimento de denúncias e encaminhamento aos órgãos competentes como Câmara Municipal, Poder Judiciário, Ministério Público ou Polícia Civil.</li>
                                    </ol>
                                    <strong>Funções do PROCON</strong>
                                    <ol>
                                       <li><strong>Orientação ao consumidor:</strong> esclarecimento sobre direitos e deveres nas relações de consumo.</li>
                                       <li><strong>Atendimento a reclamações:</strong> registro de queixas e mediação de conflitos entre consumidores e fornecedores.</li>
                                       <li><strong>Encaminhamento ao Judiciário:</strong> orientação para busca de solução judicial quando necessário.</li>
                                       <li><strong>Educação para o consumo:</strong> campanhas e atividades educativas sobre direitos do consumidor.</li>
                                    </ol>
                                    <hr>
                                    <strong>Contato</strong>
                                    <p class="mb-1">Telefone: (35) 3864-4617 (Fixo e WhatsApp)</p>
                                    <p class="mb-2">
                                       E-mails:
                                       <br>proconcamara@cmperdoes.mg.gov.br
                                       <br>proconcamaraperdoes@gmail.com
                                    </p>
                                    <strong>Documentos necessários para atendimento</strong>
                                    <ul class="mb-0">
                                       <li>Documento oficial com foto;</li>
                                       <li>Endereço atualizado;</li>
                                       <li>Telefone ou e-mail para contato;</li>
                                       <li>Informações que permitam identificar a empresa reclamada.</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading7">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                     Presidente da Câmara
                     </button>
                  </h2>
                  <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Presidente da Câmara</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Florisvaldo Diniz</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <div>
                                       <a href="mailto:contato@cmperdoes.mg.gov.br">
                                       contato@cmperdoes.mg.gov.br
                                       </a>
                                    </div>
                                    <small class="text-muted">E-mail alternativo</small>
                                    <div>
                                       <a href="mailto:presidenteflorisvaldocmp@gmail.com">
                                       presidenteflorisvaldocmp@gmail.com
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Presidência da Câmara Municipal
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p><strong>Conforme o Regimento Interno – Capítulo III do Presidente</strong></p>
                                    <p>
                                       <strong>Art. 42</strong> – A Presidência é o órgão representativo da Câmara Municipal quando esta se manifesta coletivamente.
                                    </p>
                                    <p><strong>Art. 43 – Compete ao Presidente:</strong></p>
                                    <h6 class="mt-3">I – Como chefe do Poder Legislativo</h6>
                                    <ol type="a">
                                       <li>Representar a Câmara em juízo e perante autoridades constituídas;</li>
                                       <li>Dar posse a Vereador;</li>
                                       <li>Promulgar Resoluções da Câmara;</li>
                                       <li>Promulgar leis não sancionadas pelo Prefeito no prazo legal;</li>
                                       <li>Promulgar leis vetadas pelo Prefeito e confirmadas pela Câmara;</li>
                                       <li>Encaminhar ao Prefeito proposições aprovadas;</li>
                                       <li>Assinar correspondências oficiais da Câmara;</li>
                                       <li>Apresentar relatório anual dos trabalhos da Câmara;</li>
                                       <li>Prestar contas de sua administração;</li>
                                       <li>Superintender os serviços da Secretaria da Câmara;</li>
                                       <li>Nomear, promover ou conceder licença a servidores da Câmara;</li>
                                       <li>Dar andamento aos recursos contra seus atos;</li>
                                       <li>Requisitar ao Prefeito verbas orçamentárias do Legislativo;</li>
                                       <li>Declarar a extinção de mandato de Vereador.</li>
                                    </ol>
                                    <h6 class="mt-3">II – Quanto às reuniões</h6>
                                    <ol type="a">
                                       <li>Convocar reuniões ordinárias e extraordinárias;</li>
                                       <li>Abrir, presidir e encerrar reuniões;</li>
                                       <li>Dirigir os trabalhos e manter a ordem;</li>
                                       <li>Suspender, prorrogar ou encerrar reuniões quando necessário;</li>
                                       <li>Mandar ler a ata e o expediente;</li>
                                       <li>Conceder a palavra aos vereadores;</li>
                                       <li>Submeter matérias à discussão e votação;</li>
                                       <li>Anunciar o resultado das votações;</li>
                                       <li>Decidir questões de ordem;</li>
                                       <li>Designar vereador para funções da mesa quando necessário.</li>
                                    </ol>
                                    <h6 class="mt-3">III – Quanto às proposições</h6>
                                    <ol type="a">
                                       <li>Distribuir proposições às comissões;</li>
                                       <li>Deferir requerimentos;</li>
                                       <li>Determinar retirada de proposições;</li>
                                       <li>Arquivar ou retirar projetos conforme solicitação;</li>
                                       <li>Recusar emendas ou substitutivos ilegais;</li>
                                       <li>Solicitar informações técnicas sobre matérias;</li>
                                       <li>Determinar redação final das proposições.</li>
                                    </ol>
                                    <h6 class="mt-3">IV – Quanto às comissões</h6>
                                    <ol type="a">
                                       <li>Nomear comissões permanentes e temporárias;</li>
                                       <li>Designar substitutos quando necessário;</li>
                                       <li>Decidir recursos sobre questões de ordem;</li>
                                       <li>Despachar proposições às comissões.</li>
                                    </ol>
                                    <h6 class="mt-3">V – Quanto às publicações</h6>
                                    <ol type="a">
                                       <li>Publicar resoluções, leis e atos legislativos;</li>
                                       <li>Impedir publicação de pronunciamentos contrários à ordem pública.</li>
                                    </ol>
                                    <p>
                                       <strong>Parágrafo único:</strong> Para abertura das reuniões da Câmara, o Presidente convida um vereador para leitura de um versículo da Bíblia e declara: 
                                       <em>“Em nome e sob a bênção de Deus, havendo número regimental, declaro aberta a reunião”.</em>
                                    </p>
                                    <p class="mb-0">
                                       <strong>Art. 44</strong> – O Presidente da Câmara vota nas eleições, nos casos de empate e nas votações que exijam maioria qualificada de dois terços.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading8">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                     Vice-Presidente da Câmara
                     </button>
                  </h2>
                  <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Vice-Presidente da Câmara</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Anderson Carvalho Pereira</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <div>
                                       <a href="mailto:contato@cmperdoes.mg.gov.br">
                                       contato@cmperdoes.mg.gov.br
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Vice-Presidente da Câmara
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p><strong>Conforme o Regimento Interno – Capítulo IV do Vice-Presidente</strong></p>
                                    <p>
                                       <strong>Art. 45</strong> – Não estando o Presidente no recinto à hora regimental de início dos trabalhos, o Vice-Presidente o substituirá no exercício de suas funções, assumindo-as até que o Presidente esteja presente.
                                    </p>
                                    <p>
                                       <strong>§ 1º</strong> – A substituição também ocorre em todos os casos de ausência, falta, impedimento ou licença do Presidente.
                                    </p>
                                    <p class="mb-0">
                                       <strong>§ 2º</strong> – Sempre que a ausência ou impedimento do Presidente tiver duração superior a 10 (dez) dias, a substituição será exercida em todas as atribuições do titular do cargo.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading9">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                     Controle Interno
                     </button>
                  </h2>
                  <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Controle Interno</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Lívia Guimarães Rodarte</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <div>
                                       <a href="mailto:controleinterno@cmperdoes.mg.gov.br">
                                       controleinterno@cmperdoes.mg.gov.br
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Controle Interno
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p>
                                       Conforme o documento <strong>“O sistema de controle interno nos municípios” (CNM, 2023, pp. 22–23)</strong>, o Sistema de Controle Interno atua como instrumento de fiscalização e acompanhamento da gestão pública municipal.
                                    </p>
                                    <p>
                                       A função do Controle Interno não é avaliar o mérito das decisões administrativas ou das políticas públicas executadas pelos gestores, mas sim analisar os atos já praticados, identificando eventuais irregularidades e sugerindo medidas corretivas ou preventivas.
                                    </p>
                                    <p>
                                       A atuação do Controle Interno é considerada essencial pela <strong>Lei Complementar nº 101/2000 (Lei de Responsabilidade Fiscal)</strong>, especialmente nos seguintes aspectos:
                                    </p>
                                    <ol>
                                       <li>Fiscalizar internamente o cumprimento das normas estabelecidas pela Lei de Responsabilidade Fiscal.</li>
                                       <li>Avaliar o cumprimento das metas previstas no Plano Plurianual (PPA), na Lei de Diretrizes Orçamentárias (LDO) e na Lei Orçamentária Anual (LOA).</li>
                                       <li>Verificar demonstrativos fiscais e acompanhar o cumprimento das metas estabelecidas pela administração pública.</li>
                                       <li>Assinar o Relatório de Gestão Fiscal juntamente com outras autoridades administrativas, conforme previsto no art. 54 da Lei Complementar nº 101/2000.</li>
                                       <li>Atuar como órgão auxiliar do Poder Legislativo na fiscalização da gestão fiscal do município, conforme previsto no art. 59 da Lei de Responsabilidade Fiscal.</li>
                                    </ol>
                                    <p>
                                       O Sistema de Controle Interno funciona sob a coordenação de um órgão central de controle, instituído por lei, responsável por definir suas atribuições e responsabilidades no âmbito da administração pública municipal.
                                    </p>
                                    <p class="mb-0">
                                       <em>Fonte: Garrido, Elena; Santos, Marcus Vinícius Cunha dos. “O sistema de controle interno nos municípios”. Brasília: Confederação Nacional de Municípios (CNM), 2023.</em>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading10">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                     Ouvidoria
                     </button>
                  </h2>
                  <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Ouvidoria</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Lívia Guimarães Rodarte</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <div>
                                       <a href="mailto:controleinterno@cmperdoes.mg.gov.br">
                                       controleinterno@cmperdoes.mg.gov.br
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Ouvidoria
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p>
                                       Conforme a cartilha do Senado Federal <strong>“Ouvidoria: um direito do cidadão – Projeto Ouvidoria para Todos” (2018, pp. 14–15)</strong>, a Ouvidoria é um canal de comunicação entre o cidadão e o Poder Público, responsável por receber, analisar e responder manifestações da população.
                                    </p>
                                    <p>
                                       A Ouvidoria deve dar tratamento adequado às manifestações recebidas e responder aos pedidos de acesso à informação dentro do prazo estabelecido pela <strong>Lei nº 12.527/2011 (Lei de Acesso à Informação)</strong>, que prevê resposta em até 20 dias, prorrogáveis por mais 10 dias quando necessário.
                                    </p>
                                    <h6 class="mt-3">Quem pode procurar a Ouvidoria</h6>
                                    <p>
                                       Qualquer cidadão pode recorrer à Ouvidoria de forma democrática para registrar manifestações como:
                                    </p>
                                    <ul>
                                       <li>Denúncias</li>
                                       <li>Reclamações</li>
                                       <li>Solicitações</li>
                                       <li>Elogios</li>
                                       <li>Sugestões</li>
                                       <li>Pedidos de informação</li>
                                    </ul>
                                    <p>
                                       A identificação do cidadão não é obrigatória, porém facilita o retorno da resposta ao manifestante.
                                    </p>
                                    <h6 class="mt-3">Assuntos que podem ser tratados</h6>
                                    <ul class="mb-0">
                                       <li>Qualidade de atendimento dos agentes públicos municipais;</li>
                                       <li>Impostos e taxas municipais;</li>
                                       <li>Morosidade em processos administrativos;</li>
                                       <li>Fiscalização e gestão urbanística;</li>
                                       <li>Trânsito e transporte público local;</li>
                                       <li>Poda de árvores e limpeza de terrenos particulares;</li>
                                       <li>Falta de médicos ou medicamentos;</li>
                                       <li>Perturbação do sossego;</li>
                                       <li>Buracos em vias públicas;</li>
                                       <li>Direitos, deveres e obrigações de servidores e agentes políticos;</li>
                                       <li>Coleta e tratamento de lixo;</li>
                                       <li>Sugestões de projetos de lei.</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading11">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                     Secretário da Presidência
                     </button>
                  </h2>
                  <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="container-fluid p-0">
                           <div class="row g-3">
                              <!-- Público -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Público</small>
                                    <h6 class="mb-0">Secretário da Presidência</h6>
                                 </div>
                              </div>
                              <!-- Responsável -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Responsável pela unidade</small>
                                    <h6 class="mb-0">Pedro Henrique Silvério da Silva</h6>
                                 </div>
                              </div>
                              <!-- Email -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">E-mail da unidade</small>
                                    <div>
                                       <a href="mailto:contato@cmperdoes.mg.gov.br">
                                       contato@cmperdoes.mg.gov.br
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Horário -->
                              <div class="col-md-6">
                                 <div class="border rounded p-3 h-100">
                                    <small class="text-muted">Horário de funcionamento</small>
                                    <h6 class="mb-0">12h às 18h</h6>
                                 </div>
                              </div>
                              <!-- Descrição -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Descrição</small>
                                    <p class="mb-0">
                                       Secretário da Presidência
                                    </p>
                                 </div>
                              </div>
                              <!-- Competências -->
                              <div class="col-12">
                                 <div class="border rounded p-3">
                                    <small class="text-muted">Competências</small>
                                    <p>
                                       O cargo de <strong>Secretário da Presidência</strong> compreende atividades de assessoramento direto ao Presidente da Câmara Municipal, oferecendo suporte administrativo e parlamentar às atividades da Presidência.
                                    </p>
                                    <ol class="mb-0">
                                       <li>Assessorar a Presidência nos trabalhos parlamentares.</li>
                                       <li>Elaborar pesquisas, redigir e arquivar documentos de interesse da Presidência.</li>
                                       <li>Controlar audiências, visitas e reuniões das quais o Presidente deva participar ou tenha interesse.</li>
                                       <li>Acompanhar e informar ao Presidente sobre prazos e providências das proposições em tramitação na Câmara e em suas Comissões.</li>
                                       <li>Preparar resumos de matérias de interesse do Presidente publicadas nos principais órgãos da imprensa.</li>
                                       <li>Responsabilizar-se pela correspondência recebida e expedida pelo Presidente.</li>
                                       <li>Acompanhar e registrar reivindicações e encaminhamentos para subsidiar os trabalhos legislativos da Mesa da Presidência.</li>
                                       <li>Executar demais atividades correlatas.</li>
                                    </ol>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="list-expresidentes" role="tabpanel" aria-labelledby="list-settings-list">
            <?php
               include "components/historia.php";
               ?>                                
         </div>
      </div>
   </div>
</div>
<script>
   document.addEventListener("DOMContentLoaded", function () {
     const tabela = document.querySelector(".table-modalidades tbody");
     const linhas = Array.from(tabela.querySelectorAll("tr"));
   
     linhas.sort((a, b) => {
       const textoA = a.querySelector("td").textContent.trim().toLowerCase();
       const textoB = b.querySelector("td").textContent.trim().toLowerCase();
       return textoA.localeCompare(textoB);
     });
   
     // Remove linhas antigas e reinsere na ordem correta
     linhas.forEach(linha => tabela.appendChild(linha));
   });
</script>