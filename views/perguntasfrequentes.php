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

    /* ===== FAQ / ACCORDION ===== */
    .faq-lista {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .faq-item {
        background: #fff;
        border: 1px solid #e8ecf1;
        border-radius: 10px;
        overflow: hidden;
        transition: var(--transicao);
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    .faq-item:hover {
        border-color: var(--cor-primaria-clara);
        box-shadow: 0 4px 14px rgba(33, 97, 145, 0.08);
    }
    .faq-item.aberto {
        border-color: var(--cor-primaria);
        box-shadow: 0 4px 18px rgba(33, 97, 145, 0.12);
    }

    .faq-pergunta {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 18px 22px;
        cursor: pointer;
        border: none;
        background: transparent;
        width: 100%;
        text-align: left;
        font-size: 0.98rem;
        font-weight: 600;
        color: var(--cor-primaria);
        transition: var(--transicao);
        line-height: 1.5;
    }
    .faq-pergunta:hover {
        background: var(--cor-primaria-clara);
        color: var(--cor-primaria-escura);
    }
    .faq-pergunta .faq-numero {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--cor-primaria-gradient);
        color: #fff;
        font-size: 0.85rem;
        font-weight: 700;
        flex-shrink: 0;
    }
    .faq-item.aberto .faq-pergunta .faq-numero {
        background: var(--cor-dourada);
    }
    .faq-pergunta .faq-texto {
        flex: 1;
    }
    .faq-pergunta .faq-seta {
        font-size: 0.85rem;
        color: #999;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }
    .faq-item.aberto .faq-pergunta .faq-seta {
        transform: rotate(180deg);
        color: var(--cor-primaria);
    }

    .faq-resposta {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.4s ease;
    }
    .faq-item.aberto .faq-resposta {
        max-height: 500px;
        padding: 0 22px 18px 72px;
    }
    .faq-resposta p {
        color: #555;
        line-height: 1.7;
        font-size: 0.93rem;
        margin-bottom: 0;
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

        .faq-pergunta {
            padding: 14px 16px;
            font-size: 0.9rem;
            gap: 10px;
        }
        .faq-pergunta .faq-numero {
            min-width: 30px;
            height: 30px;
            font-size: 0.78rem;
        }
        .faq-item.aberto .faq-resposta {
            padding: 0 16px 14px 56px;
        }
    }

    @media (max-width: 480px) {
        .faq-item.aberto .faq-resposta {
            padding: 0 16px 14px 16px;
        }
    }
</style>

<!-- ===== HERO ===== -->
<section class="pagina-hero">
    <h1><i class="fas fa-question-circle"></i> Perguntas Frequentes</h1>
    <p>Encontre respostas para as dúvidas mais comuns sobre o CRT-ES</p>
</section>

<!-- ===== CONTEÚDO ===== -->
<div class="pagina-wrapper">

    <div class="aba-card">
        <h2 class="aba-titulo"><i class="fas fa-question-circle"></i> Perguntas Frequentes</h2>

        <div class="faq-lista">
            <!-- Pergunta 1 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">1</span>
                    <span class="faq-texto">Como foi criado o Conselho Federal dos Técnicos Industriais?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>A lei de criação do Conselho Federal e Conselhos Regionais dos Técnicos Industriais é a nº 13.639/2018, publicada em 27 de março de 2018.</p>
                </div>
            </div>

            <!-- Pergunta 2 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">2</span>
                    <span class="faq-texto">É necessária a emissão de uma nova carteira de identificação profissional?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Sim. A carteira de identificação profissional do técnico é confeccionada pelo CFT.</p>
                </div>
            </div>

            <!-- Pergunta 3 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">3</span>
                    <span class="faq-texto">Como ficam as atividades profissionais dos técnicos?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Com a criação do conselho próprio, os técnicos podem exercer suas atividades livremente dentro dos parâmetros legais estabelecidos pela legislação (Lei nº 5.524/1968 e Decreto nº 90.922/1985).</p>
                </div>
            </div>

            <!-- Pergunta 4 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">4</span>
                    <span class="faq-texto">As empresas podem se registrar nos CRTs e os técnicos podem ser "responsáveis técnicos"?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Nos casos em que o técnico é o "responsável técnico", haverá necessidade da empresa procurar o CRT para efetuar o registro, solicitando a inclusão do profissional como "responsável técnico".</p>
                </div>
            </div>

            <!-- Pergunta 5 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">5</span>
                    <span class="faq-texto">Os órgãos públicos e concessionárias aceitam o TRT (Termo de Responsabilidade Técnica)?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Eles são obrigados a aceitar, pois o CFT e os CRTs constituem autarquias criadas por lei federal, com o mesmo valor e grau de importância de outras já existentes.</p>
                </div>
            </div>

            <!-- Pergunta 6 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">6</span>
                    <span class="faq-texto">A empresa deverá obrigatoriamente continuar registrada no CREA e no Conselho Federal dos Técnicos Industriais?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Não. A empresa que tiver apenas técnico como "responsável técnico" deverá solicitar o cancelamento do registro no CREA e manter registro apenas no CRT.</p>
                </div>
            </div>

            <!-- Pergunta 7 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">7</span>
                    <span class="faq-texto">Estou me formando em curso técnico, como faço para me registrar no CRT do meu estado?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>O registro é feito no Portal do CFT, ou pelo site dos CRT de seu estado ou região.</p>
                </div>
            </div>

            <!-- Pergunta 8 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">8</span>
                    <span class="faq-texto">Como faço para registrar o TRT?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>No site, em seu ambiente profissional, pelo link.</p>
                </div>
            </div>

            <!-- Pergunta 9 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">9</span>
                    <span class="faq-texto">Se sou Técnico em Segurança do Trabalho, também faço parte do Conselho Federal dos Técnicos Industriais?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Não. O Técnico em Segurança do Trabalho não poderá se registrar no CRT.</p>
                </div>
            </div>

            <!-- Pergunta 10 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">10</span>
                    <span class="faq-texto">Sou Técnico Industrial e também Técnico Agrícola, para qual conselho será enviado meu cadastro?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Inicialmente, conforme decisão plenária do CONFEA seu cadastro não será encaminhado para nenhum dos conselhos. Nesse caso, nós o orientamos a procurar o CREA de seu estado e apresentar sua opção.</p>
                </div>
            </div>

            <!-- Pergunta 11 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">11</span>
                    <span class="faq-texto">Agora que temos um conselho próprio (CFT), o CREA poderá continuar fiscalizando minha atividade profissional ou emitindo multas?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Não. O CREA não terá mais essa competência de fiscalizar a atividade profissional dos técnicos, bem como as empresas cujos "responsáveis técnicos" sejam técnicos. Essa responsabilidade será total e exclusiva do CFT/CRT.</p>
                </div>
            </div>

            <!-- Pergunta 12 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">12</span>
                    <span class="faq-texto">Como fica o acervo técnico que mantenho com o CREA?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>Ele será repassado para o CRT, conforme determina a Lei nº 13.639/2018.</p>
                </div>
            </div>

            <!-- Pergunta 13 -->
            <div class="faq-item">
                <button class="faq-pergunta" onclick="toggleFaq(this)">
                    <span class="faq-numero">13</span>
                    <span class="faq-texto">No CFT há emissão de ART – Anotação de Responsabilidade Técnica, nos Conselhos Regionais (CRTs)?</span>
                    <i class="fas fa-chevron-down faq-seta"></i>
                </button>
                <div class="faq-resposta">
                    <p>A ART foi substituída pelo TRT – Termo de Responsabilidade Técnica, que deverá ser emitido pelo profissional técnico conforme orientações do CFT e dos CRTs.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
// Script para alternar as perguntas (accordion)
function toggleFaq(btn) {
    const faqItem = btn.parentElement;
    const isAberto = faqItem.classList.contains('aberto');
    
    // Fecha este se estiver aberto
    if (isAberto) {
        faqItem.classList.remove('aberto');
        return;
    }
    
    // Fecha todos os outros
    document.querySelectorAll('.faq-item.aberto').forEach(function(item) {
        item.classList.remove('aberto');
    });
    
    // Abre o clicado
    faqItem.classList.add('aberto');
}
</script>