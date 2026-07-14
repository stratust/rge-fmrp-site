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
                <a href="ensino.php">Ensino</a>
                <span class="separator">/</span>
                <span class="active">Extensão</span>
            </nav>
            <h1>Cursos de Extensão</h1>
            <p>Capacitação contínua e divulgação científica para a comunidade interna e externa.</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Extensão Universitária</div>
                    <h2>Conhecimento que<br>ultrapassa os muros</h2>
                    <p>O Departamento de Genética oferece cursos de extensão voltados à atualização profissional, à divulgação científica e à formação complementar de estudantes, pesquisadores e profissionais da área da saúde e biotecnologia.</p>
                    <p>Nossos cursos combinam teoria e prática, com acesso a laboratórios modernos e orientação de docentes especializados. As atividades de extensão fortalecem o vínculo entre a universidade e a sociedade, promovendo o acesso ao conhecimento científico.</p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrap">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800&h=500&fit=crop" alt="Cursos de Extensão" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses-section">
        <div class="container">
            <div class="section-label">Oferta Atual</div>
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2>Cursos disponíveis</h2>
                <div class="d-flex gap-2">
                    <select class="form-select form-select-sm" class="form-select-compact">
                        <option selected>Todos os cursos</option>
                        <option>Presencial</option>
                        <option>Online</option>
                        <option>Híbrido</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
                <!-- Curso 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=600&h=400&fit=crop" alt="Curso 1">
                            <span class="course-badge">Presencial</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 15–19 JUN 2025</div>
                            <h3 class="course-title">Workshop de Técnicas em Biologia Molecular</h3>
                            <p class="course-excerpt">Curso prático com ênfase em PCR, eletroforese, extração de DNA e técnicas de clonagem. Voltado a estudantes e profissionais da área.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 40h</span>
                                <span><i class="bi bi-people"></i> 20 vagas</span>
                                <span><i class="bi bi-geo-alt"></i> Lab. 3</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">Inscreva-se <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?w=600&h=400&fit=crop" alt="Curso 2">
                            <span class="course-badge online">Online</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 01–30 JUL 2025</div>
                            <h3 class="course-title">Introdução à Bioinformática Aplicada à Genética</h3>
                            <p class="course-excerpt">Curso introdutório sobre ferramentas computacionais para análise de sequências, alinhamento e bancos de dados genômicos.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 30h</span>
                                <span><i class="bi bi-people"></i> 50 vagas</span>
                                <span><i class="bi bi-laptop"></i> Online</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">Inscreva-se <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?w=600&h=400&fit=crop" alt="Curso 3">
                            <span class="course-badge hybrid">Híbrido</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 10–14 AGO 2025</div>
                            <h3 class="course-title">Genética Forense: Teoria e Prática</h3>
                            <p class="course-excerpt">Aborda fundamentos da genética forense, tipagem STR, análise de DNA em vestígios criminais e interpretação de resultados.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 35h</span>
                                <span><i class="bi bi-people"></i> 25 vagas</span>
                                <span><i class="bi bi-laptop"></i> Híbrido</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">Inscreva-se <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=600&h=400&fit=crop" alt="Curso 4">
                            <span class="course-badge">Presencial</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 05–09 OUT 2025</div>
                            <h3 class="course-title">Cultivo de Células e Técnicas de Citogenética</h3>
                            <p class="course-excerpt">Treinamento prático em cultivo de células mamárias, preparação de lâminas, bandeamento cromossômico e análise de cariótipo.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 40h</span>
                                <span><i class="bi bi-people"></i> 15 vagas</span>
                                <span><i class="bi bi-geo-alt"></i> Lab. 5</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">Inscreva-se <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=600&h=400&fit=crop" alt="Curso 5">
                            <span class="course-badge online">Online</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> SET–OUT 2025</div>
                            <h3 class="course-title">Estatística Aplicada à Genética e Genômica</h3>
                            <p class="course-excerpt">Fundamentos de estatística para análise de dados genéticos, uso do R e interpretação de resultados em estudos de associação.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 20h</span>
                                <span><i class="bi bi-people"></i> 40 vagas</span>
                                <span><i class="bi bi-laptop"></i> Online</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">Inscreva-se <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1576670159805-381a9de1cdec?w=600&h=400&fit=crop" alt="Curso 6">
                            <span class="course-badge">Presencial</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 17–21 NOV 2025</div>
                            <h3 class="course-title">Edição de Genomas com CRISPR-Cas9</h3>
                            <p class="course-excerpt">Do projeto de sgRNAs à validação de clones editados. Curso avançado para pesquisadores que desejam implementar a técnica em seus laboratórios.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 40h</span>
                                <span><i class="bi bi-people"></i> 12 vagas</span>
                                <span><i class="bi bi-geo-alt"></i> Lab. 2</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">Inscreva-se <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container">
            <div class="section-label">Informações</div>
            <h2>Dúvidas frequentes</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <h3>Quem pode participar?</h3>
                        <p>Cursos abertos a estudantes de graduação, pós-graduação, profissionais da saúde, educadores e interessados em genética. Consulte pré-requisitos no edital de cada curso.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-medical"></i>
                        </div>
                        <h3>Certificado de conclusão</h3>
                        <p>Todos os cursos emit certificado de extensão universitária da USP, válido para horas complementares e progressão funcional, conforme carga horária.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-credit-card rge-card"></i>
                        </div>
                        <h3>Investimento e bolsas</h3>
                        <p>Taxas de inscrição variam conforme o curso. Bolsas parciais e integrais disponíveis para estudantes e profissionais da rede pública de saúde.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-envelope-open"></i>
                        </div>
                        <h3>Como se inscrever</h3>
                        <p>Inscrições realizadas exclusivamente pelo sistema Apolo da USP. Acesse o edital do curso desejado e siga as instruções de matrícula.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Fique atento às novas turmas</h2>
            <p class="mx-auto">Acompanhe nosso site e redes sociais para saber primeiro sobre novos cursos, programas de verão e eventos de extensão.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="noticias.php" class="btn-white">Ver Notícias <i class="bi bi-arrow-right"></i></a>
                <a href="index.php#contato" class="btn-white" >Fale Conosco <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
