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

    /* ===== ALERTA / AVISO ===== */
    .alerta-box {
        background: #fff8e1;
        border-radius: 10px;
        padding: 20px 24px;
        margin: 20px 0;
        border-left: 4px solid var(--cor-dourada);
    }
    .alerta-box p {
        margin-bottom: 8px !important;
    }
    .alerta-box strong {
        color: var(--cor-primaria);
    }

    /* ===== CARDS DE EDITAIS ===== */
    .grade-editais {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 20px;
        margin-top: 25px;
    }

    .cartao-edital {
        background: #fff;
        border-radius: var(--borda-arredondada);
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0,0,0,0.07);
        transition: var(--transicao);
        border: 1px solid #f0f0f0;
        display: flex;
        flex-direction: column;
    }
    .cartao-edital:hover {
        transform: translateY(-5px);
        box-shadow: var(--sombra-media);
        border-color: var(--cor-primaria-clara);
    }
    .cartao-edital .cartao-topo {
        background: var(--cor-primaria-gradient);
        padding: 20px;
        text-align: center;
    }
    .cartao-edital .cartao-topo i {
        font-size: 2.5rem;
        color: rgba(255,255,255,0.9);
        margin-bottom: 8px;
    }
    .cartao-edital .cartao-topo h3 {
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.4;
    }
    .cartao-edital .cartao-corpo {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .cartao-edital .cartao-corpo p {
        font-size: 0.85rem;
        color: #666;
        margin-bottom: 8px;
        line-height: 1.5;
    }
    .cartao-edital .cartao-corpo .tag {
        display: inline-block;
        background: var(--cor-primaria-clara);
        color: var(--cor-primaria);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-bottom: 16px;
        align-self: flex-start;
    }
    .cartao-edital .cartao-corpo .btn-download {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: var(--cor-primaria);
        color: #fff !important;
        text-decoration: none !important;
        padding: 12px 20px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.9rem;
        transition: var(--transicao);
        margin-top: auto;
    }
    .cartao-edital .cartao-corpo .btn-download:hover {
        background: var(--cor-primaria-escura);
        box-shadow: 0 4px 12px rgba(33, 97, 145, 0.35);
        transform: translateY(-2px);
    }

    /* ===== CONTATO ===== */
    .contato-box {
        background: var(--cor-primaria-clara);
        border-radius: 10px;
        padding: 20px 24px;
        margin-top: 20px;
        border-left: 4px solid var(--cor-primaria);
    }
    .contato-box h3 {
        color: var(--cor-primaria);
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .contato-box p {
        margin-bottom: 4px !important;
        font-size: 0.95rem !important;
    }
    .contato-box a {
        color: var(--cor-primaria);
        font-weight: 600;
        text-decoration: none;
    }
    .contato-box a:hover {
        color: var(--cor-dourada);
        text-decoration: underline;
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
        .grade-editais {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .cartao-edital .cartao-topo h3 {
            font-size: 0.9rem;
        }
    }
</style>

<!-- ===== HERO ===== -->
<section class="pagina-hero">
    <h1><i class="fas fa-file-invoice-dollar"></i> Dívida Ativa</h1>
    <p>Informações sobre débitos, editais de lançamento e regularização</p>
</section>

<!-- ===== CONTEÚDO ===== -->
<div class="pagina-wrapper">

    <div class="aba-card">
        <h2 class="aba-titulo"><i class="fas fa-file-invoice-dollar"></i> Dívida Ativa</h2>

        <p>A anuidade do CRT-ES constitui tributo federal, instituído pela Lei nº 13.639/2018. O seu não pagamento enseja a constituição de crédito tributário passível de inscrição em Dívida Ativa, nos termos da Lei nº 6.830/1980 (Lei de Execução Fiscal), que disciplina a cobrança judicial dos créditos da Fazenda Pública.</p>

        <p>A inscrição em Dívida Ativa ocorre quando o profissional mantém uma ou mais anuidades em aberto, podendo ser efetivada a partir do primeiro dia útil do exercício subsequente ao da constituição do débito.</p>

        <div class="alerta-box">
            <p><strong><i class="fas fa-exclamation-triangle"></i> Atenção:</strong> A Dívida Ativa consiste no cadastro oficial de créditos não quitados do ente público. A inscrição torna o CPF ou CNPJ inadimplente junto ao Conselho, podendo acarretar restrições de crédito, inclusão no CADIN, protesto em cartório e ajuizamento de execução fiscal, inclusive com a possibilidade de bloqueio de contas e constrição de bens.</p>
            <p>A fim de evitar a incidência de encargos adicionais e a adoção de medidas administrativas ou judiciais, <strong>regularize sua situação quanto antes</strong>.</p>
        </div>

        <div class="contato-box">
            <h3><i class="fas fa-headset"></i> Canais de Atendimento para Regularização</h3>
            <p><i class="fab fa-whatsapp"></i> WhatsApp: <strong>(27) 99867-5197</strong></p>
            <p><i class="fas fa-envelope"></i> E-mail: <a href="mailto:regularize@crtes.gov.br">regularize@crtes.gov.br</a></p>
        </div>

        <!-- Editais -->
        <h3 style="color: var(--cor-primaria); font-size: 1.15rem; font-weight: 700; margin-top: 30px; margin-bottom: 5px;">
            <i class="fas fa-gavel"></i> Editais de Lançamento em Dívida Ativa e Intimação
        </h3>

        <div class="grade-editais">
            <div class="cartao-edital">
                <div class="cartao-topo">
                    <i class="fas fa-user"></i>
                    <h3>Anuidades Pendentes<br>2019, 2020, 2021, 2022, 2023</h3>
                </div>
                <div class="cartao-corpo">
                    <span class="tag">Pessoa Física</span>
                    <p>Lançamento em Dívida Ativa e Intimação para Pagamento de Anuidades Pendentes.</p>
                    <a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/dividaativa/edital1.pdf" target="_blank" class="btn-download">
                        <i class="fas fa-download"></i> Baixar Edital
                    </a>
                </div>
            </div>

            <div class="cartao-edital">
                <div class="cartao-topo">
                    <i class="fas fa-user"></i>
                    <h3>Anuidades Pendentes<br>2020, 2021, 2022, 2023, 2024</h3>
                </div>
                <div class="cartao-corpo">
                    <span class="tag">Pessoa Física</span>
                    <p>Lançamento em Dívida Ativa e Intimação para Pagamento de Anuidades Pendentes.</p>
                    <a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/dividaativa/edital2.pdf" target="_blank" class="btn-download">
                        <i class="fas fa-download"></i> Baixar Edital
                    </a>
                </div>
            </div>

            <div class="cartao-edital">
                <div class="cartao-topo">
                    <i class="fas fa-building"></i>
                    <h3>Anuidades Pendentes<br>2020, 2021, 2022, 2023, 2024</h3>
                </div>
                <div class="cartao-corpo">
                    <span class="tag">Pessoa Jurídica</span>
                    <p>Lançamento em Dívida Ativa e Intimação para Pagamento de Anuidades Pendentes.</p>
                    <a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/dividaativa/edital3.pdf" target="_blank" class="btn-download">
                        <i class="fas fa-download"></i> Baixar Edital
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>