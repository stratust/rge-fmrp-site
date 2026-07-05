<?php
/**
 * index.php — Homepage do Departamento de Genética FMRP/USP
 * Réplica fiel do site original
 */
require __DIR__ . '/includes/data.php';
$pageTitle = 'Departamento de Genética - FMRP/USP';
require __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="assets/img/video_1.mp4" type="video/mp4">
        Seu navegador não suporta vídeos.
    </video>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 hero-content">
                <div style="width: 40px; height: 3px; background: var(--accent-green); margin-bottom: 1.5rem;"></div>
                <h1>Departamento de<br>Genética</h1>
                <p class="subtitle">FMRP – USP</p>
                <p>Excelência em ensino, pesquisa<br>e inovação em genética.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="historia.php" class="btn btn-green">CONHEÇA O DEPARTAMENTO <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-indicators">
        <span class="active"></span>
        <span></span>
        <span></span>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <a href="ensino.php" class="feature-link">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 15 L25 5 L40 15 L40 35 L25 45 L10 35 Z" stroke="#1a5c3a" stroke-width="2" fill="none"></path>
                                <path d="M25 5 L25 25 M25 25 L10 35 M25 25 L40 35" stroke="#1a5c3a" stroke-width="1.5"></path>
                                <circle cx="25" cy="25" r="3" fill="#1a5c3a"></circle>
                            </svg>
                        </div>
                        <h5>ENSINO</h5>
                        <p>Graduação e Pós-graduação com excelência acadêmica.</p>
                        →
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="linhas-pesquisa.php" class="feature-link">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 10C40 22 40 42 20 54" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"></path>
                                <path d="M40 10C20 22 20 42 40 54" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"></path>
                                <line x1="23" y1="18" x2="37" y2="18" stroke="#1a5c3a" stroke-width="2"></line>
                                <line x1="21" y1="30" x2="39" y2="30" stroke="#1a5c3a" stroke-width="2"></line>
                                <line x1="23" y1="42" x2="37" y2="42" stroke="#1a5c3a" stroke-width="2"></line>
                                <circle cx="48" cy="46" r="8" stroke="#1a5c3a" stroke-width="2"></circle>
                                <line x1="54" y1="52" x2="61" y2="59" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"></line>
                            </svg>
                        </div>
                        <h5>PESQUISA</h5>
                        <p>Produzindo conhecimento e promovendo inovação.</p>
                        →
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="laboratorios.php" class="feature-link">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="12" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"></rect>
                                <rect x="22" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"></rect>
                                <rect x="32" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"></rect>
                                <line x1="15" y1="38" x2="15" y2="45" stroke="#1a5c3a" stroke-width="2"></line>
                                <line x1="25" y1="38" x2="25" y2="45" stroke="#1a5c3a" stroke-width="2"></line>
                                <line x1="35" y1="38" x2="35" y2="45" stroke="#1a5c3a" stroke-width="2"></line>
                                <line x1="10" y1="45" x2="40" y2="45" stroke="#1a5c3a" stroke-width="2"></line>
                            </svg>
                        </div>
                        <h5>LABORATÓRIOS</h5>
                        <p>Infraestrutura moderna e tecnologia de ponta.</p>
                        →
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="docentes.php" class="feature-link">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="8" stroke="#1a5c3a" stroke-width="2" fill="none"></circle>
                                <circle cx="32" cy="18" r="8" stroke="#1a5c3a" stroke-width="2" fill="none"></circle>
                                <path d="M12 30 Q25 25 38 30 Q38 42 25 45 Q12 42 12 30" stroke="#1a5c3a" stroke-width="2" fill="none"></path>
                            </svg>
                        </div>
                        <h5>CORPO DOCENTE</h5>
                        <p>Professores e pesquisadores altamente qualificados.</p>
                        →
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="section-label">Notícias e Destaques</div>
        <div class="section-header">
            <h2>Fique por dentro</h2>
            <a href="noticias.php" class="see-all-link">VER TODAS AS NOTÍCIAS <i class="bi bi-arrow-right"></i></a>
        </div>

        <!-- Carrossel -->
        <div class="carousel-wrapper">
            <div class="carousel-track" id="newsTrack">
                <?php foreach ($NOTICIAS as $noticia): ?>
                    <div class="news-card-col">
                        <div class="news-card">
                            <a href="#" class="news-link">
                                <div class="news-img">
                                    <img src="<?= htmlspecialchars($noticia['imagem']) ?>" alt="<?= htmlspecialchars($noticia['titulo']) ?>" loading="lazy">
                                </div>
                                <div class="news-body">
                                    <div class="news-date"><?= htmlspecialchars($noticia['data']) ?></div>
                                    <h5 class="news-title"><?= htmlspecialchars($noticia['titulo']) ?></h5>
                                    <p class="news-excerpt"><?= htmlspecialchars($noticia['resumo']) ?></p>
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Controles -->
        <div class="carousel-controls">
            <div class="carousel-dots" id="newsDots"></div>
            <div class="d-flex gap-2">
                <button class="carousel-arrow" id="newsPrev" aria-label="Anterior">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button class="carousel-arrow" id="newsNext" aria-label="Próximo">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Research Section -->
