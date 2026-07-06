
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
                <span class="active">Notícias</span>
            </nav>
            <h1>Notícias e Destaques</h1>
            <p>Acompanhe as últimas novidades, pesquisas e eventos do Departamento de Genética.</p>
        </div>
    </section>


    <!-- Featured News -->
    <section class="featured-news">
        <div class="container">
            <div class="section-label">Destaque</div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="featured-card rge-card">
                        <div class="featured-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=900&h=450&fit=crop" alt="Notícia em destaque">
                        </div>
                        <div class="featured-body">
                            <span class="featured-category">Pesquisa</span>
                            <div class="news-date mb-2"><i class="bi bi-calendar3"></i> 20 MAI 2025</div>
                            <h3 class="featured-title">Estudo revela novo mecanismo genético em doenças raras neurológicas</h3>
                            <p class="featured-excerpt">Pesquisadores do Departamento de Genética da FMRP/USP identificaram vias celulares inéditas envolvidas no desenvolvimento de doenças genéticas neurológicas raras. O estudo, publicado em revista internacional de alto impacto, abre caminho para novas estratégias terapêuticas e diagnósticas precoces.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-4">
                        <div class="news-card rge-card">
                            <div class="news-img" style="height: 160px;">
                                <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=400&h=250&fit=crop" alt="Evento">
                            </div>
                            <div class="news-body">
                                <span class="news-category">Evento</span>
                                <div class="news-date"><i class="bi bi-calendar3"></i> 15 MAI 2025</div>
                                <h5 class="news-title">Departamento promove simpósio sobre edição genômica</h5>
                                <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="news-card rge-card">
                            <div class="news-img" style="height: 160px;">
                                <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Pós-graduação">
                            </div>
                            <div class="news-body">
                                <span class="news-category">Ensino</span>
                                <div class="news-date"><i class="bi bi-calendar3"></i> 28 ABR 2025</div>
                                <h5 class="news-title">Abertas as inscrições para pós-graduação 2026</h5>
                                <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- All News -->
    <section class="news-section">
        <div class="container">
            <div class="section-label">Todas as Notícias</div>
            <div class="section-header">
                <h2>Fique por dentro</h2>
                <div class="d-flex gap-2">
                    <select class="form-select form-select-sm" style="width: auto; font-size: 0.85rem; border-radius: 8px;">
                        <option selected>Todas as categorias</option>
                        <option>Pesquisa</option>
                        <option>Ensino</option>
                        <option>Eventos</option>
                        <option>Extensão</option>
                    </select>
                    <select class="form-select form-select-sm" style="width: auto; font-size: 0.85rem; border-radius: 8px;">
                        <option selected>Mais recentes</option>
                        <option>Mais antigas</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
                <!-- News Item 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 1">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Pesquisa</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 20 MAI 2025</div>
                            <h5 class="news-title">Estudo revela novo mecanismo genético em doenças raras</h5>
                            <p class="news-excerpt">Pesquisa do departamento identifica vias celulares envolvidas em doenças genéticas neurológicas.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=400&h=250&fit=crop" alt="Notícia 2">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Evento</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 15 MAI 2025</div>
                            <h5 class="news-title">Departamento promove simpósio sobre edição genômica</h5>
                            <p class="news-excerpt">Evento reuniu pesquisadores nacionais e internacionais para discutir os avanços em CRISPR.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 3">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Pesquisa</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 05 MAI 2025</div>
                            <h5 class="news-title">Novo artigo publicado em revista internacional</h5>
                            <p class="news-excerpt">Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Notícia 4">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Ensino</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 28 ABR 2025</div>
                            <h5 class="news-title">Abertas as inscrições para pós-graduação 2026</h5>
                            <p class="news-excerpt">Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?w=400&h=250&fit=crop" alt="Notícia 5">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Extensão</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 22 ABR 2025</div>
                            <h5 class="news-title">Programa de divulgação científica visita escolas da região</h5>
                            <p class="news-excerpt">Alunos de graduação levam conhecimento sobre genética a comunidades escolares de Ribeirão Preto.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?w=400&h=250&fit=crop" alt="Notícia 6">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Pesquisa</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 10 ABR 2025</div>
                            <h5 class="news-title">Descoberta de novo gene associado à resistência em plantas</h5>
                            <p class="news-excerpt">Estudo abre perspectivas para o desenvolvimento de cultivares mais resilientes.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=400&h=250&fit=crop" alt="Notícia 7">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Evento</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 02 ABR 2025</div>
                            <h5 class="news-title">Semana da Genética 2025: inscrições abertas</h5>
                            <p class="news-excerpt">Evento anual traz palestras, workshops e apresentações de trabalhos científicos.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1576670159805-381a9de1cdec?w=400&h=250&fit=crop" alt="Notícia 8">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Ensino</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 25 MAR 2025</div>
                            <h5 class="news-title">Novo laboratório de bioinformática é inaugurado</h5>
                            <p class="news-excerpt">Espaço conta com equipamentos de última geração para análise de dados genômicos.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 9 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card rge-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=400&h=250&fit=crop" alt="Notícia 9">
                        </div>
                        <div class="news-body">
                            <span class="news-category">Pesquisa</span>
                            <div class="news-date"><i class="bi bi-calendar3"></i> 18 MAR 2025</div>
                            <h5 class="news-title">Colaboração internacional avança em estudos de evolução genética</h5>
                            <p class="news-excerpt">Parceria com universidades europeias amplia compreensão sobre diversidade genética.</p>
                            <a href="noticias.php#" class="news-link">LEIA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section class="pagination-section">
        <div class="container">
            <nav aria-label="Navegação de notícias">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="noticias.php#" aria-label="Anterior">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="noticias.php#">1</a></li>
                    <li class="page-item"><a class="page-link" href="noticias.php#">2</a></li>
                    <li class="page-item"><a class="page-link" href="noticias.php#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="noticias.php#" aria-label="Próximo">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h3><i class="bi bi-envelope-paper me-2"></i>Receba nossas novidades</h3>
                    <p class="mb-0">Cadastre-se para receber as últimas notícias e eventos do Departamento de Genética.</p>
                </div>
                <div class="col-lg-6">
                    <form class="newsletter-form d-flex gap-2">
                        <input type="email" class="form-control flex-grow-1" placeholder="Seu e-mail" required>
                        <button type="submit" class="btn">CADASTRAR</button>
                    </form>
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
