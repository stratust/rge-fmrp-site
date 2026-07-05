<?php
/**
 * plataformas-multiusuarios.php — Equipamentos multiusuários do departamento
 */
require __DIR__ . '/includes/data.php';
$pageTitle = 'Plataformas Multiusuários';
$breadcrumb = ['Início', 'Departamento', 'Plataformas Multiusuários'];
$pageSubtitle = 'Infraestrutura de equipamentos de ponta disponível para a comunidade acadêmica e parceiros externos';
$pageDesc = 'Lista de equipamentos multiusuários do Departamento de Genética FMRP/USP.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ EQUIPAMENTOS ═══════════════ -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">INFRAESTRUTURA</span>
            <h2 class="section-title">Equipamentos Multiusuários</h2>
            <p class="section-subtitle">
                O Departamento de Genética dispõe de uma ampla gama de equipamentos de alta performance,
                disponibilizados para uso de pesquisadores, alunos e instituições parceiras mediante agendamento.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($EQUIPAMENTOS as $equip): ?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="equipment-card h-100">
                        <div class="equipment-icon">
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                        <h3><?= htmlspecialchars($equip['nome']) ?></h3>
                        <p><?= htmlspecialchars($equip['descricao']) ?></p>
                        <div class="equipment-footer">
                            <span class="equipment-tag">
                                <i class="bi bi-check-circle"></i> Disponível
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════ COMO UTILIZAR ═══════════════ -->
<section class="section-padding bg-light-subtle">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">AGENDAMENTO</span>
            <h2 class="section-title">Como utilizar os equipamentos</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="step-card text-center h-100">
                    <div class="step-number">1</div>
                    <i class="bi bi-envelope-paper-fill step-icon"></i>
                    <h3>Solicitação</h3>
                    <p>Entre em contato com a secretaria do departamento informando o equipamento de interesse e a proposta de uso.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card text-center h-100">
                    <div class="step-number">2</div>
                    <i class="bi bi-clipboard-check-fill step-icon"></i>
                    <h3>Avaliação</h3>
                    <p>A solicitação é avaliada pela Comissão de Infraestrutura, que verifica a viabilidade técnica e a disponibilidade.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card text-center h-100">
                    <div class="step-number">3</div>
                    <i class="bi bi-calendar-check-fill step-icon"></i>
                    <h3>Agendamento</h3>
                    <p>Após aprovação, é realizado o agendamento e o treinamento necessário para utilização do equipamento.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ CONTATO ═══════════════ -->
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2>Tem interesse em utilizar nossos equipamentos?</h2>
                <p>Entre em contato com a secretaria para mais informações sobre disponibilidade e procedimentos.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="mailto:secgen@fmrp.usp.br" class="btn-cta">
                    <i class="bi bi-envelope-fill"></i> Solicitar agendamento
                </a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
