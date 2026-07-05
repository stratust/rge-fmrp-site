<?php
/**
 * index.php — Homepage do Departamento de Genética FMRP/USP
 */
require __DIR__ . '/includes/data.php';
$pageTitle = 'Departamento de Genética - FMRP/USP';
$breadcrumb = ['Início'];
require __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════ HERO SECTION ═══════════════ -->
<section class="hero-section">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="assets/img/video_1.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 hero-content">
                <h1>Departamento de<br>Genética</h1>
                <p class="hero-subtitle">FMRP – USP</p>
                <p class="hero-text">Excelência em ensino, pesquisa e inovação em genética.</p>
                <a href="historia.php" class="btn-hero">
                    Conheça o Departamento
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ FEATURES (4 CARDS) ═══════════════ -->
<section class="section-padding features-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">NOSSAS ÁREAS</span>
            <h2 class="section-title">Excelência em todas as frentes</h2>
        </div>
        <div class="row g-4">
            <!-- Ensino -->
            <div class="col-md-6 col-lg-3">
                <a href="ensino.php" class="feature-card-link text-decoration-none">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>
                        <h3>Ensino</h3>
                        <p>Graduação, pós-graduação e extensão com qualidade reconhecida.</p>
                        <span class="feature-link">Saiba mais <i class="bi bi-arrow-right-short"></i></span>
                    </div>
                </a>
            </div>
            <!-- Pesquisa -->
            <div class="col-md-6 col-lg-3">
                <a href="linhas-pesquisa.php" class="feature-card-link text-decoration-none">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <h3>Pesquisa</h3>
                        <p>Linhas de pesquisa em genética molecular, humana, vegetal e mais.</p>
                        <span class="feature-link">Saiba mais <i class="bi bi-arrow-right-short"></i></span>
                    </div>
                </a>
            </div>
            <!-- Laboratórios -->
            <div class="col-md-6 col-lg-3">
                <a href="laboratorios.php" class="feature-card-link text-decoration-none">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3>Laboratórios</h3>
                        <p>Infraestrutura de ponta com 14 laboratórios de pesquisa e ensino.</p>
                        <span class="feature-link">Saiba mais <i class="bi bi-arrow-right-short"></i></span>
                    </div>
                </a>
            </div>
            <!-- Corpo Docente -->
            <div class="col-md-6 col-lg-3">
                <a href="docentes.php" class="feature-card-link text-decoration-none">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3>Corpo Docente</h3>
                        <p>Professores qualificados comprometidos com a excelência acadêmica.</p>
                        <span class="feature-link">Saiba mais <i class="bi bi-arrow-right-short"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ STATS ═══════════════ -->
<section class="section-padding stats-section">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-lg-3">
                <div class="stat-item">
                    <span class="stat-number" data-count="60">60+</span>
                    <p class="stat-label">Anos de história</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-item">
                    <span class="stat-number" data-count="14">14</span>
                    <p class="stat-label">Laboratórios</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-item">
                    <span class="stat-number" data-count="17">17</span>
                    <p class="stat-label">Docentes</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-item">
                    <span class="stat-number" data-count="700">700+</span>
                    <p class="stat-label">Titulações concluídas</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ NOTÍCIAS CAROUSEL ═══════════════ -->
<section class="section-padding news-section">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <span class="section-label">NOVIDADES</span>
                <h2 class="section-title mb-0">Últimas notícias</h2>
            </div>
            <a href="noticias.php" class="btn-outline-green d-none d-md-inline-flex">
                Ver todas <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="carousel-wrapper">
            <div class="carousel-track" id="newsTrack">
                <?php foreach ($NOTICIAS as $noticia): ?>
                    <div class="news-card-col">
                        <div class="news-card h-100">
                            <?php if (!empty($noticia['imagem'])): ?>
                                <div class="news-card-img">
                                    <img src="<?= htmlspecialchars($noticia['imagem']) ?>" alt="<?= htmlspecialchars($noticia['titulo']) ?>" loading="lazy">
                                    <span class="news-badge"><?= htmlspecialchars($noticia['categoria']) ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="news-card-body">
                                <span class="news-date">
                                    <i class="bi bi-calendar3"></i>
                                    <?= htmlspecialchars($noticia['data']) ?>
                                </span>
                                <h3 class="news-title"><?= htmlspecialchars($noticia['titulo']) ?></h3>
                                <p class="news-excerpt"><?= htmlspecialchars($noticia['resumo']) ?></p>
                                <a href="#" class="news-read-more">Leia mais <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="carousel-controls">
            <div class="carousel-dots" id="newsDots"></div>
            <div class="carousel-arrows">
                <button class="carousel-arrow" id="newsPrev" aria-label="Anterior">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button class="carousel-arrow" id="newsNext" aria-label="Próximo">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

        <div class="text-center mt-4 d-md-none">
            <a href="noticias.php" class="btn-outline-green">
                Ver todas <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ═══════════════ LINHAS DE PESQUISA ═══════════════ -->
<section class="section-padding research-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">PESQUISA</span>
            <h2 class="section-title">Linhas de Pesquisa</h2>
            <p class="section-subtitle">Conheça as principais áreas de investigação do departamento.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($LINHAS_PESQUISA as $linha): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="research-card h-100">
                        <div class="research-card-header">
                            <span class="research-number"></span>
                            <i class="bi bi-diagram-3-fill research-icon"></i>
                        </div>
                        <h3><?= htmlspecialchars($linha['nome']) ?></h3>
                        <p><?= htmlspecialchars($linha['descricao']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5">
            <a href="linhas-pesquisa.php" class="btn-solid-green">
                Ver todas as linhas <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ═══════════════ CTA ═══════════════ -->
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2>Venha fazer parte da nossa história</h2>
                <p>Processo seletivo para Mestrado e Doutorado sempre aberto. Conheça nossos programas.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="pos-graduacao.php" class="btn-cta">
                    Inscrições abertas <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
