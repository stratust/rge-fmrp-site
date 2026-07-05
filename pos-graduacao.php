<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Pós-Graduação — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Ensino', 'Pós-Graduação'];
$pageSubtitle = 'Programa de Pós-Graduação em Genética com conceito CAPES 6, formando mestres e doutores desde 1971.';
$pageDesc = 'Pós-graduação em Genética FMRP/USP: programa reconhecido, conceito CAPES 6, disciplinas, estrutura curricular e processo seletivo.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ STATS ═══════════════ -->
<section class="py-5 bg-light-green">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-lg-3">
                <div class="stat-box">
                    <div class="stat-number">1971</div>
                    <div class="stat-label">Ano de Fundação</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-box">
                    <div class="stat-number">700+</div>
                    <div class="stat-label">Titulações Concedidas</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-box">
                    <div class="stat-number">6</div>
                    <div class="stat-label">Conceito CAPES</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-box">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Disciplinas Permanentes</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ DESCRIÇÃO DO PROGRAMA ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="section-title">Sobre o Programa</h2>
                <p class="lead text-muted">O Programa de Pós-Graduação em Genética da FMRP/USP é um dos mais tradicionais do país, com mais de 50 anos de existência.</p>
                <p>Fundado em <strong>1971</strong>, o programa oferece cursos de <strong>Mestrado</strong> e <strong>Doutorado</strong>, tendo formado mais de 700 mestres e doutores que atuam em instituições de ensino e pesquisa no Brasil e no exterior.</p>
                <p>O programa possui <strong>conceito 6</strong> na avaliação da CAPES (em escala de 3 a 7), refletindo a excelência da produção científica, a qualidade da formação e a internacionalização do programa.</p>
                <p>Nossas linhas de pesquisa abrangem Genética Molecular, Genômica e Bioinformática, Biologia Celular, Genética de Plantas, Genética de Populações e Evolução, Oncogenética e Genética Humana e Médica.</p>
            </div>
            <div class="col-lg-4">
                <div class="card-custom h-100 bg-dark-green text-white">
                    <div class="card-body p-4">
                        <h4 class="mb-3"><i class="bi bi-info-circle-fill"></i> Informações Rápidas</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="bi bi-calendar-event me-2 text-accent-green"></i> <strong>Inscrições:</strong> Semestrais</li>
                            <li class="mb-3"><i class="bi bi-award me-2 text-accent-green"></i> <strong>Níveis:</strong> Mestrado e Doutorado</li>
                            <li class="mb-3"><i class="bi bi-clock me-2 text-accent-green"></i> <strong>Duração:</strong> Mestrado 24m / Doutorado 48m</li>
                            <li class="mb-3"><i class="bi bi-cash-coin me-2 text-accent-green"></i> <strong>Bolsas:</strong> FAPESP, CAPES, CNPq</li>
                            <li class="mb-0"><i class="bi bi-globe2 me-2 text-accent-green"></i> <strong>Internacionalização:</strong> Sanduíche e PDEE</li>
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
        <h2 class="section-title text-center mb-5">Disciplinas do Programa</h2>
        <div class="table-responsive">
            <table class="table table-hover align-middle table-custom">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Disciplina</th>
                        <th class="text-center">Carga Horária</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($DISCIPLINAS_POS as $disc): ?>
                        <tr>
                            <td><span class="badge bg-light text-dark-green fw-medium"><?= htmlspecialchars($disc['codigo']) ?></span></td>
                            <td class="fw-semibold"><?= htmlspecialchars($disc['nome']) ?></td>
                            <td class="text-center"><span class="text-muted"><?= htmlspecialchars($disc['carga']) ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ═══════════════ ORGANIZIZAÇÃO CURRICULAR ═══════════════ -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Organização Curricular</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card-custom h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-1-circle-fill"></i></div>
                        <h4 class="h5">Disciplinas Obrigatórias</h4>
                        <p class="text-muted">Núcleo fundamental em genética molecular, bioinformática, evolução e metodologia científica.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-custom h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-2-circle-fill"></i></div>
                        <h4 class="h5">Disciplinas Optativas</h4>
                        <p class="text-muted">Diversificação temática em áreas específicas como oncogenética, genética humana, genômica e micologia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-custom h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-3-circle-fill"></i></div>
                        <h4 class="h5">Seminários</h4>
                        <p class="text-muted">Apresentação periódica de projetos, seminários temáticos e defesas de qualificação.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-custom h-100 text-center">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-4-circle-fill"></i></div>
                        <h4 class="h5">Tese / Dissertação</h4>
                        <p class="text-muted">Trabalho original de pesquisa com defesa pública e banca examinadora.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
