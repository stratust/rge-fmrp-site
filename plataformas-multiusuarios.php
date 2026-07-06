
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- Importante para tradutor  -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de Genética - FMRP/USP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    
    
    <link rel="stylesheet" href="assets/css/style.css?v=3">
</head>
<style>
.navbar .dropdown-toggle::after {
    display: inline-block !important;
    margin-left: .55em;
    vertical-align: .15em;
    content: "";
    border-top: .35em solid;
    border-right: .35em solid transparent;
    border-bottom: 0;
    border-left: .35em solid transparent;
}

.dropdown-toggle-split {
    background: none;
    border: none;
    color: inherit;
    line-height: 1;
}

.dropdown-toggle-split:hover,
.dropdown-toggle-split:focus {
    color: inherit;
    box-shadow: none;
}

.menu-titulo{
    cursor: default;      /* remove a mãozinha */
    text-decoration: none;
}

.menu-titulo:hover{
    text-decoration: none;
}

</style>
<body>
   
   <!-- <script src="assets/js/tradutor.js"></script> 
       <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- Importante para tradutor  
   

    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    -->
    

   <!--
Importante para Ancora topo  -->
<!-- Ancora TOPO  -->    
<div id="topo"></div>
<!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
          <!--  Logotipo do Depto de Genetica -->
          <a class="navbar-brand" href="index.php">
<div class="d-flex align-items-center">
    <!-- Logo 
           <img src="assets/img/Logo-Gen.png" alt="Logo do Departamento de Genética" width="43" height="55" class="me-2">
    -->
    
      <img src="assets/img/logo_genetica_20260612.webp" alt="Logo do Departamento de Genética"    class="logo-genetica me-2" >
  
    <!-- Legenda com duas linhas -->
    <div>
       <div class="fw-bold">FMRP • USP</div>
      <!--  <div class="text-muted small" style="margin-top: -4px;">Departamento de Genética</div>  -->  
       <div class="text-muted small" style="margin-top: -4px;">DEPARTAMENTO DE GENÉTICA</div>
   </div>
</div>
            </a>
            <!--  Final - Logotipo do Depto de Genetica -->

            <div class="d-flex align-items-center order-lg-last">
                <div class="d-flex align-items-center me-3">
                    <!--  Importante - Tradutor -->
                         <link rel="stylesheet" href="assets/css/rgetradutor.css">
<style>
</style>
<!-- Adicionamos a classe 'notranslate' na div pai -->
<div class="tradutor-custom-buttons notranslate">  

    <button id="btn-pt"  onclick="resetParaPortugues()" class="btn-tradutor">
        <img src="https://flagcdn.com/br.svg" width="20" alt="Português"></button>

    <button id="btn-en"  onclick="traduzirParaIngles()" class="btn-tradutor">
        <img src="https://flagcdn.com/us.svg" width="20" alt="Inglês"></button>

    <button id="btn-es" onclick="traduzirParaEspanhol()" class="btn-tradutor">
        <img src="https://flagcdn.com/es.svg" width="20" alt="Espanhol">
    </button>

</div>

<div id="google_translate_element" style="display:none;"></div>



<script>
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'pt',
          /**  includedLanguages: 'pt,en,es',  */
        includedLanguages: 'en,es',
        autoDisplay: false
    }, 'google_translate_element');
}



/* MARCA VISUALMENTE O IDIOMA ATIVO */
function marcarIdiomaAtivo(lang) {

    const btnPt = document.getElementById('btn-pt');
    const btnEn = document.getElementById('btn-en');
    const btnEs = document.getElementById('btn-es');

    // limpa todos
    [btnPt, btnEn, btnEs].forEach(function(btn) {
        if (!btn) return;

        btn.style.fontWeight = 'normal';
        btn.style.opacity = '0.7';
        btn.style.borderBottom = 'none';
    });

    // marca o escolhido
    if (lang === 'pt' && btnPt) {
        btnPt.style.fontWeight = 'bold';
        btnPt.style.opacity = '1';
        btnPt.style.borderBottom = '2px solid #000';
    }

    if (lang === 'en' && btnEn) {
        btnEn.style.fontWeight = 'bold';
        btnEn.style.opacity = '1';
        btnEn.style.borderBottom = '2px solid #000';
    }

    if (lang === 'es' && btnEs) {
        btnEs.style.fontWeight = 'bold';
        btnEs.style.opacity = '1';
        btnEs.style.borderBottom = '2px solid #000';
    }
}

