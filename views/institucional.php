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

    .aba-card ul {
        color: #444;
        line-height: 1.7;
        margin-bottom: 14px;
        padding-left: 20px;
        font-size: 0.98rem;
    }
    .aba-card ul li {
        margin-bottom: 6px;
    }

    /* ===== LINHA DO TEMPO (HISTÓRIA) ===== */
    .linha-tempo {
        position: relative;
        padding-left: 30px;
    }
    .linha-tempo::before {
        content: '';
        position: absolute;
        left: 8px;
        top: 0;
        bottom: 0;
        width: 3px;
        background: var(--cor-primaria-clara);
        border-radius: 2px;
    }
    .ano-bloco {
        position: relative;
        margin-bottom: 30px;
    }
    .ano-bloco::before {
        content: '';
        position: absolute;
        left: -26px;
        top: 6px;
        width: 14px;
        height: 14px;
        background: var(--cor-primaria);
        border-radius: 50%;
        border: 3px solid var(--cor-primaria-clara);
    }
    .ano-bloco h3 {
        color: var(--cor-primaria);
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .ano-bloco p {
        color: #555;
        line-height: 1.7;
        font-size: 0.95rem;
    }

    /* ===== CARDS DE DIRETORIA / CONSELHEIROS ===== */
    .grade-cards {
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
    .cartao-pessoa img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 14px;
        border: 3px solid var(--cor-primaria-clara);
    }
    .cartao-pessoa h3 {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--cor-primaria);
        margin-bottom: 4px;
    }
    .cartao-pessoa .cargo {
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--cor-dourada);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
    }
    .cartao-pessoa .modalidade {
        font-size: 0.82rem;
        color: #777;
        margin-bottom: 4px;
    }

    /* ===== TABELA DE MODALIDADES ===== */
    .tabela-modalidades {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        font-size: 0.9rem;
    }
    .tabela-modalidades th {
        background: var(--cor-primaria);
        color: #fff;
        padding: 12px 16px;
        text-align: left;
        font-weight: 600;
    }
    .tabela-modalidades td {
        padding: 10px 16px;
        border-bottom: 1px solid #eee;
        color: #444;
    }
    .tabela-modalidades tr:hover td {
        background: var(--cor-primaria-clara);
    }
    .tabela-modalidades a {
        color: var(--cor-primaria);
        font-weight: 600;
        text-decoration: none;
    }
    .tabela-modalidades a:hover {
        color: var(--cor-dourada);
        text-decoration: underline;
    }

    /* ===== SEÇÃO MISSÃO/VISÃO/VALORES ===== */
    .missao-box {
        background: var(--cor-primaria-clara);
        border-radius: 10px;
        padding: 20px 24px;
        margin-bottom: 20px;
        border-left: 4px solid var(--cor-primaria);
    }
    .missao-box h3 {
        color: var(--cor-primaria);
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 8px;
    }
    .missao-box p {
        margin-bottom: 0 !important;
    }

    .valores-grade {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 12px;
        margin-top: 15px;
    }
    .valor-item {
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 16px;
        text-align: center;
        font-weight: 600;
        color: var(--cor-primaria);
        transition: var(--transicao);
    }
    .valor-item:hover {
        background: var(--cor-primaria-clara);
        border-color: var(--cor-primaria);
        transform: translateY(-3px);
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

        .grade-cards {
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 14px;
        }
        .linha-tempo {
            padding-left: 24px;
        }
        .tabela-modalidades {
            font-size: 0.78rem;
        }
        .tabela-modalidades th,
        .tabela-modalidades td {
            padding: 8px 10px;
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
        .valores-grade {
            grid-template-columns: 1fr 1fr;
        }
    }
</style>

<!-- ===== HERO ===== -->
<section class="pagina-hero">
    <h1><i class="fas fa-landmark"></i> Institucional</h1>
    <p>Conheça a história, diretoria, conselheiros e valores do CRT-ES</p>
</section>

<!-- ===== CONTEÚDO ===== -->
<div class="pagina-wrapper">

    <!-- Abas -->
    <nav class="abas-navegacao" role="tablist">
        <button class="aba-link ativo" data-aba="historia" role="tab">
            <i class="fas fa-book-open"></i> História
        </button>
        <button class="aba-link" data-aba="diretoria" role="tab">
            <i class="fas fa-users"></i> Diretoria (2026/2030)
        </button>
        <button class="aba-link" data-aba="conselheiros" role="tab">
            <i class="fas fa-user-tie"></i> Conselheiros
        </button>
        <button class="aba-link" data-aba="quemsao" role="tab">
            <i class="fas fa-hard-hat"></i> Quem são os Técnico(a)s Industriais?
        </button>
        <button class="aba-link" data-aba="missao" role="tab">
            <i class="fas fa-bullseye"></i> Missão, Visão e Valores
        </button>
    </nav>

    <!-- ===== ABA: HISTÓRIA ===== -->
    <div class="aba-conteudo ativo" id="aba-historia">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-book-open"></i> História</h2>
            <p><strong>CFT – Conselho Federal dos Técnico(a)s Industriais: uma luta de mais de quatro décadas</strong></p>
            <p>Há mais de quatro décadas que um grupo de Técnico(a)s iniciou um trabalho pela regulamentação profissional da categoria – Lei nº 5.524/1968 e Decreto nº 90.922/1985, e a criação do conselho próprio. Em 26 de março de 2018, a sanção presidencial da Lei nº 13.639/2018 representa não somente mais uma conquista histórica, mas principalmente a concretização de um ciclo político e o início de uma nova época, com mais segurança à sociedade e valorização profissional para milhões de Técnico(a)s, devidamente reconhecidos como profissionais imprescindíveis para o desenvolvimento do país.</p>
            <p><strong>Acompanhe os principais fatos, de 1968 a 2018, que marcaram a criação do CFT – Conselho Federal dos Técnico(a)s Industriais:</strong></p>

            <div class="linha-tempo">
                <div class="ano-bloco">
                    <h3>1968</h3>
                    <p>Historicamente os Técnico(a)s sempre foram subjugados e achincalhados por determinadas categorias ditas superiores, sendo até chamados pejorativamente de "denorex" – num infeliz trocadilho com aquele famoso bordão publicitário – e insinuando que eles pareciam engenheiros, mas não passavam de meros auxiliares. Revoltados e indignados com o tratamento proveniente do Sistema CONFEA/CREA, no final da década de 1960 um grupo apoiado pelas escolas técnicas deu início ao movimento pela regulamentação profissional e criação do conselho próprio; na verdade, disseminando uma ideia para beneficiar as gerações futuras, os milhares de jovens formados nas mais diversas modalidades, devidamente preparados e habilitados para exercer a profissão com dignidade e respeito.</p>
                </div>

                <div class="ano-bloco">
                    <h3>1979</h3>
                    <p>A discriminação dos Técnico(a)s continuava, mas a cada dia o movimento ganhava mais força. Liderados por Wilson Wanderlei Vieira, em 18 de agosto de 1979 os Técnico(a)s paulistas realizaram a assembleia de fundação da ATESP – Associação Profissional dos Técnico(a)s Industriais do Estado de São Paulo na Escola Técnica Getúlio Vargas, uma das mais importantes instituições de ensino Técnico(a) do estado e do país. Entre os objetivos traçados pela associação pré-sindical estavam a regulamentação profissional, a transformação das associações em sindicatos e a representatividade no Sistema CONFEA/CREA; ou seja, reacendendo aquela chama ideológica da década anterior para que um dia a categoria tivesse um conselho independente para a fiscalização de suas atividades profissionais.</p>
                </div>

                <div class="ano-bloco">
                    <h3>1980 a 1982</h3>
                    <p>Em janeiro de 1980 a ATESP realizou o 1º Encontro Nacional dos Técnico(a)s Industriais em São Paulo, com o objetivo de discutir e elaborar o anteprojeto de regulamentação da Lei nº 5.524/1968, bem como a criação do conselho próprio. De forma unânime as entidades participantes apoiaram a iniciativa: APROTICE – Associação Profissional dos Técnico(a)s do Estado do Ceará; ATIMIG – Associação dos Técnico(a)s Industriais de Minas Gerais; ACTINIME – Associação Civil de Técnico(a)s Industriais de Nível Médio, do Espírito Santo; ATIBA – Associação dos Técnico(a)s Industriais da Bahia; e ATAGO – Associação dos Técnico(a)s Agrícolas do Estado de Goiás. Discutida e aprovada a minuta da regulamentação profissional foi entregue ao presidente da República João Baptista de Oliveira Figueiredo numa audiência realizada em 17 de abril de 1980, agendada pelo senador Jarbas Passarinho. Também foi abordada a criação do conselho próprio; e na ocasião, o companheiro Sérgio Luiz Chautard trouxe mais uma entidade para fortalecer o movimento: a APTO – Associação Paranaense de Técnico(a)s. Um novo e marcante evento e com grande destaque da imprensa aconteceu em março de 1982, quando mais de 2 mil Técnico(a)s reuniram-se na Câmara Municipal de São Bernardo do Campo (SP) durante o 1º Congresso dos Técnico(a)s, também realizado pela ATESP com o propósito de angariar apoio para a luta pela regulamentação profissional; caminhava, paralelamente, a firme intenção de criação do conselho próprio.</p>
                </div>

                <div class="ano-bloco">
                    <h3>1985 a 1988</h3>
                    <p>Após uma audiência e a promessa de apoio do ministro da Educação e Cultura, Rubem Carlos Ludwig, na qual participaram Wilson Wanderlei Vieira, pela ATESP; Sérgio Luiz Chautard, pela APTO; Aldo Martins, pela ATERGS – Associação Profissional dos Técnico(a)s Industriais do Rio Grande do Sul; e José Luiz Fortunato Vigil, pela ATESC – Associação dos Técnico(a)s Industriais de Santa Catarina, finalmente no dia 6 de fevereiro o presidente João Baptista de Oliveira Figueiredo assinou o Decreto nº 90.922/1985 regulamentando a Lei nº 5.524/1968. Imediatamente o Sistema CONFEA/CREA entrou com medida cautelar no STF – Supremo Tribunal Federal arguindo a inconstitucionalidade do decreto, que foi negada por nove votos a dois – e por nove votos a um, o julgamento do mérito. Há de se reconhecer o trabalho do diretor Marcos Antonio Borges, que conseguiu ligar diretamente para o ministro do STF, Sydney Sanches, para expor a situação e sensibilizá-lo em favor dos Técnico(a)s. Por ocasião do 17º aniversário da Lei nº 5.524/1968, os Técnico(a)s realizaram uma assembleia na Praça da Sé em São Paulo protestando contra o Sistema CONFEA/CREA pelo não cumprimento da regulamentação profissional, com direito a faixas e bonecos gigantes – de forma pacífica e bem-humorada. Em 1988 foi realizado o 1º Encontro Regional dos Técnico(a)s em Joinville (SC), contando com presidentes de vários sindicatos amparados legalmente pelo enquadramento sindical, como o SINTEC-SP – Sindicato dos Técnico(a)s Industriais do Estado de São Paulo; SINTEC-SC – Sindicato dos Técnico(a)s Industriais de Santa Catarina; SINTEC-RS – Sindicato dos Técnico(a)s Industriais do Rio Grande do Sul; SINTEC-PR – Sindicato dos Técnico(a)s Industriais do Estado do Paraná; além da ATIJ – Associação dos Técnico(a)s Industriais de Joinville, presidida por Ademir da Cunha. Em discussão o cumprimento da regulamentação profissional e, novamente, a criação do conselho próprio.</p>
                </div>

                <div class="ano-bloco">
                    <h3>1997 a 1999</h3>
                    <p>A conjectura para a criação do conselho próprio ganhou força com a publicação da Medida Provisória nº 1549/1997 e da Lei nº 9.649/1998 que, em seu artigo 58, modifica a estrutura dos conselhos transformando-os em entidades públicas de direito privado. Em 5 de outubro de 1999 o PLS nº 493, do senador Ernandes Amorim (PPB-RO), cuja emenda autorizava a criação do conselho, foi aprovado em tempo recorde no Senado Federal – cerca de 30 dias – e seguiu para a Câmara dos Deputados. Ainda em 1999, a representatividade dos Técnico(a)s no Sistema CONFEA/CREA foi amplamente debatida no I Congresso Nacional dos Técnico(a)s Industriais, antecedendo o III Congresso Nacional de Profissionais, realizados no mês de maio em Natal (RN). Na ocasião, o presidente do CONFEA – Conselho Federal de Engenharia, Arquitetura e Agronomia, Henrique Ludovice, apoiou a criação de seis vagas para conselheiros Técnico(a)s – três industriais, dois agrícolas e um representante das escolas técnicas. Então, o engenheiro Enildo Baptista Barros entrou com ação popular contra o sistema sob a alegação de que a representação dos Técnico(a)s e demais profissionais não estava prevista na Lei nº 5.194/1966, com a clara intenção de acabar com a representatividade dos Técnico(a)s – que, na verdade, aconteceu.</p>
                </div>

                <div class="ano-bloco">
                    <h3>2001</h3>
                    <p>Em 2001 a FENTEC – Federação Nacional dos Técnico(a)s Industriais, que liderava o movimento, deliberou por entrar com ação com base no artigo 10 da Constituição de 1988, o qual "assegura a participação dos trabalhadores e empregadores nos colegiados dos órgãos públicos em que seus interesses profissionais ou previdenciários sejam objeto de discussão e deliberação". Após o processo tramitar por quase 13 anos, em 8 de março de 2013 o TRF-DF 1ª Região – Tribunal Regional Federal do Distrito Federal indeferiu a ação.</p>
                </div>

                <div class="ano-bloco">
                    <h3>2007</h3>
                    <p>Na solenidade de posse da diretoria da FENTEC realizada no Memorial da América Latina em junho de 2007, com a presença de inúmeras autoridades nacionais e internacionais, o movimento dos Técnico(a)s ganhou mais um aliado que se tornaria essencial na conjectura para a criação do conselho, tanto que ele conquistou o carinhoso apelido de "padrinho" dos Técnico(a)s: o então deputado estadual Giovani Cherini que, à época, destacava-se como titular de importantes comissões e frentes parlamentares da ALRS – Assembleia Legislativa do Rio Grande do Sul. Por intermédio dele foi possível agendar uma audiência com o ministro do Trabalho e Emprego, Carlos Lupi, que se mostrou disposto a analisar e discutir o assunto.</p>
                </div>

                <div class="ano-bloco">
                    <h3>2013</h3>
                    <p>Em outubro de 2013 uma comitiva organizada pela FENTEC esteve em Brasília participando de uma audiência com os senadores Fernando Collor de Mello (PTB-AL) e Osvaldo Sobrinho (PTB-MT), autor e relator do PLS nº 356/2013, que pretendia alterar a Lei nº 8.195/1991 e, consequentemente, a Lei nº 5.194/1966, de maneira a democratizar e garantir a proporcionalidade dos Técnico(a)s no Sistema CONFEA/CREA. O Senado Federal aprovou o projeto por unanimidade, encaminhando-o para a Câmara dos Deputados.</p>
                </div>

                <div class="ano-bloco">
                    <h3>2014</h3>
                    <p>Mais um passo significativo para a criação do conselho próprio aconteceu em janeiro de 2014, quando o ministro do Trabalho e Emprego, Manoel Dias, assinou a Portaria nº 59 constituindo uma comissão para o estudo do desmembramento definitivo dos Técnico(a)s do Sistema CONFEA/CREA. A referida portaria foi assinada pelo ministro numa reunião realizada na SRTE/SC – Superintendência Regional do Trabalho e Emprego de Santa Catarina, com diversos líderes de entidades técnicas. A comissão realizou reuniões em várias capitais brasileiras, conhecendo as reivindicações dos Técnico(a)s e reunindo subsídios para elaborar um relatório e apresentá-lo ao ministro. Com a conclusão do trabalho a minuta do anteprojeto de lei foi encaminhada ao ministro-chefe da Casa Civil, Aloisio Mercadante.</p>
                </div>

                <div class="ano-bloco">
                    <h3>2015</h3>
                    <p>A mobilização se intensificou de vez a partir de março de 2015, quando a FENTEC, a ATABRASIL e a OITEC promoveram uma intensa campanha de caráter social e parlamentar com suas plataformas e ferramentas de comunicação – boletins informativos, site, redes sociais, etc –, elencando os motivos que justificavam a criação do conselho dos Técnico(a)s. Em defesa da criação do conselho, manifestaram publicamente nos boletins os deputados federais Paulão (PT-AL), Padre João (PT-MG) e Vicentinho (PT-SP). Mais parlamentares se mostraram favoráveis à causa, como Alceu Moreira (PMDB-RS), André Moura (PSC-SE), Esperidião Amin (PP-SC), Marco Maia (PT-RS), Roberto de Lucena (PV-SP), Valmir Prascidelli (PT-SP), Vanderlei Macris (PSDB-SP), entre outros.</p>
                </div>

                <div class="ano-bloco">
                    <h3>2016</h3>
                    <p>No dia 4 de maio de 2016 o governo federal encaminhou o PL nº 5179/2016 para a apreciação da Câmara dos Deputados, com o apoio do ministro do Trabalho e Previdência Social, Miguel Rossetto. Em seguida a importância da proposta foi ratificada pelo ministro Ronaldo Nogueira, por meio de Nota Técnica do MTE – Ministério do Trabalho e Emprego. Em 30 de novembro o projeto foi aprovado por unanimidade na CTASP – Comissão de Trabalho, de Administração e Serviço Público, com relatório favorável da deputada federal Flávia Morais (PDT-GO).</p>
                </div>

                <div class="ano-bloco">
                    <h3>2017</h3>
                    <p>Em 17 de maio de 2017 o projeto foi aprovado, novamente por unanimidade, na CFT – Comissão de Finanças e Tributação, com relatório favorável do deputado federal Mauro Pereira (PMDB-RS). Em 24 de agosto, numa verdadeira comprovação de força e união da categoria, os Técnico(a)s praticamente tomaram todos os assentos destinados aos visitantes durante a audiência pública extraordinária requisitada pelo deputado federal Esperidião Amin (PP-SC) para debate do PL nº 5179/2016, marcada por discursos das principais lideranças do movimento. Em 20 de setembro o projeto também foi aprovado por unanimidade na CCJC – Comissão de Constituição e Justiça e de Cidadania, a principal comissão da Câmara dos Deputados, com relatório do deputado federal Giovani Cherini (PR-RS). Após a tramitação na Câmara dos Deputados e a elaboração da Redação Final pelo deputado federal Capitão Augusto (PR-SP), o PL nº 5179/2016 foi encaminhado à SF-SEADI – Secretaria de Atas e Diários do Senado Federal e lida em plenário. Em seguida, foi aberta uma consulta pública para conhecer a opinião da população sobre o PLC nº 145/2017, número pelo qual o projeto passou a tramitar na nova casa.</p>
                </div>

                <div class="ano-bloco">
                    <h3>2018</h3>
                    <p>Em 27 de fevereiro de 2018 o PLC nº 145/2017 foi aprovado na CRA – Comissão de Agricultura e Reforma Agrária, com parecer favorável do senador Lasier Martins (PSD-RS) sob a justificativa de que a constituição do conselho concretiza uma reivindicação histórica dos Técnico(a)s e não acarreta em nenhum impacto fiscal aos cofres públicos. Graças ao apoio e à mobilização da senadora Rose de Freitas (PODE-ES), no dia seguinte o projeto entrou em pauta para votação no plenário do Senado Federal, sendo aprovado e encaminhado à sanção presidencial. No dia 6 março a SF-SEXPE – Secretaria de Expediente do Senado Federal remeteu um ofício ao ministro-chefe da Casa Civil, Eliseu Padilha, encaminhando a Mensagem nº 12/2018 ao presidente da República. Para colocar um fim à expectativa dos Técnico(a)s, no dia 26 de março o presidente Michel Temer sancionou a Lei nº 13.639/2018 criando o Conselho Federal e Regionais dos Técnico(a)s Industriais. No dia seguinte, a lei foi publicada no DOU – Diário Oficial da União [Edição 59 – Seção 1 – Página 1]. No dia 22 de junho foi eleita a primeira diretoria executiva e os conselheiros do CFT – Conselho Federal dos Técnico(a)s Industriais, na sede da CNPL – Confederação Nacional das Profissões Liberais, entidade designada para coordenar, em articulação com as federações, sindicatos e associações técnicas, o processo eleitoral conforme disposto no artigo 34 da Lei nº 13.639/2018.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== ABA: DIRETORIA ===== -->
    <div class="aba-conteudo" id="aba-diretoria">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-users"></i> Diretoria (2026/2030)</h2>

            <div class="grade-cards">
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/BernadinoPresidente.png" alt="Bernadino José Gomes">
                    <h3>Bernadino José Gomes</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">PRESIDENTE</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/HectorVice.png" alt="Hector Campos Scarpati">
                    <h3>Hector Campos Scarpati</h3>
                    <p class="modalidade">Técnico em Mecânica</p>
                    <p class="cargo">VICE-PRESIDENTE</p>
                </div>
            </div>

            <hr style="margin: 30px 0; border-color: #eee;">

            <div class="grade-cards">
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/diretores/AdrianaAdministrativo.jpeg" alt="Adriana dos Reis Souza Neto">
                    <h3>Adriana dos Reis Souza Neto</h3>
                    <p class="modalidade">Técnica em Refrigeração e Ar Condicionado e Técnica em Meio Ambiente</p>
                    <p class="cargo">DIRETORA ADMINISTRATIVA</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/diretores/Barbara.jpg" alt="Barbara Silva Cividanes da Hora">
                    <h3>Barbara Silva Cividanes da Hora</h3>
                    <p class="modalidade">Técnica em Meio Ambiente e Técnica em Segurança do Trabalho</p>
                    <p class="cargo">DIRETORA FINANCEIRA</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/diretores/Cleber.png" alt="Cleber dos Santos Fonseca">
                    <h3>Cleber dos Santos Fonseca</h3>
                    <p class="modalidade">Técnico em Metalurgia</p>
                    <p class="cargo">DIRETOR DE FISCALIZAÇÃO E NORMAS</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== ABA: CONSELHEIROS ===== -->
    <div class="aba-conteudo" id="aba-conselheiros">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-user-tie"></i> Conselheiros</h2>

            <div class="grade-cards">
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Admilson.jpeg" alt="Ademilson Pelengrino Bellon">
                    <h3>Ademilson Pelengrino Bellon</h3>
                    <p class="modalidade">Técnico em Eletrônica e Técnico em Agroindústria</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Vanderlei%20Donna.png" alt="Vanderlei José Mazocco Donna">
                    <h3>Vanderlei José Mazocco Donna</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Atila%20Frois.png" alt="Atila Sales Dias Frois">
                    <h3>Atila Sales Dias Frois</h3>
                    <p class="modalidade">Técnico em Eletromecânica e Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Bruno%20Anderson.png" alt="Bruno Anderson Lima Nunes">
                    <h3>Bruno Anderson Lima Nunes</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Franklin.png" alt="Franklin Correia de Matos">
                    <h3>Franklin Correia de Matos</h3>
                    <p class="modalidade">Técnico em Mecânica</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Jorge%20Ronei.png" alt="Jorge Ronei de Oliveira">
                    <h3>Jorge Ronei de Oliveira</h3>
                    <p class="modalidade">Técnico em Metalurgia</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Jefferson%20Fabrete.jpg" alt="Jeferson de Lima Fabrete">
                    <h3>Jeferson de Lima Fabrete</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Telmolopes.png" alt="Telmo Lopes Sodré Filho">
                    <h3>Telmo Lopes Sodré Filho</h3>
                    <p class="modalidade">Técnico em Estradas</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/João%20Felipe.png" alt="João Felipe Gurtler Cruz">
                    <h3>João Felipe Gurtler Cruz</h3>
                    <p class="modalidade">Técnico em Automação Industrial</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Joao.jpg" alt="João Carlos Cruz">
                    <h3>João Carlos Cruz</h3>
                    <p class="modalidade">Técnico em Mecânica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/João%20Pedro.png" alt="João Pedro Peres Gonçalves">
                    <h3>João Pedro Peres Gonçalves</h3>
                    <p class="modalidade">Técnico em Eletrotécnica e Técnico em Automação Industrial</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/semfoto.png" alt="Marcio Leandro Pereira">
                    <h3>Marcio Leandro Pereira</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Katiane%20Nali.png" alt="Katiane Barbosa Siqueira Nalli">
                    <h3>Katiane Barbosa Siqueira Nalli</h3>
                    <p class="modalidade">Técnica em Automação Industrial</p>
                    <p class="cargo">Conselheira Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/semfoto.png" alt="Maria Eduarda Amorim Oliveira">
                    <h3>Maria Eduarda Amorim Oliveira</h3>
                    <p class="modalidade">Técnica em Eletrotécnica</p>
                    <p class="cargo">Conselheira Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Ledyson.jpg" alt="Ledyson Karlos Balbino Chieppe">
                    <h3>Ledyson Karlos Balbino Chieppe</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Luiz%20Henrique.png" alt="Luiz Henrique Dias">
                    <h3>Luiz Henrique Dias</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Ludymylla%20Dias.png" alt="Ludymylla Dias Gusmão">
                    <h3>Ludymylla Dias Gusmão</h3>
                    <p class="modalidade">Técnica em Eletrotécnica</p>
                    <p class="cargo">Conselheira Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Dayane.png" alt="Dayane Rodrigues Espírito Santo">
                    <h3>Dayane Rodrigues Espírito Santo</h3>
                    <p class="modalidade">Técnica em Eletrotécnica</p>
                    <p class="cargo">Conselheira Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/semfoto.png" alt="Olivier José Pereira">
                    <h3>Olivier José Pereira</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/semfoto.png" alt="Renato Rocha Lozer">
                    <h3>Renato Rocha Lozer</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Quedilza.jpg" alt="Quedilza da Silva Dias">
                    <h3>Quedilza da Silva Dias</h3>
                    <p class="modalidade">Técnica em Agrimensura e Especialização em Georreferenciamento</p>
                    <p class="cargo">Conselheira Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/semfoto.png" alt="Daiane Ayres Souza">
                    <h3>Daiane Ayres Souza</h3>
                    <p class="modalidade">Técnica em Edificações</p>
                    <p class="cargo">Conselheira Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Rodrigo.jpg" alt="Rodrigo de Oliveira Silva">
                    <h3>Rodrigo de Oliveira Silva</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Soleandro.png" alt="Soleandro Gonçalves dos Santos">
                    <h3>Soleandro Gonçalves dos Santos</h3>
                    <p class="modalidade">Técnico em Mecânica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Rogilberto.png" alt="Rogilberto Silva dos Santos">
                    <h3>Rogilberto Silva dos Santos</h3>
                    <p class="modalidade">Técnico em Automação Industrial</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Walcler.png" alt="Walcler Filippo Croce">
                    <h3>Walcler Filippo Croce</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Telmo%20Lucio.png" alt="Telmo Lucio de Sousa">
                    <h3>Telmo Lucio de Sousa</h3>
                    <p class="modalidade">Técnico em Instrumentação</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Breno.png" alt="Breno Henrique Tavares Gomes">
                    <h3>Breno Henrique Tavares Gomes</h3>
                    <p class="modalidade">Técnico em Eletrônica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Thafarel.jpg" alt="Thafarel dos Santos Bonela">
                    <h3>Thafarel dos Santos Bonela</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Titular</p>
                </div>
                <div class="cartao-pessoa">
                    <img src="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/img/conselheiros/Lucas%20Barros.png" alt="Lucas Barros Veras de Sousa">
                    <h3>Lucas Barros Veras de Sousa</h3>
                    <p class="modalidade">Técnico em Eletrotécnica</p>
                    <p class="cargo">Conselheiro Suplente</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== ABA: QUEM SÃO OS TÉCNICO(A)S ===== -->
    <div class="aba-conteudo" id="aba-quemsao">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-hard-hat"></i> Quem são os Técnico(a)s Industriais?</h2>
            <p>Técnico(a)s Industriais são profissionais liberais com profissão regulamentada pela Lei nº 5.524/1968 e Decreto nº 90.922/1985, devidamente habilitados para o desempenho de suas atribuições, como empregados do setor público e privado, empregadores autônomos ou prestadores de serviços.</p>
            <p>Formados em cursos regulares que objetivam capacitá-los com conhecimentos teóricos e práticos em suas devidas áreas de atuação, os Técnico(a)s Industriais contam com uma grande quantidade de modalidades voltadas para o setor Técnico(a) e tecnológico de acordo com suas preferências profissionais, que oferecem excelentes oportunidades de inserção imediata no mercado de trabalho.</p>
            <p>O Sistema CFT/CRTs possui 176 modalidades técnicas industriais. Ao longo dos 6 anos de existência do CFT, 65 modalidades técnicas já estão respaldadas com resoluções, número este que está em constante atualização. As resoluções determinam o que cada modalidade pode fazer na área de atuação.</p>
            <p>Se sua modalidade ainda não possui resolução, consulte o <a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/DECRETO-90922-1985.pdf" target="_blank">Decreto 90.922/1985</a>.</p>

            <div style="overflow-x: auto;">
                <table class="tabela-modalidades">
                    <thead>
                        <tr>
                            <th>Modalidade</th>
                            <th>Resolução</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Técnico(a) Cibersistemas para Automação</td><td>-</td></tr>
                        <tr><td>Técnico(a) de Operação de Sonar</td><td>-</td></tr>
                        <tr><td>Técnico(a) Desenhista de Arquitetura</td><td>-</td></tr>
                        <tr><td>Técnico(a) Desenhista de Máquinas</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Ações de Comandos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Açúcar e Álcool</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-232-2023.pdf" target="_blank">RESOLUÇÃO Nº 232, DE 06 DE SETEMBRO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Aeronaves</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Aeroportuário</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Agrimensura</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-089-2019.pdf" target="_blank">RESOLUÇÃO Nº 089, DE 06 DE DEZEMBRO DE 2019</a></td></tr>
                        <tr><td>Técnico(a) em Agroindústria</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-246-2023.pdf" target="_blank">RESOLUÇÃO Nº 246, DE 20 DE DEZEMBRO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Alimentos</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-095-2020.pdf" target="_blank">RESOLUÇÃO Nº 095 DE 13 FEVEREIRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Armamento de Aeronaves</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Artes Gráficas</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Artilharia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Artilharia Antiaérea</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Automação Industrial</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-119-2020.pdf" target="_blank">RESOLUÇÃO Nº 119 DE 14 DE DEZEMBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Automação Industrial Eletrônica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Automobilística</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Biocombustíveis</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Biomédicos</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-136-2021.pdf" target="_blank">RESOLUÇÃO Nº 136, DE 02 DE JULHO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Biotecnologia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Bombeiro Aeronáutico</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Calçados</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-167-2022.pdf" target="_blank">RESOLUÇÃO Nº 167 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Cavalaria</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Celulose</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Celulose e Papel</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-231-2023.pdf" target="_blank">RESOLUÇÃO Nº 231, 06 DE SETEMBRO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Cerâmica</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-173-2022.pdf" target="_blank">RESOLUÇÃO Nº 173 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Cerveja e Refrigerantes</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Cervejaria</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-259-2024.pdf" target="_blank">RESOLUÇÃO Nº 259 DE 03 DE ABRIL DE 2024</a></td></tr>
                        <tr><td>Técnico(a) em Combate a Incêndio, Resgate e Prevenção de Acidentes de Aviação</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Computação Gráfica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Comunicações Aeronáuticas</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Comunicações Navais</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Construção Civil</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-058-2019.pdf" target="_blank">RESOLUÇÃO Nº 058, DE 22 DE MARÇO DE 2019</a></td></tr>
                        <tr><td>Técnico(a) em Construção de Máquinas e Motores</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Construção Naval</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-145-2021.pdf" target="_blank">RESOLUÇÃO Nº 145, DE 2 DE SETEMBRO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Controle Ambiental</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Controle de Qualidade de Alimentos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Controle de Tráfego Aéreo</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Curtimento</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Decoração</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Desenho de Construção Civil</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-122-2020.pdf" target="_blank">RESOLUÇÃO Nº 122 DE 14 DE DEZEMBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Desenho de Projetos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Desenho de Projetos - Mecânica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Desenho Militar</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Desenvolvimento de Sistemas</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Design de Calçados</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-168-2022.pdf" target="_blank">RESOLUÇÃO Nº 168 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Design de Interiores</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-096-2020.pdf" target="_blank">RESOLUÇÃO CFT N 096 DE 13 DE FEVEREIRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Design de Joias</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Design de Moveis</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Edificações</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-058-2019.pdf" target="_blank">RESOLUÇÃO Nº 058, DE 22 DE MARÇO DE 2019</a></td></tr>
                        <tr><td>Técnico(a) em Eletricidade</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Eletricidade e Instrumentos Aeronáuticos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Eletroeletrônica</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-118-2020.pdf" target="_blank">RESOLUÇÃO Nº 118 DE 14 DE DEZEMBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Eletromecânica</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-121-2020.pdf" target="_blank">RESOLUÇÃO Nº 121 de 14 DE DEZEMBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Eletrônica</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-111-2020.pdf" target="_blank">RESOLUÇÃO Nº 111, DE 08 DE OUTUBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Eletrônica - Telecomunicações</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Eletrotécnica</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-074-2019.pdf" target="_blank">RESOLUÇÃO N 074 DE 05 DE JULHO DE 2019</a></td></tr>
                        <tr><td>Técnico(a) em Equipamento de Engenharia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Equipamentos Biomédicos</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-136-2021.pdf" target="_blank">RESOLUÇÃO Nº 136, DE 02 DE JULHO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Equipamentos de Voo</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Equipamentos Pesqueiros</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Estradas</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-109-2020.pdf" target="_blank">RESOLUÇÃO Nº 109, DE 08 DE OUTUBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Estradas e Pontes</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Estrutura e Pintura de Aeronaves</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Estruturas Navais</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Fabricação de Instrumentos Musicais</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Fabricação Mecânica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Ferramentaria</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Forças Especiais</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Fotogrametria</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Fotointeligência</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Gasoterapia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Geodésia E Cartografia</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-089-2019.pdf" target="_blank">RESOLUÇÃO 089, DE 06 DE DEZEMBRO DE 2019</a></td></tr>
                        <tr><td>Técnico(a) em Geologia</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-102-2020.pdf" target="_blank">RESOLUÇÃO Nº 102, DE 25 DE JUNHO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Geomática</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Geomensura</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Geoprocessamento</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-089-2019.pdf" target="_blank">RESOLUÇÃO 089, DE 06 DE DEZEMBRO DE 2019</a></td></tr>
                        <tr><td>Técnico(a) em Geotecnia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Guarda e Segurança</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Hidrografia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Hidrologia</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-139-2021.pdf" target="_blank">RESOLUÇÃO Nº 139, DE 02 DE JULHO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Impressão Offset</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Impressão Rotográfica e Flexográfica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Infantaria</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Informações Aeronáuticas</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Informática</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-146-2021.pdf" target="_blank">RESOLUÇÃO Nº 146 DE 2 DE SETEMBRO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Informática Industrial</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-146-2021.pdf" target="_blank">RESOLUÇÃO Nº 146 DE 2 DE SETEMBRO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Informática para Internet</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Inspeção de Equipamentos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Instrumentação</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-260-2024.pdf" target="_blank">RESOLUÇÃO Nº 260 DE 03 DE ABRIL DE 2024</a></td></tr>
                        <tr><td>Técnico(a) em Joalheria</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Malharia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manobras e Equipamentos de Convés</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manutenção Aeronáutica em Célula</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-176-2022.pdf" target="_blank">RESOLUÇÃO Nº 176 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Manutenção Automotiva</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-140-2021.pdf" target="_blank">RESOLUÇÃO Nº 140, DE 02 DE JULHO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Manutenção De Aeronáutica</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-175-2022.pdf" target="_blank">RESOLUÇÃO Nº 175 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Manutenção de Aeronáutica em Aviônicos</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-174-2022.pdf" target="_blank">RESOLUÇÃO Nº 174 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Manutenção de Aeronaves</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manutenção de Aeronaves em Aviônicos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manutenção de Aeronaves em Célula</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manutenção de Aeronaves em Grupo Motopropulsor</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-175-2022.pdf" target="_blank">RESOLUÇÃO Nº 175 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Manutenção de Computadores</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manutenção de Equipamentos Médico-Hospitalares</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manutenção de Máquinas Industriais</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-216-2023.pdf" target="_blank">RESOLUÇÃO Nº 216, DE 29 DE MARÇO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Manutenção De Máquinas Navais</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-144-2021.pdf" target="_blank">RESOLUÇÃO Nº 144, DE 2 DE SETEMBRO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Manutenção de Máquinas pesadas</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manutenção De Sistemas Metroferroviários</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-233-2023.pdf" target="_blank">RESOLUÇÃO Nº 233, DE 06 DE SETEMBRO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Manutenção e Suporte em Informática</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Manutenção Elétrica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Maquetaria</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Máquinas</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Máquinas e Motores</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Máquinas Navais</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Material Bélico</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Mecânica</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-101-2020.pdf" target="_blank">RESOLUÇÃO Nº 101 DE 04 DE JUNHO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Mecânica de Aeronaves</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Mecânica de Precisão</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Mecatrônica</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-120-2020.pdf" target="_blank">RESOLUÇÃO Nº 120 DE 14 DE DEZEMBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Meio Ambiente</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-110-2020.pdf" target="_blank">RESOLUÇÃO Nº 110, DE 08 DE OUTUBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Mergulho</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Metalmecânica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Metalurgia</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-128-2021.pdf" target="_blank">RESOLUÇÃO Nº 128 DE 08 MARÇO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Meteorologia</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-247-2023.pdf" target="_blank">RESOLUÇÃO Nº 247, DE 20 DE DEZEMBRO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Metrologia</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-214-2023.pdf" target="_blank">RESOLUÇÃO Nº 214, DE 29 DE MARÇO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Microinformática</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-146-2021.pdf" target="_blank">RESOLUÇÃO Nº 146 DE 2 DE SETEMBRO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Mineração</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-104-2020.pdf" target="_blank">RESOLUÇÃO Nº 104, DE 15 DE JULHO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Montagem e Manutenção de Sistemas de Gás Combustível</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Montanhismo</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Móveis</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-204-2022.pdf" target="_blank">RESOLUÇÃO Nº 204, DE 20 DE DEZEMBRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Multimídia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Navegação Fluvial</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Operação de Radar</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Operações de Engenharia Militar</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Operações de Reatores</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Paisagismo</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-248-2023.pdf" target="_blank">RESOLUÇÃO Nº 248, DE 20 DE DEZEMBRO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Petróleo e Gás</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-138-2021.pdf" target="_blank">RESOLUÇÃO Nº 138, DE 02 DE JULHO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Plástico</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-215-2023.pdf" target="_blank">RESOLUÇÃO Nº 215 DE 29 DE MARÇO DE 2023</a></td></tr>
                        <tr><td>Técnico(a) em Portos</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-143-2021.pdf" target="_blank">RESOLUÇÃO Nº 143, DE 2 DE SETEMBRO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Pré-Impressão Gráfica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Preparação Física e Desportiva Militar</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Processamento da Madeira</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Processamento de Pescado</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Processos de Geração de Energia Elétrica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Processos Fonográficos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Processos Fotográficos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Processos Gráficos</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Produção de Áudio e Vídeo</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Programação de Jogos Digitais</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Proteção Radiológica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Qualidade</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Química</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Rádio e Televisão</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Reciclagem</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-177-2022.pdf" target="_blank">RESOLUÇÃO Nº 177 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Recursos Minerais</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Rede de Computadores</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-106-2020.pdf" target="_blank">RESOLUÇÃO Nº 106, DE 15 DE JULHO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Redes de Comunicação</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Refrigeração e Ar Condicionado</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-123-2020.pdf" target="_blank">RESOLUÇÃO Nº 123 DE 14 DE DEZEMBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Refrigeração e Climatização</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-123-2020.pdf" target="_blank">RESOLUÇÃO Nº 123 DE 14 DE DEZEMBRO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Saneamento</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-103-2020.pdf" target="_blank">RESOLUÇÃO Nº 103, DE 15 DE JULHO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Sensores de Aviação</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Siderurgia</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Sinais Navais</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Sinalização Náutica</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Sistema a Gás</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-202-2022.pdf" target="_blank">RESOLUÇÃO Nº 202, DE 20 DE DEZEMBRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Sistemas de Comutação</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Sistemas de Energia Renovável</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-178-2022.pdf" target="_blank">RESOLUÇÃO Nº 178 DE 04 DE MARÇO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Sistemas de Transmissão</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Soldagem</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-107-2020.pdf" target="_blank">RESOLUÇÃO Nº 107, DE 12 DE AGOSTO DE 2020</a></td></tr>
                        <tr><td>Técnico(a) em Suprimento</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Telecomunicações</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/Resolução%20Nº%20083.2019%20-%20Habilitação%20em%20Telecomunicações.pdf" target="_blank">Resolução Nº 083.2019</a></td></tr>
                        <tr><td>Técnico(a) em Trânsito</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-169-2022.pdf" target="_blank">RESOLUÇÃO Nº 169 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Transporte Aquaviário</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-170-2022.pdf" target="_blank">RESOLUÇÃO Nº 170 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Transporte de Cargas</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-142-2021.pdf" target="_blank">RESOLUÇÃO Nº 142, DE 2 DE SETEMBRO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) em Transporte Dutoviário</td><td>-</td></tr>
                        <tr><td>Técnico(a) em Transporte Metroferroviário</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-171-2022.pdf" target="_blank">RESOLUÇÃO Nº 171 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Transportes Rodoviários</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-172-2022.pdf" target="_blank">RESOLUÇÃO Nº 172 DE 25 DE JANEIRO DE 2022</a></td></tr>
                        <tr><td>Técnico(a) em Vestuário</td><td>-</td></tr>
                        <tr><td>Técnico(a) Fiação</td><td>-</td></tr>
                        <tr><td>Técnico(a) Fiação e Tecelagem</td><td>-</td></tr>
                        <tr><td>Técnico(a) Fiação Técnica</td><td>-</td></tr>
                        <tr><td>Técnico(a) Fundição</td><td>-</td></tr>
                        <tr><td>Técnico(a) Internet das Coisas (IOT)</td><td>-</td></tr>
                        <tr><td>Técnico(a) Manutenção Industrial</td><td>-</td></tr>
                        <tr><td>Técnico(a) Materiais</td><td>-</td></tr>
                        <tr><td>Técnico(a) Naval</td><td>-</td></tr>
                        <tr><td>Técnico(a) Papel</td><td>-</td></tr>
                        <tr><td>Técnico(a) Perfuração de Poços</td><td>-</td></tr>
                        <tr><td>Técnico(a) Petroquímica</td><td>-</td></tr>
                        <tr><td>Técnico(a) Planejamento e Controle da Produção</td><td>-</td></tr>
                        <tr><td>Técnico(a) Prevenção e Combate a Incêndio</td><td>-</td></tr>
                        <tr><td>Técnico(a) Processamento de Dados</td><td>-</td></tr>
                        <tr><td>Técnico(a) Tecelagem</td><td>-</td></tr>
                        <tr><td>Técnico(a) Tecnologias Finais do Gás</td><td>-</td></tr>
                        <tr><td>Técnico(a) Telefonia</td><td>-</td></tr>
                        <tr><td>Técnico(a) Telefonia Técnica</td><td>-</td></tr>
                        <tr><td>Técnico(a) Têxtil</td><td><a href="https://www.crtes.gov.br/wp-content/themes/Tema-do-CRT-ES/Tema-do-CRT-ES/files/modalidades/RESOLUCAO-137-2021.pdf" target="_blank">RESOLUÇÃO Nº 137, DE 02 DE JULHO DE 2021</a></td></tr>
                        <tr><td>Técnico(a) Topografia</td><td>-</td></tr>
                        <tr><td>Técnico(a) Usinagem Mecânica</td><td>-</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ===== ABA: MISSÃO, VISÃO E VALORES ===== -->
    <div class="aba-conteudo" id="aba-missao">
        <div class="aba-card">
            <h2 class="aba-titulo"><i class="fas fa-bullseye"></i> Missão, Visão e Valores</h2>

            <div class="missao-box">
                <h3><i class="fas fa-flag"></i> Missão</h3>
                <p>Trabalhar para a sociedade promovendo sua proteção, por meio de regulação, orientação e fiscalização, e assegurar aos profissionais Técnico(a)s industriais o exercício legal da profissão.</p>
            </div>

            <div class="missao-box">
                <h3><i class="fas fa-eye"></i> Visão</h3>
                <p>Ser reconhecido pelos profissionais Técnico(a)s industriais e pela sociedade como referência de conselho profissional em inovações e eficiência.</p>
            </div>

            <h3 style="color: var(--cor-primaria); font-size: 1.1rem; font-weight: 700; margin-top: 25px; margin-bottom: 10px;"><i class="fas fa-gem"></i> Valores</h3>
            <div class="valores-grade">
                <div class="valor-item">Responsabilidade</div>
                <div class="valor-item">Respeito</div>
                <div class="valor-item">Excelência</div>
                <div class="valor-item">Integração</div>
                <div class="valor-item">Ética</div>
                <div class="valor-item">Transparência</div>
                <div class="valor-item">Sustentabilidade</div>
                <div class="valor-item">Inovação</div>
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