
<HTML>
<HEADER>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1920984-1";
urchinTracker();
</script>
</HEADER>
<BODY>
</BODY>
</HTML><!DOCTYPE html>
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
                <span>Equipe</span>
                <span class="separator">/</span>
                <span class="active">Docentes</span>
            </nav>
            <h1>Equipe Docente</h1>
            <p>Conheça os professores e pesquisadores que compõem o Departamento de Genética da FMRP/USP, dedicados à excelência em ensino, pesquisa e inovação.</p>
        </div>
    </section>
    <!-- Final - Page Header -->
    
    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">17</span>
                        <span class="stat-label">Docentes</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Linhas de Pesquisa</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Publicações/Ano</span>
                    </div>
                </div>
                     
                                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number" title="Excelência com inserção internacional">
                            6</span>

                        <span class="stat-label">Conceito Capes</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Final - Stats Bar -->

    <!-- Filters -->
    <section class="filters-section" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <span class="text-muted me-2" style="font-size: 0.85rem;">Filtrar por área:</span>
                    <button type="button" class="filter-btn active" data-area="">Todos</button>
                    <button type="button" class="filter-btn" data-area="Bioinformática">Bioinformática</button>
                    <button type="button" class="filter-btn" data-area="Genética Humana">Genética Humana</button>
                    <button type="button" class="filter-btn" data-area="Genética Molecular">Genética Molecular</button>
                    <button type="button" class="filter-btn" data-area="Oncogenética">Oncogenética</button>
                </div>
                <div class="col-lg-4">
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text"  id="buscaDocente" class="form-control" placeholder="Buscar docente...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Final - Filters -->


