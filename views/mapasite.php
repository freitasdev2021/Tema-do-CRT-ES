<style>
    :root {
        --cor-primaria: #216191;
        --cor-primaria-escura: #1a4e75;
        --cor-primaria-clara: #e8f0f7;
        --cor-primaria-gradient: linear-gradient(135deg, #216191 0%, #1a4e75 100%);
        --cor-dourada: #EC8303;
        --sombra-suave: 0 4px 20px rgba(33, 97, 145, 0.12);
        --sombra-media: 0 8px 30px rgba(33, 97, 145, 0.18);
        --borda-arredondada: 14px;
        --transicao: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* ===== HERO / BANNER ===== */
    .pagina-hero {
        position: relative;
        background: var(--cor-primaria-gradient);
        padding: 50px 20px 80px;
        text-align: center;
        overflow: hidden;
    }
    .pagina-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at 30% 50%, rgba(255,255,255,0.06) 0%, transparent 60%);
        pointer-events: none;
    }
    .pagina-hero::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 50px;
        background: #f4f7fc;
        clip-path: ellipse(70% 100% at 50% 100%);
    }
    .pagina-hero h1 {
        color: #fff;
        font-size: 2.4rem;
        font-weight: 700;
        margin-bottom: 8px;
        position: relative;
        z-index: 1;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .pagina-hero p {
        color: rgba(255,255,255,0.85);
        font-size: 1.05rem;
        position: relative;
        z-index: 1;
        max-width: 600px;
        margin: 0 auto;
    }

    /* ===== WRAPPER ===== */
    .pagina-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 60px;
        margin-top: -30px;
        position: relative;
        z-index: 2;
    }

    /* ===== CARD ===== */
    .aba-card {
        background: #fff;
        border-radius: var(--borda-arredondada);
        padding: 35px 40px;
        box-shadow: var(--sombra-suave);
        transition: var(--transicao);
    }

    .aba-titulo {
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--cor-primaria);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .aba-titulo i {
        font-size: 1.5rem;
        background: var(--cor-primaria-clara);
        color: var(--cor-primaria);
        padding: 10px;
        border-radius: 10px;
    }
    .aba-card p {
        color: #444;
        line-height: 1.7;
        margin-bottom: 14px;
        font-size: 0.98rem;
    }

    /* ===== GRID DO MAPA ===== */
    .mapa-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .mapa-bloco {
        background: #fff;
        border-radius: var(--borda-arredondada);
        padding: 24px;
        box-shadow: 0 3px 12px rgba(0,0,0,0.07);
        transition: var(--transicao);
        border: 1px solid #f0f0f0;
    }
    .mapa-bloco:hover {
        transform: translateY(-5px);
        box-shadow: var(--sombra-media);
        border-color: var(--cor-primaria-clara);
    }
    .mapa-bloco .bloco-titulo {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
        padding-bottom: 14px;
        border-bottom: 2px solid var(--cor-primaria-clara);
    }
    .mapa-bloco .bloco-titulo .bloco-icone {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--cor-primaria-gradient);
        color: #fff;
        font-size: 1rem;
        flex-shrink: 0;
    }
    .mapa-bloco .bloco-titulo h3 {
        font-size: 1rem;
        font-weight: 700;
        color: var(--cor-primaria);
    }
    .mapa-bloco .bloco-titulo h3 a {
        color: var(--cor-primaria);
        text-decoration: none;
        transition: var(--transicao);
    }
    .mapa-bloco .bloco-titulo h3 a:hover {
        color: var(--cor-dourada);
    }
    .mapa-bloco ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .mapa-bloco ul li {
        margin-bottom: 6px;
    }
    .mapa-bloco ul li a {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 10px;
        border-radius: 6px;
        color: #555;
        text-decoration: none;
        font-size: 0.88rem;
        transition: var(--transicao);
    }
    .mapa-bloco ul li a:hover {
        background: var(--cor-primaria-clara);
        color: var(--cor-primaria);
        padding-left: 14px;
    }
    .mapa-bloco ul li a i {
        font-size: 0.7rem;
        color: var(--cor-dourada);
        flex-shrink: 0;
    }
    .mapa-bloco ul li a.externo i {
        color: #999;
        font-size: 0.65rem;
    }

    /* ===== RESPONSIVO ===== */
    @media (max-width: 768px) {
        .pagina-hero {
            padding: 35px 16px 60px;
        }
        .pagina-hero h1 { font-size: 1.6rem; }
        .pagina-hero p { font-size: 0.9rem; }

        .aba-card {
            padding: 20px 18px;
        }
        .aba-titulo {
            font-size: 1.2rem;
        }

        .mapa-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .mapa-bloco {
            padding: 18px 14px;
        }
        .mapa-bloco ul li a {
            font-size: 0.82rem;
            padding: 6px 8px;
        }
    }
</style>

<!-- ===== HERO ===== -->
<section class="pagina-hero">
    <h1><i class="fas fa-sitemap"></i> Mapa do Site</h1>
    <p>Navegue por todas as seções e serviços do CRT-ES</p>
</section>

