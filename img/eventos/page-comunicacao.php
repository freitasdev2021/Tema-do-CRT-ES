<?php
/* Template Name: Missão, Visão e Valores */
get_header();
?>
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

    a{
        text-decoration:underline;
        color:black;
    }

    ul{
        list-style-type: lower-alpha;
    }
</style>
<div class="content p-2">
    <div class="row tabLists">
        <div class="col-4 tabList">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action <?=(viewAtual() == 'agendamentos') ? 'active' : ''; ?>" id="list-profile-list" data-bs-toggle="list" href="#painel" role="tab" aria-controls="list-profile" aria-selected="<?=(viewAtual() == 'agendamentos') ? 'true' : 'false'; ?>">Agendar Palestra e Reuniões</a>
            <a class="list-group-item list-group-item-action <?=(viewAtual() == 'tutoriais') ? 'active' : ''; ?>" id="list-profile-list" data-bs-toggle="list" href="#tutoriais" role="tab" aria-controls="list-profile" aria-selected="<?=(viewAtual() == 'tutoriais') ? 'true' : 'false'; ?>">Tutoriais</a>
            <a class="list-group-item list-group-item-action <?=(viewAtual() == 'anuidade') ? 'active' : ''; ?>" id="list-profile-list" data-bs-toggle="list" href="#anuidade" role="tab" aria-controls="list-profile" aria-selected="<?=(viewAtual() == 'tutoriais') ? 'true' : 'false'; ?>">Anuidade Zero</a>
            <a class="list-group-item list-group-item-action <?=(viewAtual() == 'galeria') ? 'active' : ''; ?>" id="list-profile-list" data-bs-toggle="list" href="#galeria" role="tab" aria-controls="list-profile" aria-selected="<?=(viewAtual() == 'galeria') ? 'true' : 'false'; ?>">Fotos e Vídeos</a>
            <a class="list-group-item list-group-item-action" href="<?=linque('parceiros')?>" target="_blank">Parcerias</a>
            <a class="list-group-item list-group-item-action" href="<?=linque('noticias')?>" target="_blank">Notícias</a>
            </div>
        </div>
        <div class="col-8 tabList">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade <?=(viewAtual() == 'agendamentos') ? 'active show' : ''; ?>" id="painel" role="tabpanel" aria-labelledby="list-home-list">
                <p class="titleInterno"><strong>Eventos, Palestras e Reuniões Institucionais</strong></p>
                <br>
                <div class="row cardi">
                    <h5>Assessoria Institucional CRT-ES</h5>
                    <p><strong>Michela Cruz</strong> - Assessora da Instituicional CRT-ES</p>
                    <p>Contato: (27) 99735-1669</p>
                    <p>E-mail: assessoria.institucional@crtes.gov.br</p>
                    <p><strong>Participe do nosso programa: </strong>CRT-ES NAS ESCOLAS </p>
                    <hr>
                    <h5>Assessoria de Comunicação CRT-ES</h5>

                </div>
            </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade <?=(viewAtual() == 'tutoriais') ? 'active show' : ''; ?>" id="tutoriais" role="tabpanel" aria-labelledby="list-home-list">
                <p class="titleInterno"><strong>Tutoriais</strong></p>
                <p>
                    Tutorais do CRT-ES, Clique para Acessar
                </p>
                <ul>
                    <li><a href="https://www.youtube.com/watch?v=FXhRfXtoNQY&t=1s&ab_channel=CRT-ES"><strong>Obtenção do Registro profissional</strong></a></li>
                    <li><a href=""><strong>Cadastro de Pessoa Física e Jurídica</strong></a></li>
                    <li><a href=""><strong>Principais Registros Disponiveis no Perfil do Profissional</strong></a></li>
                </ul>
            </div>
            </div>
            <!--ANUIDADE ZERO-->
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade <?=(viewAtual() == 'anuidade') ? 'active show' : ''; ?>" id="anuidade" role="tabpanel" aria-labelledby="list-home-list">
                <p class="titleInterno" align="center"><strong>Programa de Anuidade Zero</strong></p>
                <div class="row col-sm-12 cardAnuidade">
                    <div class="col-sm-6">
                        <img src="<?=url('img/anuidadezero.jpg')?>">
                    </div>
                    <div class="col-sm-6">
                        <p>
                            O CRT-ES lança em 2024 o Programa de Anuidade Zero através do aplicativo da ComproPay. O CRTES.Pay é uma nova ferramenta que trará descontos exclusivos e cashback para te ajudar a quitar sua anuidade!

                            Profissionais registrados e em dia com o CRT-ES podem aproveitar o sistema de cashback oferecido pela plataforma, que permite o reembolso de parte do valor gasto em compras realizadas em estabelecimentos comerciais parceiros. Esses valores são convertidos em pontos que podem ser usados para abater até 100% do valor da anuidade. Ao realizar compras por meio do app, o profissional acumula créditos automaticamente, ajudando a reduzir o custo da sua anuidade.

                            Para utilizar o serviço, basta baixar o aplicativo ComproPay no celular, cadastrar-se com seus dados pessoais e e clicar no CRTES.Pay, assim, você pode começar a acumular cashback nas compras feitas na plataforma. São mais de 20 mil estabelecimentos credenciados em todo o Espírito Santo, oferecendo uma ampla variedade de opções para o usuário.

                            Clique aqui para conferir o passo a passo de como instalar o aplicativo.

                            O CRTES.Pay está disponível tanto na <a href="https://apps.apple.com/br/app/compropay/id1514792302" target="_blank">App Store</a> quanto no <a href="https://play.google.com/store/apps/details?id=br.com.compropay.app" target="_blank">Google Play.</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
            <!--GALERIA DE FOTOS E Vídeos-->
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade <?=(viewAtual() == 'galeria') ? 'active show' : ''; ?>" id="galeria" role="tabpanel" aria-labelledby="list-home-list">
                <p class="titleInterno" id="titleEventos"><strong>Fotos e Vídeos</strong></p>
                <div class="row cardEventos" style="margin-left:0.3px;">
                    <div class="card">
                        <img src="<?php url('img/eventos/mecshow.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="crtlogocolor" align="center">Mec Show 2024</h3>
                            <p>> <a href="https://drive.google.com/drive/folders/1cSdZZEE-ZGstkMJXoXSRHBnN9HhMyn-u">Dia 1 - 06/08/2024</a></p>
                            <p>> <a href="https://drive.google.com/drive/folders/1ZCWxqaDOD3AL8YO8q5qvgtic8vU10eyK">Dia 2 - 07/08/2024</a></p>
                            <p>> <a href="https://drive.google.com/drive/folders/1gfzTLu5zop76AV6UWiMz_6cETHFWD9jy">Dia 3 - 08/08/2024</a></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php url('img/eventos/georreferenciamento.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="crtlogocolor" align="center">Seminário Georreferenciamento CRT-ES</h3>
                            <p><a href="https://drive.google.com/drive/folders/1JD3xJUvmu4IMRS1A-ZOsc_ZsBpefMCTg">Fotos</a></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--------------------------->
        </div>
    </div>
</div>
<?php get_footer(); ?>
