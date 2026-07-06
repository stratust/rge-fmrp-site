
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
                <span class="active">Residência em Genética Médica</span>
            </nav>
            <h1>Residência em Genética Médica</h1>
                    <p class="subtitle">Programa de Especialização – FMRP/USP</p>
                    <p>Formação de especialistas em Genética Médica com excelência acadêmica, prática clínica integrada e pesquisa científica de ponta no maior centro médico do interior paulista.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="residencia-genetica-medica.php#sobre" class="btn-green">CONHEÇA O PROGRAMA <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="residencia-genetica-medica.php#admissao" class="btn-outline-light-custom">PROCESSO SELETIVO <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
        </div>
    </section>


    <!-- Hero Section 
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 hero-content">
                    <div style="width: 40px; height: 3px; background: var(--accent-green); margin-bottom: 1.5rem;"></div>
                    <h1>Residência em Genética Médica</h1>
                    <p class="subtitle">Programa de Especialização – FMRP/USP</p>
                    <p>Formação de especialistas em Genética Médica com excelência acadêmica, prática clínica integrada e pesquisa científica de ponta no maior centro médico do interior paulista.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#sobre" class="btn-green">CONHEÇA O PROGRAMA <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="#admissao" class="btn-outline-light-custom">PROCESSO SELETIVO <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- About Section -->
    <section class="about-section" id="sobre">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="section-label">Sobre o Programa</div>
                    <h2>Excelência na formação de médicos geneticistas</h2>
                    <p>O Programa de Residência Médica em Genética Médica do Departamento de Genética da FMRP/USP tem como missão formar médicos especialistas com competências clínicas, laboratoriais e de pesquisa para atuação em Genética Médica nos âmbitos assistencial, acadêmico e científico.</p>
                    <p>A residência oferece formação em Aconselhamento Genético, Diagnóstico Molecular, Citogenética, Genética Oncológica, Genética Reprodutiva e Genética Pediátrica, integrando o atendimento no Hospital das Clínicas com a produção científica do departamento.</p>
                    <p>O programa é credenciado pela Comissão Nacional de Residência Médica (CNRM/MEC) e oferece [X] vagas anuais para médicos graduados.</p>
                    <div class="row g-3 mt-3">
                        <div class="col-6 col-md-3">
                            <div class="stat-card rge-card">
                                <div class="stat-number">[X]</div>
                                <div class="stat-label">Vagas/Ano</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-card rge-card">
                                <div class="stat-number">3</div>
                                <div class="stat-label">Anos de Duração</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-card rge-card">
                                <div class="stat-number">[X]</div>
                                <div class="stat-label">Residentes Formados</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="stat-card rge-card">
                                <div class="stat-number">CNRM</div>
                                <div class="stat-label">Credenciamento MEC</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=800&h=500&fit=crop" alt="Residência Médica em Genética">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Structure Section -->
    <section class="program-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Estrutura Curricular</div>
                    <h2>Estrutura do programa de residência</h2>
                    <p style="color: #555; line-height: 1.8;">O programa é desenvolvido em três anos de formação, com progressão gradual da complexidade clínica e integração crescente com as atividades de pesquisa e ensino.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="program-card rge-card">
                        <div class="program-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="#1a5c3a" stroke-width="2"/>
                                <path d="M12 6v6l4 2" stroke="#1a5c3a" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h5>1º Ano – R1</h5>
                        <p>Introdução à prática clínica em genética médica. Rotinas de ambulatório, aconselhamento genético básico, interpretação de exames laboratoriais e integração com outras especialidades médicas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="program-card rge-card">
                        <div class="program-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" stroke="#1a5c3a" stroke-width="2"/>
                                <path d="M2 17l10 5 10-5" stroke="#1a5c3a" stroke-width="2"/>
                                <path d="M2 12l10 5 10-5" stroke="#1a5c3a" stroke-width="2"/>
                            </svg>
                        </div>
                        <h5>2º Ano – R2</h5>
                        <p>Aprofundamento em diagnóstico molecular e citogenética. Atuação em genética oncológica e reprodutiva. Início da participação em projetos de pesquisa e atividades de ensino para graduação.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="program-card rge-card">
                        <div class="program-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="#1a5c3a" stroke-width="2"/>
                                <path d="M22 4L12 14.01l-3-3" stroke="#1a5c3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h5>3º Ano – R3</h5>
                        <p>Consolidação da autonomia clínica. Gestão de casos complexos, liderança em aconselhamento genético, condução de projetos de pesquisa e preparação para a prova de título de especialista.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rotations Section -->
    <section class="rotations-section" id="rotacoes">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Rotatórias</div>
                    <h2>Rotatórias do programa</h2>
                    <p style="color: #555; line-height: 1.8;">As rotatórias complementam a formação em genética médica com experiências em áreas correlatas essenciais para a prática do especialista.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="rotation-card rge-card">
                        <h6>Aconselhamento Genético</h6>
                        <div class="rotation-meta">
                            <span><i class="bi bi-clock"></i>Duração: [X] meses</span>
                            <span><i class="bi bi-geo-alt"></i>Ambulatório de Genética Médica</span>
                        </div>
                        <p>Prática de anamnese heredograma, avaliação de riscos, comunicação de diagnósticos genéticos e suporte às famílias.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rotation-card rge-card">
                        <h6>Diagnóstico Laboratorial</h6>
                        <div class="rotation-meta">
                            <span><i class="bi bi-clock"></i>Duração: [X] meses</span>
                            <span><i class="bi bi-geo-alt"></i>Laboratório de Genética</span>
                        </div>
                        <p>Experiência em citogenética clássica e molecular, diagnóstico molecular por PCR, sequenciamento e interpretação de resultados.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rotation-card rge-card">
                        <h6>Genética Oncológica</h6>
                        <div class="rotation-meta">
                            <span><i class="bi bi-clock"></i>Duração: [X] meses</span>
                            <span><i class="bi bi-geo-alt"></i>Centro de Oncologia – HC</span>
                        </div>
                        <p>Avaliação de síndromes hereditárias de câncer, testes genéticos preditivos, rastreamento preventivo e acompanhamento de portadores.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rotation-card rge-card">
                        <h6>Genética Reprodutiva e Medicina Fetal</h6>
                        <div class="rotation-meta">
                            <span><i class="bi bi-clock"></i>Duração: [X] meses</span>
                            <span><i class="bi bi-geo-alt"></i>Disciplina de Ginecologia – HC</span>
                        </div>
                        <p>Acompanhamento de gestações de risco genético, diagnóstico pré-natal, PGT e aconselhamento de casais com infertilidade.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rotation-card rge-card">
                        <h6>Genética Pediátrica</h6>
                        <div class="rotation-meta">
                            <span><i class="bi bi-clock"></i>Duração: [X] meses</span>
                            <span><i class="bi bi-geo-alt"></i>Pediatria – HC</span>
                        </div>
                        <p>Avaliação de crianças com malformações, atraso de desenvolvimento, síndromes genéticas e doenças metabólicas hereditárias.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rotation-card rge-card">
                        <h6>Pesquisa e Ensino</h6>
                        <div class="rotation-meta">
                            <span><i class="bi bi-clock"></i>Duração: [X] meses</span>
                            <span><i class="bi bi-geo-alt"></i>Departamento de Genética</span>
                        </div>
                        <p>Participação em projetos de pesquisa, elaboração de artigos científicos, atividades de ensino para graduação e pós-graduação.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Section -->
    <section class="admission-section" id="admissao">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Processo Seletivo</div>
                    <h2>Como ingressar no programa</h2>
                    <p style="color: #555; line-height: 1.8;">O processo seletivo para a Residência Médica em Genética Médica da FMRP/USP segue o calendário nacional do Sistema de Seleção Unificada (SiSU) ou processo seletivo próprio, conforme edital publicado anualmente.</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="step-card rge-card">
                        <div class="step-number">1</div>
                        <h5>Inscrição</h5>
                        <p>Acompanhe o edital de abertura do processo seletivo no site da FMRP/USP e realize a inscrição dentro do prazo estabelecido.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="step-card rge-card">
                        <div class="step-number">2</div>
                        <h5>Prova Teórica</h5>
                        <p>Prova objetiva e/ou discursiva abordando conhecimentos em medicina geral e genética médica.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="step-card rge-card">
                        <div class="step-number">3</div>
                        <h5>Análise Curricular</h5>
                        <p>Avaliação da titulação, experiência profissional, produção científica e atividades de pesquisa.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="step-card rge-card">
                        <div class="step-number">4</div>
                        <h5>Entrevista</h5>
                        <p>Entrevista com a comissão de residência médica para avaliação de perfil e motivação.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="info-card rge-card">
                        <h5><i class="bi bi-clipboard-check"></i> Requisitos para Inscrição</h5>
                        <ul class="requirement-list">
                            <li><i class="bi bi-check-circle-fill"></i> Diploma de graduação em Medicina reconhecido pelo MEC</li>
                            <li><i class="bi bi-check-circle-fill"></i> Inscrição no CRM ativa e regular</li>
                            <li><i class="bi bi-check-circle-fill"></i> Certificado de conclusão do internato médico</li>
                            <li><i class="bi bi-check-circle-fill"></i> Aprovação no processo seletivo da FMRP/USP</li>
                            <li><i class="bi bi-check-circle-fill"></i> Disponibilidade de dedicação integral ao programa (40h/semana)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Não estar matriculado em outro programa de residência médica</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-card rge-card">
                        <h5><i class="bi bi-calendar-event"></i> Calendário [2026]</h5>
                        <ul style="padding-left: 1.2rem; margin-bottom: 0;">
                            <li style="font-size: 0.9rem; color: #555; margin-bottom: 0.5rem; line-height: 1.7;"><strong>Publicação do edital:</strong> [Data]</li>
                            <li style="font-size: 0.9rem; color: #555; margin-bottom: 0.5rem; line-height: 1.7;"><strong>Inscrições:</strong> [Data] a [Data]</li>
                            <li style="font-size: 0.9rem; color: #555; margin-bottom: 0.5rem; line-height: 1.7;"><strong>Prova teórica:</strong> [Data]</li>
                            <li style="font-size: 0.9rem; color: #555; margin-bottom: 0.5rem; line-height: 1.7;"><strong>Entrevistas:</strong> [Data]</li>
                            <li style="font-size: 0.9rem; color: #555; margin-bottom: 0.5rem; line-height: 1.7;"><strong>Resultado final:</strong> [Data]</li>
                            <li style="font-size: 0.9rem; color: #555; margin-bottom: 0; line-height: 1.7;"><strong>Início das atividades:</strong> [Data]</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section" id="equipe">
        <div class="container">
            <div class="section-label">Corpo Docente</div>
            <h2>Preceptores do programa</h2>
            <p class="mb-5">A residência é conduzida por preceptores experientes em Genética Médica, com atuação clínica, laboratorial e científica reconhecida nacional e internacionalmente.</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="team-card rge-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Prof. Dr. [Nome Completo]</h5>
                            <div class="role">Coordenador da Residência</div>
                            <p>Médico geneticista, doutor em Genética Médica. Preceptor em aconselhamento genético e genética oncológica.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card rge-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Profa. Dra. [Nome Completo]</h5>
                            <div class="role">Preceptora – Genética Reprodutiva</div>
                            <p>Especialista em genética reprodutiva e medicina fetal. Coordena a rotatória de pré-natal genético.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card rge-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Prof. Dr. [Nome Completo]</h5>
                            <div class="role">Preceptor – Diagnóstico Molecular</div>
                            <p>Responsável pela supervisão das atividades laboratoriais e interpretação de exames genéticos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card rge-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Profa. Dra. [Nome Completo]</h5>
                            <div class="role">Preceptora – Genética Pediátrica</div>
                            <p>Especialista em síndromes de malformação e doenças metabólicas hereditárias em crianças.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Documents Section -->
    <section class="documents-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Documentos</div>
                    <h2>Documentos e normativos</h2>
                    <p style="color: #555; line-height: 1.8;">Acesse os documentos oficiais do programa, editais de seleção e normativas da Comissão Nacional de Residência Médica.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="doc-card rge-card">
                        <div class="doc-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <div class="doc-content">
                            <h6>Regimento da Residência Médica</h6>
                            <p>Normas internas do programa, direitos e deveres dos residentes, e estrutura curricular oficial.</p>
                            <a href="residencia-genetica-medica.php#" class="doc-link">Baixar PDF <i class="bi bi-download ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="doc-card rge-card">
                        <div class="doc-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <div class="doc-content">
                            <h6>Edital de Seleção [Ano]</h6>
                            <p>Edital vigente do processo seletivo com cronograma, vagas, critérios de classificação e documentação.</p>
                            <a href="residencia-genetica-medica.php#" class="doc-link">Baixar PDF <i class="bi bi-download ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="doc-card rge-card">
                        <div class="doc-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <div class="doc-content">
                            <h6>Programa de Atividades – R1</h6>
                            <p>Descrição detalhada das competências e atividades do primeiro ano de residência.</p>
                            <a href="residencia-genetica-medica.php#" class="doc-link">Baixar PDF <i class="bi bi-download ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="doc-card rge-card">
                        <div class="doc-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <div class="doc-content">
                            <h6>Programa de Atividades – R2</h6>
                            <p>Descrição detalhada das competências e atividades do segundo ano de residência.</p>
                            <a href="residencia-genetica-medica.php#" class="doc-link">Baixar PDF <i class="bi bi-download ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="doc-card rge-card">
                        <div class="doc-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <div class="doc-content">
                            <h6>Programa de Atividades – R3</h6>
                            <p>Descrição detalhada das competências e atividades do terceiro ano de residência.</p>
                            <a href="residencia-genetica-medica.php#" class="doc-link">Baixar PDF <i class="bi bi-download ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="doc-card rge-card">
                        <div class="doc-icon"><i class="bi bi-link-45deg"></i></div>
                        <div class="doc-content">
                            <h6>CNRM / MEC</h6>
                            <p>Normas e diretrizes da Comissão Nacional de Residência Médica do Ministério da Educação.</p>
                            <a href="residencia-genetica-medica.php#" class="doc-link">Acessar site <i class="bi bi-box-arrow-up-right ms-1"></i></a>
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
                    <h2>Informações sobre a Residência</h2>
                    <p>Para dúvidas sobre o programa, processo seletivo ou documentação necessária, entre em contato com a coordenação da residência médica.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <span>residencia.genetica@fmrp.usp.br</span>
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
                                <span>Segunda a sexta, 8h às 17h</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="mailto:residencia.genetica@fmrp.usp.br" class="btn-outline-light-custom d-inline-block">ENVIAR E-MAIL <i class="bi bi-arrow-right ms-1"></i></a>
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
