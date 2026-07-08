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
                <span class="active">Notícias</span>
            </nav>
            <h1>Notícias e Destaques</h1>
            <p>Acompanhe as últimas novidades, pesquisas e eventos do Departamento de Genética.</p>
        </div>
    </section>


    <!-- Featured News -->
    <section class="featured-news">
        <div class="container">
            <div class="section-label">Destaque</div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="featured-card rge-card">
                        <div class="featured-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=900&h=450&fit=crop" alt="Notícia em destaque">
                        </div>
                        <div class="featured-body">
                            <span class="featured-category">Pesquisa</span>
                            <div class="news-date mb-2"><i class="bi bi-calendar3"></i> 20 MAI 2025</div>
                            <h3 class="featured-title">Estudo revela novo mecanismo genético em doenças raras neurológicas</h3>
                            <p class="featured-excerpt">Pesquisadores do Departamento de Genética da FMRP/USP identificaram vias celulares inéditas envolvidas no desenvolvimento de doenças genéticas neurológicas raras. O estudo, publicado em revista internacional de alto impacto, abre caminho para novas estratégias terapêuticas e diagnósticas precoces.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-4">
                        <div class="news-card rge-card">
                            <div class="news-img" style="height: 160px;">
                                <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=400&h=250&fit=crop" alt="Evento">
                            </div>
                            <div class="news-body">
                                <span class="news-category">Evento</span>
                                <div class="news-date"><i class="bi bi-calendar3"></i> 15 MAI 2025</div>
                                <h2 class="h5 news-title">Departamento promove simpósio sobre edição genômica</h2>
                                <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="news-card rge-card">
                            <div class="news-img" style="height: 160px;">
                                <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Pós-graduação">
                            </div>
                            <div class="news-body">
                                <span class="news-category">Ensino</span>
                                <div class="news-date"><i class="bi bi-calendar3"></i> 28 ABR 2025</div>
                                <h2 class="h5 news-title">Abertas as inscrições para pós-graduação 2026</h2>
                                <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- All News -->
    <section class="news-section">
        <div class="container">
            <div class="section-label">Todas as Notícias</div>
            <div class="section-header">
                <h2>Fique por dentro</h2>
                <div class="d-flex gap-2">
                    <select class="form-select form-select-sm" style="width: auto; font-size: 0.85rem; border-radius: 8px;">
                        <option selected>Todas as categorias</option>
                        <option>Pesquisa</option>
                        <option>Ensino</option>
                        <option>Eventos</option>
                        <option>Extensão</option>
                    </select>
                    <select class="form-select form-select-sm" style="width: auto; font-size: 0.85rem; border-radius: 8px;">
                        <option selected>Mais recentes</option>
                        <option>Mais antigas</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
                <!-- News Item 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 1">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Pesquisa</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 20 MAI 2025</div>
                            <h2 class="h5 news-title">Estudo revela novo mecanismo genético em doenças raras</h2>
                            <p class="news-excerpt">Pesquisa do departamento identifica vias celulares envolvidas em doenças genéticas neurológicas.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=400&h=250&fit=crop" alt="Notícia 2">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Evento</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 15 MAI 2025</div>
                            <h2 class="h5 news-title">Departamento promove simpósio sobre edição genômica</h2>
                            <p class="news-excerpt">Evento reuniu pesquisadores nacionais e internacionais para discutir os avanços em CRISPR.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 3">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Pesquisa</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 05 MAI 2025</div>
                            <h2 class="h5 news-title">Novo artigo publicado em revista internacional</h2>
                            <p class="news-excerpt">Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Notícia 4">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Ensino</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 28 ABR 2025</div>
                            <h2 class="h5 news-title">Abertas as inscrições para pós-graduação 2026</h2>
                            <p class="news-excerpt">Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?w=400&h=250&fit=crop" alt="Notícia 5">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Extensão</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 22 ABR 2025</div>
                            <h2 class="h5 news-title">Programa de divulgação científica visita escolas da região</h2>
                            <p class="news-excerpt">Alunos de graduação levam conhecimento sobre genética a comunidades escolares de Ribeirão Preto.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?w=400&h=250&fit=crop" alt="Notícia 6">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Pesquisa</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 10 ABR 2025</div>
                            <h2 class="h5 news-title">Descoberta de novo gene associado à resistência em plantas</h2>
                            <p class="news-excerpt">Estudo abre perspectivas para o desenvolvimento de cultivares mais resilientes.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=400&h=250&fit=crop" alt="Notícia 7">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Evento</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 02 ABR 2025</div>
                            <h2 class="h5 news-title">Semana da Genética 2025: inscrições abertas</h2>
                            <p class="news-excerpt">Evento anual traz palestras, workshops e apresentações de trabalhos científicos.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1576670159805-381a9de1cdec?w=400&h=250&fit=crop" alt="Notícia 8">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Ensino</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 25 MAR 2025</div>
                            <h2 class="h5 news-title">Novo laboratório de bioinformática é inaugurado</h2>
                            <p class="news-excerpt">Espaço conta com equipamentos de última geração para análise de dados genômicos.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 9 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=400&h=250&fit=crop" alt="Notícia 9">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Pesquisa</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 18 MAR 2025</div>
                            <h2 class="h5 news-title">Colaboração internacional avança em estudos de evolução genética</h2>
                            <p class="news-excerpt">Parceria com universidades europeias amplia compreensão sobre diversidade genética.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section class="pagination-section">
        <div class="container">
            <nav aria-label="Navegação de notícias">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="noticias.php#" aria-label="Anterior">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="noticias.php#">1</a></li>
                    <li class="page-item"><a class="page-link" href="noticias.php#">2</a></li>
                    <li class="page-item"><a class="page-link" href="noticias.php#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="noticias.php#" aria-label="Próximo">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h3><i class="bi bi-envelope-paper me-2"></i>Receba nossas novidades</h3>
                    <p class="mb-0">Cadastre-se para receber as últimas notícias e eventos do Departamento de Genética.</p>
                </div>
                <div class="col-lg-6">
                    <form class="newsletter-form d-flex gap-2">
                        <input type="email" class="form-control flex-grow-1" placeholder="Seu e-mail" required>
                        <button type="submit" class="btn">CADASTRAR</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
