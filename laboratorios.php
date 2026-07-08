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
                <span class="active">Laboratórios de Pesquisa</span>
            </nav>
            <h1>Laboratórios de Pesquisa</h1>
            <p>Infraestrutura moderna e tecnologia de ponta para pesquisa e ensino em Genética, abrangendo desde a biologia molecular até a bioinformática.</p>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">14</span>
                        <span class="stat-label">Laboratórios de Pesquisa</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Laboratórios de Ensino</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Equipamentos</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">1.2k</span>
                        <span class="stat-label">m² de Área</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class="filters-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <span class="text-muted me-2" style="font-size: 0.85rem;">Filtrar por área:</span>
                    <button class="filter-btn active">Todos</button>
                    <button class="filter-btn">Genética Molecular</button>
                    <button class="filter-btn">Genômica</button>
                    <button class="filter-btn">Biologia Celular</button>
                    <button class="filter-btn">Micologia</button>
                    <button class="filter-btn">Oncologia</button>
                    <button class="filter-btn">Hematologia</button>
                    <button class="filter-btn">Ensino</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Labs Grid -->
    <section class="labs-section">
        <div class="container">
            <div class="section-label mb-4">Infraestrutura de Pesquisa</div>
            <h2 class="mb-5">Laboratórios de Pesquisa</h2>

            <!-- Featured Lab -->
            <div class="featured-lab">
                <div class="featured-lab-img">
                    <i class="bi bi-virus"></i>
                </div>
                <div class="featured-lab-body">
                    <div class="lab-tags mb-2">
                        <span class="lab-tag">Genética Molecular</span>
                        <span class="lab-tag">Oncologia</span>
                        <span class="lab-tag">Destaque</span>
                    </div>
                    <h3>Laboratório de Biologia Molecular de Tumores Sólidos</h3>
                    <div class="lab-leader"><i class="bi bi-person-circle"></i> Coordenação: Departamento de Genética – FMRP/USP</div>
                    <p>O Laboratório de Biologia Molecular de Tumores Sólidos desenvolve pesquisas voltadas à compreensão dos mecanismos moleculares envolvidos na carcinogênese, identificação de biomarcadores e desenvolvimento de estratégias terapêuticas para neoplasias sólidas. Conta com infraestrutura para análise de expressão gênica, sequenciamento e cultura de células tumorais.</p>
                    <div class="lab-links">
                        <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                        <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Lab 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-bug lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética Animal</span>
                                <span class="lab-tag">Biologia de Desenvolvimento</span>
                            </div>
                            <h3 class="lab-name">Biologia e Genética de Desenvolvimento de Abelhas</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Klaus Hartmann Hartfelder</div>
                            <p class="lab-desc">Estudo da biologia molecular e celular de abelhas sociais, com foco em mecanismos de diferenciação de castas, desenvolvimento ovariano, expressão gênica diferencial e plasticidade fenotípica em Apis mellifera e meliponídeos.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3063 / 4541</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> klaus@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco Central – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Site do Lab</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Lattes</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-droplet lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Hematologia</span>
                                <span class="lab-tag">Genética Médica</span>
                            </div>
                            <h3 class="lab-name">Laboratório de Hematologia Molecular</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Marco Antonio Zago</div>
                            <p class="lab-desc">Pesquisas em terapia gênica, engenharia celular, doenças genéticas hematológicas e biologia molecular de células-tronco hematopoéticas. Desenvolvimento de vetores virais e estratégias de correção gênica.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> zago@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-shield-plus lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Imunogenética</span>
                                <span class="lab-tag">Genética Molecular</span>
                            </div>
                            <h3 class="lab-name">Laboratório de Imunogenética Molecular</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Wilson Araújo da Silva Júnior</div>
                            <p class="lab-desc">Investigação da diversidade genética de populações, marcadores do DNA nuclear e mitocondrial, microRNAs em neoplasias hematológicas e bases genéticas da resposta imune em diferentes populações brasileiras.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> wilson.silva@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-flower1 lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética de Plantas</span>
                                <span class="lab-tag">Reprodução</span>
                            </div>
                            <h3 class="lab-name">Sinalização Celular na Reprodução</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe de Pesquisa</div>
                            <p class="lab-desc">Estudo dos processos de sinalização celular envolvidos na reprodução de plantas, incluindo interações pólen-pistilo, desenvolvimento de órgãos reprodutivos e regulação gênica durante a gametogênese.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-cpu lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Bioinformática</span>
                                <span class="lab-tag">Genômica</span>
                            </div>
                            <h3 class="lab-name">Processamento de Informação Biológica</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Ricardo Z. N. Vêncio / Tie Koide</div>
                            <p class="lab-desc">Desenvolvimento de ferramentas computacionais para análise de dados ômicos, modelagem de redes regulatórias, transcriptômica e aprendizado de máquina aplicado à biologia. Infraestrutura de alto desempenho para bioinformática.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> rvencio@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-virus lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Micologia</span>
                                <span class="lab-tag">Genética Molecular</span>
                            </div>
                            <h3 class="lab-name">Genética e Biologia Molecular de Fungos</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Francis de Assis Nóbrega / Iran Malavazi</div>
                            <p class="lab-desc">Estudo da biologia molecular de fungos patogênicos, com ênfase em Paracoccidioides brasiliensis e Aspergillus fumigatus. Investigação de mecanismos de patogenicidade, resistência a antifúngicos e transcriptoma fúngico.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> francis.nobrega@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-capsule lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Oncologia</span>
                                <span class="lab-tag">Pesquisa Experimental</span>
                            </div>
                            <h3 class="lab-name">Oncologia Experimental – LABOEX</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe Multidisciplinar</div>
                            <p class="lab-desc">Pesquisas experimentais em oncologia, incluindo estudos de carcinogênese, terapia gênica tumoral, modelos animais de câncer e avaliação de novos compostos com potencial antitumoral.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Anexo A – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-clipboard-pulse lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Oncopatologia</span>
                                <span class="lab-tag">Diagnóstico</span>
                            </div>
                            <h3 class="lab-name">Laboratório de Oncopatologia</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe de Pesquisa</div>
                            <p class="lab-desc">Estudo da patologia molecular de tumores, correlação entre alterações genéticas e perfis histopatológicos, desenvolvimento de testes diagnósticos moleculares para neoplasias.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 9 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-bacteria lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Parasitologia</span>
                                <span class="lab-tag">Genética Molecular</span>
                            </div>
                            <h3 class="lab-name">Laboratório de Parasitologia Molecular</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe de Pesquisa</div>
                            <p class="lab-desc">Investigação da biologia molecular de parasitos, identificação de alvos terapêuticos, estudos de resistência a drogas e desenvolvimento de métodos diagnósticos moleculares para doenças parasitárias.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 10 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-people lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética Humana</span>
                                <span class="lab-tag">Farmacogenética</span>
                            </div>
                            <h3 class="lab-name">Laboratório de Genética Humana e Populações</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Sergio Danilo Junho Pena</div>
                            <p class="lab-desc">Pesquisas em farmacogenética, genética forense, DNA de populações brasileiras, genômica personalizada e medicina de precisão. Desenvolvimento de painéis de SNPs para aplicações médicas e forenses.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> sdjpena@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 11 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-tree lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética Vegetal</span>
                                <span class="lab-tag">Melhoramento</span>
                            </div>
                            <h3 class="lab-name">Laboratório de Genética de Plantas</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe de Pesquisa</div>
                            <p class="lab-desc">Melhoramento genético de espécies vegetais, resistência a estresses bióticos e abióticos, engenharia genética de plantas e estudos de expressão gênica em resposta a estresses ambientais.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 12 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header">
                            <i class="bi bi-egg-fried lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética Animal</span>
                                <span class="lab-tag">Melhoramento</span>
                            </div>
                            <h3 class="lab-name">Laboratório de Genética Animal</h3>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Ester Silveira Ramos / Raysildo B. Lôbo</div>
                            <p class="lab-desc">Melhoramento genético aplicado a bovinos de corte, reprodução assistida, precocidade sexual e crescimento, epigenética e genética quantitativa em populações animais.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> ester.ramos@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="laboratorios.php#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="laboratorios.php#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teaching Labs -->
            <div class="section-label mt-5 mb-4">Infraestrutura de Ensino</div>
            <h2 class="mb-5">Laboratórios de Ensino</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header" style="background: linear-gradient(135deg, #4a7c59 0%, #6b9e75 100%);">
                            <i class="bi bi-mortarboard lab-header-icon"></i>
                            <span class="lab-badge lab-badge-teaching">Ensino</span>
                        </div>
                        <div class="lab-body">
                            <h3 class="lab-name">Laboratório de Práticas em Genética</h3>
                            <p class="lab-desc">Espaço destinado às aulas práticas de graduação em Genética, Citogenética e Biologia Molecular. Equipado com microscópios, material para preparação de lâminas e kits didáticos de biologia molecular.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-people"></i> Capacidade: 30 alunos</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – Térreo</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header" style="background: linear-gradient(135deg, #4a7c59 0%, #6b9e75 100%);">
                            <i class="bi bi-laptop lab-header-icon"></i>
                            <span class="lab-badge lab-badge-teaching">Ensino</span>
                        </div>
                        <div class="lab-body">
                            <h3 class="lab-name">Laboratório de Informática em Genética</h3>
                            <p class="lab-desc">Sala equipada com estações de trabalho para aulas de bioinformática, análise de dados genéticos, simulações computacionais e acesso a bancos de dados genômicos.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-people"></i> Capacidade: 25 alunos</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – 1º Andar</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header" style="background: linear-gradient(135deg, #4a7c59 0%, #6b9e75 100%);">
                            <i class="bi bi-microscope lab-header-icon"></i>
                            <span class="lab-badge lab-badge-teaching">Ensino</span>
                        </div>
                        <div class="lab-body">
                            <h3 class="lab-name">Laboratório de Microscopia</h3>
                            <p class="lab-desc">Infraestrutura para ensino de técnicas de microscopia óptica e eletrônica, preparação de amostras biológicas e análise morfológica de células e tecidos.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-people"></i> Capacidade: 20 alunos</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – Térreo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
