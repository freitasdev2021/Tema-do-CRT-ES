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
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action <?=(viewAtual() == 'historia') ? 'active' : ''; ?>" id="list-home-list" data-bs-toggle="list" href="#historia" role="tab" aria-controls="list-home">História</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#diretoria" role="tab" aria-controls="list-profile">Diretoria (2022/2026)</a>
            <a class="list-group-item list-group-item-action <?=(viewAtual() == 'quemsao') ? 'active' : ''; ?>" id="list-messages-list" data-bs-toggle="list" href="#quemsao" role="tab" aria-controls="list-messages">Quem são os Técnicos Industriais?</a>
            <a class="list-group-item list-group-item-action <?=(viewAtual() == 'missao') ? 'active' : ''; ?>" id="list-settings-list" data-bs-toggle="list" href="#missao" role="tab" aria-controls="list-settings">Missão, visão e valores</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="historia" role="tabpanel" aria-labelledby="list-home-list">
                <h1>História</h1>
                <br>
                <h2 style="color:#EC8303">
                    CFT – Conselho Federal dos Técnicos Industriais: uma luta de mais de quatro décadas
                </h2>
                <p>
                    Há mais de quatro décadas que um grupo de técnicos iniciou um trabalho pela regulamentação profissional da categoria – Lei nº 5.524/1968 e Decreto nº 90.922/1985, e a criação do conselho próprio. Em 26 de março de 2018, a sanção presidencial da Lei nº 13.639/2018 representa não somente mais uma conquista histórica, mas principalmente a concretização de um ciclo político e o início de uma nova época, com mais segurança à sociedade e valorização profissional para milhões de técnicos, devidamente reconhecidos como profissionais imprescindíveis para o desenvolvimento do país.
                </p>
                <p>
                    <strong>Acompanhe os principais fatos, de 1968 a 2018, que marcaram a criação do CFT – Conselho Federal dos Técnicos Industriais:</strong>
                </p>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1968
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Historicamente os técnicos sempre foram subjugados e achincalhados por determinadas categorias ditas superiores, sendo até chamados pejorativamente de "denorex" – num infeliz trocadilho com aquele famoso bordão publicitário – e insinuando que eles pareciam engenheiros, mas não passavam de meros auxiliares. Revoltados e indignados com o tratamento proveniente do Sistema CONFEA/CREA, no final da década de 1960 um grupo apoiado pelas escolas técnicas deu início ao movimento pela regulamentação profissional e criação do conselho próprio; na verdade, disseminando uma ideia para beneficiar as gerações futuras, os milhares de jovens formados nas mais diversas modalidades, devidamente preparados e habilitados para exercer a profissão com dignidade e respeito.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            1979
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                A discriminação dos técnicos continuava, mas a cada dia o movimento ganhava mais força. Liderados por Wilson Wanderlei Vieira, em 18 de agosto de 1979 os técnicos paulistas realizaram a assembleia de fundação da ATESP – Associação Profissional dos Técnicos Industriais do Estado de São Paulo na Escola Técnica Getúlio Vargas, uma das mais importantes instituições de ensino técnico do estado e do país. Entre os objetivos traçados pela associação pré-sindical estavam a regulamentação profissional, a transformação das associações em sindicatos e a representatividade no Sistema CONFEA/CREA; ou seja, reacendendo aquela chama ideológica da década anterior para que um dia a categoria tivesse um conselho independente para a fiscalização de suas atividades profissionais.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            1980 a 1982
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                            Em janeiro de 1980 a ATESP realizou o 1º Encontro Nacional dos Técnicos Industriais em São Paulo, com o objetivo de discutir e elaborar o anteprojeto de regulamentação da Lei nº 5.524/1968, bem como a criação do conselho próprio. De forma unânime as entidades participantes apoiaram a iniciativa: APROTICE – Associação Profissional dos Técnicos do Estado do Ceará; ATIMIG – Associação dos Técnicos Industriais de Minas Gerais; ACTINIME – Associação Civil de Técnicos Industriais de Nível Médio, do Espírito Santo; ATIBA – Associação dos Técnicos Industriais da Bahia; e ATAGO – Associação dos Técnicos Agrícolas do Estado de Goiás.

                            Discutida e aprovada a minuta da regulamentação profissional foi entregue ao presidente da República João Baptista de Oliveira Figueiredo numa audiência realizada em 17 de abril de 1980, agendada pelo senador Jarbas Passarinho. Também foi abordada a criação do conselho próprio; e na ocasião, o companheiro Sérgio Luiz Chautard trouxe mais uma entidade para fortalecer o movimento: a APTO – Associação Paranaense de Técnicos.

                            Um novo e marcante evento e com grande destaque da imprensa aconteceu em março de 1982, quando mais de 2 mil técnicos reuniram-se na Câmara Municipal de São Bernardo do Campo (SP) durante o 1º Congresso dos Técnicos, também realizado pela ATESP com o propósito de angariar apoio para a luta pela regulamentação profissional; caminhava, paralelamente, a firme intenção de criação do conselho próprio.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            1985 a 1988
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Após uma audiência e a promessa de apoio do ministro da Educação e Cultura, Rubem Carlos Ludwig, na qual participaram Wilson Wanderlei Vieira, pela ATESP; Sérgio Luiz Chautard, pela APTO; Aldo Martins, pela ATERGS – Associação Profissional dos Técnicos Industriais do Rio Grande do Sul; e José Luiz Fortunato Vigil, pela ATESC – Associação dos Técnicos Industriais de Santa Catarina, finalmente no dia 6 de fevereiro o presidente João Baptista de Oliveira Figueiredo assinou o Decreto nº 90.922/1985 regulamentando a Lei nº 5.524/1968.

                                Imediatamente o Sistema CONFEA/CREA entrou com medida cautelar no STF – Supremo Tribunal Federal arguindo a inconstitucionalidade do decreto, que foi negada por nove votos a dois – e por nove votos a um, o julgamento do mérito. Há de se reconhecer o trabalho do diretor Marcos Antonio Borges, que conseguiu ligar diretamente para o ministro do STF, Sydney Sanches, para expor a situação e sensibilizá-lo em favor dos técnicos.

                                Por ocasião do 17º aniversário da Lei nº 5.524/1968, os técnicos realizaram uma assembleia na Praça da Sé em São Paulo protestando contra o Sistema CONFEA/CREA pelo não cumprimento da regulamentação profissional, com direito a faixas e bonecos gigantes – de forma pacífica e bem-humorada.

                                Em 1988 foi realizado o 1º Encontro Regional dos Técnicos em Joinville (SC), contando com presidentes de vários sindicatos amparados legalmente pelo enquadramento sindical, como o SINTEC-SP – Sindicato dos Técnicos Industriais do Estado de São Paulo; SINTEC-SC – Sindicato dos Técnicos Industriais de Santa Catarina; SINTEC-RS – Sindicato dos Técnicos Industriais do Rio Grande do Sul; SINTEC-PR – Sindicato dos Técnicos Industriais do Estado do Paraná; além da ATIJ – Associação dos Técnicos Industriais de Joinville, presidida por Ademir da Cunha. Em discussão o cumprimento da regulamentação profissional e, novamente, a criação do conselho próprio.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            1997 a 1999
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                            A conjectura para a criação do conselho próprio ganhou força com a publicação da Medida Provisória nº 1549/1997 e da Lei nº 9.649/1998 que, em seu artigo 58, modifica a estrutura dos conselhos transformando-os em entidades públicas de direito privado.

                            Em 5 de outubro de 1999 o PLS nº 493, do senador Ernandes Amorim (PPB-RO), cuja emenda autorizava a criação do conselho, foi aprovado em tempo recorde no Senado Federal – cerca de 30 dias – e seguiu para a Câmara dos Deputados. Ainda em 1999, a representatividade dos técnicos no Sistema CONFEA/CREA foi amplamente debatida no I Congresso Nacional dos Técnicos Industriais, antecedendo o III Congresso Nacional de Profissionais, realizados no mês de maio em Natal (RN). Na ocasião, o presidente do CONFEA – Conselho Federal de Engenharia, Arquitetura e Agronomia, Henrique Ludovice, apoiou a criação de seis vagas para conselheiros técnicos – três industriais, dois agrícolas e um representante das escolas técnicas. Então, o engenheiro Enildo Baptista Barros entrou com ação popular contra o sistema sob a alegação de que a representação dos técnicos e demais profissionais não estava prevista na Lei nº 5.194/1966, com a clara intenção de acabar com a representatividade dos técnicos – que, na verdade, aconteceu.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                            2001
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                            Em 2001 a FENTEC – Federação Nacional dos Técnicos Industriais, que liderava o movimento, deliberou por entrar com ação com base no artigo10 da Constituição de 1988, o qual "assegura a participação dos trabalhadores e empregadores nos colegiados dos órgãos públicos em que seus interesses profissionais ou previdenciários sejam objeto de discussão e deliberação". Após o processo tramitar por quase 13 anos, em 8 de março de 2013 o TRF-DF 1ª Região – Tribunal Regional Federal do Distrito Federal indeferiu a ação.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                            2007
                        </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                            Na solenidade de posse da diretoria da FENTEC realizada no Memorial da América Latina em junho de 2007, com a presença de inúmeras autoridades nacionais e internacionais, o movimento dos técnicos ganhou mais um aliado que se tornaria essencial na conjectura para a criação do conselho, tanto que ele conquistou o carinhoso apelido de "padrinho" dos técnicos: o então deputado estadual Giovani Cherini que, à época, destacava-se como titular de importantes comissões e frentes parlamentares da ALRS – Assembleia Legislativa do Rio Grande do Sul. Por intermédio dele foi possível agendar uma audiência com o ministro do Trabalho e Emprego, Carlos Lupi, que se mostrou disposto a analisar e discutir o assunto.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                            2013
                        </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Em outubro de 2013 uma comitiva organizada pela FENTEC esteve em Brasília participando de uma audiência com os senadores Fernando Collor de Mello (PTB-AL) e Osvaldo Sobrinho (PTB-MT), autor e relator do PLS nº 356/2013, que pretendia alterar a Lei nº 8.195/1991 e, consequentemente, a Lei nº 5.194/1966, de maneira a democratizar e garantir a proporcionalidade dos técnicos no Sistema CONFEA/CREA. O Senado Federal aprovou o projeto por unanimidade, encaminhando-o para a Câmara dos Deputados.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                            2014
                        </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Mais um passo significativo para a criação do conselho próprio aconteceu em janeiro de 2014, quando o ministro do Trabalho e Emprego, Manoel Dias, assinou a Portaria nº 59 constituindo uma comissão para o estudo do desmembramento definitivo dos técnicos do Sistema CONFEA/CREA. A referida portaria foi assinada pelo ministro numa reunião realizada na SRTE/SC – Superintendência Regional do Trabalho e Emprego de Santa Catarina, com diversos líderes de entidades técnicas. A comissão realizou reuniões em várias capitais brasileiras, conhecendo as reivindicações dos técnicos e reunindo subsídios para elaborar um relatório e apresentá-lo ao ministro. Com a conclusão do trabalho a minuta do anteprojeto de lei foi encaminhada ao ministro-chefe da Casa Civil, Aloisio Mercadante.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                            2015
                        </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                A mobilização se intensificou de vez a partir de março de 2015, quando a FENTEC, a ATABRASIL e a OITEC promoveram uma intensa campanha de caráter social e parlamentar com suas plataformas e ferramentas de comunicação – boletins informativos, site, redes sociais, etc –, elencando os motivos que justificavam a criação do conselho dos técnicos. Em defesa da criação do conselho, manifestaram publicamente nos boletins os deputados federais Paulão (PT-AL), Padre João (PT-MG) e Vicentinho (PT-SP). Mais parlamentares se mostraram favoráveis à causa, como Alceu Moreira (PMDB-RS), André Moura (PSC-SE), Esperidião Amin (PP-SC), Marco Maia (PT-RS), Roberto de Lucena (PV-SP), Valmir Prascidelli (PT-SP), Vanderlei Macris (PSDB-SP), entre outros.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseThree">
                            2016
                        </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                No dia 4 de maio de 2016 o governo federal encaminhou o PL nº 5179/2016 para a apreciação da Câmara dos Deputados, com o apoio do ministro do Trabalho e Previdência Social, Miguel Rossetto. Em seguida a importância da proposta foi ratificada pelo ministro Ronaldo Nogueira, por meio de Nota Técnica do MTE – Ministério do Trabalho e Emprego. Em 30 de novembro o projeto foi aprovado por unanimidade na CTASP – Comissão de Trabalho, de Administração e Serviço Público, com relatório favorável da deputada federal Flávia Morais (PDT-GO).
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoelf" aria-expanded="false" aria-controls="collapseThree">
                            2017
                        </button>
                        </h2>
                        <div id="collapseTwoelf" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Em 17 de maio de 2017 o projeto foi aprovado, novamente por unanimidade, na CFT – Comissão de Finanças e Tributação, com relatório favorável do deputado federal Mauro Pereira (PMDB-RS).

                                Em 24 de agosto, numa verdadeira comprovação de força e união da categoria, os técnicos praticamente tomaram todos os assentos destinados aos visitantes durante a audiência pública extraordinária requisitada pelo deputado federal Esperidião Amin (PP-SC) para debate do PL nº 5179/2016, marcada por discursos das principais lideranças do movimento.

                                Em 20 de setembro o projeto também foi aprovado por unanimidade na CCJC – Comissão de Constituição e Justiça e de Cidadania, a principal comissão da Câmara dos Deputados, com relatório do deputado federal Giovani Cherini (PR-RS).

                                Após a tramitação na Câmara dos Deputados e a elaboração da Redação Final pelo deputado federal Capitão Augusto (PR-SP), o PL nº 5179/2016 foi encaminhado à SF-SEADI – Secretaria de Atas e Diários do Senado Federal e lida em plenário. Em seguida, foi aberta uma consulta pública para conhecer a opinião da população sobre o PLC nº 145/2017, número pelo qual o projeto passou a tramitar na nova casa.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTreze" aria-expanded="false" aria-controls="collapseThree">
                            2018
                        </button>
                        </h2>
                        <div id="collapseTreze" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                            Em 27 de fevereiro de 2018 o PLC nº 145/2017 foi aprovado na CRA – Comissão de Agricultura e Reforma Agrária, com parecer favorável do senador Lasier Martins (PSD-RS) sob a justificativa de que a constituição do conselho concretiza uma reivindicação histórica dos técnicos e não acarreta em nenhum impacto fiscal aos cofres públicos. Graças ao apoio e à mobilização da senadora Rose de Freitas (PODE-ES), no dia seguinte o projeto entrou em pauta para votação no plenário do Senado Federal, sendo aprovado e encaminhado à sanção presidencial.

                            No dia 6 março a SF-SEXPE – Secretaria de Expediente do Senado Federal remeteu um ofício ao ministro-chefe da Casa Civil, Eliseu Padilha, encaminhando a Mensagem nº 12/2018 ao presidente da República.

                            Para colocar um fim à expectativa dos técnicos, no dia 26 de março o presidente Michel Temer sancionou a Lei nº 13.639/2018 criando o Conselho Federal e Regionais dos Técnicos Industriais. No dia seguinte, a lei foi publicada no DOU – Diário Oficial da União [Edição 59 – Seção 1 – Página 1].

                            No dia 22 de junho foi eleita a primeira diretoria executiva e os conselheiros do CFT – Conselho Federal dos Técnicos Industriais, na sede da CNPL – Confederação Nacional das Profissões Liberais, entidade designada para coordenar, em articulação com as federações, sindicatos e associações técnicas, o processo eleitoral conforme disposto no artigo 34 da Lei nº 13.639/2018.
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="diretoria" role="tabpanel" aria-labelledby="list-profile-list">
                <h1>Diretoria (2022/2026)</h1>
                <div class="row cardi" style="margin-left:3px;">
                    <div class="card" style="width: 18rem; padding:0px;">
                        <img src="<?php url('img/diretores/elianderson.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="crtlogocolor">Elianderson Bernardes França</h3>
                            <p>Técnico em Telecomunicações</p>
                            <p><strong>VICE-PRESIDENTE</strong></p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; padding:0px;">
                        <img src="<?php url('img/diretores/hector.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="crtlogocolor">Hector Campos Scarpati</h3>
                            <p>Técnico em Mecânica</p>
                            <p><strong>DIRETOR FINANCEIRO</strong></p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; padding:0px;">
                        <img src="<?php url('img/diretores/jefferson.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="crtlogocolor">Jefferson Luiz Cariati da Silva</h3>
                            <p>Técnico em Eletrotécnica</p>
                            <p><strong>DIRETOR DE FISCALIZAÇÃO E NORMAS</strong></p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; padding:0px;">
                        <img src="<?php url('img/diretores/elianderson.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="crtlogocolor">Elianderson Bernardes França</h3>
                            <p>Técnico em Telecomunicações</p>
                            <p><strong>VICE-PRESIDENTE</strong></p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; padding:0px;">
                        <img src="<?php url('img/diretores/marciel.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="crtlogocolor">Marciel Correia de Aquino</h3>
                            <p>Técnico em Eletrotécnica</p>
                            <p><strong>DIRETOR ADMINISTRATIVO</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="quemsao" role="tabpanel" aria-labelledby="list-messages-list">
                <h1>Quem são os Técnicos Industriais?</h1>
                <div style="margin-left:5px;">
                    <p>
                        Técnicos Industriais são profissionais liberais com profissão regulamentada pela Lei nº 5.524/1968 e Decreto nº 90.922/1985, devidamente habilitados para o desempenho de suas atribuições, como empregados do setor público e privado, empregadores autônomos ou prestadores de serviços.
                    </p>
                    <p>
                        Formados em cursos regulares que objetivam capacitá-los com conhecimentos teóricos e práticos em suas devidas áreas de atuação, os Técnicos Industriais contam com uma grande quantidade de modalidades voltadas para o setor técnico e tecnológico de acordo com suas preferências profissionais, que oferecem excelentes oportunidades de inserção imediata no mercado de trabalho.
                    </p>
                    <p>
                        O Sistema CFT/CRTs possui 176 modalidades técnicas industriais. Ao longo dos 6 anos de existência do CFT, 65 modalidades técnicas já estão respaldadas com resoluções , número este que está em constante atualização. As resoluções determinam o que cada modalidade pode fazer na área de atuação.
                    </p>
                    <p>
                        Se sua modalidade ainda não possui resolução, consulte o <a href="<?php url('files/DECRETO-90922-1985.pdf')?>" target="_blank">Decreto 90.922/1985</a>
                    </p>
                </div>
            </div>
            <div class="tab-pane fade" id="missao" role="tabpanel" aria-labelledby="list-settings-list">
                <h1>Missão, visão e valores</h1>
                <br>
                <div style="margin-left:5px;">
                    <h3 class="crtlogocolor">Missão:</h3>
                    <p>
                        Zelar pela sociedade através da orientação e fiscalização garantindo o exercício e valorização profissional, pautado no compromisso com a qualidade, a ética e a segurança e desenvolvimento nacional.
                    </p>
                </div>
                <div style="margin-left:5px;">
                    <h3 class="crtlogocolor">Visão:</h3>
                    <p>
                        Ser reconhecido pela sociedade como referência de Conselho Profissional através da excelência dos serviços prestados.
                    </p>
                </div>
                <div style="margin-left:5px;">
                    <h3 class="crtlogocolor">Valores:</h3>
                    <ul>
                        <li>União</li>
                        <li>Responsabilidade social</li>
                        <li>Valorização da profissão</li>
                        <li>Ética e transparência</li>
                        <li>Excelência nos serviços prestados</li>
                        <li>Inovação</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