function traduzir(lang) {
    if (lang === 'pt') {
        document.cookie = "googtrans=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        /* document.cookie = "googtrans=; path=/trge/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";  */
        document.cookie = "googtrans=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        location.reload();
        return;
    }
    document.cookie = "googtrans=/pt/" + lang + "; path=/";
    /*  document.cookie = "googtrans=/pt/" + lang + "; path=/trge/";   */

    // Recarrega a página
    location.reload();
    //
}
//
document.addEventListener("DOMContentLoaded", function () {
    function removeBarraGoogle() {
        const banner = document.querySelector(".goog-te-banner-frame");
        if (banner) {
            banner.style.display = "none";
        }
        document.body.style.top = "0px";
    }
    setInterval(removeBarraGoogle, 500);
});
//
function esconderBarraGoogle() {
    const banner = document.querySelector('iframe.goog-te-banner-frame');
    if (banner) {
        banner.style.display = 'none';
        banner.style.visibility = 'hidden';
        banner.style.height = '0';
    }
    document.body.style.top = '0px';
    document.documentElement.style.top = '0px';
}
//
/* espera o Google traduzir e só esconde a barra */
setInterval(esconderBarraGoogle, 500);

// FUNÇÃO PARA TRADUZIR PARA INGLÊS
function traduzirParaIngles() {

     marcarIdiomaAtivo('en');

//  alert("INGLES");

    document.cookie = "googtrans=/pt/en; path=/";
    document.cookie = "googtrans=/pt/en; path=/; domain=.usp.br";
    document.cookie = "googtrans=/pt/en; path=/; domain=.fmrp.usp.br";

    localStorage.setItem('googtrans', '/pt/en');

    setTimeout(function () {

        const combo = document.querySelector(".goog-te-combo");

        if (combo) {

            combo.value = "en";
            combo.dispatchEvent(new Event("change"));

        } else {

            location.reload();
        }

    }, 800);
}



// FUNÇÃO PARA TRADUZIR PARA ESPANHOL
function traduzirParaEspanhol() {

    marcarIdiomaAtivo('es');


    document.cookie = "googtrans=/pt/es; path=/";
    document.cookie = "googtrans=/pt/es; path=/; domain=.usp.br";
    document.cookie = "googtrans=/pt/es; path=/; domain=.fmrp.usp.br";

    localStorage.setItem('googtrans', '/pt/es');

    setTimeout(function () {

        const combo = document.querySelector(".goog-te-combo");

        if (combo) {

            combo.value = "es";
            combo.dispatchEvent(new Event("change"));

        } else {
            // Recarrega para aplicar
            location.reload();
        }

    }, 800);
}




// FUNÇÃO PARA VOLTAR PARA PORTUGUÊS (LIMPEZA TOTAL)
function resetParaPortugues() {


    marcarIdiomaAtivo('pt');


    // Lista de domínios para varrer e deletar cookies antigos que causam conflito
    var dominios = [window.location.hostname, '.usp.br', '.fmrp.usp.br'];
    
    dominios.forEach(function(dom) {
        // Expira o cookie em todos os caminhos possíveis
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + dom;
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/trge/; domain=" + dom;
    });

    // Limpeza final de cookie sem domínio
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    
    // Recarrega a página no estado original
    window.location.reload();
}

