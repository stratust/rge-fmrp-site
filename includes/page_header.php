<?php
/**
 * page_header.php — Header reutilizável para páginas internas
 * Variáveis obrigatórias: $pageTitle, $breadcrumb (array)
 * Variáveis opcionais: $pageSubtitle, $pageDesc
 */
if (!isset($pageSubtitle)) $pageSubtitle = '';
?>
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <?php foreach ($breadcrumb as $i => $crumb): ?>
                        <?php if ($i < count($breadcrumb) - 1): ?>
                            <li class="breadcrumb-item"><a href="<?= $i === 0 ? 'index.php' : '#' ?>"><?= htmlspecialchars($crumb) ?></a></li>
                        <?php else: ?>
                            <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($crumb) ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </nav>
            <h1><?= htmlspecialchars($pageTitle) ?></h1>
            <?php if ($pageSubtitle): ?>
                <p><?= htmlspecialchars($pageSubtitle) ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