<!-- ===== CONTEÚDO ===== -->
<div class="pagina-wrapper">

    <div class="aba-card">
        <h2 class="aba-titulo"><i class="fas fa-sitemap"></i> Mapa do Site</h2>

        <div class="mapa-grid">
            <!-- Início -->
            <div class="mapa-bloco">
                <div class="bloco-titulo">
                    <div class="bloco-icone"><i class="fas fa-home"></i></div>
                    <h3><a href="/">Início</a></h3>
                </div>
                <ul>
                    <li><a href="https://servicos.sinceti.net.br/" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Espaço do Técnico</a></li>
                    <li><a href="/fale"><i class="fas fa-chevron-right"></i> Fale com o CRT-ES</a></li>
                </ul>
            </div>

            <!-- Institucional -->
            <div class="mapa-bloco">
                <div class="bloco-titulo">
                    <div class="bloco-icone"><i class="fas fa-landmark"></i></div>
                    <h3><a href="/missao">Institucional</a></h3>
                </div>
                <ul>
                    <li><a href="/missao?aba=diretoria"><i class="fas fa-chevron-right"></i> Diretoria</a></li>
                    <li><a href="/missao?aba=conselheiros"><i class="fas fa-chevron-right"></i> Conselheiros</a></li>
                    <li><a href="/missao?aba=missao"><i class="fas fa-chevron-right"></i> Missão, Visão e Valores</a></li>
                    <li><a href="/missao?aba=historia"><i class="fas fa-chevron-right"></i> História</a></li>
                    <li><a href="/missao?aba=quemsao"><i class="fas fa-chevron-right"></i> Quem são os Técnicos Industriais?</a></li>
                </ul>
            </div>

            <!-- Fiscalização -->
            <div class="mapa-bloco">
                <div class="bloco-titulo">
                    <div class="bloco-icone"><i class="fas fa-search"></i></div>
                    <h3><a href="/fiscalizacao">Fiscalização</a></h3>
                </div>
                <ul>
                    <li><a href="/fiscalizacao?aba=fiscalizamos"><i class="fas fa-chevron-right"></i> O que fiscalizamos?</a></li>
                    <li><a href="https://www.cft.org.br/painelfiscalizacao/" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Painel da Fiscalização</a></li>
                    <li><a href="https://www.cft.org.br/plano-nacional-de-fiscalizacao-integrada/" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Plano Nacional de Fiscalização Integrada</a></li>
                    <li><a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarDenuncia" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Realizar Denúncia</a></li>
                    <li><a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarDenuncia" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Pesquisar Denúncia</a></li>
                    <li><a href="/fiscalizacao?aba=equipe"><i class="fas fa-chevron-right"></i> Equipe de Fiscalização</a></li>
                </ul>
            </div>

            <!-- Transparência -->
            <div class="mapa-bloco">
                <div class="bloco-titulo">
                    <div class="bloco-icone"><i class="fas fa-balance-scale"></i></div>
                    <h3>Transparência</h3>
                </div>
                <ul>
                    <li><a href="https://crt-es.implanta.net.br/portaltransparencia/#publico/inicio" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Portal da Transparência</a></li>
                    <li><a href="https://www.cft.org.br/ouvidoria/" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Ouvidoria</a></li>
                </ul>
            </div>

            <!-- Serviços Online -->
            <div class="mapa-bloco">
                <div class="bloco-titulo">
                    <div class="bloco-icone"><i class="fas fa-laptop"></i></div>
                    <h3>Serviços Online</h3>
                </div>
                <ul>
                    <li><a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarProfissional" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Solicitar Registro Profissional</a></li>
                    <li><a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarEmpresa" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Solicitar Registro de Empresa</a></li>
                    <li><a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarProfissionalEmpresa" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Pesquisar Profissional/Empresa</a></li>
                    <li><a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=ConsultarCertidaoSimples" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Validar Certidões</a></li>
                    <li><a href="https://corporativo.sinceti.net.br/app/view/sight/externo?form=ConsultarArt" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Validar TRT</a></li>
                    <li><a href="https://www.cft.org.br/certidao-acervo-tecnico/" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> CAT</a></li>
                    <li><a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarDenuncia" target="_blank" class="externo"><i class="fas fa-external-link-alt"></i> Baixar Certidões</a></li>
                </ul>
            </div>

            <!-- Perguntas Frequentes -->
            <div class="mapa-bloco">
                <div class="bloco-titulo">
                    <div class="bloco-icone"><i class="fas fa-question-circle"></i></div>
                    <h3><a href="/perguntas">Perguntas Frequentes</a></h3>
                </div>
            </div>

            <!-- Comunicação -->
            <div class="mapa-bloco">
                <div class="bloco-titulo">
                    <div class="bloco-icone"><i class="fas fa-comments"></i></div>
                    <h3><a href="/comunicacao">Comunicação</a></h3>
                </div>
                <ul>
                    <li><a href="/parceiros"><i class="fas fa-chevron-right"></i> Parcerias</a></li>
                    <li><a href="/comunicacao?aba=agendamentos"><i class="fas fa-chevron-right"></i> Agendar Palestra e Reuniões</a></li>
                    <li><a href="/comunicacao?aba=tutoriais"><i class="fas fa-chevron-right"></i> Tutoriais</a></li>
                    <li><a href="/comunicacao?aba=anuidade"><i class="fas fa-chevron-right"></i> Anuidade Zero</a></li>
                    <li><a href="/comunicacao?aba=galeria"><i class="fas fa-chevron-right"></i> Galeria</a></li>
                    <li><a href="/noticias"><i class="fas fa-chevron-right"></i> Notícias</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>