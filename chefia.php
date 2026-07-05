<?php
/**
 * chefia.php — Chefia atual, comissões e histórico de chefias
 */
require __DIR__ . '/includes/data.php';
$pageTitle = 'Chefia do Departamento';
$breadcrumb = ['Início', 'Departamento', 'Chefia'];
$pageSubtitle = 'Conheça a atual administração e o histórico de chefias do departamento';
$pageDesc = 'Chefia atual, comissões gestoras e histórico de chefias do Departamento de Genética FMRP/USP.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ CHEFIA ATUAL ═══════════════ -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">GESTÃO 2024–2026</span>
            <h2 class="section-title">Chefia atual</h2>
        </div>

        <?php
        // Busca chefe e vice atuais
        $chefeAtual = null;
        $viceAtual = null;
        foreach ($DOCENTES as $doc) {
            if ($doc['categoria'] === 'chefe') $chefeAtual = $doc;
            if ($doc['categoria'] === 'vice-chefe') $viceAtual = $doc;
        }
        ?>

        <div class="row g-4 justify-content-center">
            <!-- Chefe -->
            <?php if ($chefeAtual): ?>
            <div class="col-md-6 col-lg-5">
                <div class="leadership-card text-center h-100 leadership-card--primary">
                    <div class="leadership-badge">
                        <i class="bi bi-star-fill"></i> Chefe do Departamento
                    </div>
                    <div class="leadership-avatar">
                        <i class="bi bi-person-badge-fill"></i>
                    </div>
                    <h3><?= htmlspecialchars($chefeAtual['nome']) ?></h3>
                    <p class="leadership-role"><?= htmlspecialchars($chefeAtual['cargo']) ?></p>
                    <p class="leadership-area"><?= htmlspecialchars($chefeAtual['setor']) ?></p>
                    <div class="leadership-contact">
                        <a href="mailto:<?= htmlspecialchars($chefeAtual['email']) ?>" class="leadership-contact-link">
                            <i class="bi bi-envelope-fill"></i>
                            <?= htmlspecialchars($chefeAtual['email']) ?>
                        </a>
                        <span class="leadership-phone">
                            <i class="bi bi-telephone-fill"></i>
                            <?= htmlspecialchars($chefeAtual['telefone']) ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <!-- Vice-Chefe -->
            <?php if ($viceAtual): ?>
            <div class="col-md-6 col-lg-5">
                <div class="leadership-card text-center h-100">
                    <div class="leadership-badge leadership-badge--vice">
                        <i class="bi bi-star"></i> Vice-Chefe
                    </div>
                    <div class="leadership-avatar">
                        <i class="bi bi-person-badge"></i>
                    </div>
                    <h3><?= htmlspecialchars($viceAtual['nome']) ?></h3>
                    <p class="leadership-role"><?= htmlspecialchars($viceAtual['cargo']) ?></p>
                    <p class="leadership-area"><?= htmlspecialchars($viceAtual['setor']) ?></p>
                    <div class="leadership-contact">
                        <a href="mailto:<?= htmlspecialchars($viceAtual['email']) ?>" class="leadership-contact-link">
                            <i class="bi bi-envelope-fill"></i>
                            <?= htmlspecialchars($viceAtual['email']) ?>
                        </a>
                        <span class="leadership-phone">
                            <i class="bi bi-telephone-fill"></i>
                            <?= htmlspecialchars($viceAtual['telefone']) ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ COMISSÕES (RESUMO) ═══════════════ -->
<section class="section-padding bg-light-subtle" id="comissao">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">ESTRUTURA</span>
            <h2 class="section-title">Comissões gestoras</h2>
            <p class="section-subtitle">As comissões que organizam as atividades do departamento.</p>
        </div>
        <div class="row g-4">
            <?php foreach (array_slice($COMISSOES, 0, 4) as $comissao): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="commission-card h-100">
                        <div class="commission-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3><?= htmlspecialchars($comissao['nome']) ?></h3>
                        <ul class="commission-members">
                            <?php foreach ($comissao['membros'] as $membro): ?>
                                <li><?= htmlspecialchars($membro) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="comissoes-conselho.php" class="btn-outline-green">
                Ver todas as comissões <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ═══════════════ HISTÓRICO DE CHEFIAS ═══════════════ -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">HISTÓRICO</span>
            <h2 class="section-title">Gestões anteriores</h2>
            <p class="section-subtitle">Relação nominal dos chefes e vice-chefes que administraram o departamento.</p>
        </div>

        <div class="table-responsive">
            <table class="table table-hover leadership-table align-middle">
                <thead>
                    <tr>
                        <th scope="col" style="width:140px">Gestão</th>
                        <th scope="col">Chefe</th>
                        <th scope="col">Vice-Chefe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($HISTORICO_CHEFIAS as $i => $gestao): ?>
                        <tr class="<?= $i === 0 ? 'table-active-current' : '' ?>">
                            <td>
                                <span class="gestao-badge <?= $i === 0 ? 'gestao-badge--current' : '' ?>">
                                    <?= htmlspecialchars($gestao['gestao']) ?>
                                </span>
                                <?php if ($i === 0): ?>
                                    <span class="current-tag">Atual</span>
                                <?php endif; ?>
                            </td>
                            <td><?= htmlspecialchars($gestao['chefe']) ?></td>
                            <td><?= htmlspecialchars($gestao['vice']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