// NOVA FUNÇÃO: Verifica o idioma ao carregar a página
function checkActiveLang() {
    const cookies = document.cookie.split('; ');
    const langCookie = cookies.find(row => row.startsWith('googtrans='));
    
    /**
    const btnEn = document.getElementById('btn-en');
    const btnPt = document.getElementById('btn-pt');
 */

    const btnPt = document.getElementById('btn-pt');
    const btnEn = document.getElementById('btn-en');
    const btnEs = document.getElementById('btn-es');


    // Se o cookie contiver '/en', o negrito vai para o EN, senão vai para o PT
/**  
    if (langCookie && langCookie.includes('/en')) {
        btnEn.style.fontWeight = 'bold';
        btnPt.style.fontWeight = 'normal';
        btnEn.style.opacity = '1';     // Opcional: deixar mais opaco
        btnPt.style.opacity = '0.7';   // Opcional: deixar o outro mais suave
        btnEn.style.borderBottom = '2px solid #000'; // Linha embaixo do idioma ativo
    } else {
        btnPt.style.fontWeight = 'bold';
        btnEn.style.fontWeight = 'normal';
        btnPt.style.opacity = '1';
        btnEn.style.opacity = '0.7';
        btnPt.style.borderBottom = '2px solid #000'; // Linha embaixo do idioma ativo
    }
 */

        // limpa estilos
    [btnEn, btnPt, btnEs].forEach(btn => {

        if (!btn) return;

        btn.style.fontWeight = 'normal';
        btn.style.opacity = '0.7';
        btn.style.borderBottom = 'none';
    });

    // inglês
    if (langCookie && langCookie.includes('/en')) {

        btnEn.style.fontWeight = 'bold';
        btnEn.style.opacity = '1';
         /* btnPt.style.borderBottom = 'none';  */
        btnEn.style.borderBottom = '2px solid #000' ; // Linha embaixo do idioma ativo
    }

    // espanhol
    else if (langCookie && langCookie.includes('/es')) {

        btnEs.style.fontWeight = 'bold';
        btnEs.style.opacity = '1';
        btnEs.style.borderBottom = '2px solid #000';
    }

    // português
    else {

        btnPt.style.fontWeight = 'bold';
        btnPt.style.opacity = '1';
        btnPt.style.borderBottom = '2px solid #000';
    }

}

// Executa a verificação assim que a página termina de carregar
//  window.addEventListener('load', checkActiveLang);
//  window.addEventListener('load', checkActiveLang);


</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>

                <!-- <a href="#" class="text-muted me-3"><i class="bi bi-search"></i></a> -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button> 
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
 <!--                       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Departamento</a>  -->
 <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Departamento</span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="historia.php">Sobre o Departamento</a></li>
                            <li><a class="dropdown-item" href="chefia.php">Chefias</a></li>
                            <li><a class="dropdown-item" href="comissoes-conselho.php">Conselho e Comiss&otilde;es</a></li>
                            <li><a class="dropdown-item" href="plataformas-multiusuarios.php">Equipamentos Multiusu&aacute;rio</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
 <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Ensino</span>
    <ul class="dropdown-menu">
		<li><a class="dropdown-item" href="ensino.php">Ensino</a>
        <li><a class="dropdown-item" href="graduacao.php">Graduação</a></li>
        <li><a class="dropdown-item" href="pos-graduacao.php">Pós-graduação</a></li>
        <li><a class="dropdown-item" href="cursos_extensao.php">Cursos de Extensão</a></li>
    </ul>
</li>
  
  <li class="nav-item dropdown">
 <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Pesquisa</span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="linhas-pesquisa.php">Linhas de Pesquisa</a></li>
                            <li><a class="dropdown-item" href="projetos.php">Projetos</a></li>
                            <li><a class="dropdown-item" href="publicacoes.php">Publicações</a></li>
                        </ul>
                    </li>

<li class="nav-item dropdown">
 <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Extensão</span>
    <ul class="dropdown-menu">
  		  <li><a class="dropdown-item" href="cursos_extensao.php">Extensão</a></li>
        <li>
            <a class="dropdown-item" href="residencia-genetica-medica.php">
                Residência em Genética Médica
            </a>
        </li>

        <li>
           <a class="dropdown-item" href="servicos-genetica-medica.php">
                 Serviços em Genética Médica
           </a>
        </li>
    </ul>
