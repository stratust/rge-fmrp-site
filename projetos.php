<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Projetos de Pesquisa — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Pesquisa', 'Projetos'];
$pageSubtitle = 'Projetos de pesquisa financiados por FAPESP, CNPq, CAPES e agências internacionais.';
$pageDesc = 'Projetos de pesquisa do Departamento de Genética FMRP/USP: oncogenética, bioinformática, genética humana, micologia e mais.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ PROJETOS ═══════════════ -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-2">Projetos em Andamento</h2>
        <p class="text-center text-muted mb-5 fs-5">Pesquisa financiada pelas principais agências de fomento nacionais</p>
        <div class="row g-4">
            <?php foreach ($PROJETOS as $proj): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100 projeto-card">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-primary-green"><?= htmlspecialchars($proj['area']) ?></span>
                            <span class="badge bg-light text-dark-green border"><i class="bi bi-cash-coin me-1"></i><?= htmlspecialchars($proj['fomento']) ?></span>
                        </div>
                        <h3 class="h5"><?= htmlspecialchars($proj['titulo']) ?></h3>
                        <div class="mt-auto pt-3 border-top">
                            <div class="d-flex align-items-center mb-2 text-muted">
                                <i class="bi bi-person-fill me-2"></i>
                                <span><?= htmlspecialchars($proj['responsavel']) ?></span>
                            </div>
                            <div class="d-flex align-items-center text-muted">
                                <i class="bi bi-calendar-range me-2"></i>
                                <span><?= htmlspecialchars($proj['periodo']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ AGÊNCIAS DE FOMENTO ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="section-title mb-4">Agências de Fomento</h2>
        <p class="text-muted mb-5">Nossos projetos são financiados pelas principais agências de pesquisa do Brasil</p>
        <div class="row justify-content-center g-4">
            <div class="col-6 col-md-3">
                <div class="fomento-box">
                    <span class="fw-bold fs-4 text-primary-green">FAPESP</span>
                    <small class="d-block text-muted mt-1">Fundação de Amparo à Pesquisa do Estado de SP</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fomento-box">
                    <span class="fw-bold fs-4 text-primary-green">CNPq</span>
                    <small class="d-block text-muted mt-1">Conselho Nacional de Desenvolvimento Científico e Tecnológico</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fomento-box">
                    <span class="fw-bold fs-4 text-primary-green">CAPES</span>
                    <small class="d-block text-muted mt-1">Coordenação de Aperfeiçoamento de Pessoal de Nível Superior</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fomento-box">
                    <span class="fw-bold fs-4 text-primary-green">USP</span>
                    <small class="d-block text-muted mt-1">Universidade de São Paulo</small>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
