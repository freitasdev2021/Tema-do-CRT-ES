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

    /* ===== ALERTA / AVISO ===== */
    .alerta-box {
        background: #fff8e1;
        border-radius: 10px;
        padding: 20px 24px;
        margin-bottom: 25px;
        border-left: 4px solid var(--cor-dourada);
    }
    .alerta-box p {
        margin-bottom: 6px !important;
        font-size: 0.95rem !important;
    }
    .alerta-box strong {
        color: var(--cor-primaria);
    }

    /* ===== CARDS DE PARCEIROS ===== */
    .grade-parceiros {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 20px;
        margin-top: 15px;
    }

    .cartao-parceiro {
        background: #fff;
        border-radius: var(--borda-arredondada);
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(0,0,0,0.07);
        transition: var(--transicao);
        border: 1px solid #f0f0f0;
        display: flex;
        flex-direction: column;
    }
    .cartao-parceiro:hover {
        transform: translateY(-5px);
        box-shadow: var(--sombra-media);
        border-color: var(--cor-primaria-clara);
    }
    .cartao-parceiro .parceiro-logo {
        padding: 24px;
        background: #fafbfc;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 120px;
        border-bottom: 1px solid #f0f0f0;
    }
    .cartao-parceiro .parceiro-logo img {
        max-width: 100%;
        max-height: 80px;
        object-fit: contain;
    }
    .cartao-parceiro .parceiro-corpo {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .cartao-parceiro .parceiro-corpo .desconto {
        display: inline-block;
        background: var(--cor-dourada);
        color: #fff;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 12px;
        align-self: flex-start;
    }
    .cartao-parceiro .parceiro-corpo .descricao {
        font-size: 0.88rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 12px;
    }
    .cartao-parceiro .parceiro-corpo .contato-info {
        font-size: 0.82rem;
        color: #777;
        margin-bottom: 6px;
        line-height: 1.5;
    }
    .cartao-parceiro .parceiro-corpo .contato-info i {
        width: 16px;
        color: var(--cor-primaria);
        margin-right: 4px;
    }
    .cartao-parceiro .parceiro-corpo .links {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: auto;
        padding-top: 14px;
    }
    .cartao-parceiro .parceiro-corpo .links a {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 0.82rem;
        font-weight: 600;
        text-decoration: none !important;
        transition: var(--transicao);
        background: var(--cor-primaria-clara);
        color: var(--cor-primaria);
    }
    .cartao-parceiro .parceiro-corpo .links a:hover {
        background: var(--cor-primaria);
        color: #fff;
    }
    .cartao-parceiro .parceiro-corpo .links a.instagram:hover {
        background: #e1306c;
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

        .grade-parceiros {
            grid-template-columns: 1fr;
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
    }
</style>

<!-- ===== HERO ===== -->
<section class="pagina-hero">
    <h1><i class="fas fa-handshake"></i> Parceiros</h1>
    <p>Confira os descontos e benefícios exclusivos para profissionais registrados no CRT-ES</p>
</section>

<!-- ===== CONTEÚDO ===== -->
<div class="pagina-wrapper">

    <!-- Alerta -->
    <div class="alerta-box">
        <p><strong><i class="fas fa-info-circle"></i> Atenção!</strong></p>
        <p>O CRT-ES possui parcerias com diversas empresas na área da Educação e Cursos; Esporte, Lazer e Saúde; Seguros. Todos os Técnicos(as) Industriais registrados e adimplentes no CRT-ES e seus respectivos dependentes possuem direito aos descontos. Para garantir o benefício, os mesmos deverão identificar-se junto à PARCEIRA, por meio de documento comprobatório de sua condição e de regularidade junto ao Conselho.</p>
    </div>

    <!-- Abas -->
    <nav class="abas-navegacao" role="tablist">
        <button class="aba-link ativo" data-aba="educacao" role="tab">
            <i class="fas fa-graduation-cap"></i> Educação
        </button>
        <button class="aba-link" data-aba="esporte" role="tab">
            <i class="fas fa-heartbeat"></i> Esporte, Lazer e Saúde
        </button>
        <button class="aba-link" data-aba="seguros" role="tab">
            <i class="fas fa-shield-alt"></i> Seguros e Previdência
        </button>
    </nav>

    <!-- ===== ABA: EDUCAÇÃO ===== -->
    <div class="aba-conteudo ativo" id="aba-educacao">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-graduation-cap"></i> Educação</h2>

            <div class="grade-parceiros">
                <!-- British English School -->
                <div class="cartao-parceiro">
                    <div class="parceiro-logo">
                        <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/parceiros/british.jpg" alt="New British English School">
                    </div>
                    <div class="parceiro-corpo">
                        <span class="desconto">30% OFF Matrícula | 20% OFF Mensalidade | 25% OFF Material</span>
                        <p class="descricao"><strong>30% de desconto</strong> no valor da matrícula única; <strong>20% de desconto</strong> no valor da mensalidade fixa. <strong>25% de desconto</strong> no valor do material didático modular. Escola 100% on-line.</p>
                        <p class="contato-info"><i class="fas fa-phone"></i> (81) 97113-8779</p>
                        <p class="contato-info"><i class="fas fa-envelope"></i> newbritishenglishschool@gmail.com</p>
                        <div class="links">
                            <a href="https://www.instagram.com/newbritishenglishschool/" target="_blank" class="instagram"><i class="fab fa-instagram"></i> Instagram</a>
                        </div>
                    </div>
                </div>

                <!-- West Group -->
                <div class="cartao-parceiro">
                    <div class="parceiro-logo">
                        <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/parceiros/westgroup.png" alt="West Group">
                    </div>
                    <div class="parceiro-corpo">
                        <span class="desconto">10% OFF em todos os cursos</span>
                        <p class="descricao"><strong>10% de desconto</strong> em todos os cursos ofertados.</p>
                        <p class="contato-info"><i class="fas fa-phone"></i> (27) 3227-0387 | (22) 97401-6993</p>
                        <p class="contato-info"><i class="fas fa-globe"></i> www.linktr.ee/westgroup</p>
                        <div class="links">
                            <a href="https://westgroup.com.br/" target="_blank"><i class="fas fa-globe"></i> Site</a>
                        </div>
                    </div>
                </div>

                <!-- Minds Idiomas -->
                <div class="cartao-parceiro">
                    <div class="parceiro-logo">
                        <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/parceiros/minds.jpg" alt="Minds Idiomas">
                    </div>
                    <div class="parceiro-corpo">
                        <span class="desconto">20% a 40% OFF nas mensalidades</span>
                        <p class="descricao"><strong>Desconto de 20% a 40%</strong> nas mensalidades das aulas de Inglês nas unidades de Vitória, Vila Velha, Serra e Cariacica. Use o código promocional: <strong>CRTES20</strong>.</p>
                        <p class="contato-info"><i class="fas fa-phone"></i> (27) 99274-3382</p>
                        <p class="contato-info"><i class="fas fa-envelope"></i> vitoriaes@mindsidiomas.com.br</p>
                        <div class="links">
                            <a href="https://mindsidiomas.com.br/" target="_blank"><i class="fas fa-globe"></i> Site</a>
                        </div>
                    </div>
                </div>

                <!-- English Work -->
                <div class="cartao-parceiro">
                    <div class="parceiro-logo">
                        <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/parceiros/ewpass.jpg" alt="English Work">
                    </div>
                    <div class="parceiro-corpo">
                        <span class="desconto">58% OFF | Código: EWCRTES</span>
                        <p class="descricao"><strong>Desconto de 58%</strong> através do código promocional: <strong>EWCRTES</strong>. Escola 100% on-line.</p>
                        <p class="contato-info"><i class="fas fa-phone"></i> 27 99713-9118</p>
                        <p class="contato-info"><i class="fas fa-envelope"></i> atendimento@englishwork.com.br</p>
                        <div class="links">
                            <a href="https://www.instagram.com/englishwork_br/" target="_blank" class="instagram"><i class="fab fa-instagram"></i> Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== ABA: ESPORTE, LAZER E SAÚDE ===== -->
    <div class="aba-conteudo" id="aba-esporte">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-heartbeat"></i> Esporte, Lazer e Saúde</h2>

            <div class="grade-parceiros">
                <!-- SESC -->
                <div class="cartao-parceiro">
                    <div class="parceiro-logo">
                        <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/parceiros/sesc.jpg" alt="SESC">
                    </div>
                    <div class="parceiro-corpo">
                        <span class="desconto">Descontos em todas as Unidades</span>
                        <p class="descricao">Desconto em todas as Unidades do Sesc no Espírito Santo nas atividades de <strong>Turismo e Lazer, Cultura, Assistência Odontológica, Assistência Médica, Esporte e Educação</strong>.</p>
                        <p class="contato-info"><i class="fas fa-phone"></i> (27) 3232-3100</p>
                        <p class="descricao" style="margin-top:8px;">Acesse <a href="https://sesc-es.com.br/credencial/" target="_blank" style="color:var(--cor-primaria); font-weight:600;">sesc-es.com.br/credencial/</a> e faça sua carteirinha do SESC de forma gratuita. Selecione a opção <strong>"Conveniado"</strong> e anexe a Certidão de Registro e Quitação do CRT-ES para comprovar o vínculo com o conselho.</p>
                        <div class="links">
                            <a href="https://sesc-es.com.br/" target="_blank"><i class="fas fa-globe"></i> Site</a>
                            <a href="https://sesc-es.com.br/credencial/" target="_blank"><i class="fas fa-id-card"></i> Fazer Carteirinha</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== ABA: SEGUROS E PREVIDÊNCIA ===== -->
    <div class="aba-conteudo" id="aba-seguros">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-shield-alt"></i> Seguros e Previdência</h2>

            <div class="grade-parceiros">
                <!-- Vix Master Seguros -->
                <div class="cartao-parceiro">
                    <div class="parceiro-logo">
                        <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/parceiros/mastercorretora.jpg" alt="Vix Master Seguros">
                    </div>
                    <div class="parceiro-corpo">
                        <span class="desconto">10% OFF em todos os seguros</span>
                        <p class="descricao"><strong>Desconto de 10%</strong> em:</p>
                        <p class="descricao" style="margin-bottom:4px;">
                            • Seguro Bicicleta<br>
                            • Seguro Automóvel<br>
                            • Seguro Residencial<br>
                            • Seguro Empresarial<br>
                            • Seguro de Vida<br>
                            • Financiamento Automóvel (taxa reduzida)<br>
                            • Responsabilidade Civil Eventos<br>
                            • Responsabilidade Civil Profissional<br>
                            • Seguro Transporte de Cargas<br>
                            • Seguro Grandes Riscos
                        </p>
                        <p class="contato-info"><i class="fas fa-phone"></i> (27) 3183-7500</p>
                        <div class="links">
                            <a href="https://vixmaster.aggilizador.com.br/" target="_blank"><i class="fas fa-globe"></i> Site</a>
                        </div>
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
        ativarAba(hash);
    }
});
</script>