</li>

<li class="nav-item dropdown">
 <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Equipe</span>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="docentes.php">Docentes</a></li>
                            <li><a class="dropdown-item" href="index.php#">Pesquisadores</a></li>
                            <li><a class="dropdown-item" href="funcionarios.php">Funcionários</a></li>
                        </ul>
                    </li>

<!--                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li> -->

<li class="nav-item dropdown">
 <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Laboratórios</span>

    <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="laboratorios.php">Laboratórios</a></li>
        <li><a class="dropdown-item" href="laboratorio_doc.php">Bioinformática</a></li>

<!--        <li>
            <a class="dropdown-item" href="#">
                Laboratórios de Ensino
            </a>
        </li> -->
    </ul>
</li>

                </ul>
            </div>
        </div>
    </nav>
<!-- Final - Navbar -->

<script>
document.addEventListener('DOMContentLoaded', function () {

    // Seleciona TODOS os menus dropdown
    const dropdownMenus = document.querySelectorAll('.nav-item.dropdown');

    dropdownMenus.forEach(function(menu) {

        const submenu = menu.querySelector('.dropdown-menu');

        // Abre ao passar o mouse
        menu.addEventListener('mouseenter', function () {
            menu.classList.add('show');
            submenu.classList.add('show');
        });

        // Fecha ao retirar o mouse
        menu.addEventListener('mouseleave', function () {
            menu.classList.remove('show');
            submenu.classList.remove('show');
        });

    });

});
</script><!-- Page Header -->
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
                        <a href="plataformas-multiusuarios.php#plataformas" class="btn-green">CONHEÇA AS PLATAFORMAS <i class="bi bi-arrow-right ms-1"></i></a>
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
                        <a href="#plataformas" class="btn-green">CONHEÇA AS PLATAFORMAS <i class="bi bi-arrow-right ms-1"></i></a>
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
                            <div class="stat-card rge-card">
                                <div class="stat-number">3</div>
                                <div class="stat-label">Plataformas Ativas</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card rge-card">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">Projetos Atendidos/Ano</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card rge-card">
                                <div class="stat-number">200+</div>
                                <div class="stat-label">Pesquisadores Atendidos</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card rge-card">
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
                    <div class="platform-card rge-card">
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
                                        <h6>Contato</h6>
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
                    <div class="platform-card rge-card">
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
                                        <h6>Contato</h6>
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
                    <div class="platform-card rge-card">
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
                                        <h6>Contato</h6>
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
                    <div class="equipment-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-moisture"></i></div>
                        <h5>qPCR em Tempo Real</h5>
                        <p>Quantificação de expressão gênica e genotipagem</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="equipment-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-eye"></i></div>
                        <h5>Microscopia Confocal</h5>
                        <p>Imagem de alta resolução de células e tecidos</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="equipment-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-droplet"></i></div>
                        <h5>Citometria de Fluxo</h5>
                        <p>Análise e separação celular multiparamétrica</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="equipment-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-layers"></i></div>
                        <h5>Sequenciador Sanger</h5>
                        <p>Sequenciamento de regiões específicas de DNA</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="equipment-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-thermometer-half"></i></div>
                        <h5>Termocicladores</h5>
                        <p>Amplificação de DNA por PCR convencional</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="equipment-card rge-card">
                        <div class="equipment-icon"><i class="bi bi-activity"></i></div>
                        <h5>Espectrofotômetro</h5>
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
                    <div class="step-card rge-card">
                        <div class="step-number">1</div>
                        <h5>Cadastro</h5>
                        <p>Realize seu cadastro no sistema de agendamento da plataforma desejada, informando instituição, projeto e necessidades experimentais.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="step-card rge-card">
                        <div class="step-number">2</div>
                        <h5>Proposta Técnica</h5>
                        <p>Envie a descrição do experimento, número de amostras e tipo de análise necessária. A equipe técnica avaliará a viabilidade.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="step-card rge-card">
                        <div class="step-number">3</div>
                        <h5>Orçamento</h5>
                        <p>Receba o orçamento detalhado com valores de serviços, insumos e horas técnicas. Pesquisadores da USP têm tarifas diferenciadas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="step-card rge-card">
                        <div class="step-number">4</div>
                        <h5>Execução</h5>
                        <p>Após aprovação, agende a execução do serviço. Acompanhe o andamento pelo sistema e receba os dados com relatório técnico.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="plataformas-multiusuarios.php#" class="btn-green">ACESSAR SISTEMA DE AGENDAMENTO <i class="bi bi-arrow-right ms-1"></i></a>
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