<!-- Docentes Grid -->
<section class="docentes-section">
    <div class="container">

        <div class="section-label mb-2">Nossos Professores</div>

        <h2 class="mb-3" style="font-size:2rem; font-weight:700; color:#222;">
            Corpo Docente
        </h2>

        
        
            
                            <div class="row g-4 mb-4">

                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="WILSON ARAÚJO DA SILVA JUNIOR"
                           data-area="GENÉTICA MOLECULAR E BIOINFORMÁTICA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto14.png"
                                          alt="WILSON ARAÚJO DA SILVA JUNIOR"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                                                            <span class="docente-badge docente-badge-chefe">Chefe</span>
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Wilson Araújo da Silva Junior                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR ASSOCIADO - MS 5                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética Molecular e Bioinformática</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal9" target="_blank" title="SDG: 9">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/9" target="_blank" title="ODS: 9">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-9.svg" alt="ODS: 9"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal17" target="_blank" title="SDG: 17">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/17" target="_blank" title="ODS: 17">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-17.svg" alt="ODS: 17"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                wilsonjr@usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-8714                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="https://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4782663H3"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="ESTER SILVEIRA RAMOS"
                           data-area="GENÉTICA HUMANA E MÉDICA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto3.png"
                                          alt="ESTER SILVEIRA RAMOS"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                                                            <span class="docente-badge">Vice-Chefe</span>
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Ester Silveira Ramos                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSORA TITULAR - MS 6                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética Humana e Médica</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal5" target="_blank" title="SDG: 5">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/5" target="_blank" title="ODS: 5">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-5.svg" alt="ODS: 5"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal10" target="_blank" title="SDG: 10">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/10" target="_blank" title="ODS: 10">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-10.svg" alt="ODS: 10"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal12" target="_blank" title="SDG: 12">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/12" target="_blank" title="ODS: 12">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-12.svg" alt="ODS: 12"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal16" target="_blank" title="SDG: 16">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/16" target="_blank" title="ODS: 16">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-16.svg" alt="ODS: 16"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                esramos@fmrp.usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-4914                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/0408321083175019"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="ALEXANDRO GUTERRES DA SILVA"
                           data-area="GENÉTICA MOLECULAR E BIOINFORMÁTICA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto15.png"
                                          alt="ALEXANDRO GUTERRES DA SILVA"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Alexandro Guterres da Silva                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR DOUTOR - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética Molecular e Bioinformática</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal1" target="_blank" title="SDG: 1">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/1" target="_blank" title="ODS: 1">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-1.svg" alt="ODS: 1"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal2" target="_blank" title="SDG: 2">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/2" target="_blank" title="ODS: 2">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-2.svg" alt="ODS: 2"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal9" target="_blank" title="SDG: 9">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/9" target="_blank" title="ODS: 9">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-9.svg" alt="ODS: 9"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal15" target="_blank" title="SDG: 15">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/15" target="_blank" title="ODS: 15">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-15.svg" alt="ODS: 15"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                guterres@fmrp.usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-3164                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/9249560344292511"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="APARECIDA MARIA FONTES"
                           data-area="DOENÇAS METABÓLICAS HEREDITÁRIAS">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto17.png"
                                          alt="APARECIDA MARIA FONTES"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Aparecida Maria Fontes                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSORA DOUTORA - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Doenças Metabólicas Hereditárias</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal5" target="_blank" title="SDG: 5">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/5" target="_blank" title="ODS: 5">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-5.svg" alt="ODS: 5"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal9" target="_blank" title="SDG: 9">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/9" target="_blank" title="ODS: 9">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-9.svg" alt="ODS: 9"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal17" target="_blank" title="SDG: 17">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/17" target="_blank" title="ODS: 17">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-17.svg" alt="ODS: 17"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                aparecidamfontes@usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-3151                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/2104806254317258"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="DAVID DE JONG"
                           data-area="BIOLOGIA E GENÉTICA DE ABELHAS">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto1.png"
                                          alt="DAVID DE JONG"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                David de Jong                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR DOUTOR - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Biologia e Genética de Abelhas</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal2" target="_blank" title="SDG: 2">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/2" target="_blank" title="ODS: 2">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-2.svg" alt="ODS: 2"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal8" target="_blank" title="SDG: 8">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/8" target="_blank" title="ODS: 8">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-8.svg" alt="ODS: 8"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal15" target="_blank" title="SDG: 15">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/15" target="_blank" title="ODS: 15">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-15.svg" alt="ODS: 15"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                ddjong@fmrp.usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-4401                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/5009050038505035"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="ISRAEL GOMY"
                           data-area="GENÉTICA MOLECULAR E BIOINFORMÁTICA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto6.png"
                                          alt="ISRAEL GOMY"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Israel Gomy                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR DOUTOR - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética Molecular e Bioinformática</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal9" target="_blank" title="SDG: 9">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/9" target="_blank" title="ODS: 9">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-9.svg" alt="ODS: 9"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal10" target="_blank" title="SDG: 10">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/10" target="_blank" title="ODS: 10">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-10.svg" alt="ODS: 10"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                igomy@usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-3000                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/8419061609955405"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="JEREMY ANDREW SQUIRE"
                           data-area="CITOGENÉTICA MOLECULAR HUMANA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto7.png"
                                          alt="JEREMY ANDREW SQUIRE"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Jeremy Andrew Squire                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR DOUTOR - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Citogenética Molecular Humana</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                jsquireinsp@gmail.com<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-3252                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/6790462418235210"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="MARIA CRISTINA DA SILVA PRANCHEVICIUS"
                           data-area="GENÉTICA E EVOLUÇÃO">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                         
                                  <div class="docente-photo-placeholder">
                                      <i class="bi bi-person-fill"></i>
                                  </div>
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Maria Cristina da Silva Pranchevicius                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSORA DOUTORA - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética e Evolução</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                      </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                mcspranc@ufscar.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3306-6869                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/4772148921558977"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="MARINA CANDIDO VISONTAI CORMEDI"
                           data-area="ONCOGENÉTICA HUMANA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto9.png"
                                          alt="MARINA CANDIDO VISONTAI CORMEDI"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Marina Candido Visontai Cormedi                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR DOUTOR - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Oncogenética Humana</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal10" target="_blank" title="SDG: 10">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/10" target="_blank" title="ODS: 10">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-10.svg" alt="ODS: 10"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                marina.cormedi@usp.br<br>

                                <i class="bi bi-telephone"></i>
                                3315-4913                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/9043763645682823"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="NILCE MARIA MARTINEZ ROSSI"
                           data-area="GENÉTICA E BIOLOGIA MOLECULAR DE FUNGOS">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/nilce.jpg"
                                          alt="NILCE MARIA MARTINEZ ROSSI"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Nilce Maria Martinez Rossi                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSORA TITULAR - MS 6                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética e Biologia Molecular de Fungos</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                nmmrossi@usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-3150                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/6923302540858368"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="REINALDO OTÁVIO ALVARENGA ALVES DE BRITO"
                           data-area="GENÉTICA, MELHORAMENTO ANIMAL E COMPUTAÇÃO">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                         
                                  <div class="docente-photo-placeholder">
                                      <i class="bi bi-person-fill"></i>
                                  </div>
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Reinaldo Otávio Alvarenga Alves de Brito                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR DOUTOR - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética, Melhoramento Animal e Computação</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                      </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                brito@ufscar.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3351-8787                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/8253066295947754"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="SILVANA GIULIATTI"
                           data-area="BIOINFORMÁTICA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto12.png"
                                          alt="SILVANA GIULIATTI"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Silvana Giuliatti                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSORA ASSOCIADA - MS 5                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Bioinformática</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal8" target="_blank" title="SDG: 8">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/8" target="_blank" title="ODS: 8">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-8.svg" alt="ODS: 8"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal9" target="_blank" title="SDG: 9">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/9" target="_blank" title="ODS: 9">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-9.svg" alt="ODS: 9"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                silvana@fmrp.usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-4503                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/4036808925343874"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="THIAGO YUKIO KIKUCHI OLIVEIRA"
                           data-area="BIOINFORMÁTICA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto18.png"
                                          alt="THIAGO YUKIO KIKUCHI OLIVEIRA"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Thiago Yukio Kikuchi Oliveira                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR DOUTOR - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Bioinformática</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                      </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                 tyoliveira@usp.br<br>

                                <i class="bi bi-telephone"></i>
                                3315-3356                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/5144797474156835"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="VICTOR EVANGELISTA DE FARIA FERRAZ"
                           data-area="GENÉTICA HUMANA E MÉDICA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto13.png"
                                          alt="VICTOR EVANGELISTA DE FARIA FERRAZ"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Victor Evangelista de Faria Ferraz                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR DOUTOR - MS 3                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética Humana e Médica</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal3" target="_blank" title="SDG: 3">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank" title="ODS: 3">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-3.svg" alt="ODS: 3"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal4" target="_blank" title="SDG: 4">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/4" target="_blank" title="ODS: 4">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-4.svg" alt="ODS: 4"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                                              <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal10" target="_blank" title="SDG: 10">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/10" target="_blank" title="ODS: 10">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-10.svg" alt="ODS: 10"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                vferraz@usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-4500                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/0028263686402117"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                    
                </div>
            
        
                            <h3 class="mb-3 mt-4"
                    style="font-size:1.5rem; font-weight:700; color:#222;">
                    Docentes Colaboradores Seniores                </h3>
            
                            <div class="row g-4 mb-4">

                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="AGUINALDO LUIZ SIMÕES"
                           data-area="GENÉTICA BIOQUÍMICA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto16.png"
                                          alt="AGUINALDO LUIZ SIMÕES"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Aguinaldo Luiz Simões                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR ASSOCIADO - MS 5                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Genética Bioquímica</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                      </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                alsimoes@fmrp.usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-3157                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/0539959335174399"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="ANTONIO ROSSI FILHO"
                           data-area="BIOQUÍMICA E IMUNOLOGIA">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto11.png"
                                          alt="ANTONIO ROSSI FILHO"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Antonio Rossi Filho                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR TITULAR - MS 6                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Bioquímica e Imunologia</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                      </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                anrossi@usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-9053                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/6727957065019831"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                    
                </div>
            
        
                            <h3 class="mb-3 mt-4"
                    style="font-size:1.5rem; font-weight:700; color:#222;">
                    Docentes com dupla vinculação                </h3>
            
                            <div class="row g-4 mb-4">

                                            <div class="col-md-6 col-lg-4 col-xl-3 docente-item"  
                          data-nome="KLAUS HARTMANN HARTFELDER"
                           data-area="BIOLOGIA E GENÉTICA DE ABELHAS">
                              
