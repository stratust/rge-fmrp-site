
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
</script>    <!-- Page Header -->
    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.php">Início</a>
                <span class="separator">/</span>
                <a href="ensino.php">Ensino</a>
                <span class="separator">/</span>
                <span class="active">Graduação</span>
            </nav>
            <h1>Ensino de Graduação</h1>
            <p>O Departamento de Genética da FMRP/USP oferece disciplinas fundamentais para a formação de profissionais das áreas de Ciências Biológicas, Medicina, Informática Biomédica e outros cursos da instituição.</p>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">6</span>
                        <span class="stat-label">Cursos Atendidos</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">20+</span>
                        <span class="stat-label">Disciplinas</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Labs de Ensino</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">60</span>
                        <span class="stat-label">Anos de Ensino</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Formação Acadêmica</div>
                    <h2>Excelência no ensino de Genética desde 1965</h2>
                    <p class="lead">Desde sua fundação, o Departamento de Genética da FMRP/USP dedica-se à formação de profissionais qualificados, oferecendo disciplinas teóricas e práticas que abrangem desde os fundamentos da Genética Clássica até as mais modernas técnicas de Biologia Molecular e Genômica.</p>
                    <p>O ensino de graduação atende a diversos cursos da FMRP/USP, incluindo Medicina, Ciências Biológicas (Bacharelado e Licenciatura), Informática Biomédica, Farmácia, Fonoaudiologia e Terapia Ocupacional, proporcionando uma formação sólida e multidisciplinar.</p>
                    <p>As aulas práticas são realizadas em laboratórios modernos equipados com microscópios, material para preparação de lâminas, kits didáticos de biologia molecular e estações de trabalho para bioinformática, garantindo uma experiência de aprendizado completa e atualizada.</p>
                </div>
                <div class="col-lg-6">
                    <div class="intro-img">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800&h=500&fit=crop" alt="Ensino de Graduação">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses-section">
        <div class="container">
            <div class="section-label mb-2">Cursos Atendidos</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Nossos Alunos</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-icon"><i class="bi bi-heart-pulse"></i></div>
                        <h5 class="course-name">Medicina</h5>
                        <p class="course-desc">Disciplinas de Genética Médica, Citogenética e Biologia Molecular aplicadas à formação médica, com ênfase em diagnóstico genético, conselho genético e bases moleculares das doenças.</p>
                        <div class="course-meta">
                            <div class="course-meta-item"><i class="bi bi-book"></i> Genética Médica, Biologia Molecular</div>
                            <div class="course-meta-item"><i class="bi bi-clock"></i> 2º e 3º anos do curso</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-icon"><i class="bi bi-bug"></i></div>
                        <h5 class="course-name">Ciências Biológicas – Bacharelado</h5>
                        <p class="course-desc">Formação aprofundada em Genética Clássica, Molecular, Populacional e Evolutiva, preparando o aluno para atuação em pesquisa e desenvolvimento nas diversas áreas da Genética.</p>
                        <div class="course-meta">
                            <div class="course-meta-item"><i class="bi bi-book"></i> Genética Geral, Molecular, Evolutiva</div>
                            <div class="course-meta-item"><i class="bi bi-clock"></i> Do 2º ao 4º ano do curso</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-icon"><i class="bi bi-mortarboard"></i></div>
                        <h5 class="course-name">Ciências Biológicas – Licenciatura</h5>
                        <p class="course-desc">Disciplinas de Genética e Biologia Molecular voltadas para a formação de professores do ensino básico e médio, com foco em didática e metodologias de ensino das ciências.</p>
                        <div class="course-meta">
                            <div class="course-meta-item"><i class="bi bi-book"></i> Genética, Biologia Molecular</div>
                            <div class="course-meta-item"><i class="bi bi-clock"></i> Do 2º ao 4º ano do curso</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-icon"><i class="bi bi-laptop"></i></div>
                        <h5 class="course-name">Informática Biomédica</h5>
                        <p class="course-desc">Disciplinas de Bioinformática, Genômica e Análise de Dados Genéticos, integrando conhecimentos de biologia e computação para formação de profissionais da área de saúde digital.</p>
                        <div class="course-meta">
                            <div class="course-meta-item"><i class="bi bi-book"></i> Bioinformática, Genômica</div>
                            <div class="course-meta-item"><i class="bi bi-clock"></i> Do 2º ao 4º ano do curso</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-icon"><i class="bi bi-capsule"></i></div>
                        <h5 class="course-name">Farmácia</h5>
                        <p class="course-desc">Disciplinas de Genética e Biologia Molecular com aplicações em farmacogenética, biotecnologia farmacêutica e desenvolvimento de medicamentos baseados em terapia gênica.</p>
                        <div class="course-meta">
                            <div class="course-meta-item"><i class="bi bi-book"></i> Genética, Biologia Molecular</div>
                            <div class="course-meta-item"><i class="bi bi-clock"></i> 2º e 3º anos do curso</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-icon"><i class="bi bi-ear"></i></div>
                        <h5 class="course-name">Fonoaudiologia e Terapia Ocupacional</h5>
                        <p class="course-desc">Disciplinas de Genética Humana e Bases Moleculares das Doenças, com foco nas síndromes genéticas relacionadas às áreas de atuação desses profissionais.</p>
                        <div class="course-meta">
                            <div class="course-meta-item"><i class="bi bi-book"></i> Genética Humana, Bases Moleculares</div>
                            <div class="course-meta-item"><i class="bi bi-clock"></i> 2º ano do curso</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Disciplines Section -->
    <section class="disciplines-section">
        <div class="container">
            <div class="section-label mb-2">Grade Curricular</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Disciplinas Oferecidas</h2>

            <div class="highlight-box mb-5">
                <h3><i class="bi bi-info-circle me-2"></i>Informações Importantes</h3>
                <p>As disciplinas de graduação são oferecidas de acordo com a grade curricular de cada curso. Os alunos devem consultar o coordenador de seu curso para verificar a equivalência de créditos e pré-requisitos. As aulas práticas são realizadas nos laboratórios de ensino do departamento, localizados no Bloco H da FMRP/USP.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-001</div>
                        <h5 class="discipline-name">Genética Geral</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas, Farmácia</div>
                        </div>
                        <span class="discipline-tag">Obrigatória</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-002</div>
                        <h5 class="discipline-name">Biologia Molecular</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas, Medicina</div>
                        </div>
                        <span class="discipline-tag">Obrigatória</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-003</div>
                        <h5 class="discipline-name">Citogenética</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas, Medicina</div>
                        </div>
                        <span class="discipline-tag">Obrigatória</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-004</div>
                        <h5 class="discipline-name">Genética Médica</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 45h – 3 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Medicina, Fonoaudiologia</div>
                        </div>
                        <span class="discipline-tag">Obrigatória</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-005</div>
                        <h5 class="discipline-name">Genética Humana</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas, Terapia Ocupacional</div>
                        </div>
                        <span class="discipline-tag">Obrigatória</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-006</div>
                        <h5 class="discipline-name">Genética de Populações e Evolução</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas</div>
                        </div>
                        <span class="discipline-tag">Obrigatória</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-007</div>
                        <h5 class="discipline-name">Genética Molecular</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas (Bacharelado)</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-008</div>
                        <h5 class="discipline-name">Bioinformática</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Informática Biomédica, Ciências Biológicas</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-009</div>
                        <h5 class="discipline-name">Genética de Microrganismos</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 45h – 3 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas, Farmácia</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-010</div>
                        <h5 class="discipline-name">Genética Vegetal</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 45h – 3 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-011</div>
                        <h5 class="discipline-name">Genética Animal</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 45h – 3 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">GBM-012</div>
                        <h5 class="discipline-name">Genômica e Proteômica</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 45h – 3 créditos</div>
                            <div class="discipline-info-item"><i class="bi bi-people"></i> Ciências Biológicas, Informática Biomédica</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Labs Teaching Section -->
