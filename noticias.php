<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Notícias — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Notícias'];
$pageSubtitle = 'Acompanhe as últimas notícias, eventos e conquistas do Departamento de Genética.';
$pageDesc = 'Notícias do Departamento de Genética FMRP/USP: pesquisas, publicações, eventos e defesas.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ LISTA DE NOTÍCIAS ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($NOTICIAS as $noticia): ?>
            <div class="col-md-6 col-lg-4">
                <article class="card-custom h-100 noticia-card overflow-hidden">
                    <div class="noticia-img-wrapper">
                        <img src="<?= htmlspecialchars($noticia['imagem']) ?>" alt="<?= htmlspecialchars($noticia['titulo']) ?>" class="noticia-img" loading="lazy">
                        <span class="noticia-badge-cat"><?= htmlspecialchars($noticia['categoria']) ?></span>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i><?= htmlspecialchars($noticia['data']) ?></div>
                        <h3 class="h6 fw-bold"><?= htmlspecialchars($noticia['titulo']) ?></h3>
                        <p class="text-muted small"><?= htmlspecialchars($noticia['resumo']) ?></p>
                        <a href="#" class="link-arrow">Ler mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
