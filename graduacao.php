<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Graduação — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Ensino', 'Graduação'];
$pageSubtitle = 'Formação de excelência em Genética para os cursos da área da saúde e biológicas.';
$pageDesc = 'Graduação em Genética na FMRP/USP: disciplinas, laboratórios de ensino, cursos atendidos e oportunidades para estudantes.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ STATS ═══════════════ -->
<section class="py-5 bg-light-green">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-lg-3">
                <div class="stat-box">
                    <div class="stat-number">6</div>
                    <div class="stat-label">Cursos Atendidos</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-box">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Disciplinas Oferecidas</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-box">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Laboratórios de Ensino</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-box">
                    <div class="stat-number">60</div>
                    <div class="stat-label">Anos de Tradição</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ INTRO ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <h2 class="section-title">Ensino de Graduação em Genética</h2>
                <p class="lead text-muted">O Departamento de Genética oferece disciplinas de graduação para múltiplos cursos da FMRP e de outras unidades da USP, com uma tradição de mais de 60 anos em ensino de excelência.</p>
                <p>Nossas disciplinas cobrem desde os fundamentos da genética clássica até as tecnologias mais avançadas em genética molecular, genômica e bioinformática. Os estudantes têm contato com laboratórios equipados com tecnologia de ponta e docentes atuantes em pesquisa internacional.</p>
                <p>Atendemos cursos de <strong>Medicina</strong>, <strong>Ciências Biomédicas</strong>, <strong>Informática Biomédica</strong>, <strong>Ciências Biológicas</strong>, <strong>Enfermagem</strong> e <strong>Fonoaudiologia</strong>, totalizando mais de 600 alunos por semestre.</p>
            </div>
            <div class="col-lg-5">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <h4 class="mb-3"><i class="bi bi-mortarboard-fill text-primary-green"></i> Cursos Atendidos</h4>
                        <ul class="list-unstyled fs-5">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-accent-green me-2"></i> Medicina</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-accent-green me-2"></i> Ciências Biomédicas</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-accent-green me-2"></i> Informática Biomédica</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-accent-green me-2"></i> Ciências Biológicas</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-accent-green me-2"></i> Enfermagem</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-accent-green me-2"></i> Fonoaudiologia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ DISCIPLINAS ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Disciplinas Oferecidas</h2>
        <div class="table-responsive">
            <table class="table table-hover align-middle table-custom">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Disciplina</th>
                        <th>Curso</th>
                        <th class="text-center">Carga Horária</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($DISCIPLINAS_GRAD as $disc): ?>
                        <tr>
                            <td><span class="badge bg-light text-dark-green fw-medium"><?= htmlspecialchars($disc['codigo']) ?></span></td>
                            <td class="fw-semibold"><?= htmlspecialchars($disc['nome']) ?></td>
                            <td><?= htmlspecialchars($disc['curso']) ?></td>
                            <td class="text-center"><span class="text-muted"><?= htmlspecialchars($disc['carga']) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ═══════════════ NOSSOS ALUNOS ═══════════════ -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Nossos Alunos</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-custom h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-flask-fill"></i></div>
                        <h4>Iniciação Científica</h4>
                        <p class="text-muted">Oportunidades de pesquisa para alunos de graduação através de bolsas CNPq, FAPESP e USP, com participação ativa em projetos dos laboratórios do departamento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-people-fill"></i></div>
                        <h4>Grupos de Estudo</h4>
                        <p class="text-muted">Grupos de estudo temáticos em genética molecular, bioinformática, citogenética e evolução, organizados pelos próprios alunos com supervisão docente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-award-fill"></i></div>
                        <h4>Programa PET</h4>
                        <p class="text-muted">O Programa de Educação Tutorial oferece atividades de ensino, pesquisa e extensão, promovendo formação integral e interdisciplinar dos estudantes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ LABS DE ENSINO ═══════════════ -->
<section class="py-5 bg-light-green">
    <div class="container">
        <h2 class="section-title text-center mb-5">Laboratórios de Ensino</h2>
        <div class="row g-4">
            <?php foreach ($LABS_ENSINO as $lab): ?>
                <div class="col-md-4">
                    <div class="card-custom h-100">
                        <div class="card-body p-4">
                            <h4 class="h5 mb-2"><i class="bi bi-laptop-fill text-primary-green me-2"></i><?= htmlspecialchars($lab['nome']) ?></h4>
                            <p class="text-muted mb-0"><?= htmlspecialchars($lab['descricao']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
