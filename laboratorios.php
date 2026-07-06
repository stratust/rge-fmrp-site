
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
</script>

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
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Laboratórios de Pesquisa</h2>

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
                            <h5 class="lab-name">Biologia e Genética de Desenvolvimento de Abelhas</h5>
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
                            <h5 class="lab-name">Laboratório de Hematologia Molecular</h5>
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
                            <h5 class="lab-name">Laboratório de Imunogenética Molecular</h5>
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
                            <h5 class="lab-name">Sinalização Celular na Reprodução</h5>
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
                            <h5 class="lab-name">Processamento de Informação Biológica</h5>
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
                            <h5 class="lab-name">Genética e Biologia Molecular de Fungos</h5>
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
                            <h5 class="lab-name">Oncologia Experimental – LABOEX</h5>
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
                            <h5 class="lab-name">Laboratório de Oncopatologia</h5>
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
                            <h5 class="lab-name">Laboratório de Parasitologia Molecular</h5>
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
                            <h5 class="lab-name">Laboratório de Genética Humana e Populações</h5>
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
                            <h5 class="lab-name">Laboratório de Genética de Plantas</h5>
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
                            <h5 class="lab-name">Laboratório de Genética Animal</h5>
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
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Laboratórios de Ensino</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card rge-card">
                        <div class="lab-header" style="background: linear-gradient(135deg, #4a7c59 0%, #6b9e75 100%);">
                            <i class="bi bi-mortarboard lab-header-icon"></i>
                            <span class="lab-badge lab-badge-teaching">Ensino</span>
                        </div>
                        <div class="lab-body">
                            <h5 class="lab-name">Laboratório de Práticas em Genética</h5>
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
                            <h5 class="lab-name">Laboratório de Informática em Genética</h5>
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
                            <h5 class="lab-name">Laboratório de Microscopia</h5>
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
