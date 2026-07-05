<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Docentes — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Equipe', 'Docentes'];
$pageSubtitle = 'Corpo docente formado por pesquisadores atuantes com reconhecimento nacional e internacional.';
$pageDesc = 'Docentes do Departamento de Genética FMRP/USP: professores titulares, colaboradores seniores e dupla vinculação.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';

// Separar por categoria
$titulares = array_filter($DOCENTES, fn($d) => !in_array($d['categoria'], ['colaborador', 'dupla-vinculacao']));
$colaboradores = array_filter($DOCENTES, fn($d) => $d['categoria'] === 'colaborador');
$duplaVinc = array_filter($DOCENTES, fn($d) => $d['categoria'] === 'dupla-vinculacao');

// Áreas para filtro
$areasFiltro = ['Bioinformática', 'Genética Humana', 'Genética Molecular', 'Oncogenética'];
?>

<!-- ═══════════════ STATS ═══════════════ -->
<section class="py-5 bg-light-green">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">17</div>
                    <div class="stat-label">Docentes</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Linhas de Pesquisa</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Publicações/Ano</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-box">
                    <div class="stat-number">6</div>
                    <div class="stat-label">Conceito CAPES</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ FILTRO POR ÁREA ═══════════════ -->
<section class="py-4 bg-light border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
            <span class="text-muted fw-semibold me-2"><i class="bi bi-funnel-fill"></i> Área:</span>
            <a href="#todos" class="badge bg-primary-green text-decoration-none area-filter" data-area="">Todos</a>
            <?php foreach ($areasFiltro as $area): ?>
                <a href="#<?= htmlspecialchars(strtolower($area)) ?>" class="badge bg-light text-dark-green border text-decoration-none area-filter" data-area="<?= htmlspecialchars($area) ?>"><?= htmlspecialchars($area) ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ DOCENTES TITULARES ═══════════════ -->
<section class="py-5" id="todos">
    <div class="container">
        <h2 class="section-title mb-4">Docentes Titulares</h2>
        <div class="row g-4">
            <?php foreach ($titulares as $doc): ?>
            <div class="col-md-6 col-lg-4 docente-card" data-area="<?= htmlspecialchars($doc['area']) ?>">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="docente-avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <?php if ($doc['categoria'] === 'chefe'): ?>
                                <span class="badge bg-warning text-dark fw-bold"><i class="bi bi-star-fill me-1"></i>CHEFE</span>
                            <?php elseif ($doc['categoria'] === 'vice-chefe'): ?>
                                <span class="badge bg-info text-dark fw-bold"><i class="bi bi-star me-1"></i>VICE-CHEFE</span>
                            <?php endif; ?>
                        </div>
                        <h3 class="h6 fw-bold mb-1"><?= htmlspecialchars($doc['nome']) ?></h3>
                        <p class="text-muted small mb-2"><?= htmlspecialchars($doc['cargo']) ?></p>
                        <div class="border-top pt-2">
                            <p class="small text-muted mb-1"><i class="bi bi-diagram-3 me-2"></i><?= htmlspecialchars($doc['setor']) ?></p>
                            <p class="small mb-1"><a href="mailto:<?= htmlspecialchars($doc['email']) ?>" class="text-decoration-none"><i class="bi bi-envelope me-2"></i><?= htmlspecialchars($doc['email']) ?></a></p>
                            <p class="small text-muted mb-0"><i class="bi bi-telephone me-2"></i><?= htmlspecialchars($doc['telefone']) ?></p>
                        </div>
                        <div class="mt-2">
                            <span class="badge bg-light text-primary-green border"><?= htmlspecialchars($doc['area']) ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ COLABORADORES SENIORES ═══════════════ -->
<?php if (count($colaboradores) > 0): ?>
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title mb-4">Colaboradores Seniores</h2>
        <div class="row g-4">
            <?php foreach ($colaboradores as $doc): ?>
            <div class="col-md-6 col-lg-4 docente-card" data-area="<?= htmlspecialchars($doc['area']) ?>">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="docente-avatar mb-3">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <h3 class="h6 fw-bold mb-1"><?= htmlspecialchars($doc['nome']) ?></h3>
                        <p class="text-muted small mb-2"><?= htmlspecialchars($doc['cargo']) ?></p>
                        <div class="border-top pt-2">
                            <p class="small text-muted mb-1"><i class="bi bi-diagram-3 me-2"></i><?= htmlspecialchars($doc['setor']) ?></p>
                            <p class="small mb-1"><a href="mailto:<?= htmlspecialchars($doc['email']) ?>" class="text-decoration-none"><i class="bi bi-envelope me-2"></i><?= htmlspecialchars($doc['email']) ?></a></p>
                            <p class="small text-muted mb-0"><i class="bi bi-telephone me-2"></i><?= htmlspecialchars($doc['telefone']) ?></p>
                        </div>
                        <div class="mt-2">
                            <span class="badge bg-light text-primary-green border"><?= htmlspecialchars($doc['area']) ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ═══════════════ DUPLA VINCULAÇÃO ═══════════════ -->
<?php if (count($duplaVinc) > 0): ?>
<section class="py-5">
    <div class="container">
        <h2 class="section-title mb-4">Dupla Vinculação</h2>
        <div class="row g-4">
            <?php foreach ($duplaVinc as $doc): ?>
            <div class="col-md-6 col-lg-4 docente-card" data-area="<?= htmlspecialchars($doc['area']) ?>">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="docente-avatar mb-3">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <h3 class="h6 fw-bold mb-1"><?= htmlspecialchars($doc['nome']) ?></h3>
                        <p class="text-muted small mb-2"><?= htmlspecialchars($doc['cargo']) ?></p>
                        <div class="border-top pt-2">
                            <p class="small text-muted mb-1"><i class="bi bi-diagram-3 me-2"></i><?= htmlspecialchars($doc['setor']) ?></p>
                            <p class="small mb-1"><a href="mailto:<?= htmlspecialchars($doc['email']) ?>" class="text-decoration-none"><i class="bi bi-envelope me-2"></i><?= htmlspecialchars($doc['email']) ?></a></p>
                            <p class="small text-muted mb-0"><i class="bi bi-telephone me-2"></i><?= htmlspecialchars($doc['telefone']) ?></p>
                        </div>
                        <div class="mt-2">
                            <span class="badge bg-light text-primary-green border"><?= htmlspecialchars($doc['area']) ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<script>
(function() {
    var filterLinks = document.querySelectorAll('.area-filter');
    var cards = document.querySelectorAll('.docente-card');

    filterLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var area = this.dataset.area;

            // Atualizar visual dos links
            filterLinks.forEach(function(l) {
                l.classList.remove('bg-primary-green');
                l.classList.add('bg-light', 'text-dark-green', 'border');
            });
            this.classList.remove('bg-light', 'text-dark-green', 'border');
            this.classList.add('bg-primary-green');

            // Filtrar cards
            cards.forEach(function(card) {
                if (!area || card.dataset.area === area) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
})();
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
