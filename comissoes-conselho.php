<?php
/**
 * comissoes-conselho.php — Lista de comissões do departamento
 */
require __DIR__ . '/includes/data.php';
$pageTitle = 'Conselho e Comissões';
$breadcrumb = ['Início', 'Departamento', 'Conselho e Comissões'];
$pageSubtitle = 'Comissões responsáveis pela organização e gestão das atividades departamentais';
$pageDesc = 'Lista completa de comissões do Departamento de Genética FMRP/USP.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ COMISSÕES ═══════════════ -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">ESTRUTURA ADMINISTRATIVA</span>
            <h2 class="section-title">Comissões do Departamento</h2>
            <p class="section-subtitle">
                As comissões são compostas por docentes do departamento e têm como objetivo organizar,
                deliberar e executar as atividades nas respectivas áreas.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($COMISSOES as $comissao): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="commission-card h-100">
                        <div class="commission-card-top">
                            <div class="commission-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3><?= htmlspecialchars($comissao['nome']) ?></h3>
                        </div>
                        <div class="commission-divider"></div>
                        <p class="commission-members-label">Membros:</p>
                        <ul class="commission-members-list">
                            <?php foreach ($comissao['membros'] as $membro): ?>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <?= htmlspecialchars($membro) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ INFO BOX ═══════════════ -->
<section class="section-padding bg-light-subtle">
    <div class="container">
        <div class="info-box">
            <div class="row align-items-center">
                <div class="col-lg-2 text-center">
                    <i class="bi bi-info-circle-fill info-box-icon"></i>
                </div>
                <div class="col-lg-7">
                    <h3>Como funcionam as comissões?</h3>
                    <p class="mb-0">
                        As comissões departamentais são constituídas por portaria, com mandatos renováveis.
                        Os coordenadores são responsáveis por representar o departamento junto aos órgãos
                        competentes da USP e coordenação das atividades de sua área.
                    </p>
                </div>
                <div class="col-lg-3 text-lg-end mt-3 mt-lg-0">
                    <a href="chefia.php" class="btn-outline-green">
                        <i class="bi bi-arrow-left"></i> Voltar para Chefia
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