<style>
.btn-enviar{
    display:inline-flex;
    /*align-items:center;*/
    gap:10px;

/*    background:linear-gradient(135deg,#0d6efd,#0b5ed7);*/
    color:rgba(255,255,255,0.7);
    text-decoration:none;

   /* padding:5px 22px;*/
    border-radius:12px;

    font-size:0.85rem;;
    font-weight:400;

    transition:all .3s ease;
    /*box-shadow:0 4px 14px rgba(13,110,253,.25);*/
}

.btn-enviar i{
    font-size:12px;
}

.btn-enviar:hover{
    transform:translateY(-2px);
    /*background:linear-gradient(135deg,#0b5ed7,#084298);*/
    color:#fff;
    /*box-shadow:0 6px 18px rgba(13,110,253,.35);*/
}
</style>
<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
<div class="d-flex align-items-center">
  <!-- Logo 
  <img src="assets/img/Logo-Gen.png" alt="Logo do Departamento de Genética" width="122" height="154" class="me-2">
   -->
     <img src="assets/img/logo_genetica_20260612.webp" alt="Logo do Departamento de Genética"    class="logo-genetica me-2" >
  
  
  
  <!-- Legenda com duas linhas -->
  <div>
    <div class="fw-bold">FMRP • USP</div>
    <div class="text-muted small" style="margin-top: -4px;"><h6>Departamento de Genética</h6></div>
  </div>
</div>
                    <p class="footer-desc mt-3">Compromisso com a formação de excelência e a produção de conhecimento científico.</p>
                    <div class="social-links">
                        <a href="index.php#"><i class="bi bi-instagram"></i></a>
                        <a href="index.php#"><i class="bi bi-facebook"></i></a>
                        <a href="index.php#"><i class="bi bi-youtube"></i></a>
                        <a href="index.php#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1">
                    <h6>Links Rápidos</h6>
                    <ul class="footer-links">
                        <li><a href="ensino.php">Ensino</a></li>
                        <li><a href="linhas-pesquisa.php">Pesquisa</a></li>
                        <li><a href="laboratorios.php">Laboratórios</a></li>
                        <li><a href="docentes.php">Docentes</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
<!--                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Editais</a></li> -->
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6>Informações</h6>
                    <ul class="footer-links">
                        <li><a href="ensino.php">Ensino</a></li>
<!--                        <li><a href="#">Biblioteca</a></li> -->
                        <li><a href="chefia.php#comissao">Comissões</a></li>
<!--                        <li><a href="#">Transparência</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6>Contato</h6>
                    <div class="footer-contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <span>Departamento de Genética – FMRP/USP<br>Av. Bandeirantes, 3900<br>Ribeirão Preto – SP, 14049-900</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-telephone"></i>
                        <span>(16) 3315-9098</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-envelope"></i>
                        <span>secgen@fmrp.usp.br</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-clock"></i>
                        <span>Segunda a sexta-feira<br>8h às 17h</span>
                    </div>
                    <div class="footer-contact-item">
                        <a href="contato.php" class="btn-enviar">
						<i class="bi bi-send-fill"></i>
						<span>Enviar Mensagem</span>
						</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 Departamento de Genética – FMRP/USP. Todos os direitos reservados.</p>
                <div class="footer-bottom-links">
                    <a href="index.php#">Política de Privacidade</a>
                    <a href="index.php#">Acessibilidade</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<a href="index.php#topo" class="btn-topo notranslate" translate="no" aria-label="Voltar ao topo">↑</a>
</body>
</html>
