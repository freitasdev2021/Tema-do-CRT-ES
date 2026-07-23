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

    /* ===== GRID DE CONTATOS ===== */
    .grade-contatos {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 20px;
    }

    .cartao-contato {
        background: #fff;
        border-radius: var(--borda-arredondada);
        padding: 28px 24px;
        box-shadow: 0 3px 12px rgba(0,0,0,0.07);
        transition: var(--transicao);
        border: 1px solid #f0f0f0;
        position: relative;
        overflow: hidden;
    }
    .cartao-contato:hover {
        transform: translateY(-5px);
        box-shadow: var(--sombra-media);
        border-color: var(--cor-primaria-clara);
    }
    .cartao-contato.destaque {
        border-left: 4px solid var(--cor-primaria);
    }
    .cartao-contato .cartao-icone {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: var(--cor-primaria-gradient);
        color: #fff;
        font-size: 1.3rem;
        margin-bottom: 16px;
    }
    .cartao-contato h3 {
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--cor-primaria);
        margin-bottom: 14px;
    }
    .cartao-contato .info-linha {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
        color: #555;
        font-size: 0.92rem;
        line-height: 1.5;
    }
    .cartao-contato .info-linha i {
        width: 18px;
        color: var(--cor-primaria);
        text-align: center;
        flex-shrink: 0;
    }
    .cartao-contato .info-linha a {
        color: var(--cor-primaria);
        font-weight: 600;
        text-decoration: none;
        transition: var(--transicao);
    }
    .cartao-contato .info-linha a:hover {
        color: var(--cor-dourada);
        text-decoration: underline;
    }
    .cartao-contato .info-linha.whatsapp {
        background: #e8f5e9;
        border-radius: 8px;
        padding: 10px 14px;
        margin-top: 6px;
    }
    .cartao-contato .info-linha.whatsapp i {
        color: #25d366;
        font-size: 1.2rem;
    }
    .cartao-contato .info-linha.whatsapp a {
        color: #25d366;
    }

    .cartao-contato .divisor {
        border: none;
        border-top: 1px solid #eef1f5;
        margin: 14px 0;
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

        .grade-contatos {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .cartao-contato {
            padding: 20px 16px;
        }
        .cartao-contato h3 {
            font-size: 0.95rem;
        }
        .cartao-contato .info-linha {
            font-size: 0.85rem;
        }
    }
</style>

<!-- ===== HERO ===== -->
<section class="pagina-hero">
    <h1><i class="fas fa-headset"></i> Fale com o CRT-ES</h1>
    <p>Canais de atendimento para falar com o Conselho Regional dos Técnicos Industriais do Espírito Santo</p>
</section>

<!-- ===== CONTEÚDO ===== -->
<div class="pagina-wrapper">

    <div class="aba-card">
        <h2 class="aba-titulo"><i class="fas fa-headset"></i> Fale com o CRT-ES</h2>

        <div class="grade-contatos">
            <!-- Central de Atendimento -->
            <div class="cartao-contato destaque">
                <div class="cartao-icone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Central de Atendimento</h3>
                <div class="info-linha">
                    <i class="fas fa-phone"></i>
                    <span>(27) 3100-2019 | 27 3014-8008</span>
                </div>
                <div class="info-linha">
                    <i class="fas fa-phone"></i>
                    <span>(27) 9 9933-7517 <small style="color:#888;">(Somente Ligação)</small></span>
                </div>
                <div class="info-linha whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <a href="https://wa.me/5527996989329" target="_blank">(27) 9 9698-9329 <small style="color:#666;">(Somente WhatsApp)</small></a>
                </div>
                <div class="info-linha">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:atendimento@crtes.gov.br">atendimento@crtes.gov.br</a>
                </div>
            </div>

            <!-- Cobrança / Dívida Ativa -->
            <div class="cartao-contato">
                <div class="cartao-icone">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h3>Cobrança / Dívida Ativa</h3>
                <div class="info-linha">
                    <i class="fab fa-whatsapp"></i>
                    <span>(27) 99867-5197</span>
                </div>
                <div class="info-linha">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:regularize@crtes.gov.br">regularize@crtes.gov.br</a>
                </div>
            </div>

            <!-- Registro -->
            <div class="cartao-contato">
                <div class="cartao-icone">
                    <i class="fas fa-id-card"></i>
                </div>
                <h3>Registro</h3>
                <div class="info-linha">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:registros@crtes.gov.br">registros@crtes.gov.br</a>
                </div>
            </div>

            <!-- Fiscalização -->
            <div class="cartao-contato">
                <div class="cartao-icone">
                    <i class="fas fa-search"></i>
                </div>
                <h3>Fiscalização</h3>
                <div class="info-linha">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:fiscalizacao@crtes.gov.br">fiscalizacao@crtes.gov.br</a>
                </div>
            </div>
        </div>
    </div>

</div>