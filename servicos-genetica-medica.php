<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Serviços em Genética Médica — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Extensão', 'Serviços em Genética Médica'];
$pageSubtitle = 'Serviços clínicos especializados em diagnóstico, aconselhamento e acompanhamento genético.';
$pageDesc = 'Serviços de Genética Médica FMRP/USP: aconselhamento genético, diagnóstico molecular e citogenético, testes pré-natais.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ INTRO ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="section-title">Serviços Clínicos</h2>
                <p class="lead text-muted">O Departamento de Genética oferece uma ampla gama de serviços clínicos especializados para o Sistema Único de Saúde (SUS) e convênios.</p>
                <p>Atuamos em conjunto com o Hospital das Clínicas da FMRP/USP no diagnóstico, aconselhamento e acompanhamento de pacientes com doenças genéticas e suas famílias, prestando um serviço de referência para a região de Ribeirão Preto e todo o interior de São Paulo.</p>
                <p>Todos os atendimentos são realizados por professores especialistas e residentes sob supervisão, com infraestrutura laboratorial completa para diagnóstico molecular e citogenético.</p>
            </div>
            <div class="col-lg-5">
                <div class="card-custom h-100 bg-primary-green text-white">
                    <div class="card-body p-4">
                        <h4 class="mb-3"><i class="bi bi-clipboard2-pulse-fill"></i> Atendimento</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle me-2 text-accent-green"></i> Atendimento pelo SUS</li>
                            <li class="mb-2"><i class="bi bi-check-circle me-2 text-accent-green"></i> Encaminhamento médico</li>
                            <li class="mb-2"><i class="bi bi-check-circle me-2 text-accent-green"></i> Equipe multiprofissional</li>
                            <li class="mb-2"><i class="bi bi-check-circle me-2 text-accent-green"></i> Laboratórios próprios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ SERVIÇOS ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Serviços Oferecidos</h2>
        <div class="row g-4">
            <?php foreach ($SERVICOS_GENETICA as $serv): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100 servico-card">
                    <div class="card-body p-4">
                        <div class="servico-icon mb-3"><i class="bi bi-clipboard2-pulse"></i></div>
                        <h3 class="h5 fw-bold"><?= htmlspecialchars($serv['nome']) ?></h3>
                        <p class="text-muted mb-0"><?= htmlspecialchars($serv['descricao']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ FLUXO DE ATENDIMENTO ═══════════════ -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Fluxo de Atendimento</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-2">
                <div class="text-center">
                    <div class="fluxo-step"><i class="bi bi-1-circle-fill"></i></div>
                    <h4 class="h6 mt-2">Encaminhamento</h4>
                    <p class="small text-muted">Médico encaminha paciente com suspeita de doença genética.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="text-center">
                    <div class="fluxo-step"><i class="bi bi-2-circle-fill"></i></div>
                    <h4 class="h6 mt-2">Triagem</h4>
                    <p class="small text-muted">Avaliação inicial e definição de conduta diagnóstica.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="text-center">
                    <div class="fluxo-step"><i class="bi bi-3-circle-fill"></i></div>
                    <h4 class="h6 mt-2">Exames</h4>
                    <p class="small text-muted">Solicitação de testes genéticos e análises laboratoriais.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="text-center">
                    <div class="fluxo-step"><i class="bi bi-4-circle-fill"></i></div>
                    <h4 class="h6 mt-2">Consulta</h4>
                    <p class="small text-muted">Consulta de retorno com diagnóstico e aconselhamento genético.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="text-center">
                    <div class="fluxo-step"><i class="bi bi-5-circle-fill"></i></div>
                    <h4 class="h6 mt-2">Acompanhamento</h4>
                    <p class="small text-muted">Seguimento longitudinal do paciente e familiares.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ HORÁRIOS E LOCALIZAÇÃO ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-3"><i class="bi bi-clock-fill text-primary-green me-2"></i>Horários de Atendimento</h3>
                        <table class="table mb-0">
                            <tbody>
                                <tr><td><strong>Segunda a Sexta</strong></td><td class="text-end">08h00 – 12h00</td></tr>
                                <tr><td><strong>Segunda a Sexta</strong></td><td class="text-end">14h00 – 17h00</td></tr>
                                <tr><td><strong>Agendamento</strong></td><td class="text-end"><a href="tel:+551633159098">(16) 3315-9098</a></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-3"><i class="bi bi-geo-alt-fill text-primary-green me-2"></i>Localização</h3>
                        <p class="mb-2"><strong>Ambulatório de Genética Médica</strong></p>
                        <p class="mb-2">Hospital das Clínicas — FMRP/USP<br>Campus Universitário<br>Av. Bandeirantes, 3900<br>Ribeirão Preto – SP, 14049-900</p>
                        <a href="https://maps.google.com/?q=Av.+Bandeirantes+3900+Ribeirao+Preto" target="_blank" rel="noopener" class="btn btn-sm btn-primary-green">
                            <i class="bi bi-map me-2"></i>Ver no mapa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
