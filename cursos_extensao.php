<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Cursos de Extensão — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Ensino', 'Cursos de Extensão'];
$pageSubtitle = 'Cursos de extensão universitária, programas educacionais e atividades culturais para a comunidade.';
$pageDesc = 'Cursos de extensão do Departamento de Genética FMRP/USP: educação continuada, cultura, ciência e sociedade.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';
?>

<!-- ═══════════════ INTRO ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="section-title">Extensão Universitária</h2>
                <p class="lead text-muted">A extensão é parte fundamental da missão da USP, levando conhecimento para a sociedade e abrindo as portas da universidade para a comunidade.</p>
                <p>O Departamento de Genética oferece cursos de extensão nas modalidades <strong>cultural</strong> e <strong>educacional</strong>, promovendo a disseminação do conhecimento em genética para estudantes, profissionais de saúde, professores e o público geral.</p>
                <p>Também promovemos atividades de popularização da ciência, como feiras de ciências, visitas monitoradas, palestras em escolas e participação em eventos como a Semana Nacional de Ciência e Tecnologia.</p>
            </div>
            <div class="col-lg-5">
                <div class="card-custom h-100 bg-primary-green text-white">
                    <div class="card-body p-4">
                        <h4 class="mb-3"><i class="bi bi-globe-americas"></i> Nossa Missão</h4>
                        <p class="mb-0">"Promover a integração entre a universidade e a sociedade, disseminando conhecimento científico em genética e biologia molecular, e contribuindo para a educação científica da população."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ MODALIDADES ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Modalidades de Extensão</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle-lg me-3"><i class="bi bi-palette-fill"></i></div>
                            <h3 class="h4 mb-0">Cursos Culturais</h3>
                        </div>
                        <p class="text-muted mb-3">Cursos voltados para o enriquecimento cultural, contemplando aspectos históricos, éticos e sociais da genética e da biologia molecular.</p>
                        <ul>
                            <li>História da Genética e da Medicina</li>
                            <li>Bioética e Implicações Sociais da Genética</li>
                            <li>Divulgação Científica em Genética</li>
                            <li>Genética para Professores do Ensino Médio</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle-lg me-3"><i class="bi bi-book-half"></i></div>
                            <h3 class="h4 mb-0">Cursos Educacionais</h3>
                        </div>
                        <p class="text-muted mb-3">Cursos de atualização e especialização técnica para profissionais de saúde, estudantes e pesquisadores.</p>
                        <ul>
                            <li>Introdução à Bioinformática</li>
                            <li>Técnicas de Biologia Molecular</li>
                            <li>Análise de Dados Genômicos</li>
                            <li>Aconselhamento Genético para Profissionais de Saúde</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ PROGRAMAS DESTAQUE ═══════════════ -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Programas em Destaque</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-globe2"></i></div>
                        <h4>Semana Nacional de Ciência e Tecnologia</h4>
                        <p class="text-muted">Participação anual com palestras, exposições e atividades interativas para estudantes e público geral.</p>
                        <span class="badge bg-light text-dark-green"><i class="bi bi-calendar3 me-1"></i> Outubro</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-lightbulb-fill"></i></div>
                        <h4>Genética nas Escolas</h4>
                        <p class="text-muted">Programa de visitas a escolas de ensino médio para difusão de conceitos de genética e biotecnologia.</p>
                        <span class="badge bg-light text-dark-green"><i class="bi bi-calendar3 me-1"></i> Sob Demanda</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3"><i class="bi bi-camera-reels-fill"></i></div>
                        <h4>Portas Abertas</h4>
                        <p class="text-muted">Visitas monitoradas aos laboratórios do departamento para escolas e grupos interessados.</p>
                        <span class="badge bg-light text-dark-green"><i class="bi bi-calendar3 me-1"></i> Maio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ COMO SE INSCREVER ═══════════════ -->
<section class="py-5 bg-dark-green text-white">
    <div class="container text-center">
        <h2 class="mb-4">Como Participar</h2>
        <p class="lead mb-4">Os cursos de extensão são divulgados periodicamente através do sistema <strong>Sistema Apolo</strong> da USP.</p>
        <a href="https://www5.usp.br/" target="_blank" rel="noopener" class="btn btn-accent btn-lg">
            <i class="bi bi-box-arrow-up-right me-2"></i>Sistema Apolo — Inscrições
        </a>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
