<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        max-width: 1100px;
        margin: 0 auto;
    }

    .titulo{
        text-align: center;
        margin-bottom: 40px;
    }

    .titulo h1{
        margin-top:10px;
        font-size: 36px;
        color: #0d3b66;
        margin-bottom: 10px;
    }

    .titulo p{
        color: #666;
        font-size: 16px;
    }

    .mapa-grid{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin:10px;
    }

    .card{
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transition: 0.3s;
    }

    .card:hover{
        transform: translateY(-5px);
    }

    .card h2{
        font-size: 22px;
        margin-bottom: 20px;
        color: #0d3b66;
        border-bottom: 2px solid #e9ecef;
        padding-bottom: 10px;
    }

    .card ul{
        list-style: none;
    }

    .card ul li{
        margin-bottom: 12px;
    }

    .card ul li a{
        text-decoration: none;
        color: #444;
        transition: 0.2s;
        display: inline-block;
    }

    .card ul li a:hover{
        color: #0077cc;
        transform: translateX(5px);
    }

    .card ul li::before{
        content: "•";
        color: #0077cc;
        margin-right: 8px;
        font-weight: bold;
    }

    @media(max-width: 768px){
        .titulo h1{
            font-size: 28px;
        }

        .card{
            padding: 20px;
        }
    }
</style>

<div class="container">

    <div class="titulo">
        <h1>Mapa do Site</h1>
        <p>Acesse rapidamente todas as áreas do portal</p>
    </div>

    <div class="mapa-grid">

        <div class="card">
            <h2>Câmara</h2>

            <ul>
                <li>
                    <a href="/Institucional">
                        Institucional
                    </a>
                </li>

                <li>
                    <a href="https://www.legislador.com.br//LegisladorWEB.ASP?WCI=Vereador&ID=67" target="_blank">
                        Parlamentares
                    </a>
                </li>

                <li>
                    <a href="#contato">
                        Localização
                    </a>
                </li>

                <li>
                    <a href="files/cartaServicos.pdf" downloads>
                        Carta de Serviços
                    </a>
                </li>
            </ul>
        </div>

        <div class="card">
            <h2>Transparência</h2>

            <ul>

                <li>
                    <a href="https://radardatransparencia.atricon.org.br/" target="_blank">
                        Radar da Transparência
                    </a>
                </li>

                <li>
                    <a href="https://ilai.memory.com.br/#/entidades/login/9CCNMU/2" target="_blank">
                        Portal de Transparência Câmara (novo)
                    </a>
                </li>

                <li>
                    <a href="http://www.escal.com.br/transparencia/frmCamara?CNPJ=25654344000145" target="_blank">
                        Portal de Transparência (Antigo)
                    </a>
                </li>

                <li>
                    <a href="https://ilai.memory.com.br/#/entidades/login/9CCNMT/1" target="_blank">
                        Portal de Transparência Prefeitura
                    </a>
                </li>

                <li>
                    <a href="/e-sic" target="_blank">
                        Acesso à Informação - Esic
                    </a>
                </li>

                <li>
                    <a href="https://sapl.perdoes.mg.leg.br/docadm/pesq-doc-adm" target="_blank">
                        Relatórios de Controle Interno
                    </a>
                </li>

                <li>
                    <a href="https://www.perdoes.mg.leg.br/organograma" target="_blank">
                        Estrutura Organizacional
                    </a>
                </li>

                <li>
                    <a href="http://www.transparencia.mg.gov.br/" target="_blank">
                        Transparência MG
                    </a>
                </li>

                <li>
                    <a href="https://ilai.memory.com.br/#/public/home/prestacaocontas" target="_blank">
                        Prestação de Contas
                    </a>
                </li>

            </ul>
        </div>

    </div>

    <div class="links-unicos">

        <div class="card">

            <h2>Links Rápidos</h2>

            <ul>

                <li>
                    <a href="<?=$Ouvidoria;?>">
                        Ouvidoria
                    </a>
                </li>

                <li>
                    <a href="https://www.youtube.com/channel/UCzkvzY-VZS4yM3XpIzuqmMw" target="_blank">
                        TV Câmara
                    </a>
                </li>

                <li>
                    <a href="/perguntas-frequentes">
                        Perguntas Frequentes
                    </a>
                </li>

                <li>
                    <a href="https://leismunicipais.com.br/camara/mg/perdoes" target="_blank">
                        Leis Municipais
                    </a>
                </li>

            </ul>

        </div>

    </div>

</div>