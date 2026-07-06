
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
                <a href="laboratorios.php">Pesquisa</a>
                <span class="separator">/</span>
                <span class="active">Projetos</span>
            </nav>
            <h1>Projetos</h1>
            <p>Iniciativas de pesquisa financiadas que impulsionam a ciência e geram impacto social.</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Pesquisa Aplicada</div>
                    <h2>Ciência com<br>impacto real</h2>
                    <p>O Departamento de Genética desenvolve projetos de pesquisa financiados por agências nacionais e internacionais, parcerias com o setor privado e colaborações interinstitucionais. Nossos projetos abrangem desde a investigação básica até aplicações tecnológicas e clínicas.</p>
                    <p>Cada projeto reúne pesquisadores, estudantes e técnicos em torno de questões científicas relevantes, contribuindo para o avanço do conhecimento e para soluções que beneficiam a sociedade.</p>
                </div>
                <div class="col-lg-6">
                    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800&h=500&fit=crop" alt="Projetos de Pesquisa" style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">32</div>
                        <div class="stat-label">Projetos Ativos</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">R$12M</div>
                        <div class="stat-label">Em Financiamentos</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">18</div>
                        <div class="stat-label">Instituições Parceiras</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">120+</div>
                        <div class="stat-label">Pesquisadores Envolvidos</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section">
        <div class="container">
            <div class="section-label">Projetos em Andamento</div>
            <div class="section-header">
                <h2>Conheça nossas iniciativas</h2>
                <div class="d-flex gap-2">
                    <select class="form-select form-select-sm" style="width: auto; font-size: 0.85rem; border-radius: 8px;">
                        <option selected>Todos os status</option>
                        <option>Em andamento</option>
                        <option>Novos</option>
                        <option>Concluídos</option>
                    </select>
                    <select class="form-select form-select-sm" style="width: auto; font-size: 0.85rem; border-radius: 8px;">
                        <option selected>Todas as áreas</option>
                        <option>Genética Molecular</option>
                        <option>Genômica</option>
                        <option>Genética Médica</option>
                        <option>Genética de Plantas</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
                <!-- Projeto 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=600&h=400&fit=crop" alt="Projeto 1">
                            <span class="project-status active">Em andamento</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genética Médica</span>
                            <h5 class="project-title">Genética de Doenças Raras no Brasil Central</h5>
                            <p class="project-excerpt">Caracterização molecular de doenças genéticas neurológicas e metabólicas em famílias do estado de São Paulo, visando diagnóstico e aconselhamento genético.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2023–2027</span>
                                <span><i class="bi bi-cash-stack"></i> FAPESP (Processo 2023/12345-6)</span>
                                <span><i class="bi bi-people"></i> Coord.: Prof. Dr. A. B. Silva</span>
                            </div>
                            <a href="projetos.php#" class="project-link">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=600&h=400&fit=crop" alt="Projeto 2">
                            <span class="project-status new">Novo</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genética de Plantas</span>
                            <h5 class="project-title">Resiliência Genética de Culturas Agrícolas à Seca</h5>
                            <p class="project-excerpt">Identificação de genes associados à tolerância hídrica em soja e milho por meio de análise genômica e edição gênica CRISPR.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2025–2029</span>
                                <span><i class="bi bi-cash-stack"></i> CNPq / Embrapa</span>
                                <span><i class="bi bi-people"></i> Coord.: Profa. Dra. C. D. Oliveira</span>
                            </div>
                            <a href="projetos.php#" class="project-link">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" alt="Projeto 3">
                            <span class="project-status active">Em andamento</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genômica e Bioinformática</span>
                            <h5 class="project-title">Atlas Genômico da Diversidade Brasileira</h5>
                            <p class="project-excerpt">Mapeamento da variabilidade genética de populações brasileiras para estudos de medicina de precisão e compreensão da história evolutiva humana.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2022–2026</span>
                                <span><i class="bi bi-cash-stack"></i> FAPESP / MCTI</span>
                                <span><i class="bi bi-people"></i> Coord.: Prof. Dr. E. F. Santos</span>
                            </div>
                            <a href="projetos.php#" class="project-link">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?w=600&h=400&fit=crop" alt="Projeto 4">
                            <span class="project-status active">Em andamento</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Biologia Celular</span>
                            <h5 class="project-title">Mecanismos de Senescência Celular e Envelhecimento</h5>
                            <p class="project-excerpt">Investigação das vias moleculares envolvidas no envelhecimento celular e potencial terapêutico de moduladores de autofagia.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2023–2026</span>
                                <span><i class="bi bi-cash-stack"></i> CNPq Universal</span>
                                <span><i class="bi bi-people"></i> Coord.: Prof. Dr. M. N. Ferreira</span>
                            </div>
                            <a href="projetos.php#" class="project-link">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=600&h=400&fit=crop" alt="Projeto 5">
                            <span class="project-status active">Em andamento</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genética de Populações</span>
                            <h5 class="project-title">Conservação Genética de Anfíbios Ameaçados</h5>
                            <p class="project-excerpt">Avaliação da diversidade genética e conectividade populacional de espécies endêmicas da Mata Atlântica para planejamento de estratégias de conservação.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2024–2028</span>
                                <span><i class="bi bi-cash-stack"></i> FAPESP / ICMBio</span>
                                <span><i class="bi bi-people"></i> Coord.: Profa. Dra. I. J. Lima</span>
                            </div>
                            <a href="projetos.php#" class="project-link">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card rge-card">
                        <div class="project-img">
                            <img src="https://images.unsplash.com/photo-1576670159805-381a9de1cdec?w=600&h=400&fit=crop" alt="Projeto 6">
                            <span class="project-status completed">Concluído</span>
                        </div>
                        <div class="project-body">
                            <span class="project-tag">Genética Molecular</span>
                            <h5 class="project-title">Desenvolvimento de Kit Diagnóstico para Doenças Mitocondriais</h5>
                            <p class="project-excerpt">Desenvolvimento e validação de painel de NGS para diagnóstico molecular de doenças mitocondriais hereditárias, com transferência tecnológica para o setor privado.</p>
                            <div class="project-meta">
                                <span><i class="bi bi-calendar3"></i> 2020–2024</span>
                                <span><i class="bi bi-cash-stack"></i> FINEP / PIPE</span>
                                <span><i class="bi bi-people"></i> Coord.: Prof. Dr. G. H. Costa</span>
                            </div>
                            <a href="projetos.php#" class="project-link">VER RESULTADOS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-label">Linha do Tempo</div>
            <h2>Marcos recentes</h2>

            <div class="timeline-item">
                <div class="timeline-date"><span>2025</span>MAI</div>
                <div class="timeline-content">
                    <h5>Aprovação de novo projeto FAPESP Temático</h5>
                    <p>Projeto "Genômica Funcional de Doenças Neurodegenerativas" aprovado com financiamento de R$ 2,5 milhões para os próximos 5 anos.</p>
                    <div class="meta"><i class="bi bi-check-circle"></i> Financiamento aprovado</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date"><span>2025</span>MAR</div>
                <div class="timeline-content">
                    <h5>Parceria internacional com Universidade de Oxford</h5>
                    <p>Acordo de cooperação para estudos de genética de populações e evolução molecular, incluindo intercâmbio de pesquisadores e estudantes.</p>
                    <div class="meta"><i class="bi bi-globe"></i> Cooperação internacional</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date"><span>2024</span>DEZ</div>
                <div class="timeline-content">
                    <h5>Conclusão do projeto de diagnóstico mitocondrial</h5>
                    <p>Kit de NGS para doenças mitocondriais validado e licenciado para empresa brasileira de biotecnologia.</p>
                    <div class="meta"><i class="bi bi-lightbulb"></i> Transferência tecnológica</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date"><span>2024</span>AGO</div>
                <div class="timeline-content">
                    <h5>Inauguração do Centro de Bioinformática Aplicada</h5>
                    <p>Nova infraestrutura dedicada à análise de dados genômicos em larga escala, fruto de investimento de R$ 1,2 milhão.</p>
                    <div class="meta"><i class="bi bi-building"></i> Infraestrutura</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date"><span>2024</span>ABR</div>
                <div class="timeline-content">
                    <h5>Publicação do Atlas Genômico da Diversidade Brasileira</h5>
                    <p>Primeiros resultados publicados na Nature Genetics, com dados de mais de 5 mil indivíduos de diferentes regiões do Brasil.</p>
                    <div class="meta"><i class="bi bi-journal-text"></i> Publicação de destaque</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <div class="section-label">Parcerias</div>
            <h2>Quem financia e apoia nossa pesquisa</h2>

            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="partner-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h5>FAPESP</h5>
                        <p>Financiamento de pesquisa</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="partner-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-bank2"></i>
                        </div>
                        <h5>CNPq</h5>
                        <p>Bolsas e projetos</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="partner-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5>CAPES</h5>
                        <p>Pós-graduação</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="partner-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-globe-americas"></i>
                        </div>
                        <h5>FINEP</h5>
                        <p>Inovação tecnológica</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="partner-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-seedling"></i>
                        </div>
                        <h5>Embrapa</h5>
                        <p>Pesquisa agrícola</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="partner-card rge-card">
                        <div class="partner-icon">
                            <i class="bi bi-hospital"></i>
                        </div>
                        <h5>HC-FMRP</h5>
                        <p>Pesquisa clínica</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Quer propor uma colaboração?</h2>
            <p class="mx-auto">O Departamento de Genética está aberto a parcerias acadêmicas, institucionais e com o setor privado. Entre em contato para discutir oportunidades de cooperação.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="index.php#contato" class="btn-white">ENTRE EM CONTATO <i class="bi bi-arrow-right"></i></a>
                <a href="linhas-pesquisa.php" class="btn-outline-white">LINHAS DE PESQUISA <i class="bi bi-arrow-right"></i></a>
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
