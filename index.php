<?php
$pageTitle = 'Departamento de Genética - FMRP/USP';
require __DIR__ . '/includes/header.php';
?>
    <!-- Hero Section -->
    <section class="hero-section">
     <video autoplay muted loop playsinline class="hero-video">
        <!-- <source src="assets/img/video_1.webm" type="video/webm">      -->
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
<!--                        <a href="linhas-pesquisa.php" class="btn btn-outline-light-custom">LINHAS DE PESQUISA <i class="bi bi-arrow-right ms-1"></i></a> -->
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
                    <div class="feature-card rge-card">
					
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 15 L25 5 L40 15 L40 35 L25 45 L10 35 Z" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M25 5 L25 25 M25 25 L10 35 M25 25 L40 35" stroke="#1a5c3a" stroke-width="1.5"/>
                                <circle cx="25" cy="25" r="3" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h3>ENSINO</h3>
                        <p>Graduação e Pós-graduação com excelência acadêmica.</p>
                        →
                    </div>
					</a>
                </div>
				
				
                <div class="col-md-6 col-lg-3">
				<a href="linhas-pesquisa.php" class="feature-link">
                    <div class="feature-card rge-card">
                        <!--  DNA PESQUISA  -->
                        <div class="feature-icon">
                            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 10C40 22 40 42 20 54" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"/>
                                <path d="M40 10C20 22 20 42 40 54" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"/>
                            
                                <line x1="23" y1="18" x2="37" y2="18" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="21" y1="30" x2="39" y2="30" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="23" y1="42" x2="37" y2="42" stroke="#1a5c3a" stroke-width="2"/>
                            
                                <circle cx="48" cy="46" r="8" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="54" y1="52" x2="61" y2="59" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3>PESQUISA</h3>
                        <p>Produzindo conhecimento e promovendo inovação.</p>
                        →
                    </div>
					</a>
                </div>
                <div class="col-md-6 col-lg-3">
				<a href="laboratorios.php" class="feature-link">
                    <div class="feature-card rge-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="12" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <rect x="22" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <rect x="32" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <line x1="15" y1="38" x2="15" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="25" y1="38" x2="25" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="35" y1="38" x2="35" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="10" y1="45" x2="40" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>LABORATÓRIOS</h3>
                        <p>Infraestrutura moderna e tecnologia de ponta.</p>
                        →
                    </div>
					</a>
                </div>
                <div class="col-md-6 col-lg-3">
				<a href="docentes.php" class="feature-link">
                    <div class="feature-card rge-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="8" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <circle cx="32" cy="18" r="8" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M12 30 Q25 25 38 30 Q38 42 25 45 Q12 42 12 30" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <h3>CORPO DOCENTE</h3>
                        <p>Professores e pesquisadores altamente qualificados.</p>
                        →
                    </div>
					</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