<style> 

.ods-img {
    transition: transform 0.25s ease;
}

.ods-img:hover {
    transform: scale(2);
    z-index: 9999;
    position: relative;
}

</style>



                                 
                    
                    
                    <div class="docente-card h-100 rge-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                                                                                             <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="assets/img/fotos_docentes/foto8.png"
                                          alt="KLAUS HARTMANN HARTFELDER"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                                                          
                            
                            
                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                Klaus Hartmann Hartfelder                            </h5>

     
                            <!--  Area/Setor  -->
                            <div style="min-height: 48px; margin-bottom: 0px !important; ">
                                                   <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                PROFESSOR TITULAR - MS 6                            </span>

                            
                              <p class="docente-area" >
                                  <strong>Setor:</strong>
                                  <span style="font-size:12px;">Biologia e Genética de Abelhas</span>
                              </p>                            
                            </div>
                            
        <!-- ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
        <div class="ods" style="clear: both; width: 100%; display: block; margin-top: 0px !important; padding-top: 0;">    
      
                                      <h3 style="font-size:14px; margin: 0 0 12px 0; padding: 0; font-weight: bold; text-align: left; line-height: 1.2;">
                            ODS <span style="font-weight: normal; font-size: 11px; display: block; color: #666; margin-top: 2px;">
                            Objetivos de Desenvolvimento Sustentável
                        </span>
                      </h3>
                        
                        
                     <div style="display: flex; flex-wrap: wrap; width: 100%; align-items: flex-start; justify-content: flex-start; gap: 4px;">
                                                      <div  class="ods-item"  style="flex: 0 1 auto; box-sizing: border-box;" >
                                    <!-- Em Ingles  -->
                                    <a href="https://sdgs.un.org/goals/goal15" target="_blank" title="SDG: 15">
                                
                                    <!-- Em Portugues 
                                   <a href="https://brasil.un.org/pt-br/sdgs/15" target="_blank" title="ODS: 15">
                                    -->
                                   
                                      <img src="assets/img/ods/SDG-15.svg" alt="ODS: 15"  class="ods-img"  
                                           style="width: 42px; height: 42px; display: block; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                                   </a>
                                </div>
                                                           </div>
                            </div>
        <!-- Final - ODS (Objetivos de Desenvolvimento Sustentável)  -->                            
                                  
                            
                            

                            <!-- Email e Telefone  -->
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                klaus@fmrp.usp.br<br>

                                <i class="bi bi-telephone"></i>
                                (16) 3315-3063                            </div>
                            
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                                                    <a href="http://lattes.cnpq.br/3376142410575714"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;" > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  >
                                    </a>
  
                                                                
                                <!-- Pagina pessoal -->
                                                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                    <!--  Final - <div class="docente-card rge-card">  -->
                                                </div>
                    
                </div>
            
        
    </div>
</section>
<!-- Final - Docentes Grid -->


<script>
document.addEventListener("DOMContentLoaded", function () {

    const botoes = document.querySelectorAll(".filter-btn");
    const busca = document.getElementById("buscaDocente");
    const docentes = document.querySelectorAll(".docente-item");

    let areaAtual = "";

    function normalizar(texto) {
        return String(texto || "")
            .toLowerCase()
            .normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "")
            .trim();
    }

    function filtrar() {
        const textoBusca = normalizar(busca.value);
        const areaBusca = normalizar(areaAtual);

        docentes.forEach(function (docente) {
            const nome = normalizar(docente.dataset.nome);
            const area = normalizar(docente.dataset.area);

            const okNome = nome.includes(textoBusca);
            const okArea = areaBusca === "" || area.includes(areaBusca);

            docente.style.display = (okNome && okArea) ? "" : "none";
        });
    }

    botoes.forEach(function (botao) {
        botao.addEventListener("click", function () {

            botoes.forEach(function (b) {
                b.classList.remove("active");
            });

            botao.classList.add("active");

            areaAtual = botao.dataset.area || "";

            filtrar();
        });
    });

    busca.addEventListener("input", filtrar);

});
</script>



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
