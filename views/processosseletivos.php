<style>
    /* Container da tabela para responsividade */
    .table-container {
        overflow-x: auto;
        margin-top: 30px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .table th {
        background-color: var(--primary-color);
        color: white;
        padding: 15px;
        text-align: center;
    }

    .table tbody td {
        padding: 15px;
        border-bottom: 1px solid #eee;
        text-align: center;      /* Centraliza horizontalmente */
        vertical-align: middle;  /* Centraliza verticalmente */
    }

    /* Badges de Status */
    .badge {
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 0.85em;
        font-weight: bold;
    }
    .badge.open { background: #d4edda; color: #155724; }
    .badge.in-progress { background: #fff3cd; color: #856404; }
    .badge.closed { background: #f8d7da; color: #721c24; }

    /* Botão de Download */
    .btn-download {
        background: #f1f1f1;
        padding: 8px 12px;
        border-radius: 4px;
        font-size: 0.85em;
        color: #333;
        display: inline-block;
        margin: 2px;
        transition: 0.3s;
    }

    .btn-download:hover {
        background: var(--primary-color);
        color: white;
    }

    .search-bar { margin-bottom: 20px; }
    #searchInput {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .pagination {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .pagination button {
        padding: 8px 16px;
        border: 1px solid var(--primary-color);
        background: white;
        cursor: pointer;
    }

    .pagination button.active {
        background: var(--primary-color);
        color: white;
    }
</style>
<section id="processos-seletivos" class="section-padding">
    <div class="container">
        <h2>Processos Seletivos</h2>
        
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Pesquisar por cargo ou edital...">
        </div>

        <div class="table-container">
            <table class="table" id="tabelaProcessos">
                <thead>
                    <tr>
                        <th>Nº Edital</th>
                        <th>Cargo</th>
                        <th>Status</th>
                        <th>Downloads</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    </tbody>
            </table>
        </div>

        <div id="pagination" class="pagination"></div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let dados = [];
    let paginaAtual = 1;
    const itensPorPagina = 5;

    $.ajax({
        url: '<?= $api ?>Concursos',
        method: 'GET',
        headers: {
            Token: '<?= $Token ?>'
        },
        success: function(response) {
            dados = response;
            renderizarTabela();
        }
    });

    function renderizarTabela(filtro = "") {

        const tbody = document.getElementById('tableBody');
        tbody.innerHTML = "";

        const filtrados = dados.filter(item =>
            item.Descricao.toLowerCase().includes(filtro.toLowerCase()) ||
            item.Numero.toLowerCase().includes(filtro.toLowerCase())
        );

        const inicio = (paginaAtual - 1) * itensPorPagina;
        const fim = inicio + itensPorPagina;

        const paginados = filtrados.slice(inicio, fim);

        paginados.forEach(item => {

            let anexos = '';

            if(item.Anexos?.length){
                item.Anexos.forEach(anexo => {
                    anexos += `
                        <a href="${anexo.Anexo}"
                           target="_blank"
                           class="btn-download">
                            ${anexo.Descricao ?? 'PDF'}
                        </a><br>
                    `;
                });
            }else{
                anexos = '-';
            }

            tbody.innerHTML += `
                <tr>
                    <td>${item.Numero}</td>
                    <td>${item.Descricao}</td>
                    <td>${item.Status}</td>
                    <td>${anexos}</td>
                </tr>
            `;
        });

        renderizarPaginacao(filtrados.length);
    }

    function renderizarPaginacao(totalItens) {

        const pagDiv = document.getElementById('pagination');
        pagDiv.innerHTML = '';

        const totalPaginas = Math.ceil(totalItens / itensPorPagina);

        for(let i = 1; i <= totalPaginas; i++){

            const btn = document.createElement('button');

            btn.innerText = i;

            if(i === paginaAtual){
                btn.classList.add('active');
            }

            btn.onclick = function(){
                paginaAtual = i;
                renderizarTabela(
                    document.getElementById('searchInput').value
                );
            };

            pagDiv.appendChild(btn);
        }
    }

    document.getElementById('searchInput').addEventListener('input', function(e){
        paginaAtual = 1;
        renderizarTabela(e.target.value);
    });
</script>