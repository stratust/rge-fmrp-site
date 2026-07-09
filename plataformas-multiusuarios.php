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
                <span>Departamento</span>
                <span class="separator">/</span>
                <span class="active">Plataformas Multiusuários</span>
            </nav>
            <h1>Plataformas Multiusuários</h1>
            <p>Infraestrutura científica de alta performance disponível para pesquisadores internos e externos, promovendo colaboração e excelência em pesquisa.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="plataformas-multiusuarios.php#plataformas" class="btn-green">Conheça as Plataformas <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="plataformas-multiusuarios.php#acesso" class="btn-outline-light-custom">COMO ACESSAR <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
        </div>
    </section>

    <!-- Hero Section 
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 hero-content">
                    <div style="width: 40px; height: 3px; background: var(--accent-green); margin-bottom: 1.5rem;"></div>
                    <h1>Plataformas<br>Multiusuários</h1>
                    <p>Infraestrutura científica de alta performance disponível para pesquisadores internos e externos, promovendo colaboração e excelência em pesquisa.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#plataformas" class="btn-green">Conheça as Plataformas <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="#acesso" class="btn-outline-light-custom">COMO ACESSAR <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="section-label">Sobre as Plataformas</div>
                    <h2>Tecnologia de ponta ao alcance da comunidade científica</h2>
                    <p>As Plataformas Multiusuários do Departamento de Genética da FMRP/USP são centros de excelência que oferecem serviços especializados em genômica, modelagem animal e biobanco para pesquisadores da USP e instituições parceiras.</p>
                    <p>Nossa missão é democratizar o acesso a tecnologias de alto custo, promovendo a colaboração interinstitucional e impulsionando a produção científica de qualidade em genética e áreas correlatas.</p>
                </div>
                <div class="col-lg-5">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="icon-card rge-card">
                                <div class="stat-number">3</div>
                                <div class="stat-label">Plataformas Ativas</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="icon-card rge-card">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">Projetos Atendidos/Ano</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="icon-card rge-card">
                                <div class="stat-number">200+</div>
                                <div class="stat-label">Pesquisadores Atendidos</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="icon-card rge-card">
                                <div class="stat-number">15+</div>
                                <div class="stat-label">Instituições Parceiras</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platforms Section -->
    <section class="platforms-section" id="plataformas">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Nossas Plataformas</div>
                    <h2>Infraestrutura especializada para sua pesquisa</h2>
                    <p style="color: #555; line-height: 1.8;">Cada plataforma é operada por equipe técnica qualificada e oferece treinamento, suporte experimental e análise de dados para garantir resultados de excelência.</p>
                </div>
            </div>

            <!-- Facility de Genômica -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="icon-card rge-card">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <div class="platform-header genomics h-100">
                                    <i class="bi bi-cpu"></i>
                                    <span class="platform-badge">Genômica</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="platform-body">
                                    <h3>Facility de Genômica</h3>
                                    <div class="subtitle">Plataforma de Sequenciamento e Análise</div>
                                    <p>A Facility de Genômica oferece serviços completos de sequenciamento de nova geração (NGS), genotipagem, análise de expressão gênica e bioinformática. Atende projetos de genômica humana, animal, vegetal e microbiana com capacidade de processamento de milhares de amostras por ano.</p>

                                    <ul class="service-list">
                                        <li><i class="bi bi-check-circle-fill"></i> Sequenciamento de DNA/RNA (Illumina e Nanopore)</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Genotipagem por SNP arrays e sequenciamento</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Análise de transcriptoma (RNA-seq, scRNA-seq)</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Metagenômica e microbioma</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Epigenômica (ChIP-seq, metilação)</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Bioinformática e análise de dados genômicos</li>
                                    </ul>

                                    <div class="platform-meta">
                                        <div class="meta-item"><i class="bi bi-person"></i> Coord.: Prof. Dr. [Nome]</div>
                                        <div class="meta-item"><i class="bi bi-geo-alt"></i> Bloco [X], Sala [XX]</div>
                                        <div class="meta-item"><i class="bi bi-clock"></i> Seg–Sex, 8h–18h</div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="plataformas-multiusuarios.php#" class="btn-platform">SOLICITAR SERVIÇO <i class="bi bi-arrow-right ms-1"></i></a>
                                        <a href="plataformas-multiusuarios.php#" class="btn-platform-outline">CATÁLOGO DE SERVIÇOS</a>
                                    </div>

                                    <div class="platform-contact">
                                        <h4>Contato</h4>
                                        <p><i class="bi bi-envelope"></i> genomica@fmrp.usp.br</p>
                                        <p><i class="bi bi-telephone"></i> (16) 3315-3300 – Ramal [XXXX]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ZebraFish -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="icon-card rge-card">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <div class="platform-header zebrafish h-100">
                                    <i class="bi bi-water"></i>
                                    <span class="platform-badge">Modelagem Animal</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="platform-body">
                                    <h3>ZebraFish Facility</h3>
                                    <div class="subtitle">Plataforma de Modelagem em Peixe-Zebra</div>
                                    <p>A ZebraFish Facility é um biotério especializado para criação e manutenção de peixes-zebra (*Danio rerio*), modelo vertebrado amplamente utilizado em estudos de genética do desenvolvimento, toxicologia, neurociência e doenças humanas. Oferece suporte completo desde a manutenção das linhas até ensaios fenotípicos e editagem genômica.</p>

                                    <ul class="service-list">
                                        <li><i class="bi bi-check-circle-fill"></i> Manutenção de linhas selvagens e transgênicas</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Microinjeção de mRNA, DNA e CRISPR/Cas9</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Screenings fenotípicos e comportamentais</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Ensaios de toxicidade e farmacologia</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Imagens *in vivo* de embriões (microscopia confocal)</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Criação de modelos de doenças humanas</li>
                                    </ul>

                                    <div class="platform-meta">
                                        <div class="meta-item"><i class="bi bi-person"></i> Coord.: Prof. Dr. [Nome]</div>
                                        <div class="meta-item"><i class="bi bi-geo-alt"></i> Bloco [X], Sala [XX]</div>
                                        <div class="meta-item"><i class="bi bi-clock"></i> Seg–Sex, 8h–18h</div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="plataformas-multiusuarios.php#" class="btn-platform">SOLICITAR SERVIÇO <i class="bi bi-arrow-right ms-1"></i></a>
                                        <a href="plataformas-multiusuarios.php#" class="btn-platform-outline">CATÁLOGO DE SERVIÇOS</a>
                                    </div>

                                    <div class="platform-contact">
                                        <h4>Contato</h4>
                                        <p><i class="bi bi-envelope"></i> zebrafish@fmrp.usp.br</p>
                                        <p><i class="bi bi-telephone"></i> (16) 3315-3300 – Ramal [XXXX]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Biobanco de Organoides -->
            <div class="row">
                <div class="col-12">
                    <div class="icon-card rge-card">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <div class="platform-header biobank h-100">
                                    <i class="bi bi-grid-3x3"></i>
                                    <span class="platform-badge">Biobanco</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="platform-body">
                                    <h3>Biobanco de Organoides</h3>
                                    <div class="subtitle">Plataforma de Cultura e Biobanco de Organoides</div>
                                    <p>O Biobanco de Organoides é uma plataforma especializada no estabelecimento, cultura, caracterização e armazenamento de organoides derivados de células-tronco e tecidos primários. Oferece modelos tridimensionais fisiologicamente relevantes para estudos de desenvolvimento, doenças, farmacologia e medicina de precisão.</p>

                                    <ul class="service-list">
                                        <li><i class="bi bi-check-circle-fill"></i> Estabelecimento de organoides a partir de biópsias</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Cultura e expansão de linhas de organoides</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Criopreservação e banco de organoides</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Ensaios de farmacossensibilidade</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Co-culturas e modelos de microambiente</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Caracterização molecular e imunofluorescência</li>
                                    </ul>

                                    <div class="platform-meta">
                                        <div class="meta-item"><i class="bi bi-person"></i> Coord.: Profa. Dra. [Nome]</div>
                                        <div class="meta-item"><i class="bi bi-geo-alt"></i> Bloco [X], Sala [XX]</div>
                                        <div class="meta-item"><i class="bi bi-clock"></i> Seg–Sex, 8h–18h</div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="plataformas-multiusuarios.php#" class="btn-platform">SOLICITAR SERVIÇO <i class="bi bi-arrow-right ms-1"></i></a>
                                        <a href="plataformas-multiusuarios.php#" class="btn-platform-outline">CATÁLOGO DE SERVIÇOS</a>
                                    </div>

                                    <div class="platform-contact">
                                        <h4>Contato</h4>
                                        <p><i class="bi bi-envelope"></i> organoides@fmrp.usp.br</p>
                                        <p><i class="bi bi-telephone"></i> (16) 3315-3300 – Ramal [XXXX]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipment Section -->
    <section class="equipment-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Equipamentos</div>
                    <h2>Infraestrutura compartilhada</h2>
                    <p style="color: #555; line-height: 1.8;">Além das plataformas especializadas, o Departamento oferece equipamentos de uso multiusuário para análises complementares e preparação de amostras.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-moisture"></i></div>
                        <h3>qPCR em Tempo Real</h3>
                        <p>Quantificação de expressão gênica e genotipagem</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-eye"></i></div>
                        <h3>Microscopia Confocal</h3>
                        <p>Imagem de alta resolução de células e tecidos</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-droplet"></i></div>
                        <h3>Citometria de Fluxo</h3>
                        <p>Análise e separação celular multiparamétrica</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-layers"></i></div>
                        <h3>Sequenciador Sanger</h3>
                        <p>Sequenciamento de regiões específicas de DNA</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-thermometer-half"></i></div>
                        <h3>Termocicladores</h3>
                        <p>Amplificação de DNA por PCR convencional</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="icon-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-activity"></i></div>
                        <h3>Espectrofotômetro</h3>
                        <p>Quantificação de ácidos nucleicos e proteínas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Access Section -->
    <section class="access-section" id="acesso">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Como Acessar</div>
                    <h2>Fluxo de solicitação de serviços</h2>
                    <p style="color: #555; line-height: 1.8;">O acesso às plataformas é aberto a pesquisadores da USP e instituições externas mediante agendamento prévio e aprovação do coordenador da plataforma.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="step-number">1</div>
                        <h3>Cadastro</h3>
                        <p>Realize seu cadastro no sistema de agendamento da plataforma desejada, informando instituição, projeto e necessidades experimentais.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="step-number">2</div>
                        <h3>Proposta Técnica</h3>
                        <p>Envie a descrição do experimento, número de amostras e tipo de análise necessária. A equipe técnica avaliará a viabilidade.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="step-number">3</div>
                        <h3>Orçamento</h3>
                        <p>Receba o orçamento detalhado com valores de serviços, insumos e horas técnicas. Pesquisadores da USP têm tarifas diferenciadas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="icon-card rge-card">
                        <div class="step-number">4</div>
                        <h3>Execução</h3>
                        <p>Após aprovação, agende a execução do serviço. Acompanhe o andamento pelo sistema e receba os dados com relatório técnico.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="plataformas-multiusuarios.php#" class="btn-green">Acessar Sistema de Agendamento <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>

    <!-- Contact Banner -->
    <section class="contact-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2>Coordenação das Plataformas Multiusuários</h2>
                    <p>Para dúvidas gerais sobre as plataformas, parcerias institucionais ou informações sobre tarifas e editais de fomento.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <span>plataformas@fmrp.usp.br</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-telephone"></i>
                                <span>(16) 3315-3300 – Ramal [XXXX]</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>Departamento de Genética – FMRP/USP</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-clock"></i>
                                <span>Segunda a sexta, 8h às 18h</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="mailto:plataformas@fmrp.usp.br" class="btn-outline-light-custom d-inline-block">ENVIAR E-MAIL <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
