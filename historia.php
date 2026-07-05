<?php
/**
 * historia.php — História do Departamento de Genética FMRP/USP
 */
require __DIR__ . '/includes/data.php';
$pageTitle = 'História do Departamento';
$breadcrumb = ['Início', 'Departamento', 'História'];
$pageSubtitle = 'Seis décadas de contribuições para a genética brasileira e mundial';
$pageDesc = 'Conheça a trajetória do Departamento de Genética da FMRP/USP, desde sua fundação em 1965.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ INTRODUÇÃO ═══════════════ -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <span class="section-label">NOSSA HISTÓRIA</span>
                <h2 class="section-title mb-4">Uma trajetória de excelência</h2>
                <p class="lead text-muted">
                    Fundado em 1965, o Departamento de Genética da Faculdade de Medicina de Ribeirão Preto – USP
                    é referência nacional e internacional em pesquisa, ensino e extensão na área de Genética.
                </p>
                <p>
                    Desde a sua criação, o departamento tem formado gerações de geneticistas, produzido conhecimento
                    científico de impacto e contribuído para o avanço da genética no Brasil. Suas origens remontam
                    à visão pioneira de pesquisadores que enxergaram na genética uma área estratégica para o
                    desenvolvimento científico e tecnológico do país.
                </p>
                <p>
                    Ao longo de mais de seis décadas, o departamento expandiu suas áreas de atuação — da genética
                    clássica à genômica e bioinformática — mantendo-se sempre na fronteira do conhecimento e
                    comprometido com a formação de recursos humanos de alta qualificação.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="image-frame">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=600&h=450&fit=crop"
                         alt="Laboratório de Genética" class="img-fluid rounded-3 shadow-lg" loading="lazy">
                </div>
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
                    <span class="stat-number">1965</span>
                    <p class="stat-label">Fundação</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-item">
                    <span class="stat-number">60+</span>
                    <p class="stat-label">Anos de história</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-item">
                    <span class="stat-number">700+</span>
                    <p class="stat-label">Titulações concluídas</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-item">
                    <span class="stat-number">1971</span>
                    <p class="stat-label">Início da Pós-Graduação</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ TIMELINE ═══════════════ -->
<section class="section-padding bg-light-subtle">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">MARCOS HISTÓRICOS</span>
            <h2 class="section-title">Linha do tempo</h2>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-year">1965</span>
                    <h3>Fundação do Departamento</h3>
                    <p>
                        O Departamento de Genética é formalmente estabelecido na Faculdade de Medicina de
                        Ribeirão Preto – USP, sob liderança de pesquisadores visionários. É uma das primeiras
                        unidades dedicadas à Genética em uma faculdade de medicina no Brasil.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-year">1971</span>
                    <h3>Criação do Programa de Pós-Graduação</h3>
                    <p>
                        Início do programa de pós-graduação em Genética, capacitando mestres e doutores
                        que se tornaram referências em suas áreas de atuação no Brasil e exterior.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-year">1980s</span>
                    <h3>Expansão das Linhas de Pesquisa</h3>
                    <p>
                        Diversificação das áreas de pesquisa, incluindo genética de populações, citogenética,
                        biologia molecular de fungos e genética de abelhas, consolidando a reputação do departamento.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-year">1990s</span>
                    <h3>Modernização e Biologia Molecular</h3>
                    <p>
                        Incorporação das tecnologias de biologia molecular e genômica, com aquisição de equipamentos
                        de ponta e criação de novos laboratórios especializados.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-year">2000s</span>
                    <h3>Genômica e Bioinformática</h3>
                    <p>
                        Estabelecimento de laboratórios de bioinformática e genômica, posicionando o departamento
                        na vanguarda da análise computacional de dados genômicos.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-year">2020s</span>
                    <h3>Inovação e Genômica de Nova Geração</h3>
                    <p>
                        Integração de sequenciamento de nova geração (NGS), edição genômica (CRISPR) e
                        inteligência artificial nas pesquisas, mantendo o departamento na fronteira do conhecimento.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ FIGURAS FUNDAMENTAIS ═══════════════ -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">FIGURAS FUNDAMENTAIS</span>
            <h2 class="section-title">Pesquisadores que construíram nossa história</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Warwick Kerr -->
            <div class="col-md-6 col-lg-5">
                <div class="figure-card h-100 text-center">
                    <div class="figure-avatar">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <h3>Warwick Estevam Kerr</h3>
                    <span class="figure-role">Fundador e Genético de Abelhas</span>
                    <p>
                        Pesquisador de renome internacional na área de genética e biologia de abelhas.
                        Kerr teve papel fundamental na estruturação do departamento e na consolidação
                        da genética como disciplina científica no Brasil. Sua contribuição para a
                        compreensão da genética de populações e da biologia social de abelhas é
                        referência mundial.
                    </p>
                </div>
            </div>
            <!-- José Moura Gonçalves -->
            <div class="col-md-6 col-lg-5">
                <div class="figure-card h-100 text-center">
                    <div class="figure-avatar">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <h3>José Moura Gonçalves</h3>
                    <span class="figure-role">Pioneiro em Bioquímica</span>
                    <p>
                        Um dos pioneiros da bioquímica no Brasil, com contribuições seminais para a
                        compreensão de venenos de serpentes e proteínas. Sua visão integradora entre
                        bioquímica e genética ajudou a estabelecer as bases interdisciplinares que
                        caracterizam o departamento até hoje.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ CTA ═══════════════ -->
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2>Conheça nossa estrutura atual</h2>
                <p>Veja os laboratórios, equipamentos e equipe que dão continuidade a esta história.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="laboratorios.php" class="btn-cta">
                    Ver laboratórios <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
