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

    /* ===== ABAS (TABS) ===== */
    .abas-navegacao {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        background: #fff;
        border-radius: var(--borda-arredondada);
        padding: 10px;
        box-shadow: var(--sombra-suave);
        margin-bottom: 30px;
        justify-content: center;
    }

    .abas-navegacao .aba-link {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 20px;
        border-radius: 10px;
        font-size: 0.9rem;
        font-weight: 500;
        color: #555;
        text-decoration: none !important;
        transition: var(--transicao);
        cursor: pointer;
        border: none;
        background: transparent;
    }
    .abas-navegacao .aba-link i {
        font-size: 1rem;
        color: #999;
        transition: var(--transicao);
    }
    .abas-navegacao .aba-link:hover {
        background: var(--cor-primaria-clara);
        color: var(--cor-primaria);
    }
    .abas-navegacao .aba-link:hover i {
        color: var(--cor-primaria);
    }
    .abas-navegacao .aba-link.ativo {
        background: var(--cor-primaria-gradient);
        color: #fff;
        box-shadow: 0 4px 12px rgba(33, 97, 145, 0.35);
    }
    .abas-navegacao .aba-link.ativo i {
        color: #fff;
    }

    /* ===== CONTEÚDO DAS ABAS ===== */
    .aba-conteudo {
        display: none;
        animation: fadeIn 0.5s ease;
    }
    .aba-conteudo.ativo {
        display: block;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(12px); }
        to { opacity: 1; transform: translateY(0); }
    }

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

    /* ===== CARDS DE VÍDEO / EVENTOS ===== */
    .grade-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        margin-top: 15px;
    }

    .cartao-midia {
        background: #fff;
        border-radius: var(--borda-arredondada);
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0,0,0,0.07);
        transition: var(--transicao);
        border: 1px solid #f0f0f0;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .cartao-midia:hover {
        transform: translateY(-5px);
        box-shadow: var(--sombra-media);
    }
    .cartao-midia iframe,
    .cartao-midia img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
        border: none;
    }
    .cartao-midia .cartao-corpo {
        padding: 16px 18px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .cartao-midia .cartao-corpo h3 {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--cor-primaria);
        margin-bottom: 8px;
        line-height: 1.4;
        text-align: center;
    }
    .cartao-midia .cartao-corpo p {
        font-size: 0.85rem;
        color: #666;
        margin-bottom: 4px;
    }
    .cartao-midia .cartao-corpo a {
        color: var(--cor-primaria);
        font-weight: 600;
        text-decoration: none;
        transition: var(--transicao);
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: auto;
        padding-top: 10px;
    }
    .cartao-midia .cartao-corpo a:hover {
        color: var(--cor-dourada);
        gap: 10px;
    }
    .cartao-midia .cartao-corpo a i {
        font-size: 0.8rem;
    }

    /* ===== SEÇÃO ANUIDADE ZERO ===== */
    .grade-anuidade {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        align-items: start;
    }

    .anuidade-imagem img {
        width: 100%;
        height: auto;
        border-radius: var(--borda-arredondada);
        box-shadow: var(--sombra-suave);
        display: block;
    }

    .anuidade-texto p {
        color: #444;
        line-height: 1.7;
        margin-bottom: 14px;
        font-size: 0.98rem;
    }
    .anuidade-texto a {
        color: var(--cor-primaria);
        font-weight: 600;
        text-decoration: underline;
    }
    .anuidade-texto a:hover {
        color: var(--cor-dourada);
    }
    .anuidade-texto strong {
        color: var(--cor-primaria);
    }

    .info-contato-box {
        background: var(--cor-primaria-clara);
        border-radius: 10px;
        padding: 16px 20px;
        margin-top: 10px;
        border-left: 4px solid var(--cor-primaria);
    }
    .info-contato-box p {
        margin-bottom: 4px !important;
        font-size: 0.95rem !important;
    }

    /* ===== APP BADGES ===== */
    .app-badges {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 10px;
    }
    .app-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #000;
        color: #fff;
        padding: 10px 18px;
        border-radius: 10px;
        text-decoration: none !important;
        font-size: 0.85rem;
        font-weight: 500;
        transition: var(--transicao);
    }
    .app-badge:hover {
        transform: scale(1.03);
        opacity: 0.9;
        color: #fff !important;
    }
    .app-badge i {
        font-size: 1.4rem;
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
        .abas-navegacao .aba-link {
            font-size: 0.78rem;
            padding: 10px 12px;
        }
        .abas-navegacao .aba-link i {
            font-size: 0.85rem;
        }
        .aba-titulo {
            font-size: 1.2rem;
        }

        .grade-anuidade {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .grade-cards {
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 14px;
        }
    }

    @media (max-width: 480px) {
        .abas-navegacao {
            flex-direction: column;
            gap: 4px;
        }
        .abas-navegacao .aba-link {
            justify-content: center;
        }

        .grade-cards {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- ===== HERO ===== -->
<section class="pagina-hero">
    <h1><i class="fas fa-comments"></i> Comunicação</h1>
    <p>Fique por dentro das notícias, tutoriais, podcasts e programas do CRT-ES</p>
</section>

<!-- ===== CONTEÚDO ===== -->
<div class="pagina-wrapper">

    <!-- Abas -->
    <nav class="abas-navegacao" role="tablist">
        <button class="aba-link" data-aba="galeria" role="tab">
            <i class="fas fa-images"></i> Galeria
        </button>
        <button class="aba-link" data-aba="tutoriais" role="tab">
            <i class="fas fa-video"></i> Tutoriais e Documentos
        </button>
        <button class="aba-link" data-aba="anuidade" role="tab">
            <i class="fas fa-hand-holding-usd"></i> Anuidade Zero
        </button>
        <a class="aba-link" href="/parceiros" role="tab">
            <i class="fas fa-handshake"></i> Parcerias
        </a>
        <button class="aba-link" data-aba="painel" role="tab">
            <i class="fas fa-calendar-check"></i> Agendar Palestra
        </button>
        <button class="aba-link" data-aba="podcasts" role="tab">
            <i class="fas fa-microphone"></i> Podcasts
        </button>
    </nav>

    <!-- ===== ABA: AGENDAMENTOS ===== -->
    <div class="aba-conteudo" id="aba-painel">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-calendar-check"></i> Eventos, Palestras e Reuniões Institucionais</h2>
            <p><strong>Assessoria Institucional CRT-ES</strong></p>
            <p><strong>Michela Cruz</strong> - Assessora</p>
            <p>Contato: (27) 99735-1669</p>
            <p>E-mail: <a href="mailto:assessoria.institucional@crtes.gov.br">assessoria.institucional@crtes.gov.br</a></p>
            <p style="margin-top:16px;">
                <strong>Participe do nosso programa: </strong>
                <a href="https://forms.gle/jwUYVbfq9LG1xLJx9" target="_blank" style="font-weight:600;">
                    <i class="fas fa-external-link-alt"></i> CRT-ES NAS ESCOLAS - Clique Aqui
                </a>
            </p>
        </div>
    </div>

    <!-- ===== ABA: TUTORIAIS ===== -->
    <div class="aba-conteudo" id="aba-tutoriais">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-video"></i> Tutoriais</h2>

            <div class="grade-cards">
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/FXhRfXtoNQY?si=5QA4CLr-SvQEJoCf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Obtenção do Registro profissional</h3>
                        <a href="https://www.youtube.com/watch?v=FXhRfXtoNQY&t=1s&ab_channel=CRT-ES" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/VevH_AdxJzI?si=sTHH0lqkJCxRD7pW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Como ser Responsável Técnico de uma empresa?</h3>
                        <a href="https://www.youtube.com/watch?v=VevH_AdxJzI" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/iYgcMK6Mwr0?si=FMDF9jm0_CsdevCI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Como preencher um TRT de Obra e Serviço?</h3>
                        <a href="https://www.youtube.com/watch?v=iYgcMK6Mwr0" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/UFwERB6LIyA?si=r1PLGuzE0OVp3XhJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Como emitir o TRT Extemporâneo | Descomplica Sinceti</h3>
                        <a href="https://www.youtube.com/watch?v=UFwERB6LIyA" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/VALmAblhKkk?si=_BssDLXJGAyLDgnE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Como emitir o Boleto da Anuidade</h3>
                        <a href="https://www.youtube.com/watch?v=VALmAblhKkk" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
            </div>

            <hr style="margin: 30px 0; border-color: #eee;">

            <h2 class="aba-titulo"><i class="fas fa-file-download"></i> Modelos de documentos</h2>
            <div class="grade-cards">
                <div class="cartao-midia">
                    <img src="/img/doc.png" alt="Modelo de Atestado"/>
                    <div class="cartao-corpo">
                        <h3>Modelo de Atestado de Capacidade Técnica - CRT-ES</h3>
                        <a href="/files/atestados/modelo1.docx" download><i class="fas fa-download"></i> Clique para Baixar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== ABA: ANUIDADE ZERO ===== -->
    <div class="aba-conteudo" id="aba-anuidade">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-hand-holding-usd"></i> Programa de Anuidade Zero</h2>
            <div class="grade-anuidade">
                <div class="anuidade-imagem">
                    <img src="/img/anuidadezero.jpg" alt="Programa Anuidade Zero">
                </div>
                <div class="anuidade-texto">
                    <p>O CRT-ES lançou em 2024 o <strong>Programa de Anuidade Zero</strong> através do aplicativo da ComproPay. O <strong>CRT.Pay</strong> é uma nova ferramenta que trará descontos exclusivos e cashback para te ajudar a quitar sua anuidade!</p>
                    
                    <p>Profissionais registrados no CRT-ES podem aproveitar o sistema de cashback oferecido pela plataforma, que permite o reembolso de parte do valor gasto em compras realizadas em estabelecimentos comerciais parceiros. Ao realizar compras por meio do app, o profissional acumula créditos automaticamente, ajudando a reduzir o custo da sua anuidade.</p>
                    
                    <p>Para utilizar o serviço, basta baixar o aplicativo <strong>ComproPay</strong> no celular, cadastrar-se com seus dados pessoais e clicar no <strong>CRT.Pay</strong>. Assim, você pode começar a acumular cashback nas compras feitas na plataforma. São mais de <strong>20 mil estabelecimentos</strong> credenciados em todo o Espírito Santo.</p>
                    
                    <p><a href="/files/tutoriais/crtespay.pdf" target="_blank"><i class="fas fa-file-pdf"></i> Clique aqui para conferir o passo a passo de como instalar o aplicativo.</a></p>
                    
                    <div class="app-badges">
                        <a href="https://apps.apple.com/br/app/compropay/id1514792302" target="_blank" class="app-badge">
                            <i class="fab fa-apple"></i> App Store
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=br.com.compropay.app" target="_blank" class="app-badge">
                            <i class="fab fa-google-play"></i> Google Play
                        </a>
                    </div>

                    <div class="info-contato-box">
                        <p><strong><i class="fas fa-headset"></i> Equipe de suporte do ComproPay:</strong></p>
                        <p><i class="fab fa-whatsapp"></i> Whatsapp: 27 99627-5325</p>
                        <p><i class="fas fa-phone"></i> Telefone: 27 2122-0231</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== ABA: PODCASTS ===== -->
    <div class="aba-conteudo" id="aba-podcasts">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-microphone"></i> Podcasts</h2>
            <div class="grade-cards">
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/IsU8d_v03RI?si=dUUC_zx7FIB1mkd2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Mundo Offshore</h3>
                        <a href="https://www.youtube.com/watch?v=IsU8d_v03RI" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/jP0crjg7pic?si=txfDzHfbovUeH6WG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>EDHEC Plus</h3>
                        <a href="https://www.youtube.com/watch?v=jP0crjg7pic&list=PLd9mDElmgBmzULX3TEOeoJ7e-PvDmuigX&index=2" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/xViDB0nvP-w?si=AujjLMZ-_yajktuO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Se liga, Mulher (Folha Vitória)</h3>
                        <a href="https://www.youtube.com/watch?v=xViDB0nvP-w&list=PLd9mDElmgBmzULX3TEOeoJ7e-PvDmuigX&index=3" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/N2L-aQiNmew?si=RwRTES8gxlKmeO1F" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>EDHEC Plus</h3>
                        <a href="https://www.youtube.com/watch?v=N2L-aQiNmew&list=PLd9mDElmgBmzULX3TEOeoJ7e-PvDmuigX&index=4" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/cUH6SK1N6a8?si=gaAvoe59WpPLnzdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Café com Ciência (IJSN)</h3>
                        <a href="https://www.youtube.com/watch?v=cUH6SK1N6a8&list=PLS3JkaM74-UDMXYgXJQEPfpo6cU05TFrx" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/x7UUivYF-ns?si=CT0mdkfgFIPsBlKe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Podcast Condomínios Brasil</h3>
                        <a href="https://www.youtube.com/watch?v=x7UUivYF-ns" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <iframe src="https://www.youtube.com/embed/qbqKgtzYGe8?si=xXAfl9iYKh4UoFSL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="cartao-corpo">
                        <h3>Podshow - Feira MecShow</h3>
                        <a href="https://www.youtube.com/watch?v=qbqKgtzYGe8" target="_blank"><i class="fas fa-play"></i> Assistir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== ABA: GALERIA ===== -->
    <div class="aba-conteudo" id="aba-galeria">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-images"></i> Galeria</h2>
            <div class="grade-cards">
                <div class="cartao-midia">
                    <img src="/img/eventos/mecshow.jpg" alt="Mec Show 2024">
                    <div class="cartao-corpo">
                        <h3>Mec Show 2024</h3>
                        <a href="https://drive.google.com/drive/folders/1cSdZZEE-ZGstkMJXoXSRHBnN9HhMyn-u" target="_blank"><i class="fas fa-external-link-alt"></i> Dia 1 - 06/08/2024</a>
                        <a href="https://drive.google.com/drive/folders/1ZCWxqaDOD3AL8YO8q5qvgtic8vU10eyK" target="_blank"><i class="fas fa-external-link-alt"></i> Dia 2 - 07/08/2024</a>
                        <a href="https://drive.google.com/drive/folders/1gfzTLu5zop76AV6UWiMz_6cETHFWD9jy" target="_blank"><i class="fas fa-external-link-alt"></i> Dia 3 - 08/08/2024</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/1segeo.jpg" alt="1° SEGEO">
                    <div class="cartao-corpo">
                        <h3>1° SEGEO - 2024</h3>
                        <a href="https://drive.google.com/drive/folders/1JD3xJUvmu4IMRS1A-ZOsc_ZsBpefMCTg" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/mecshow2025.JPG" alt="MEC SHOW 2025">
                    <div class="cartao-corpo">
                        <h3>MEC SHOW 2025</h3>
                        <a href="https://drive.google.com/drive/folders/1wh_XRMkbQyxhTR-fFUlRcal_5xBmz7k7" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/2segeo.jpg" alt="2° SEGEO">
                    <div class="cartao-corpo">
                        <h3>2° SEGEO - 2025</h3>
                        <a href="https://drive.google.com/drive/folders/1RUe1h8ErJnSmio0hCDRymtWoha7_gBWs?usp=drive_link" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/seminariofiscalizacao.jpg" alt="1º Seminário de Fiscalização">
                    <div class="cartao-corpo">
                        <h3>1º Seminário de Fiscalização do CRT-ES 2025</h3>
                        <a href="https://drive.google.com/drive/folders/1gRScTkaLWud_RG4U4GY-E9M4oWR4Vjy4" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/diadotecnico.jpg" alt="Sessão Solene Vitória">
                    <div class="cartao-corpo">
                        <h3>Sessão Solene - Vitória 2025</h3>
                        <a href="https://drive.google.com/drive/folders/1EyezoUHJHMNOqP4_ACUtc-Z6Wdoz9NIr" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/sessao_serra.jpg" alt="Sessão Solene Serra">
                    <div class="cartao-corpo">
                        <h3>Sessão Solene Serra - 2025</h3>
                        <a href="https://drive.google.com/drive/folders/1YvRXpHy0kd7ze98e5X_bdZ6rGsd4aYod?usp=drive_link" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/sessao_cachoeiro.JPG" alt="Solenidade Cachoeiro">
                    <div class="cartao-corpo">
                        <h3>Solenidade Cachoeiro de Itapemirim - ES</h3>
                        <a href="https://drive.google.com/drive/folders/1gvjnZ0G_fFDqOOkOLg4_SIBpsmhDrHlR" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/IMG_2600.JPG" alt="Vitoria PetroShow">
                    <div class="cartao-corpo">
                        <h3>Vitoria PetroShow 2026</h3>
                        <a href="https://drive.google.com/drive/folders/1VZ3kl6gPiWFIZSHNyyX94eXnGWwVMVGe?usp=sharing" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
                <div class="cartao-midia">
                    <img src="/img/eventos/feiraesconstrucao.jpg" alt="Vitoria PetroShow">
                    <div class="cartao-corpo">
                        <h3>Feira ES Construção 2026</h3>
                        <a href="https://photos.app.goo.gl/KcMrhDbJxr6VgFZs5" target="_blank"><i class="fas fa-external-link-alt"></i> Fotos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
// Script para alternar as abas
document.addEventListener('DOMContentLoaded', function() {
    const abas = document.querySelectorAll('.aba-link[data-aba]');
    
    // Função para ativar uma aba pelo nome
    function ativarAba(nomeAba) {
        const conteudos = document.querySelectorAll('.aba-conteudo');
        const links = document.querySelectorAll('.aba-link');
        
        // Remove active de todos
        links.forEach(function(l) { l.classList.remove('ativo'); });
        conteudos.forEach(function(c) { c.classList.remove('ativo'); });
        
        // Ativa o botão e conteúdo correspondente
        const botaoAlvo = document.querySelector('.aba-link[data-aba="' + nomeAba + '"]');
        const conteudoAlvo = document.getElementById('aba-' + nomeAba);
        
        if (botaoAlvo && conteudoAlvo) {
            botaoAlvo.classList.add('ativo');
            conteudoAlvo.classList.add('ativo');
            
            // Scroll até as abas
            botaoAlvo.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }
    
    // Evento de clique nas abas
    abas.forEach(function(aba) {
        aba.addEventListener('click', function(e) {
            e.preventDefault();
            const abaAlvo = this.getAttribute('data-aba');
            ativarAba(abaAlvo);
            // Atualiza o hash da URL sem recarregar a página
            history.replaceState(null, null, '#' + abaAlvo);
        });
    });
    
    // Verifica o hash da URL ao carregar a página
    var hash = window.location.hash.substring(1); // Remove o #
    if (hash) {
        // Suporte para hash no formato #anuidadezero (vindo do header)
        var hashMap = {
            'anuidadezero': 'anuidade'
        };
        var abaNome = hashMap[hash] || hash;
        ativarAba(abaNome);
    }
});
</script>