<!--    <section class="about-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Sobre Nós</div>
                    <h2>Excelência que<br>transforma ciência</h2>
                    <p>O Departamento de Genética da FMRP/USP tem uma longa trajetória dedicada à formação de profissionais, à produção de conhecimento e à contribuição para o avanço da genética e áreas correlatas.</p>
                    <p>Unimos tradição e inovação para gerar impacto na ciência e na sociedade.</p>
                    <a href="historia.php" class="btn btn-green mt-3">SAIBA MAIS SOBRE O DEPARTAMENTO</a>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/rge1.jpg" alt="Departamento de Genética">
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
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

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=400&h=250&fit=crop" alt="Notícia 1">
                            </div>
                            <div class="news-body">
                                <div class="news-date">15 JUN 2026 - 14:00</div>
                                <h3 class="news-title">Jéssica Oliveira de Santis - Doutorado</h3>
                                <p class="news-excerpt">Caracterização Molecular e Abordagens Funcionais para Identificação de Vulnerabilidades Terapêuticas no Meduloblastoma Pediátrico</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 2">
                            </div>
                            <div class="news-body">
                                <div class="news-date">15 MAI 2025</div>
                                <h3 class="news-title">Departamento promove simpósio sobre edição genômica</h3>
                                <p class="news-excerpt">Evento reuniu pesquisadores nacionais e internacionais para discutir os avanços em CRISPR e suas aplicações.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 3">
                            </div>
                            <div class="news-body">
                                <div class="news-date">05 MAI 2025</div>
                                <h3 class="news-title">Novo artigo publicado em revista internacional</h3>
                                <p class="news-excerpt">Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Notícia 4">
                            </div>
                            <div class="news-body">
                                <div class="news-date">28 ABR 2025</div>
                                <h3 class="news-title">Abertas as inscrições para pós-graduação 2026</h3>
                                <p class="news-excerpt">Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 5">
                            </div>
                            <div class="news-body">
                                <div class="news-date">05 MAI 2025</div>
                                <h3 class="news-title">Novo artigo publicado em revista internacional</h3>
                                <p class="news-excerpt">Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Notícia 6">
                            </div>
                            <div class="news-body">
                                <div class="news-date">28 ABR 2025</div>
                                <h3 class="news-title">Abertas as inscrições para pós-graduação 2026</h3>
                                <p class="news-excerpt">Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div><!-- /.carousel-track -->
        </div><!-- /.carousel-wrapper -->

        <!-- Controles -->
        <div class="carousel-controls">
            <div class="carousel-dots" id="newsDots"></div>
            <div class="d-flex gap-2">
                <button class="carousel-arrow" id="newsPrev" aria-label="Anterior" disabled>
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
                                                <path d="M17.5 5 C10 5, 5 12, 5 18 C5 26, 12 30, 17.5 30 C23 30, 30 26, 30 18 C30 12, 25 5, 17.5 5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M12 15 Q17.5 10 23 15 Q23 22 17.5 25 Q12 22 12 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <circle cx="17.5" cy="18" r="2" fill="#1a5c3a"/>
                                            </svg>
                                        </div>
                                        <h3>Genética Molecular</h3>
                                        <p>Estudo dos mecanismos moleculares dos genes e suas funções.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <path d="M8 28 Q8 5 17.5 5 Q27 5 27 28" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <line x1="17.5" y1="5" x2="17.5" y2="28" stroke="#1a5c3a" stroke-width="1.5"/>
                                                <line x1="12" y1="15" x2="23" y2="15" stroke="#1a5c3a" stroke-width="1.5"/>
                                                <line x1="10" y1="22" x2="25" y2="22" stroke="#1a5c3a" stroke-width="1.5"/>
                                            </svg>
                                        </div>
                                        <h3>Genômica e Bioinformática</h3>
                                        <p>Análise de dados genômicos e desenvolvimento de ferramentas computacionais.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <circle cx="12" cy="12" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="23" cy="12" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="17.5" cy="24" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                            </svg>
                                        </div>
                                        <h3>Biologia Celular</h3>
                                        <p>Investigação dos processos celulares em condições fisiológicas e patológicas.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <path d="M17.5 30 L17.5 20 M17.5 20 Q12 15 12 8 Q12 3 17.5 3 Q23 3 23 8 Q23 15 17.5 20" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M10 25 Q8 20 10 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <path d="M25 25 Q27 20 25 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <ellipse cx="17.5" cy="30" rx="8" ry="3" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                            </svg>
                                        </div>
                                        <h3>Genética de Plantas</h3>
                                        <p>Melhoramento genético e resistência a estresses bióticos e abióticos.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <circle cx="10" cy="12" r="5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="25" cy="12" r="5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M7 20 Q17.5 15 28 20 Q28 30 17.5 32 Q7 30 7 20" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                            </svg>
                                        </div>
                                        <h3>Genética de Populações e Evolução</h3>
                                        <p>Estudos sobre diversidade genética, evolução e conservação.</p>
                                    </div>
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
    </section>


<script>
(function () {

    const GAP = 24;
    const track = document.getElementById('newsTrack');
    const dotsEl = document.getElementById('newsDots');
    const prevBtn = document.getElementById('newsPrev');
    const nextBtn = document.getElementById('newsNext');
    const cards = track.querySelectorAll('.news-card-col');
    let current = 0;

    function getVisible() {
        const cardW = cards[0].offsetWidth;
        const wrapperW = track.parentElement.offsetWidth;
        return Math.round(wrapperW / (cardW + GAP));
    }

    function buildDots() {
        const pages = Math.ceil(cards.length / getVisible());
        dotsEl.innerHTML = '';
        for (let i = 0; i < pages; i++) {
            const d = document.createElement('button');
            d.className = 'carousel-dot' + (i === 0 ? ' active' : '');
            d.setAttribute('aria-label', 'Página ' + (i + 1));
            d.addEventListener('click', () => goTo(i));
            dotsEl.appendChild(d);
        }
    }

    function update() {
        const visible = getVisible();
        const pages = Math.ceil(cards.length / visible);
        current = Math.min(current, pages - 1);
        const cardW = cards[0].offsetWidth;
        const offset = current * visible * (cardW + GAP);
        track.style.transform = 'translateX(-' + offset + 'px)';
        dotsEl.querySelectorAll('.carousel-dot').forEach((d, i) =>
            d.classList.toggle('active', i === current)
        );
        prevBtn.disabled = current === 0;
        nextBtn.disabled = current >= pages - 1;
    }

    function goTo(page) {
        const pages = Math.ceil(cards.length / getVisible());
        current = Math.max(0, Math.min(pages - 1, page));
        update();
    }

    prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn.addEventListener('click', () => goTo(current + 1));

    let startX = 0;
    track.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
    track.addEventListener('touchend', e => {
        const dx = e.changedTouches[0].clientX - startX;
        if (Math.abs(dx) > 40) goTo(current + (dx < 0 ? 1 : -1));
    });

    window.addEventListener('resize', () => { buildDots(); update(); });

    buildDots();
    update();

})();
</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
