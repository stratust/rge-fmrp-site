
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
                <a href="extensao.php">Extensão</a>
                <span class="separator">/</span>
                <span class="active">Serviços de Genética Médica</span>
            </nav>
            <h1>Serviços de Genética Médica</h1>
                    <p>Atendimento especializado em diagnóstico, aconselhamento e acompanhamento genético para pacientes e famílias.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="servicos-genetica-medica.php#servicos" class="btn-green">CONHEÇA OS SERVIÇOS <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="servicos-genetica-medica.php#equipe" class="btn-outline-light-custom">CONHEÇA A EQUIPE <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
        </div>
    </section>


    <!-- Hero Section 
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 hero-content">
                    <div style="width: 40px; height: 3px; background: var(--accent-green); margin-bottom: 1.5rem;"></div>
                    <h1>Serviços de<br>Genética Médica</h1>
                    <p>Atendimento especializado em diagnóstico, aconselhamento e acompanhamento genético para pacientes e famílias.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#servicos" class="btn-green">CONHEÇA OS SERVIÇOS <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="#equipe" class="btn-outline-light-custom">CONHEÇA A EQUIPE <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Services Section -->
    <section class="services-section" id="servicos">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Nossos Serviços</div>
                    <h2>Atendimento integral em genética médica</h2>
                    <p style="color: #555; line-height: 1.8;">O Serviço de Genética Médica do Departamento de Genética da FMRP/USP oferece assistência especializada para diagnóstico, orientação e acompanhamento de condições genéticas e hereditárias, integrando pesquisa, ensino e extensão.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 3 C8 3, 3 8, 3 14 C3 20, 8 25, 14 25 C20 25, 25 20, 25 14 C25 8, 20 3, 14 3" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M14 8 L14 14 L18 18" stroke="#1a5c3a" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="14" cy="14" r="2" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h5>Aconselhamento Genético</h5>
                        <p>Atendimento especializado para avaliação de riscos hereditários, esclarecimento de dúvidas e apoio à decisão sobre exames e reprodução.</p>
                        <ul class="service-list">
                            <li>Avaliação de história familiar</li>
                            <li>Cálculo de riscos de recorrência</li>
                            <li>Orientação pré e pós-teste</li>
                            <li>Aconselhamento em genética oncológica</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="5" y="12" width="18" height="12" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M9 12 L9 8 Q9 4 14 4 Q19 4 19 8 L19 12" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <circle cx="14" cy="18" r="3" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                <line x1="14" y1="15" x2="14" y2="12" stroke="#1a5c3a" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <h5>Diagnóstico Molecular</h5>
                        <p>Exames de DNA de alta precisão para identificação de mutações associadas a doenças genéticas, incluindo sequenciamento de nova geração.</p>
                        <ul class="service-list">
                            <li>Sequenciamento de genes</li>
                            <li>Exoma e genoma clínico</li>
                            <li>Teste de cariotipo molecular</li>
                            <li>Diagnóstico de doenças raras</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="10" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <ellipse cx="14" cy="14" rx="4" ry="10" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                <line x1="4" y1="14" x2="24" y2="14" stroke="#1a5c3a" stroke-width="1.5"/>
                                <line x1="6" y1="8" x2="22" y2="8" stroke="#1a5c3a" stroke-width="1.5"/>
                                <line x1="6" y1="20" x2="22" y2="20" stroke="#1a5c3a" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <h5>Citogenética</h5>
                        <p>Análise cromossômica para diagnóstico de síndromes, alterações numéricas e estruturais, com técnicas clássicas e moleculares.</p>
                        <ul class="service-list">
                            <li>Cariótipo de alta resolução</li>
                            <li>FISH (Hibridização in situ)</li>
                            <li>Array-CGH (Micromatriz)</li>
                            <li>Estudo de mosaicismo</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 4 L14 10 M14 18 L14 24 M4 14 L10 14 M18 14 L24 14" stroke="#1a5c3a" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="14" cy="14" r="4" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <circle cx="14" cy="14" r="2" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h5>Genética Oncológica</h5>
                        <p>Identificação de predisposição hereditária ao câncer, orientação para rastreamento preventivo e acompanhamento de portadores.</p>
                        <ul class="service-list">
                            <li>Painéis de genes de câncer hereditário</li>
                            <li>BRCA1, BRCA2 e genes associados</li>
                            <li>Síndromes de predisposição tumoral</li>
                            <li>Planejamento de rastreamento</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 24 C8 14 12 8 14 6 C16 8 20 14 20 24" stroke="#1a5c3a" stroke-width="2" fill="none" stroke-linecap="round"/>
                                <path d="M11 20 L17 20 M10 16 L18 16" stroke="#1a5c3a" stroke-width="1.5"/>
                                <circle cx="14" cy="4" r="2" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h5>Genética Reprodutiva</h5>
                        <p>Avaliação genética de casais com infertilidade, histórico de perdas gestacionais ou riscos de transmissão de doenças hereditárias.</p>
                        <ul class="service-list">
                            <li>Diagnóstico genético pré-implantação (PGT)</li>
                            <li>Avaliação de cariótipos parentais</li>
                            <li>Screening de portadores</li>
                            <li>Amniocentese e CVS</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="4" width="16" height="20" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <line x1="10" y1="9" x2="18" y2="9" stroke="#1a5c3a" stroke-width="1.5"/>
                                <line x1="10" y1="13" x2="18" y2="13" stroke="#1a5c3a" stroke-width="1.5"/>
                                <line x1="10" y1="17" x2="14" y2="17" stroke="#1a5c3a" stroke-width="1.5"/>
                                <circle cx="18" cy="19" r="2" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h5>Genética Pediátrica</h5>
                        <p>Diagnóstico e acompanhamento de síndromes, malformações congênitas e doenças metabólicas em crianças e adolescentes.</p>
                        <ul class="service-list">
                            <li>Avaliação de dismorfias</li>
                            <li>Screening neonatal ampliado</li>
                            <li>Doenças metabólicas hereditárias</li>
                            <li>Atraso de desenvolvimento global</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section" id="agendamento">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-label">Como Funciona</div>
                    <h2>Fluxo de atendimento</h2>
                    <p>Nosso serviço funciona por meio de encaminhamento médico. Após o agendamento, o paciente passa por uma avaliação inicial com equipe multidisciplinar.</p>

                    <div class="info-card mt-4 rge-card">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <h6>Encaminhamento</h6>
                                <p>Solicitação médica com justificativa clínica e histórico familiar.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <h6>Agendamento</h6>
                                <p>Entrada em contato via telefone ou e-mail para marcação da consulta.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <h6>Avaliação Inicial</h6>
                                <p>Consulta com médico geneticista para anamnese detalhada e exame físico.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <h6>Exames e Diagnóstico</h6>
                                <p>Coleta de amostras e realização dos exames genéticos indicados.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">5</span>
                            <div class="step-content">
                                <h6>Devolutiva e Acompanhamento</h6>
                                <p>Entrega de resultados com aconselhamento e encaminhamentos necessários.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-label">Informações</div>
                    <h2>Horários e Localização</h2>
                    <p>O Serviço de Genética Médica atua no ambulatório do Hospital das Clínicas da FMRP/USP, com estrutura voltada para atendimento humanizado e sigilo.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="info-card rge-card">
                                <h5><i class="bi bi-clock"></i> Horário de Funcionamento</h5>
                                <ul>
                                    <li><strong>Segunda a sexta:</strong> 8h às 17h</li>
                                    <li><strong>Atendimento:</strong> por agendamento</li>
                                    <li><strong>Urgências:</strong> avaliação caso a caso</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card rge-card">
                                <h5><i class="bi bi-geo-alt"></i> Localização</h5>
                                <ul>
                                    <li>Ambulatório de Genética Médica</li>
                                    <li>Hospital das Clínicas – FMRP/USP</li>
                                    <li>Av. Bandeirantes, 3900</li>
                                    <li>Ribeirão Preto – SP, 14049-900</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-card rge-card">
                                <h5><i class="bi bi-telephone"></i> Contato para Agendamento</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Telefone:</strong> (16) 3315-3300<br>
                                        <strong>Ramal:</strong> 3305 / 3306</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>E-mail:</strong> genetica.medica@fmrp.usp.br<br>
                                        <strong>Secretaria:</strong> segen@fmrp.usp.br</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Staff Section -->
    <section class="staff-section" id="equipe">
        <div class="container">
            <div class="section-label">Equipe</div>
            <h2>Profissionais do Serviço de Genética Médica</h2>
            <p class="mb-5">Nossa equipe multidisciplinar é composta por médicos geneticistas, geneticistas clínicos, biomédicos, psicólogos e assistentes sociais, todos dedicados ao atendimento integral dos pacientes e famílias.</p>

            <!-- Coordenação -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="staff-category">Coordenação</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-4">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>Prof. Dr. [Nome Completo]</h5>
                            <div class="role">Coordenador do Serviço</div>
                            <p>Médico geneticista com doutorado em Genética Médica. Responsável pela gestão clínica e acadêmica do serviço.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> coordenador@fmrp.usp.br</p>
                                <p><i class="bi bi-telephone"></i> Ramal [XXXX]</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>Profa. Dra. [Nome Completo]</h5>
                            <div class="role">Vice-Coordenadora</div>
                            <p>Geneticista clínica com especialização em genética oncológica e reprodutiva. Responsável pela supervisão dos programas de rastreamento.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> vice@fmrp.usp.br</p>
                                <p><i class="bi bi-telephone"></i> Ramal [XXXX]</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>Profa. Dra. [Nome Completo]</h5>
                            <div class="role">Supervisora Técnica</div>
                            <p>Biomédica especialista em diagnóstico molecular e citogenética. Coordena os exames laboratoriais e garantia de qualidade.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> tecnico@fmrp.usp.br</p>
                                <p><i class="bi bi-telephone"></i> Ramal [XXXX]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipe Médica -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="staff-category">Equipe Médica</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>Dr. [Nome Completo]</h5>
                            <div class="role">Médico Geneticista</div>
                            <p>Especialista em genética pediátrica e síndromes de malformação. Atua no ambulatório de genética clínica.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> medico1@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>Dra. [Nome Completo]</h5>
                            <div class="role">Médica Geneticista</div>
                            <p>Especialista em genética oncológica e aconselhamento genético para câncer hereditário.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> medico2@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>Dr. [Nome Completo]</h5>
                            <div class="role">Médico Geneticista</div>
                            <p>Especialista em genética reprodutiva e medicina fetal. Coordena o programa de pré-natal genético.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> medico3@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>Dra. [Nome Completo]</h5>
                            <div class="role">Médica Geneticista</div>
                            <p>Especialista em doenças raras e genética metabólica. Atua no programa de atenção integral a síndromes raras.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> medico4@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipe Laboratorial -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="staff-category">Equipe Laboratorial</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Biomédica – Diagnóstico Molecular</div>
                            <p>Especialista em sequenciamento de nova geração e análise de variantes genéticas.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> biomol@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Biomédico – Citogenética</div>
                            <p>Responsável por cariótipos, FISH e array-CGH. Experiência em diagnóstico pré-natal.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> biocito@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Técnico de Laboratório</div>
                            <p>Suporte técnico em extração de DNA, PCR e preparo de amostras para sequenciamento.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> tecnicolab@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Bioinformata</div>
                            <p>Análise computacional de dados genômicos, variant calling e interpretação de resultados NGS.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> bioinfo@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipe de Apoio -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="staff-category">Equipe de Apoio Multidisciplinar</span>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Psicóloga</div>
                            <p>Atua no aconselhamento psicológico de pacientes e famílias em processo de diagnóstico genético.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> psico@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Assistente Social</div>
                            <p>Orientação sobre direitos, encaminhamentos sociais e apoio às famílias em situação de vulnerabilidade.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> social@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Nutricionista</div>
                            <p>Orientação nutricional especializada para pacientes com doenças metabólicas hereditárias.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> nutri@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Secretária Administrativa</div>
                            <p>Agendamento de consultas, organização de prontuários e atendimento ao público.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> secretaria@fmrp.usp.br</p>
                                <p><i class="bi bi-telephone"></i> (16) 3315-3300</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Banner -->
    <section class="contact-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2>Agende sua consulta</h2>
                    <p>Para agendar um atendimento ou obter mais informações sobre os serviços de genética médica, entre em contato conosco.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-telephone"></i>
                                <span>(16) 3315-3300 – Ramal 3305</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <span>genetica.medica@fmrp.usp.br</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-clock"></i>
                                <span>Segunda a sexta, 8h às 17h</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>HC-FMRP/USP – Ribeirão Preto, SP</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="mailto:genetica.medica@fmrp.usp.br" class="btn-outline-light-custom d-inline-block">ENVIAR E-MAIL <i class="bi bi-arrow-right ms-1"></i></a>
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
