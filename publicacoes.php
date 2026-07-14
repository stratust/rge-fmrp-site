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
                <span class="active">Publicações</span>
            </nav>
            <h1>Publicações</h1>
            <p>Produção científica do Departamento de Genética em revistas nacionais e internacionais.</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <form class="filter-form row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label" >Buscar</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0" ><i class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Título, autor ou palavra-chave..." >
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label" >Ano</label>
                    <select class="form-select">
                        <option selected>Todos os anos</option>
                        <option>2025</option>
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label" >Área</label>
                    <select class="form-select">
                        <option selected>Todas as áreas</option>
                        <option>Genética Molecular</option>
                        <option>Genômica e Bioinformática</option>
                        <option>Biologia Celular</option>
                        <option>Genética de Plantas</option>
                        <option>Genética Médica</option>
                        <option>Genética de Populações</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn-filter w-100"><i class="bi bi-funnel me-1"></i> Filtrar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Publications Section -->
    <section class="pub-section">
        <div class="container">
            <div class="section-label">Artigos Científicos</div>
            <div class="section-header">
                <h2>Publicações recentes</h2>
                <span class="pub-count">Exibindo 1–10 de 156 publicações</span>
            </div>

            <!-- Featured Publication -->
            <div class="featured-pub">
                <span class="badge-highlight"><i class="bi bi-star-fill me-1"></i> Destaque</span>
                <h3>Novel regulatory mechanisms in gene expression control during cellular stress response</h3>
                <p>Silva, A. B.; Oliveira, C. D.; Santos, E. F.; Costa, G. H.; Lima, I. J. — Departamento de Genética, FMRP/USP</p>
                <p class="journal"><i class="bi bi-journal-text me-1"></i> Nature Genetics & Development, 2025</p>
                <div class="actions">
                    <a href="publicacoes.php#" class="btn-featured"><i class="bi bi-box-arrow-up-right"></i> Acessar artigo</a>
                    <a href="publicacoes.php#" class="btn-featured-outline"><i class="bi bi-file-pdf"></i> PDF</a>
                </div>
            </div>

            <div class="pub-list">
            <!-- Publication 1 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>MAI</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética Molecular</span>
                    <h3 class="pub-title">Transcriptional reprogramming in response to DNA double-strand breaks: a systems biology approach</h3>
                    <p class="pub-authors"><strong>Oliveira, C. D.</strong>; Ferreira, M. N.; Almeida, P. Q.; et al.</p>
                    <p class="pub-journal">Nucleic Acids Research, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 14.9</span>
                        <span><i class="bi bi-quote"></i> 12 citações</span>
                        <span><i class="bi bi-eye"></i> 845 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 2 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>ABR</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genômica e Bioinformática</span>
                    <h3 class="pub-title">Comparative genomics reveals adaptive evolution in tropical plant species under climate change scenarios</h3>
                    <p class="pub-authors"><strong>Santos, E. F.</strong>; Lima, I. J.; Costa, G. H.; et al.</p>
                    <p class="pub-journal">Molecular Ecology, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 4.9</span>
                        <span><i class="bi bi-quote"></i> 8 citações</span>
                        <span><i class="bi bi-eye"></i> 623 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 3 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>ABR</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética Médica</span>
                    <h3 class="pub-title">Whole-exome sequencing identifies new candidate genes for hereditary neurological disorders in Brazilian families</h3>
                    <p class="pub-authors"><strong>Costa, G. H.</strong>; Silva, A. B.; Ferreira, M. N.; et al.</p>
                    <p class="pub-journal">American Journal of Human Genetics, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 9.0</span>
                        <span><i class="bi bi-quote"></i> 15 citações</span>
                        <span><i class="bi bi-eye"></i> 1.204 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 4 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>MAR</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Biologia Celular</span>
                    <h3 class="pub-title">Mitochondrial dynamics and autophagy interplay in neurodegenerative disease models: implications for therapeutic targeting</h3>
                    <p class="pub-authors"><strong>Ferreira, M. N.</strong>; Almeida, P. Q.; Lima, I. J.; et al.</p>
                    <p class="pub-journal">Cell Reports, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 7.5</span>
                        <span><i class="bi bi-quote"></i> 6 citações</span>
                        <span><i class="bi bi-eye"></i> 512 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 5 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>MAR</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genômica e Bioinformática</span>
                    <h3 class="pub-title">Machine learning approaches for predicting pathogenic variants in non-coding regions of the human genome</h3>
                    <p class="pub-authors"><strong>Lima, I. J.</strong>; Costa, G. H.; Silva, A. B.; et al.</p>
                    <p class="pub-journal">Bioinformatics, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 4.4</span>
                        <span><i class="bi bi-quote"></i> 4 citações</span>
                        <span><i class="bi bi-eye"></i> 378 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 6 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>FEV</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética de Plantas</span>
                    <h3 class="pub-title">CRISPR-mediated resistance to viral pathogens in staple crop species: field trial validation</h3>
                    <p class="pub-authors"><strong>Almeida, P. Q.</strong>; Santos, E. F.; Oliveira, C. D.; et al.</p>
                    <p class="pub-journal">Plant Biotechnology Journal, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 10.1</span>
                        <span><i class="bi bi-quote"></i> 9 citações</span>
                        <span><i class="bi bi-eye"></i> 756 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 7 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>FEV</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética de Populações</span>
                    <h3 class="pub-title">Phylogeographic structure and conservation genetics of endemic amphibians in the Atlantic Forest hotspot</h3>
                    <p class="pub-authors"><strong>Silva, A. B.</strong>; Ferreira, M. N.; Lima, I. J.; et al.</p>
                    <p class="pub-journal">Conservation Genetics, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 2.5</span>
                        <span><i class="bi bi-quote"></i> 3 citações</span>
                        <span><i class="bi bi-eye"></i> 289 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 8 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>JAN</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética Molecular</span>
                    <h3 class="pub-title">Epigenetic regulation of stem cell differentiation: role of histone modifications and non-coding RNAs</h3>
                    <p class="pub-authors"><strong>Oliveira, C. D.</strong>; Costa, G. H.; Almeida, P. Q.; et al.</p>
                    <p class="pub-journal">Stem Cell Reports, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 7.2</span>
                        <span><i class="bi bi-quote"></i> 7 citações</span>
                        <span><i class="bi bi-eye"></i> 534 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 9 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2024
                    <span>DEZ</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética Médica</span>
                    <h3 class="pub-title">Population-based screening for carrier status of recessive disorders in the Brazilian Midwest</h3>
                    <p class="pub-authors"><strong>Santos, E. F.</strong>; Lima, I. J.; Silva, A. B.; et al.</p>
                    <p class="pub-journal">Genetics in Medicine, 2024</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 8.8</span>
                        <span><i class="bi bi-quote"></i> 11 citações</span>
                        <span><i class="bi bi-eye"></i> 892 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 10 -->
            <div class="content-card rge-card">
                <div class="pub-year-badge">
                    2024
                    <span>NOV</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Biologia Celular</span>
                    <h3 class="pub-title">Oxidative stress-induced senescence in fibroblasts: protective role of autophagy modulation</h3>
                    <p class="pub-authors"><strong>Ferreira, M. N.</strong>; Almeida, P. Q.; Oliveira, C. D.; et al.</p>
                    <p class="pub-journal">Aging Cell, 2024</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 7.8</span>
                        <span><i class="bi bi-quote"></i> 5 citações</span>
                        <span><i class="bi bi-eye"></i> 445 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section class="pagination-section">
        <div class="container">
            <nav aria-label="Navegação de publicações">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="publicacoes.php#" aria-label="Anterior">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="publicacoes.php#">1</a></li>
                    <li class="page-item"><a class="page-link" href="publicacoes.php#">2</a></li>
                    <li class="page-item"><a class="page-link" href="publicacoes.php#">3</a></li>
                    <li class="page-item"><a class="page-link" href="publicacoes.php#">4</a></li>
                    <li class="page-item"><a class="page-link" href="publicacoes.php#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="publicacoes.php#" aria-label="Próximo">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Explore nossas linhas de pesquisa</h2>
            <p class="mx-auto">Conheça os grupos de pesquisa por trás dessas publicações e descubra oportunidades de colaboração e formação.</p>
            <a href="linhas-pesquisa.php" class="btn-green">Linhas de Pesquisa <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
