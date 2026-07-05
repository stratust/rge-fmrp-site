<?php
/**
 * ensino.php — Hub do Ensino (Graduação, Pós-Graduação, Extensão)
 */
require __DIR__ . '/includes/data.php';
$pageTitle = 'Ensino';
$breadcrumb = ['Início', 'Ensino'];
$pageSubtitle = 'Graduação, Pós-Graduação e Extensão em Genética na FMRP/USP';
$pageDesc = 'Programas de ensino do Departamento de Genética FMRP/USP: graduação, pós-graduação e extensão.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ APRESENTAÇÃO ═══════════════ -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="section-label">ENSINO</span>
                <h2 class="section-title">Compromisso com a formação de excelência</h2>
                <p class="lead text-muted">
                    O Departamento de Genética oferece disciplinas de graduação e pós-graduação,
                    além de atividades de extensão, residência e serviços à comunidade.
                    Nossos programas formam profissionais e pesquisadores de alto nível,
                    reconhecidos nacional e internacionalmente.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ CARDS DE MODALIDADES ═══════════════ -->
<section class="section-padding pt-0">
    <div class="container">
        <div class="row g-4">
            <!-- Graduação -->
            <div class="col-lg-4">
                <a href="graduacao.php" class="teaching-hub-card h-100 d-block text-decoration-none">
                    <div class="teaching-hub-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h3>Graduação</h3>
                    <p>
                        Disciplinas oferecidas para os cursos de Medicina, Ciências Biomédicas,
                        Informática Biomédica e Ciências Biológicas, abrangendo genética básica,
                        molecular, populacional e evolutiva.
                    </p>
                    <span class="teaching-hub-stats">
                        <strong><?= count($DISCIPLINAS_GRAD) ?></strong> disciplinas
                    </span>
                    <span class="teaching-hub-link">
                        Acessar graduação <i class="bi bi-arrow-right"></i>
                    </span>
                </a>
            </div>

            <!-- Pós-Graduação -->
            <div class="col-lg-4">
                <a href="pos-graduacao.php" class="teaching-hub-card h-100 d-block text-decoration-none teaching-hub-card--primary">
                    <div class="teaching-hub-icon">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>
                    <h3>Pós-Graduação</h3>
                    <p>
                        Programa de Mestrado e Doutorado com conceito elevado na CAPES,
                        formando mestres e doutores em diferentes áreas da Genética,
                        desde genética molecular até bioinformática e genômica.
                    </p>
                    <span class="teaching-hub-stats">
                        <strong><?= count($DISCIPLINAS_POS) ?></strong> disciplinas
                    </span>
                    <span class="teaching-hub-link">
                        Acessar pós-graduação <i class="bi bi-arrow-right"></i>
                    </span>
                </a>
            </div>

            <!-- Extensão -->
            <div class="col-lg-4">
                <a href="cursos_extensao.php" class="teaching-hub-card h-100 d-block text-decoration-none">
                    <div class="teaching-hub-icon">
                        <i class="bi bi-globe2"></i>
                    </div>
                    <h3>Extensão</h3>
                    <p>
                        Cursos de extensão, residência em Genética Médica, serviços de
                        aconselhamento genético e atividades de disseminação científica
                        junto à comunidade.
                    </p>
                    <span class="teaching-hub-stats">
                        <strong><?= count($SERVICOS_GENETICA) + count($ROTATORIAS_RESIDENCIA) ?></strong> serviços e rotatórias
                    </span>
                    <span class="teaching-hub-link">
                        Acessar extensão <i class="bi bi-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ DESTAQUE: DISCIPLINAS ═══════════════ -->
<section class="section-padding bg-light-subtle">
    <div class="container">
        <div class="row g-5">
            <!-- Graduação disciplinas preview -->
            <div class="col-lg-6">
                <span class="section-label">GRADUAÇÃO</span>
                <h2 class="section-title mb-4">Disciplinas em destaque</h2>
                <div class="discipline-list">
                    <?php foreach (array_slice($DISCIPLINAS_GRAD, 0, 4) as $disc): ?>
                        <div class="discipline-item">
                            <div class="discipline-code"><?= htmlspecialchars($disc['codigo']) ?></div>
                            <div class="discipline-info">
                                <h4><?= htmlspecialchars($disc['nome']) ?></h4>
                                <span class="discipline-meta">
                                    <?= htmlspecialchars($disc['curso']) ?> &middot; <?= htmlspecialchars($disc['carga']) ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="graduacao.php" class="btn-outline-green mt-4">
                    Ver todas <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <!-- Pós-Graduação disciplinas preview -->
            <div class="col-lg-6">
                <span class="section-label">PÓS-GRADUAÇÃO</span>
                <h2 class="section-title mb-4">Disciplinas em destaque</h2>
                <div class="discipline-list">
                    <?php foreach (array_slice($DISCIPLINAS_POS, 0, 4) as $disc): ?>
                        <div class="discipline-item">
                            <div class="discipline-code"><?= htmlspecialchars($disc['codigo']) ?></div>
                            <div class="discipline-info">
                                <h4><?= htmlspecialchars($disc['nome']) ?></h4>
                                <span class="discipline-meta"><?= htmlspecialchars($disc['carga']) ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="pos-graduacao.php" class="btn-outline-green mt-4">
                    Ver todas <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ LABORATÓRIOS DE ENSINO ═══════════════ -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">INFRAESTRUTURA</span>
            <h2 class="section-title">Laboratórios de Ensino</h2>
            <p class="section-subtitle">Espaços dedicados às atividades práticas dos cursos de graduação.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($LABS_ENSINO as $lab): ?>
                <div class="col-md-4">
                    <div class="lab-teaching-card h-100 text-center">
                        <div class="lab-teaching-icon">
                            <i class="bi bi-flask-fill"></i>
                        </div>
                        <h3><?= htmlspecialchars($lab['nome']) ?></h3>
                        <p><?= htmlspecialchars($lab['descricao']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
