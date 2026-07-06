
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
    
    
    
    <link rel="stylesheet" href="assets/css/style.css?v=5">
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
                <span class="active">Extensão</span>
            </nav>
            <h1>Cursos de Extensão</h1>
            <p>Capacitação contínua e divulgação científica para a comunidade interna e externa.</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Extensão Universitária</div>
                    <h2>Conhecimento que<br>ultrapassa os muros</h2>
                    <p>O Departamento de Genética oferece cursos de extensão voltados à atualização profissional, à divulgação científica e à formação complementar de estudantes, pesquisadores e profissionais da área da saúde e biotecnologia.</p>
                    <p>Nossos cursos combinam teoria e prática, com acesso a laboratórios modernos e orientação de docentes especializados. As atividades de extensão fortalecem o vínculo entre a universidade e a sociedade, promovendo o acesso ao conhecimento científico.</p>
                </div>
                <div class="col-lg-6">
                    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800&h=500&fit=crop" alt="Cursos de Extensão" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses-section">
        <div class="container">
            <div class="section-label">Oferta Atual</div>
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 style="font-size: 2rem; font-weight: 700; color: #222;">Cursos disponíveis</h2>
                <div class="d-flex gap-2">
                    <select class="form-select form-select-sm" style="width: auto; font-size: 0.85rem; border-radius: 8px;">
                        <option selected>Todos os cursos</option>
                        <option>Presencial</option>
                        <option>Online</option>
                        <option>Híbrido</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
                <!-- Curso 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=600&h=400&fit=crop" alt="Curso 1">
                            <span class="course-badge">Presencial</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 15–19 JUN 2025</div>
                            <h5 class="course-title">Workshop de Técnicas em Biologia Molecular</h5>
                            <p class="course-excerpt">Curso prático com ênfase em PCR, eletroforese, extração de DNA e técnicas de clonagem. Voltado a estudantes e profissionais da área.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 40h</span>
                                <span><i class="bi bi-people"></i> 20 vagas</span>
                                <span><i class="bi bi-geo-alt"></i> Lab. 3</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">INSCREVA-SE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?w=600&h=400&fit=crop" alt="Curso 2">
                            <span class="course-badge online">Online</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 01–30 JUL 2025</div>
                            <h5 class="course-title">Introdução à Bioinformática Aplicada à Genética</h5>
                            <p class="course-excerpt">Curso introdutório sobre ferramentas computacionais para análise de sequências, alinhamento e bancos de dados genômicos.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 30h</span>
                                <span><i class="bi bi-people"></i> 50 vagas</span>
                                <span><i class="bi bi-laptop"></i> Online</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">INSCREVA-SE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?w=600&h=400&fit=crop" alt="Curso 3">
                            <span class="course-badge hybrid">Híbrido</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 10–14 AGO 2025</div>
                            <h5 class="course-title">Genética Forense: Teoria e Prática</h5>
                            <p class="course-excerpt">Aborda fundamentos da genética forense, tipagem STR, análise de DNA em vestígios criminais e interpretação de resultados.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 35h</span>
                                <span><i class="bi bi-people"></i> 25 vagas</span>
                                <span><i class="bi bi-laptop"></i> Híbrido</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">INSCREVA-SE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=600&h=400&fit=crop" alt="Curso 4">
                            <span class="course-badge">Presencial</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 05–09 OUT 2025</div>
                            <h5 class="course-title">Cultivo de Células e Técnicas de Citogenética</h5>
                            <p class="course-excerpt">Treinamento prático em cultivo de células mamárias, preparação de lâminas, bandeamento cromossômico e análise de cariótipo.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 40h</span>
                                <span><i class="bi bi-people"></i> 15 vagas</span>
                                <span><i class="bi bi-geo-alt"></i> Lab. 5</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">INSCREVA-SE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=600&h=400&fit=crop" alt="Curso 5">
                            <span class="course-badge online">Online</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> SET–OUT 2025</div>
                            <h5 class="course-title">Estatística Aplicada à Genética e Genômica</h5>
                            <p class="course-excerpt">Fundamentos de estatística para análise de dados genéticos, uso do R e interpretação de resultados em estudos de associação.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 20h</span>
                                <span><i class="bi bi-people"></i> 40 vagas</span>
                                <span><i class="bi bi-laptop"></i> Online</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">INSCREVA-SE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Curso 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="course-card rge-card">
                        <div class="course-img">
                            <img src="https://images.unsplash.com/photo-1576670159805-381a9de1cdec?w=600&h=400&fit=crop" alt="Curso 6">
                            <span class="course-badge">Presencial</span>
                        </div>
                        <div class="course-body">
                            <div class="course-date"><i class="bi bi-calendar3"></i> 17–21 NOV 2025</div>
                            <h5 class="course-title">Edição de Genomas com CRISPR-Cas9</h5>
                            <p class="course-excerpt">Do projeto de sgRNAs à validação de clones editados. Curso avançado para pesquisadores que desejam implementar a técnica em seus laboratórios.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 40h</span>
                                <span><i class="bi bi-people"></i> 12 vagas</span>
                                <span><i class="bi bi-geo-alt"></i> Lab. 2</span>
                            </div>
                            <a href="cursos_extensao.php#" class="course-link">INSCREVA-SE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container">
            <div class="section-label">Informações</div>
            <h2>Dúvidas frequentes</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="info-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <h5>Quem pode participar?</h5>
                        <p>Cursos abertos a estudantes de graduação, pós-graduação, profissionais da saúde, educadores e interessados em genética. Consulte pré-requisitos no edital de cada curso.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-medical"></i>
                        </div>
                        <h5>Certificado de conclusão</h5>
                        <p>Todos os cursos emit certificado de extensão universitária da USP, válido para horas complementares e progressão funcional, conforme carga horária.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-credit-card rge-card"></i>
                        </div>
                        <h5>Investimento e bolsas</h5>
                        <p>Taxas de inscrição variam conforme o curso. Bolsas parciais e integrais disponíveis para estudantes e profissionais da rede pública de saúde.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-card rge-card">
                        <div class="icon-box">
                            <i class="bi bi-envelope-open"></i>
                        </div>
                        <h5>Como se inscrever</h5>
                        <p>Inscrições realizadas exclusivamente pelo sistema Apolo da USP. Acesse o edital do curso desejado e siga as instruções de matrícula.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Fique atento às novas turmas</h2>
            <p class="mx-auto">Acompanhe nosso site e redes sociais para saber primeiro sobre novos cursos, programas de verão e eventos de extensão.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="noticias.php" class="btn-white">VER NOTÍCIAS <i class="bi bi-arrow-right"></i></a>
                <a href="index.php#contato" class="btn-white" style="background: transparent; color: white; border-color: rgba(255,255,255,0.5);">FALE CONOSCO <i class="bi bi-arrow-right"></i></a>
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
