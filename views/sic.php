<style>
.esic-page {
    max-width: 1000px;
    margin: 40px auto;
    font-family: Arial, sans-serif;
    color: #333;
}

.esic-header {
    background: #0d6efd;
    color: #fff;
    padding: 40px;
    border-radius: 12px 12px 0 0;
}

.esic-header h1 {
    margin: 0;
    font-size: 36px;
}

.esic-header p {
    margin-top: 10px;
    font-size: 16px;
    opacity: 0.95;
}

.esic-content {
    background: #fff;
    border: 1px solid #e5e5e5;
    border-top: none;
    padding: 40px;
    border-radius: 0 0 12px 12px;
}

.esic-content h2 {
    color: #0d6efd;
    margin-top: 35px;
    margin-bottom: 15px;
}

.esic-content p {
    line-height: 1.7;
    margin-bottom: 15px;
}

.esic-alert {
    background: #f8f9fa;
    border-left: 5px solid #0d6efd;
    padding: 20px;
    margin: 25px 0;
    border-radius: 6px;
}

.esic-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.info-item {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    border: 1px solid #eee;
}

.info-item h3 {
    margin-top: 0;
    margin-bottom: 10px;
    color: #0d6efd;
    font-size: 18px;
}

.btn-ouvidoria {
    display: inline-block;
    margin-top: 20px;
    background: #0d6efd;
    color: #fff;
    text-decoration: none;
    padding: 14px 28px;
    border-radius: 8px;
    font-weight: bold;
    transition: 0.3s;
}

.btn-ouvidoria:hover {
    background: #0b5ed7;
}
</style>
<section class="esic-page">
    <div class="esic-header">
        <h1>e-SIC - Serviço de Informação ao Cidadão</h1>
        <p>
            Transparência pública e acesso à informação para todos os cidadãos.
        </p>
    </div>

    <div class="esic-content">

        <h2>Lei de Acesso à Informação (LAI)</h2>

        <p>
            A Lei nº 12.527/2011, conhecida como Lei de Acesso à Informação (LAI),
            garante ao cidadão o direito constitucional de acesso às informações públicas.
        </p>

        <p>
            Por meio do e-SIC, qualquer pessoa pode solicitar informações públicas
            produzidas ou custodiadas pela Câmara Municipal, promovendo maior
            transparência, fiscalização e participação social.
        </p>

        <div class="esic-alert">
            <strong>Importante:</strong>
            O prazo de resposta seguirá os critérios estabelecidos pela legislação vigente.
        </div>

        <h2>Atendimento Presencial</h2>

        <div class="esic-info">

            <div class="info-item">
                <h3>Horário de Atendimento</h3>
                <p>Presencialmente <strong>Segunda a Sexta-feira: 08h às 18h</strong></p>
                <p>Virutalmente: <strong>24h 7 dias na semana</strong></p>
            </div>

            <div class="info-item">
                <h3>Telefone</h3>
                <p>(35) 3864-1380</p>
            </div>

            <div class="info-item">
                <h3>Email</h3>
                <p>contato@cmperdoes.mg.gov.br</p>
            </div>

        </div>

        <h2>Solicitação de Informação</h2>

        <p>
            Para registrar uma solicitação, denúncia, reclamação, sugestão
            ou pedido de acesso à informação, utilize o sistema de ouvidoria.
        </p>

        <a href="<?= $Ouvidoria ?>" class="btn-ouvidoria">
            Acessar Ouvidoria / e-SIC
        </a>

    </div>
</section>