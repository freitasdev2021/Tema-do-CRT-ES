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

    /* ===== BOTÕES DE AÇÃO ===== */
    .acoes-grade {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 14px;
        margin-top: 25px;
    }

    .acao-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 16px 20px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.92rem;
        text-decoration: none !important;
        transition: var(--transicao);
        border: none;
        cursor: pointer;
    }
    .acao-btn.primario {
        background: var(--cor-primaria-gradient);
        color: #fff;
        box-shadow: 0 4px 12px rgba(33, 97, 145, 0.3);
    }
    .acao-btn.primario:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(33, 97, 145, 0.4);
    }
    .acao-btn.secundario {
        background: #fff;
        color: var(--cor-primaria);
        border: 2px solid var(--cor-primaria);
    }
    .acao-btn.secundario:hover {
        background: var(--cor-primaria-clara);
        transform: translateY(-3px);
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

    /* ===== DESTAQUE BOX ===== */
    .destaque-box {
        background: #fff8e1;
        border-radius: 10px;
        padding: 20px 24px;
        margin: 20px 0;
        border-left: 4px solid var(--cor-dourada);
    }
    .destaque-box p {
        margin-bottom: 8px !important;
    }
    .destaque-box strong {
        color: var(--cor-primaria);
    }

    /* ===== CARDS DA EQUIPE ===== */
    .grade-equipe {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        margin-top: 15px;
    }

    .cartao-pessoa {
        background: #fff;
        border-radius: var(--borda-arredondada);
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0,0,0,0.07);
        transition: var(--transicao);
        border: 1px solid #f0f0f0;
        text-align: center;
        padding: 24px 16px;
    }
    .cartao-pessoa:hover {
        transform: translateY(-5px);
        box-shadow: var(--sombra-media);
    }
    .cartao-pessoa .avatar {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: var(--cor-primaria-gradient);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 700;
        margin: 0 auto 14px;
        border: 3px solid var(--cor-primaria-clara);
    }
    .cartao-pessoa h3 {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--cor-primaria);
        margin-bottom: 4px;
    }
    .cartao-pessoa .modalidade {
        font-size: 0.82rem;
        color: #777;
        margin-bottom: 8px;
    }
    .cartao-pessoa .cargo {
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--cor-dourada);
        text-transform: uppercase;
        letter-spacing: 0.5px;
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

        .acoes-grade {
            grid-template-columns: 1fr;
        }
        .grade-equipe {
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

        .grade-equipe {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- ===== HERO ===== -->
<section class="pagina-hero">
    <h1><i class="fas fa-search"></i> Fiscalização</h1>
    <p>Conheça o trabalho da fiscalização do CRT-ES e saiba como denunciar irregularidades</p>
</section>

<!-- ===== CONTEÚDO ===== -->
<div class="pagina-wrapper">

    <!-- Abas -->
    <nav class="abas-navegacao" role="tablist">
        <button class="aba-link ativo" data-aba="fiscalizamos" role="tab">
            <i class="fas fa-clipboard-check"></i> O que fiscalizamos
        </button>
        <button class="aba-link" data-aba="equipe" role="tab">
            <i class="fas fa-users"></i> Equipe de Fiscalização
        </button>
    </nav>

    <!-- ===== ABA: O QUE FISCALIZAMOS ===== -->
    <div class="aba-conteudo ativo" id="aba-fiscalizamos">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-clipboard-check"></i> O que fiscalizamos</h2>

            <p>É papel da Fiscalização auxiliar na prestação de serviços dos técnicos industriais, verificar a existência do <strong>Termo de Responsabilidade Técnica (TRT)</strong> em todas as suas atividades, atribuições e campos de atuação.</p>

            <div class="destaque-box">
                <p><strong><i class="fas fa-star"></i> A emissão do TRT não é apenas um dever.</strong></p>
                <p>É, sobretudo, um direito dos técnicos industriais e uma proteção à sociedade.</p>
            </div>

            <p>A Fiscalização coíbe o exercício ilegal ou irregular das atividades dos técnicos industriais, em conformidade com a legislação vigente.</p>

            <!-- Links de Ação -->
            <div class="acoes-grade">
                <a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=CadastrarDenuncia" target="_blank" class="acao-btn primario">
                    <i class="fas fa-pen"></i> Realizar Denúncia
                </a>
                <a href="https://corporativo.sinceti.net.br/app/view/sight/externo.php?form=PesquisarDenuncia" target="_blank" class="acao-btn primario">
                    <i class="fas fa-search"></i> Pesquisar Denúncia
                </a>
                <a href="https://www.cft.org.br/plano-nacional-de-fiscalizacao-integrada/" target="_blank" class="acao-btn secundario">
                    <i class="fas fa-file-alt"></i> Plano Nacional de Fiscalização Integrada
                </a>
                <a href="https://www.cft.org.br/painelfiscalizacao/" target="_blank" class="acao-btn secundario">
                    <i class="fas fa-chart-bar"></i> Painel da Fiscalização
                </a>
            </div>

            <div class="contato-box">
                <h3><i class="fas fa-headset"></i> Contato da Fiscalização</h3>
                <p><i class="fas fa-phone"></i> Telefone: <strong>27 99663-7831</strong></p>
                <p><i class="fas fa-envelope"></i> E-mail: <a href="mailto:fiscalizacao@crtes.gov.br">fiscalizacao@crtes.gov.br</a></p>
            </div>
        </div>
    </div>

    <!-- ===== ABA: EQUIPE DE FISCALIZAÇÃO ===== -->
    <div class="aba-conteudo" id="aba-equipe">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-users"></i> Equipe de Fiscalização</h2>

            <div class="grade-equipe">
                <div class="cartao-pessoa">
                    <div class="avatar">MM</div>
                    <h3>Marcelo Moreira Dias Duarte</h3>
                    <p class="modalidade">Técnico em Desenho de Construção Civil</p>
                    <p class="cargo">Gerente de Fiscalização</p>
                </div>

                <div class="cartao-pessoa">
                    <div class="avatar">AB</div>
                    <h3>Alexandre Bifano Bittencourt</h3>
                    <p class="modalidade">Técnico em Automação Industrial</p>
                    <p class="cargo">Supervisor de Fiscalização</p>
                </div>

                <div class="cartao-pessoa">
                    <div class="avatar">AZ</div>
                    <h3>Alan Antonio Zanotti</h3>
                    <p class="modalidade">Técnico em Mecânica</p>
                    <p class="cargo">Agente de Fiscalização</p>
                </div>

                <div class="cartao-pessoa">
                    <div class="avatar">JZ</div>
                    <h3>Jailson Pereira Zancanela</h3>
                    <p class="modalidade">Técnico em Portos e Informática</p>
                    <p class="cargo">Agente de Fiscalização</p>
                </div>

                <div class="cartao-pessoa">
                    <div class="avatar">MC</div>
                    <h3>Marcelo Carneiro de Almeida</h3>
                    <p class="modalidade">Técnico em Manutenção Industrial</p>
                    <p class="cargo">Agente de Fiscalização</p>
                </div>

                <div class="cartao-pessoa">
                    <div class="avatar">JN</div>
                    <h3>Jean Carlos Neves</h3>
                    <p class="modalidade">Técnico em Automação Industrial</p>
                    <p class="cargo">Agente de Fiscalização</p>
                </div>

                <div class="cartao-pessoa">
                    <div class="avatar">VO</div>
                    <h3>Valdemberg Marques de Oliveira</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Agente de Fiscalização</p>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
// Script para alternar as abas
document.addEventListener('DOMContentLoaded', function() {
    const abas = document.querySelectorAll('.aba-link[data-aba]');
    
    abas.forEach(function(aba) {
        aba.addEventListener('click', function(e) {
            e.preventDefault();
            
            const abaAlvo = this.getAttribute('data-aba');
            const conteudos = document.querySelectorAll('.aba-conteudo');
            const links = document.querySelectorAll('.aba-link');
            
            // Remove active de todos
            links.forEach(function(l) { l.classList.remove('ativo'); });
            conteudos.forEach(function(c) { c.classList.remove('ativo'); });
            
            // Ativa o clicado
            this.classList.add('ativo');
            document.getElementById('aba-' + abaAlvo).classList.add('ativo');
        });
    });
});
</script>