<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Residência em Genética Médica — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Extensão', 'Residência em Genética Médica'];
$pageSubtitle = 'Programa de Residência Médica em Genética Médica com mais de 30 anos de tradição.';
$pageDesc = 'Residência Médica em Genética Médica FMRP/USP: diagnóstico, aconselhamento genético, rotatórias e processo seletivo.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ STATS ═══════════════ -->
<section class="py-5 bg-light-green">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">R2</div>
                    <div class="stat-label">Início da Residência</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">2</div>
                    <div class="stat-label">Anos de Duração</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">4</div>
                    <div class="stat-label">Rotatórias Principais</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">8+</div>
                    <div class="stat-label">Preceptores</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ DESCRIÇÃO ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="section-title">Sobre o Programa</h2>
                <p class="lead text-muted">O Programa de Residência Médica em Genética Médica da FMRP/USP forma especialistas em diagnóstico, tratamento e aconselhamento de doenças genéticas.</p>
                <p>A residência tem duração de <strong>dois anos</strong> (R2 e R3), com acesso a ambulatórios especializados, laboratórios de diagnóstico molecular e citogenético, enfermarias e serviços de interconsultoria.</p>
                <p>O programa é reconhecido pela <strong>Comissão Nacional de Residência Médica (CNRM)</strong> e pela <strong>Comissão de Residência Médica do HC-FMRP</strong>, oferecendo formação teórica e prática de excelência.</p>
                <p>Nossos egressos atuam em serviços de genética médica em todo o país, em hospitais universitários, laboratórios clínicos e consultórios especializados.</p>
            </div>
            <div class="col-lg-4">
                <div class="card-custom h-100 bg-dark-green text-white">
                    <div class="card-body p-4">
                        <h4 class="mb-3"><i class="bi bi-hospital"></i> Estrutura do HC</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="bi bi-check-circle me-2 text-accent-green"></i> Ambulatório de Genética Médica</li>
                            <li class="mb-3"><i class="bi bi-check-circle me-2 text-accent-green"></i> Laboratório de Citogenética</li>
                            <li class="mb-3"><i class="bi bi-check-circle me-2 text-accent-green"></i> Laboratório de Biologia Molecular</li>
                            <li class="mb-3"><i class="bi bi-check-circle me-2 text-accent-green"></i> Enfermaria Pediátrica e de Adultos</li>
                            <li class="mb-0"><i class="bi bi-check-circle me-2 text-accent-green"></i> Centro de Pesquisa Clínica</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ ROTATÓRIAS ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Rotatórias</h2>
        <div class="row g-4">
            <?php foreach ($ROTATORIAS_RESIDENCIA as $i => $rot): ?>
            <div class="col-md-6 col-lg-3">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="rot-numero mb-3">0<?= ($i + 1) ?></div>
                        <span class="badge bg-primary-green mb-2"><?= htmlspecialchars($rot['carga']) ?></span>
                        <h3 class="h6 fw-bold"><?= htmlspecialchars($rot['nome']) ?></h3>
                        <p class="text-muted small mb-0"><?= htmlspecialchars($rot['descricao']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ COMO INGRESSAR ═══════════════ -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Como Ingressar</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-10">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="icon-circle mx-auto mb-3"><i class="bi bi-1-circle-fill"></i></div>
                            <h4 class="h5">Pré-requisitos</h4>
                            <p class="text-muted">Ter concluído o Internato Médico (R1) em Medicina. Formação em escola médica reconhecida pelo MEC.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="icon-circle mx-auto mb-3"><i class="bi bi-2-circle-fill"></i></div>
                            <h4 class="h5">Processo Seletivo</h4>
                            <p class="text-muted">Prova objetiva de conhecimentos em genética médica, biologia molecular e citogenética, realizada anualmente.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <div class="icon-circle mx-auto mb-3"><i class="bi bi-3-circle-fill"></i></div>
                            <h4 class="h5">Matrícula</h4>
                            <p class="text-muted">Os aprovados realizam matrícula na COREME do HC-FMRP, com início das atividades em fevereiro.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="https://www5.fmrp.usp.br/hc/" target="_blank" rel="noopener" class="btn btn-primary-green btn-lg">
                        <i class="bi bi-box-arrow-up-right me-2"></i>Site da COREME/HC-FMRP
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ PRECEPTORES ═══════════════ -->
<section class="py-5 bg-dark-green text-white">
    <div class="container">
        <h2 class="text-center mb-5">Preceptores</h2>
        <div class="row g-4 justify-content-center">
            <?php
            $preceptores = [
                ['nome' => 'Ester Silveira Ramos', 'funcao' => 'Genética Médica Clínica'],
                ['nome' => 'Israel Gomy', 'funcao' => 'Aconselhamento Genético'],
                ['nome' => 'Victor E. F. Ferraz', 'funcao' => 'Citogenética Clínica'],
                ['nome' => 'Aparecida Maria Fontes', 'funcao' => 'Doenças Metabólicas'],
                ['nome' => 'Jeremy Andrew Squire', 'funcao' => 'Oncogenética'],
                ['nome' => 'Marina C. V. Cormedi', 'funcao' => 'Genética do Câncer'],
            ];
            foreach ($preceptores as $prep):
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="d-flex align-items-center p-3 rounded-3" style="background:rgba(255,255,255,0.1)">
                    <div class="me-3"><i class="bi bi-person-circle fs-2 text-accent-green"></i></div>
                    <div>
                        <h4 class="h6 mb-0"><?= htmlspecialchars($prep['nome']) ?></h4>
                        <small class="text-white-50"><?= htmlspecialchars($prep['funcao']) ?></small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
