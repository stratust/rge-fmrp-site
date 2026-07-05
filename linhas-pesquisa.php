<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Linhas de Pesquisa — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Pesquisa', 'Linhas de Pesquisa'];
$pageSubtitle = 'Cinco grandes linhas de pesquisa que abrangem desde genética molecular até evolução e genômica.';
$pageDesc = 'Linhas de pesquisa do Departamento de Genética FMRP/USP: genética molecular, bioinformática, biologia celular, genética de plantas e populações.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ GRID DE LINHAS ═══════════════ -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-2">Nossas Linhas de Pesquisa</h2>
        <p class="text-center text-muted mb-5 fs-5">Pesquisa de excelência em cinco grandes áreas do conhecimento genético</p>
        <div class="row g-4">
            <?php
            // Ícones SVG para cada linha (mapeados por nome)
            $icones = [
                'Genética Molecular' => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3v6a6 6 0 0 0 6 6 6 6 0 0 0 6-6V3"/><path d="M6 21v-6a6 6 0 0 1 6-6 6 6 0 0 1 6 6v6"/><path d="M6 3h12"/><path d="M6 21h12"/><path d="M9 7h6"/><path d="M9 17h6"/></svg>',
                'Genômica e Bioinformática' => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M3 15h18"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>',
                'Biologia Celular' => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="currentColor"/></svg>',
                'Genética de Plantas' => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22V12"/><path d="M12 12c0-4-3-8-8-8 0 5 3 8 8 8z"/><path d="M12 12c0-4 3-8 8-8 0 5-3 8-8 8z"/></svg>',
                'Genética de Populações e Evolução' => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2a4 4 0 0 1-4 4"/><path d="M21 8a4 4 0 0 1-4-4"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="18" r="3"/><path d="M6 15v-3a6 6 0 0 1 12 0v3"/></svg>',
            ];
            foreach ($LINHAS_PESQUISA as $i => $linha):
                $icone = $icones[$linha['nome']] ?? '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg>';
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100 linha-card">
                    <div class="card-body p-4">
                        <div class="text-primary-green mb-3 linha-icon">
                            <?= $icone ?>
                        </div>
                        <h3 class="h5"><?= htmlspecialchars($linha['nome']) ?></h3>
                        <p class="text-muted"><?= htmlspecialchars($linha['descricao']) ?></p>
                        <a href="projetos.php" class="link-arrow">Ver projetos <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="linha-numero">0<?= ($i + 1) ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ DESTAQUES CIENTÍFICOS ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Destques Científicos</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <span class="badge bg-accent-green text-dark mb-3">PESQUISA</span>
                        <h4>CRISPR em Câncer Pediátrico</h4>
                        <p class="text-muted">Aplicação de edição genômica CRISPR-Cas9 para identificação de vulnerabilidades terapêuticas no meduloblastoma pediátrico.</p>
                        <a href="publicacoes.php" class="link-arrow">Saber mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <span class="badge bg-accent-green text-dark mb-3">GENÔMICA</span>
                        <h4>Repertório TCR e Imunidade</h4>
                        <p class="text-muted">Análise computacional do repertório de receptores de células T em doenças infecciosas e imunidade adaptativa.</p>
                        <a href="publicacoes.php" class="link-arrow">Saber mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <span class="badge bg-accent-green text-dark mb-3">DOENÇAS RARAS</span>
                        <h4>Genética de Doenças Raras</h4>
                        <p class="text-muted">Identificação de mecanismos genéticos inéditos em doenças neurológicas raras, com potencial diagnóstico e terapêutico.</p>
                        <a href="publicacoes.php" class="link-arrow">Saber mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <span class="badge bg-accent-green text-dark mb-3">EVOLUÇÃO</span>
                        <h4>Genômica de Abelhas Sociais</h4>
                        <p class="text-muted">Estudos sobre diferenciação de castas e regulação epigenética em abelhas sociais, contribuindo para o entendimento da evolução social.</p>
                        <a href="publicacoes.php" class="link-arrow">Saber mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <span class="badge bg-accent-green text-dark mb-3">MICROBIOLOGIA</span>
                        <h4>Biologia Molecular de Fungos</h4>
                        <p class="text-muted">Caracterização molecular de Cryptococcus e outros fungos patogênicos para desenvolvimento de novos alvos terapêuticos.</p>
                        <a href="publicacoes.php" class="link-arrow">Saber mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <span class="badge bg-accent-green text-dark mb-3">BIOINFORMÁTICA</span>
                        <h4>Machine Learning em Genômica</h4>
                        <p class="text-muted">Aplicação de machine learning para classificação de variantes genômicas e diagnóstico de doenças genéticas.</p>
                        <a href="publicacoes.php" class="link-arrow">Saber mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