<!--    <section class="labs-teaching-section">
        <div class="container">
            <div class="section-label mb-2">Infraestrutura</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Laboratórios de Ensino</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="lab-teach-card rge-card">
                        <div class="lab-teach-header">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <div class="lab-teach-body">
                            <h5 class="lab-teach-name">Laboratório de Práticas em Genética</h5>
                            <p class="lab-teach-desc">Espaço destinado às aulas práticas de graduação em Genética, Citogenética e Biologia Molecular. Equipado com microscópios, material para preparação de lâminas e kits didáticos de biologia molecular.</p>
                            <div class="lab-teach-meta">
                                <div><i class="bi bi-people"></i> Capacidade: 30 alunos</div>
                                <div><i class="bi bi-geo-alt"></i> Bloco H – Térreo</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="lab-teach-card rge-card">
                        <div class="lab-teach-header">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div class="lab-teach-body">
                            <h5 class="lab-teach-name">Laboratório de Informática em Genética</h5>
                            <p class="lab-teach-desc">Sala equipada com estações de trabalho para aulas de bioinformática, análise de dados genéticos, simulações computacionais e acesso a bancos de dados genômicos.</p>
                            <div class="lab-teach-meta">
                                <div><i class="bi bi-people"></i> Capacidade: 25 alunos</div>
                                <div><i class="bi bi-geo-alt"></i> Bloco H – 1º Andar</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="lab-teach-card rge-card">
                        <div class="lab-teach-header">
                            <i class="bi bi-microscope"></i>
                        </div>
                        <div class="lab-teach-body">
                            <h5 class="lab-teach-name">Laboratório de Microscopia</h5>
                            <p class="lab-teach-desc">Infraestrutura para ensino de técnicas de microscopia óptica e eletrônica, preparação de amostras biológicas e análise morfológica de células e tecidos.</p>
                            <div class="lab-teach-meta">
                                <div><i class="bi bi-people"></i> Capacidade: 20 alunos</div>
                                <div><i class="bi bi-geo-alt"></i> Bloco H – Térreo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
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
