<style>
    /* ==========================================================================
   Estilização do Portal SEI CRT-ES
   ========================================================================== */

    :root {
        --primary-blue: #1a5784;
        --secondary-blue: #2744aa;
        --bg-light: #f8fafc;
        --text-dark: #334155;
        --text-muted: #64748b;
        --border-color: #e2e8f0;
    }

    /* Header do SEI */
    .top-bar-sei {
        background: #ffffff;
        border-bottom: 3px solid var(--primary-blue);
        padding: 1.25rem 1.5rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .header-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .brand-sei {
        display: flex;
        flex-direction: column;
        gap: 0.2rem;
    }

    .portal-tag {
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        color: var(--secondary-blue);
        text-transform: uppercase;
    }

    .logo-sei {
        height: 48px;
        width: auto;
        object-fit: contain;
    }

    .logo-cft {
        height: 52px;
        width: auto;
        object-fit: contain;
    }

    /* Menu de Suporte */
    .menu-sei {
        background: var(--primary-blue);
        padding: 0.75rem 1.5rem;
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        gap: 1.5rem;
        align-items: center;
        flex-wrap: wrap;
    }

    .nav-link-sei {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .nav-link-sei:hover {
        color: #ffffff;
        transform: translateY(-1px);
    }

    .nav-link-sei.highlight {
        background: rgba(255, 255, 255, 0.15);
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
    }

    /* Estrutura Principal */
    .portal-container {
        max-width: 1200px;
        margin: 2.5rem auto;
        padding: 0 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 3rem;
    }

    .section-title {
        font-size: 1.35rem;
        color: var(--text-dark);
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
        padding-left: 1rem;
    }

    .section-title::before {
        content: '';
        position: absolute;
        left: 0; top: 0; bottom: 0;
        width: 4px;
        background: var(--secondary-blue);
        border-radius: 4px;
    }

    /* Cards de Acesso (Destaque do Sistema) */
    .cards-acesso-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .card-acesso {
        background: #ffffff;
        border-radius: 12px;
        border: 2px solid var(--border-color);
        padding: 1.75rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        position: relative;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .card-acesso.interno:hover {
        border-color: var(--secondary-blue);
        transform: translateY(-50px);
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(39, 68, 170, 0.12);
    }

    .card-acesso .card-icon img {
        width: 55px;
        height: 55px;
        object-fit: contain;
    }

    .card-acesso .card-info h3 {
        margin: 0;
        font-size: 1.25rem;
        color: var(--text-dark);
        font-weight: 400;
    }

    .card-acesso .card-info h3 strong {
        font-weight: 700;
        color: var(--primary-blue);
    }

    .card-acesso .card-info p {
        margin: 0.5rem 0 0 0;
        font-size: 0.9rem;
        color: var(--text-muted);
    }

    .card-action {
        margin-top: auto;
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--secondary-blue);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    /* Card Indisponível (Usuário Externo) */
    .card-acesso.disabled {
        opacity: 0.7;
        background: #f1f5f9;
        border-style: dashed;
        cursor: not-allowed;
    }

    .badge-status {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: #e2e8f0;
        color: #475569;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.25rem 0.6rem;
        border-radius: 20px;
        text-transform: uppercase;
    }

    /* Cards de Recursos e Treinamento */
    .recursos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .card-recurso {
        background: #ffffff;
        border-radius: 10px;
        border: 1px solid var(--border-color);
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }

    .recurso-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .badge-sei {
        background: #e0f2fe;
        color: #0369a1;
        font-weight: 700;
        font-size: 0.8rem;
        padding: 0.2rem 0.6rem;
        border-radius: 6px;
    }

    .icon-mini {
        height: 24px;
        width: auto;
    }

    .icon-manual {
        height: 40px;
        width: auto;
    }

    .card-recurso h3 {
        font-size: 1.1rem;
        color: var(--text-dark);
        margin: 0 0 0.5rem 0;
    }

    .card-recurso p {
        font-size: 0.88rem;
        color: var(--text-muted);
        margin: 0 0 1.5rem 0;
        line-height: 1.5;
    }

    .btn-recurso {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background: var(--primary-blue);
        color: #ffffff !important;
        text-decoration: none;
        font-size: 0.88rem;
        font-weight: 600;
        padding: 0.6rem 1rem;
        border-radius: 6px;
        transition: background 0.3s ease;
        width: 100%;
        text-align: center;
    }

    .btn-recurso:hover {
        background: var(--secondary-blue);
    }

    .btn-recurso.outline {
        background: transparent;
        color: var(--primary-blue) !important;
        border: 1px solid var(--primary-blue);
    }

    .btn-recurso.outline:hover {
        background: var(--primary-blue);
        color: #ffffff !important;
    }

    /* Responsividade Mobile */
    @media (max-width: 600px) {
        .header-container {
            flex-direction: column;
            align-items: flex-start;
        }
        .cards-acesso-grid, .recursos-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<!-- HEADER DO PORTAL SEI -->
<header class="top-bar-sei">
    <div class="header-container">
        <div class="brand-sei">
            <span class="portal-tag">PORTAL INTEGRADO</span>
            <div class="logo-sei-wrapper">
                <img src="/img/sei-logo.png" alt="Logo SEI" class="logo-sei">
            </div>
        </div>
        <div class="brand-system">
            <img src="/img/sistema_cft_crt.png" alt="Logo Sistema CFT/CRTs" class="logo-cft">
        </div>
    </div>
</header>

<!-- NAVEGAÇÃO DE SUPORTE -->
<nav class="menu-sei">
    <div class="nav-container">
        <a href="" class="nav-link-sei">
            <i class="fa-solid fa-house"></i> CRT-ES
        </a>
        <a href="#sobre-sei" class="nav-link-sei">
            <i class="fa-solid fa-circle-info"></i> Sobre o SEI
        </a>
        <a href="/files/ProjetoSEI.pdf" download class="nav-link-sei highlight">
            <i class="fa-solid fa-file-pdf"></i> Projeto de Implantação SEI (PDF)
        </a>
    </div>
</nav>

<!-- CONTEÚDO PRINCIPAL -->
<main class="portal-container">

    <!-- SEÇÃO DE ACESSO AO SISTEMA (DESTAQUE PRINCIPAL) -->
    <section class="acessos-section">
        <h2 class="section-title">Acesso ao Sistema</h2>
        <div class="cards-acesso-grid">
            
            <!-- Usuário Interno -->
            <a href="https://sei.sinceti.tec.br/sip/login.php?sigla_orgao_sistema=CFT&sigla_sistema=SEI" target="_blank" class="card-acesso interno">
                <div class="card-icon">
                    <img src="/img/user_interno.png" alt="Usuário Interno">
                </div>
                <div class="card-info">
                    <h3>Usuário <strong>Interno</strong></h3>
                    <p>Acesso restrito para servidores e colaboradores do CRT-ES.</p>
                </div>
                <div class="card-action">
                    Acessar SEI <i class="fa-solid fa-arrow-right"></i>
                </div>
            </a>

            <!-- Usuário Externo -->
            <div class="card-acesso externo disabled">
                <span class="badge-status">Em Breve</span>
                <div class="card-icon">
                    <img src="/img/user_externo.png" alt="Usuário Externo">
                </div>
                <div class="card-info">
                    <h3>Usuário <strong>Externo</strong></h3>
                    <p>Peticionamento e acompanhamento de processos para o cidadão.</p>
                </div>
                <div class="card-action">
                    Indisponível
                </div>
            </div>

        </div>
    </section>

    <!-- SEÇÃO DE RECURSOS E TREINAMENTOS -->
    <section class="recursos-section">
        <h2 class="section-title">Capacitação & Suporte</h2>
        <div class="recursos-grid">
            
            <!-- Treinamento SEI 4.0 -->
            <div class="card-recurso destaque">
                <div class="recurso-header">
                    <span class="badge-sei">SEI 4.0</span>
                    <img src="/img/sei-logo.png" alt="SEI Logo" class="icon-mini">
                </div>
                <div class="recurso-body">
                    <h3>Treinamento Oficial SEI</h3>
                    <p>Curso de capacitação oferecido pela Escola Nacional de Administração Pública (Enap).</p>
                </div>
                <div class="recurso-footer">
                    <a href="https://www.escolavirtual.gov.br/curso/74" target="_blank" class="btn-recurso">
                        Acessar Curso Gratuito <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>

            <!-- Manual do Usuário -->
            <div class="card-recurso">
                <div class="recurso-header">
                    <img src="/img/manual.png" alt="Manual do Usuário" class="icon-manual">
                </div>
                <div class="recurso-body">
                    <h3>Manual do Usuário SEI</h3>
                    <p>Guia completo de utilização disponibilizado oficial no Portal GOV.BR.</p>
                </div>
                <div class="recurso-footer">
                    <a href="https://softwarepublico.gov.br/social/sei/manuais/manual-do-usuario/sumario" target="_blank" class="btn-recurso outline">
                        Consultar Manual <i class="fa-solid fa-book"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>