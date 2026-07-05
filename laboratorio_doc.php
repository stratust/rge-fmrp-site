<?php
require __DIR__ . '/includes/data.php';

// Buscar laboratório por cod
$cod = isset($_GET['cod']) ? (int)$_GET['cod'] : 0;
$lab = null;
foreach ($LABORATORIOS as $l) {
    if ((int)$l['cod'] === $cod) {
        $lab = $l;
        break;
    }
}

if ($lab) {
    $pageTitle = htmlspecialchars($lab['nome']) . ' — Departamento de Genética FMRP/USP';
    $breadcrumb = ['Início', 'Laboratórios', htmlspecialchars($lab['nome'])];
    $pageSubtitle = htmlspecialchars($lab['nome']);
    $pageDesc = htmlspecialchars($lab['descricao']);
} else {
    $pageTitle = 'Laboratório não encontrado — Departamento de Genética FMRP/USP';
    $breadcrumb = ['Início', 'Laboratórios', 'Não encontrado'];
    $pageSubtitle = 'Laboratório não encontrado';
    $pageDesc = 'Laboratório não encontrado no Departamento de Genética FMRP/USP.';
}

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<?php if ($lab): ?>

<!-- ═══════════════ DETALHES DO LAB ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="lab-icon-lg">
                        <i class="bi bi-microscope-fill"></i>
                    </div>
                    <div>
                        <span class="badge bg-primary-green"><?= htmlspecialchars($lab['area']) ?></span>
                        <h2 class="h3 fw-bold mb-0 mt-1"><?= htmlspecialchars($lab['nome']) ?></h2>
                    </div>
                </div>

                <h3 class="h5 section-title">Descrição</h3>
                <p class="lead text-muted"><?= htmlspecialchars($lab['descricao']) ?></p>

                <p>O laboratório desenvolve pesquisas de fronteira na área de <strong><?= htmlspecialchars($lab['area']) ?></strong>, com infraestrutura moderna e equipe altamente capacitada. As pesquisas realizadas aqui resultam em publicações em revistas científicas de alto impacto, parcerias nacionais e internacionais, e formação de recursos humanos em nível de mestrado, doutorado e pós-doutorado.</p>

                <h3 class="h5 section-title mt-5">Equipe</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card-custom">
                            <div class="card-body p-3 d-flex align-items-center">
                                <div class="lab-icon-sm me-3"><i class="bi bi-person-badge-fill"></i></div>
                                <div>
                                    <small class="text-muted d-block">Responsável</small>
                                    <strong><?= htmlspecialchars($lab['responsavel']) ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-custom">
                            <div class="card-body p-3 d-flex align-items-center">
                                <div class="lab-icon-sm me-3"><i class="bi bi-people-fill"></i></div>
                                <div>
                                    <small class="text-muted d-block">Equipe</small>
                                    <strong>Alunos de Mestrado, Doutorado e Pós-Doutorado</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="h5 section-title mt-5">Linhas de Pesquisa Relacionadas</h3>
                <div class="d-flex flex-wrap gap-2">
                    <?php
                    $areasRelacionadas = [
                        'Oncologia' => ['Genética Molecular', 'Biologia Celular'],
                        'Genética Molecular' => ['Genética Molecular', 'Genômica e Bioinformática'],
                        'Genômica' => ['Genômica e Bioinformática', 'Genética de Populações e Evolução'],
                        'Micologia' => ['Genética Molecular', 'Biologia Celular'],
                    ];
                    $linhasRel = $areasRelacionadas[$lab['area']] ?? ['Genética Molecular'];
                    foreach ($linhasRel as $linhaNome):
                    ?>
                    <a href="linhas-pesquisa.php" class="badge bg-light text-primary-green border text-decoration-none p-2">
                        <i class="bi bi-diagram-3 me-1"></i><?= htmlspecialchars($linhaNome) ?>
                    </a>
                    <?php endforeach; ?>
                </div>

                <h3 class="h5 section-title mt-5">Infraestrutura</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card-custom">
                            <div class="card-body p-3">
                                <div class="lab-icon-sm mb-2"><i class="bi bi-cpu-fill"></i></div>
                                <p class="small text-muted mb-0">Equipamentos modernos para análise molecular, celular e bioinformática.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-custom">
                            <div class="card-body p-3">
                                <div class="lab-icon-sm mb-2"><i class="bi bi-laptop"></i></div>
                                <p class="small text-muted mb-0">Estações de trabalho para análise de dados genômicos e bioinformática.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-4">
                <div class="card-custom bg-primary-green text-white mb-4">
                    <div class="card-body p-4">
                        <h4 class="h6 mb-3"><i class="bi bi-info-circle-fill me-2"></i>Informações</h4>
                        <div class="mb-3">
                            <small class="text-white-50 d-block">Área de Pesquisa</small>
                            <strong><?= htmlspecialchars($lab['area']) ?></strong>
                        </div>
                        <div class="mb-3">
                            <small class="text-white-50 d-block">Responsável</small>
                            <strong><?= htmlspecialchars($lab['responsavel']) ?></strong>
                        </div>
                        <div class="mb-3">
                            <small class="text-white-50 d-block">Código do Laboratório</small>
                            <strong>#<?= sprintf('%02d', (int)$lab['cod']) ?></strong>
                        </div>
                        <a href="contato.php" class="btn btn-accent btn-sm w-100">
                            <i class="bi bi-envelope me-2"></i>Entrar em Contato
                        </a>
                    </div>
                </div>

                <!-- Outros laboratórios -->
                <div class="card-custom">
                    <div class="card-body p-4">
                        <h4 class="h6 mb-3"><i class="bi bi-collection me-2"></i>Outros Laboratórios</h4>
                        <ul class="list-unstyled">
                            <?php
                            $outros = array_filter($LABORATORIOS, fn($l) => (int)$l['cod'] !== $cod);
                            $outros = array_slice($outros, 0, 5);
                            foreach ($outros as $outro):
                            ?>
                            <li class="mb-2">
                                <a href="laboratorio_doc.php?cod=<?= (int)$outro['cod'] ?>" class="text-decoration-none d-flex align-items-start">
                                    <i class="bi bi-arrow-right-short text-primary-green fs-5"></i>
                                    <span class="small"><?= htmlspecialchars($outro['nome']) ?></span>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="laboratorios.php" class="btn btn-outline-primary-green btn-sm w-100 mt-2">
                            Ver Todos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php else: ?>

<!-- ═══════════════ NÃO ENCONTRADO ═══════════════ -->
<section class="py-5">
    <div class="container text-center">
        <div class="py-5">
            <i class="bi bi-exclamation-triangle-fill text-warning" style="font-size:4rem"></i>
            <h2 class="h3 fw-bold mt-4">Laboratório não encontrado</h2>
            <p class="text-muted mb-4">O código de laboratório informado não foi localizado em nosso sistema.</p>
            <a href="laboratorios.php" class="btn btn-primary-green btn-lg">
                <i class="bi bi-arrow-left me-2"></i>Voltar para Laboratórios
            </a>
        </div>
    </div>
</section>

<?php endif; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
