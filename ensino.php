<?php
$pageTitle = 'Departamento de Genética - FMRP/USP';
require __DIR__ . '/includes/header.php';
?>
    <!-- Page Header -->
	    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.php">Início</a>
                <span class="separator">/</span>
                <span class="active">Ensino</span>
            </nav>
            <h1>Ensino</h1>
            <p>Formação de excelência em todos os níveis, unindo tradição acadêmica e inovação pedagógica.</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Nossa Missão</div>
                    <h2>Formando os geneticistas<br>do futuro</h2>
                    <p>O Departamento de Genética da FMRP/USP oferece uma formação completa e atualizada, desde a graduação até a pós-graduação stricto sensu, além de cursos e atividades de extensão que conectam a universidade à sociedade.</p>
                    <p>Nossos programas combinam sólida base teórica com intensa prática em laboratórios de ponta, preparando profissionais capacitados para atuar em pesquisa, ensino, saúde, biotecnologia e diversas áreas correlatas.</p>
                    <a href="ensino.php#programas" class="btn-green" >
                        Conheça Nossos Programas <i class="bi bi-arrow-down"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrap">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=800&h=500&fit=crop" alt="Ensino no Departamento de Genética" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section" id="programas">
        <div class="container">
            <div class="section-label">Programas de Formação</div>
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2>Escolha sua trilha</h2>
            </div>

            <div class="row g-4">
                <!-- Graduação -->
                <div class="col-md-4">
                    <a href="graduacao.php" class="media-card">
                        <div class="program-img">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600&h=400&fit=crop" alt="Graduação">
                            <div class="program-img-overlay"></div>
                            <span class="program-badge">Graduação</span>
                        </div>
                        <div class="program-body">
                            <div class="program-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <h3>Graduação</h3>
                            <p>Formação em Genética e Biologia com ênfase em bases moleculares, celulares e populacionais. Currículo atualizado com disciplinas práticas e teóricas.</p>
                            <div class="program-meta">
                                <span><i class="bi bi-clock"></i> 4 anos</span>
                                <span><i class="bi bi-award"></i> Bacharelado</span>
                            </div>
                            <span class="program-link">Saiba Mais <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- Pós-graduação -->
                <div class="col-md-4">
                    <a href="pos-graduacao.php" class="media-card">
                        <div class="program-img">
                            <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=600&h=400&fit=crop" alt="Pós-graduação">
                            <div class="program-img-overlay"></div>
                            <span class="program-badge">Pós-graduação</span>
                        </div>
                        <div class="program-body">
                            <div class="program-icon">
                                <i class="bi bi-journal-bookmark-fill"></i>
                            </div>
                            <h3>Pós-graduação</h3>
                            <p>Programas de Mestrado e Doutorado com foco em pesquisa científica de excelência. Bolsas disponíveis e orientação de renomados pesquisadores.</p>
                            <div class="program-meta">
                                <span><i class="bi bi-clock"></i> 2–4 anos</span>
                                <span><i class="bi bi-award"></i> M/D</span>
                            </div>
                            <span class="program-link">Saiba Mais <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <!-- Extensão -->
                <div class="col-md-4">
                    <a href="extensao.php" class="media-card">
                        <div class="program-img">
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&h=400&fit=crop" alt="Extensão">
                            <div class="program-img-overlay"></div>
                            <span class="program-badge">Extensão</span>
                        </div>
                        <div class="program-body">
                            <div class="program-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3>Extensão</h3>
                            <p>Cursos de atualização, programas de divulgação científica, eventos e atividades que promovem a interação entre universidade e comunidade.</p>
                            <div class="program-meta">
                                <span><i class="bi bi-clock"></i> Variável</span>
                                <span><i class="bi bi-award"></i> Certificado</span>
                            </div>
                            <span class="program-link">Saiba Mais <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container">
            <div class="section-label">Informações Acadêmicas</div>
            <h2>Suporte ao estudante</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <h3>Calendário Acadêmico</h3>
                        <p>Acompanhe as datas importantes do ano letivo, incluindo matrículas, avaliações e recessos.</p>
                        <a href="ensino.php#">Ver calendário <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <h3>Horários e Ementas</h3>
                        <p>Consulte os horários das disciplinas, ementas detalhadas e planos de ensino dos cursos.</p>
                        <a href="ensino.php#">Consultar <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-journal-medical"></i>
                        </div>
                        <h3>Trabalhos de Conclusão</h3>
                        <p>Acesse orientações, prazos e a biblioteca digital de TCCs, dissertações e teses defendidas.</p>
                        <a href="ensino.php#">Acessar <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h3>Secretaria Acadêmica</h3>
                        <p>Tire dúvidas sobre matrículas, históricos, declarações e outros serviços acadêmicos.</p>
                        <a href="ensino.php#">Fale conosco <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Pronto para começar sua jornada?</h2>
            <p class="mx-auto">Explore nossos programas de formação e descubra como o Departamento de Genética da FMRP/USP pode impulsionar sua carreira acadêmica e profissional.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="graduacao.php" class="btn-white">Graduação <i class="bi bi-arrow-right"></i></a>
                <a href="pos-graduacao.php" class="btn-outline-white">Pós-Graduação <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
