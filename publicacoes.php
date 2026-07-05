<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Publicações — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Pesquisa', 'Publicações'];
$pageSubtitle = 'Produção científica do departamento: artigos em revistas internacionais de alto impacto.';
$pageDesc = 'Publicações científicas do Departamento de Genética FMRP/USP: artigos em revistas internacionais com filtros por ano e área.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';

// Coletar anos e áreas únicas para filtros
$anos = array_unique(array_column($PUBLICACOES, 'ano'));
rsort($anos);
$areas = array_unique(array_column($PUBLICACOES, 'area'));
sort($areas);
$totalPub = count($PUBLICACOES);
?>

<!-- ═══════════════ FILTROS ═══════════════ -->
<section class="py-4 bg-light border-bottom">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-md-3">
                <label class="form-label fw-semibold text-muted small mb-1"><i class="bi bi-calendar3 me-1"></i>Filtrar por Ano</label>
                <select id="filtroAno" class="form-select form-select-sm">
                    <option value="">Todos os anos</option>
                    <?php foreach ($anos as $ano): ?>
                        <option value="<?= htmlspecialchars($ano) ?>"><?= htmlspecialchars($ano) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold text-muted small mb-1"><i class="bi bi-diagram-3 me-1"></i>Filtrar por Área</label>
                <select id="filtroArea" class="form-select form-select-sm">
                    <option value="">Todas as áreas</option>
                    <?php foreach ($areas as $area): ?>
                        <option value="<?= htmlspecialchars($area) ?>"><?= htmlspecialchars($area) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-5 text-md-end">
                <div id="pubCounter" class="fw-semibold text-primary-green">
                    <i class="bi bi-file-earmark-text me-1"></i> Exibindo <span id="pubShown"><?= $totalPub ?></span> de <?= $totalPub ?> publicações
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ LISTA DE PUBLICAÇÕES ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div id="pubList">
            <?php foreach ($PUBLICACOES as $i => $pub): ?>
            <div class="card-custom mb-3 pub-item"
                 data-ano="<?= htmlspecialchars($pub['ano']) ?>"
                 data-area="<?= htmlspecialchars($pub['area']) ?>">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-2">
                        <div class="d-flex gap-2 align-items-center">
                            <span class="badge bg-primary-green"><?= htmlspecialchars($pub['ano']) ?></span>
                            <span class="badge bg-light text-dark-green border"><?= htmlspecialchars($pub['area']) ?></span>
                            <?php if (!empty($pub['destaque'])): ?>
                                <span class="badge bg-warning text-dark fw-bold"><i class="bi bi-star-fill me-1"></i>DESTAQUE</span>
                            <?php endif; ?>
                        </div>
                        <span class="text-muted small"><i class="bi bi-journal-text me-1"></i><?= htmlspecialchars($pub['revista']) ?></span>
                    </div>
                    <h3 class="h5 fw-bold"><?= htmlspecialchars($pub['titulo']) ?></h3>
                    <p class="text-muted mb-0"><i class="bi bi-people me-1"></i><?= htmlspecialchars($pub['autores']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div id="pubEmpty" class="text-center py-5 text-muted" style="display:none">
            <i class="bi bi-inbox fs-1 d-block mb-3"></i>
            <p class="fs-5">Nenhuma publicação encontrada com os filtros selecionados.</p>
        </div>
    </div>
</section>

<script>
(function() {
    var filtroAno = document.getElementById('filtroAno');
    var filtroArea = document.getElementById('filtroArea');
    var items = document.querySelectorAll('.pub-item');
    var empty = document.getElementById('pubEmpty');
    var shown = document.getElementById('pubShown');
    var total = items.length;

    function applyFilters() {
        var ano = filtroAno.value;
        var area = filtroArea.value;
        var visible = 0;
        items.forEach(function(item) {
            var matchAno = !ano || item.dataset.ano === ano;
            var matchArea = !area || item.dataset.area === area;
            if (matchAno && matchArea) {
                item.style.display = '';
                visible++;
            } else {
                item.style.display = 'none';
            }
        });
        shown.textContent = visible;
        empty.style.display = visible === 0 ? '' : 'none';
    }

    filtroAno.addEventListener('change', applyFilters);
    filtroArea.addEventListener('change', applyFilters);
})();
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
