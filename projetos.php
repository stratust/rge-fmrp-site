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
                <a href="laboratorios.php">Pesquisa</a>
                <span class="separator">/</span>
                <span class="active">Projetos</span>
            </nav>
            <h1>Projetos</h1>
            <p>Iniciativas de pesquisa financiadas que impulsionam a ciência e geram impacto social.</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Pesquisa Aplicada</div>
                    <h2>Ciência com<br>impacto real</h2>
                    <p>O Departamento de Genética desenvolve projetos de pesquisa financiados por agências nacionais e internacionais, parcerias com o setor privado e colaborações interinstitucionais. Nossos projetos abrangem desde a investigação básica até aplicações tecnológicas e clínicas.</p>
                    <p>Cada projeto reúne pesquisadores, estudantes e técnicos em torno de questões científicas relevantes, contribuindo para o avanço do conhecimento e para soluções que beneficiam a sociedade.</p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrap">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800&h=500&fit=crop" alt="Projetos de Pesquisa" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">32</div>
                        <div class="stat-label">Projetos Ativos</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">R$12M</div>
                        <div class="stat-label">Em Financiamentos</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">18</div>
                        <div class="stat-label">Instituições Parceiras</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">120+</div>
                        <div class="stat-label">Pesquisadores Envolvidos</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section">
        <div class="container">
            <div class="section-label">Projetos em Andamento</div>
            <div class="section-header">
                <h2>Conheça nossas iniciativas</h2>
                <div class="d-flex gap-2">
                    <select class="form-select form-select-sm" class="form-select-compact">
                        <option selected>Todos os status</option>
                        <option>Em andamento</option>
                        <option>Novos</option>
                        <option>Concluídos</option>
                    </select>
                    <select class="form-select form-select-sm" class="form-select-compact">
                        <option selected>Todas as áreas</option>
                        <option>Genética Molecular</option>
                        <option>Genômica</option>
                        <option>Genética Médica</option>
                        <option>Genética de Plantas</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
                <!-- Projeto 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=600&h=400&fit=crop" alt="Projeto 1">
                            <span class="project-status active">Em andamento</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genética Médica</span>
                            <h3 class="project-title">Genética de Doenças Raras no Brasil Central</h3>
                            <p class="project-excerpt">Caracterização molecular de doenças genéticas neurológicas e metabólicas em famílias do estado de São Paulo, visando diagnóstico e aconselhamento genético.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2023–2027</span>
                                <span><i class="bi bi-cash-stack"></i> FAPESP (Processo 2023/12345-6)</span>
                                <span><i class="bi bi-people"></i> Coord.: Prof. Dr. A. B. Silva</span>
                            </div>
                            <a href="projetos.php#" class="project-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=600&h=400&fit=crop" alt="Projeto 2">
                            <span class="project-status new">Novo</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genética de Plantas</span>
                            <h3 class="project-title">Resiliência Genética de Culturas Agrícolas à Seca</h3>
                            <p class="project-excerpt">Identificação de genes associados à tolerância hídrica em soja e milho por meio de análise genômica e edição gênica CRISPR.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2025–2029</span>
                                <span><i class="bi bi-cash-stack"></i> CNPq / Embrapa</span>
                                <span><i class="bi bi-people"></i> Coord.: Profa. Dra. C. D. Oliveira</span>
                            </div>
                            <a href="projetos.php#" class="project-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" alt="Projeto 3">
                            <span class="project-status active">Em andamento</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genômica e Bioinformática</span>
                            <h3 class="project-title">Atlas Genômico da Diversidade Brasileira</h3>
                            <p class="project-excerpt">Mapeamento da variabilidade genética de populações brasileiras para estudos de medicina de precisão e compreensão da história evolutiva humana.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2022–2026</span>
                                <span><i class="bi bi-cash-stack"></i> FAPESP / MCTI</span>
                                <span><i class="bi bi-people"></i> Coord.: Prof. Dr. E. F. Santos</span>
                            </div>
                            <a href="projetos.php#" class="project-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?w=600&h=400&fit=crop" alt="Projeto 4">
                            <span class="project-status active">Em andamento</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Biologia Celular</span>
                            <h3 class="project-title">Mecanismos de Senescência Celular e Envelhecimento</h3>
                            <p class="project-excerpt">Investigação das vias moleculares envolvidas no envelhecimento celular e potencial terapêutico de moduladores de autofagia.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2023–2026</span>
                                <span><i class="bi bi-cash-stack"></i> CNPq Universal</span>
                                <span><i class="bi bi-people"></i> Coord.: Prof. Dr. M. N. Ferreira</span>
                            </div>
                            <a href="projetos.php#" class="project-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=600&h=400&fit=crop" alt="Projeto 5">
                            <span class="project-status active">Em andamento</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genética de Populações</span>
                            <h3 class="project-title">Conservação Genética de Anfíbios Ameaçados</h3>
                            <p class="project-excerpt">Avaliação da diversidade genética e conectividade populacional de espécies endêmicas da Mata Atlântica para planejamento de estratégias de conservação.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2024–2028</span>
                                <span><i class="bi bi-cash-stack"></i> FAPESP / ICMBio</span>
                                <span><i class="bi bi-people"></i> Coord.: Profa. Dra. I. J. Lima</span>
                            </div>
                            <a href="projetos.php#" class="project-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="media-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1576670159805-381a9de1cdec?w=600&h=400&fit=crop" alt="Projeto 6">
                            <span class="project-status completed">Concluído</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genética Molecular</span>
                            <h3 class="project-title">Desenvolvimento de Kit Diagnóstico para Doenças Mitocondriais</h3>
                            <p class="project-excerpt">Desenvolvimento e validação de painel de NGS para diagnóstico molecular de doenças mitocondriais hereditárias, com transferência tecnológica para o setor privado.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2020–2024</span>
                                <span><i class="bi bi-cash-stack"></i> FINEP / PIPE</span>
                                <span><i class="bi bi-people"></i> Coord.: Prof. Dr. G. H. Costa</span>
                            </div>
                            <a href="projetos.php#" class="project-link">Ver Resultados <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-label">Linha do Tempo</div>
            <h2>Marcos recentes</h2>

            <div class="timeline-item">
                <div class="timeline-date"><span>2025</span>MAI</div>
                <div class="timeline-content">
                    <h3>Aprovação de novo projeto FAPESP Temático</h3>
                    <p>Projeto "Genômica Funcional de Doenças Neurodegenerativas" aprovado com financiamento de R$ 2,5 milhões para os próximos 5 anos.</p>
                    <div class="meta"><i class="bi bi-check-circle"></i> Financiamento aprovado</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date"><span>2025</span>MAR</div>
                <div class="timeline-content">
                    <h3>Parceria internacional com Universidade de Oxford</h3>
                    <p>Acordo de cooperação para estudos de genética de populações e evolução molecular, incluindo intercâmbio de pesquisadores e estudantes.</p>
                    <div class="meta"><i class="bi bi-globe"></i> Cooperação internacional</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date"><span>2024</span>DEZ</div>
                <div class="timeline-content">
                    <h3>Conclusão do projeto de diagnóstico mitocondrial</h3>
                    <p>Kit de NGS para doenças mitocondriais validado e licenciado para empresa brasileira de biotecnologia.</p>
                    <div class="meta"><i class="bi bi-lightbulb"></i> Transferência tecnológica</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date"><span>2024</span>AGO</div>
                <div class="timeline-content">
                    <h3>Inauguração do Centro de Bioinformática Aplicada</h3>
                    <p>Nova infraestrutura dedicada à análise de dados genômicos em larga escala, fruto de investimento de R$ 1,2 milhão.</p>
                    <div class="meta"><i class="bi bi-building"></i> Infraestrutura</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date"><span>2024</span>ABR</div>
                <div class="timeline-content">
                    <h3>Publicação do Atlas Genômico da Diversidade Brasileira</h3>
                    <p>Primeiros resultados publicados na Nature Genetics, com dados de mais de 5 mil indivíduos de diferentes regiões do Brasil.</p>
                    <div class="meta"><i class="bi bi-journal-text"></i> Publicação de destaque</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <div class="section-label">Parcerias</div>
            <h2>Quem financia e apoia nossa pesquisa</h2>

            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h3>FAPESP</h3>
                        <p>Financiamento de pesquisa</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-bank2"></i>
                        </div>
                        <h3>CNPq</h3>
                        <p>Bolsas e projetos</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h3>CAPES</h3>
                        <p>Pós-graduação</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-globe-americas"></i>
                        </div>
                        <h3>FINEP</h3>
                        <p>Inovação tecnológica</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-seedling"></i>
                        </div>
                        <h3>Embrapa</h3>
                        <p>Pesquisa agrícola</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <h3>HC-FMRP</h3>
                        <p>Pesquisa clínica</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Quer propor uma colaboração?</h2>
            <p class="mx-auto">O Departamento de Genética está aberto a parcerias acadêmicas, institucionais e com o setor privado. Entre em contato para discutir oportunidades de cooperação.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="index.php#contato" class="btn-white">Entre em Contato <i class="bi bi-arrow-right"></i></a>
                <a href="linhas-pesquisa.php" class="btn-outline-white">Linhas de Pesquisa <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
