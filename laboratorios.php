<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Laboratórios — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Laboratórios'];
$pageSubtitle = '14 laboratórios de pesquisa e 3 laboratórios de ensino equipados com tecnologia de ponta.';
$pageDesc = 'Laboratórios do Departamento de Genética FMRP/USP: oncologia, genética molecular, bioinformática, citogenética, micologia e mais.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ STATS ═══════════════ -->
<section class="py-5 bg-light-green">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">14</div>
                    <div class="stat-label">Laboratórios de Pesquisa</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Laboratórios de Ensino</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">8+</div>
                    <div class="stat-label">Equipamentos Multiusuários</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">60+</div>
                    <div class="stat-label">Anos de Pesquisa</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ LABS DE PESQUISA ═══════════════ -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-2">Laboratórios de Pesquisa</h2>
        <p class="text-center text-muted mb-5 fs-5">Infraestrutura de excelência para pesquisa em genética</p>
        <div class="row g-4">
            <?php foreach ($LABORATORIOS as $lab): ?>
            <div class="col-md-6 col-lg-4">
                <a href="laboratorio_doc.php?cod=<?= (int)$lab['cod'] ?>" class="text-decoration-none">
                    <div class="card-custom h-100 lab-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="lab-icon-circle me-3">
                                    <i class="bi bi-microscope"></i>
                                </div>
                                <span class="badge bg-light text-primary-green border"><?= htmlspecialchars($lab['area']) ?></span>
                            </div>
                            <h3 class="h6 fw-bold text-dark"><?= htmlspecialchars($lab['nome']) ?></h3>
                            <p class="text-muted small line-clamp-2"><?= htmlspecialchars($lab['descricao']) ?></p>
                            <div class="d-flex align-items-center text-muted small mt-3 border-top pt-3">
                                <i class="bi bi-person-badge me-2"></i>
                                <span><?= htmlspecialchars($lab['responsavel']) ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ LABS DE ENSINO ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Laboratórios de Ensino</h2>
        <div class="row g-4">
            <?php foreach ($LABS_ENSINO as $lab): ?>
            <div class="col-md-4">
                <div class="card-custom h-100 border-accent-top">
                    <div class="card-body p-4">
                        <div class="lab-icon-circle mb-3">
                            <i class="bi bi-easel2-fill"></i>
                        </div>
                        <h3 class="h6 fw-bold"><?= htmlspecialchars($lab['nome']) ?></h3>
                        <p class="text-muted mb-0"><?= htmlspecialchars($lab['descricao']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
