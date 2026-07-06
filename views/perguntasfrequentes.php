<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: Arial, Helvetica, sans-serif;
        background: #f4f6fb;
        color: #333;
    }

    .faq-section{
        width: 100%;
        padding: 60px 20px;
    }

    .faq-container{
        max-width: 1000px;
        margin: auto;
    }

    .faq-header{
        text-align: center;
        margin-bottom: 40px;
    }

    .faq-header h1{
        font-size: 42px;
        color: #0d3b66;
        margin-bottom: 10px;
    }

    .faq-header p{
        color: #666;
        font-size: 18px;
    }

    .faq-item{
        background: #fff;
        border-radius: 14px;
        margin-bottom: 18px;
        overflow: hidden;
        box-shadow: 0 5px 18px rgba(0,0,0,0.06);
        transition: 0.3s;
    }

    .faq-item:hover{
        transform: translateY(-2px);
    }

    .faq-question{
        width: 100%;
        border: none;
        outline: none;
        background: #fff;
        padding: 22px;
        text-align: left;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 17px;
        font-weight: bold;
        color: #0d3b66;
        transition: 0.3s;
    }

    .faq-question.active{
        background: #0d3b66;
        color: #fff;
    }

    .faq-question .left{
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .faq-question i{
        font-size: 18px;
    }

    .faq-answer{
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
        background: #fff;
    }

    .faq-answer-content{
        padding: 0 22px 22px;
        line-height: 1.8;
        color: #555;
        font-size: 15px;
    }

    .faq-question.active + .faq-answer{
        border-top: 1px solid #eee;
    }

    @media(max-width: 768px){

        .faq-header h1{
            font-size: 32px;
        }

        .faq-question{
            font-size: 15px;
            padding: 18px;
        }

        .faq-answer-content{
            font-size: 14px;
        }

    }
</style>
<section class="faq-section">

    <div class="faq-container">

        <div class="faq-header">
            <h1>Perguntas Frequentes</h1>
            <p>Confira as principais dúvidas da população sobre a Câmara Municipal</p>
        </div>

        <!-- FAQ ITEM -->
        <div class="faq-item">
            <button class="faq-question active">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    O que é a Câmara Municipal?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer" style="max-height: 300px;">
                <div class="faq-answer-content">
                    A Câmara Municipal é o órgão do Poder Legislativo responsável por representar a população, elaborar leis, fiscalizar os atos do Poder Executivo e acompanhar a aplicação dos recursos públicos.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    Qual é a função dos vereadores?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    Os vereadores têm a função de propor leis, apresentar indicações e requerimentos, fiscalizar a Prefeitura, votar projetos de interesse da população e representar os cidadãos do município.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    Como posso acompanhar as sessões da Câmara?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    As sessões podem ser acompanhadas presencialmente no plenário da Câmara ou por meio das transmissões online disponibilizadas no site e nas redes sociais oficiais.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    As sessões da Câmara são públicas?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    Sim. As sessões são públicas e abertas à participação da população, salvo situações excepcionais previstas em lei.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    Quando acontecem as sessões ordinárias?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    As sessões ordinárias da Câmara Municipal acontecem toda primeira segunda-feira útil de cada mês, conforme calendário legislativo.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    Como posso apresentar uma sugestão, reclamação ou denúncia?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    O cidadão pode utilizar a Ouvidoria da Câmara para registrar sugestões, elogios, reclamações, solicitações ou denúncias.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    O que é a Ouvidoria da Câmara?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    A Ouvidoria é o canal oficial de comunicação entre a população e a Câmara Municipal.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    O que é o Portal da Transparência?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    É a ferramenta que permite ao cidadão acompanhar receitas, despesas, licitações, contratos e demais informações públicas.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    Onde posso consultar leis e projetos em tramitação?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    As leis municipais e projetos podem ser consultados no portal legislativo disponível no site oficial da Câmara.
                </div>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                <div class="left">
                    <i class="fa-solid fa-circle-question"></i>
                    Como participar das sessões e usar a tribuna?
                </div>

                <i class="fa-solid fa-chevron-down"></i>
            </button>

            <div class="faq-answer">
                <div class="faq-answer-content">
                    O cidadão pode acompanhar presencialmente ou pelas transmissões oficiais, além de utilizar a Tribuna Livre mediante inscrição prévia.
                </div>
            </div>
        </div>

    </div>

</section>

<script>
    const questions = document.querySelectorAll('.faq-question');

    questions.forEach(question => {

        question.addEventListener('click', () => {

            const answer = question.nextElementSibling;
            const isActive = question.classList.contains('active');

            document.querySelectorAll('.faq-question').forEach(item => {
                item.classList.remove('active');
            });

            document.querySelectorAll('.faq-answer').forEach(item => {
                item.style.maxHeight = null;
            });

            if(!isActive){
                question.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }

        });

    });
</script>