<section class="research-section">
    <div class="container">
        <div class="section-label">Nossas Linhas de Pesquisa</div>
        <h2>Conhecimento que gera impacto</h2>

        <div class="research-carousel position-relative">
            <div id="researchCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="research-item">
                                    <div class="research-icon">
                                        <svg viewBox="0 0 35 35" fill="none">
                                            <path d="M17.5 5 C10 5, 5 12, 5 18 C5 26, 12 30, 17.5 30 C23 30, 30 26, 30 18 C30 12, 25 5, 17.5 5" stroke="#1a5c3a" stroke-width="2" fill="none"></path>
                                            <path d="M12 15 Q17.5 10 23 15 Q23 22 17.5 25 Q12 22 12 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"></path>
                                            <circle cx="17.5" cy="18" r="2" fill="#1a5c3a"></circle>
                                        </svg>
                                    </div>
                                    <h5>Genética Molecular</h5>
                                    <p>Estudo dos mecanismos moleculares dos genes e suas funções.</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="research-item">
                                    <div class="research-icon">
                                        <svg viewBox="0 0 35 35" fill="none">
                                            <path d="M8 28 Q8 5 17.5 5 Q27 5 27 28" stroke="#1a5c3a" stroke-width="2" fill="none"></path>
                                            <line x1="17.5" y1="5" x2="17.5" y2="28" stroke="#1a5c3a" stroke-width="1.5"></line>
                                            <line x1="12" y1="15" x2="23" y2="15" stroke="#1a5c3a" stroke-width="1.5"></line>
                                            <line x1="10" y1="22" x2="25" y2="22" stroke="#1a5c3a" stroke-width="1.5"></line>
                                        </svg>
                                    </div>
                                    <h5>Genômica e Bioinformática</h5>
                                    <p>Análise de dados genômicos e desenvolvimento de ferramentas computacionais.</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="research-item">
                                    <div class="research-icon">
                                        <svg viewBox="0 0 35 35" fill="none">
                                            <circle cx="12" cy="12" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"></circle>
                                            <circle cx="23" cy="12" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"></circle>
                                            <circle cx="17.5" cy="24" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"></circle>
                                        </svg>
                                    </div>
                                    <h5>Biologia Celular</h5>
                                    <p>Investigação dos processos celulares em condições fisiológicas e patológicas.</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="research-item">
                                    <div class="research-icon">
                                        <svg viewBox="0 0 35 35" fill="none">
                                            <path d="M17.5 30 L17.5 20 M17.5 20 Q12 15 12 8 Q12 3 17.5 3 Q23 3 23 8 Q23 15 17.5 20" stroke="#1a5c3a" stroke-width="2" fill="none"></path>
                                            <path d="M10 25 Q8 20 10 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"></path>
                                            <path d="M25 25 Q27 20 25 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"></path>
                                            <ellipse cx="17.5" cy="30" rx="8" ry="3" stroke="#1a5c3a" stroke-width="1.5" fill="none"></ellipse>
                                        </svg>
                                    </div>
                                    <h5>Genética de Plantas</h5>
                                    <p>Melhoramento genético e resistência a estresses bióticos e abióticos.</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="research-item">
                                    <div class="research-icon">
                                        <svg viewBox="0 0 35 35" fill="none">
                                            <circle cx="10" cy="12" r="5" stroke="#1a5c3a" stroke-width="2" fill="none"></circle>
                                            <circle cx="25" cy="12" r="5" stroke="#1a5c3a" stroke-width="2" fill="none"></circle>
                                            <path d="M7 20 Q17.5 15 28 20 Q28 30 17.5 32 Q7 30 7 20" stroke="#1a5c3a" stroke-width="2" fill="none"></path>
                                        </svg>
                                    </div>
                                    <h5>Genética de Populações e Evolução</h5>
                                    <p>Estudos sobre diversidade genética, evolução e conservação.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev-custom" type="button" data-bs-target="#researchCarousel" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="carousel-control-next-custom" type="button" data-bs-target="#researchCarousel" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
