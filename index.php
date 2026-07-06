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
</script><style>
.carousel-wrapper {
    overflow: hidden;
}

.carousel-track {
    display: flex;
    gap: 24px; /* mesmo valor do g-4 do Bootstrap */
    transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.news-card-col {
    flex: 0 0 calc(25% - 18px);
}

.carousel-controls {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 1.25rem;
}

.carousel-dots {
    display: flex;
    gap: 6px;
}

.carousel-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #ccc;
    border: none;
    cursor: pointer;
    padding: 0;
    transition: background 0.2s, transform 0.2s;
}

.carousel-dot.active {
    background: #333;
    transform: scale(1.35);
}

.carousel-arrow {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: 1px solid #ddd;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.15s, border-color 0.15s;
}

.carousel-arrow:hover {
    background: #f5f5f5;
    border-color: #bbb;
}

.carousel-arrow:disabled {
    opacity: 0.3;
    cursor: default;
}
@media (max-width: 767px) {
  .news-card-col {
    flex: 0 0 100%;
  }
}
</style>

    <!-- Hero Section -->
    <section class="hero-section">
     <video autoplay muted loop playsinline class="hero-video">
        <!-- <source src="assets/img/video_1.webm" type="video/webm">      -->
        <source src="assets/img/video_1.mp4" type="video/mp4">
        Seu navegador não suporta vídeos.
    </video>

    <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-content">
                    <div style="width: 40px; height: 3px; background: var(--accent-green); margin-bottom: 1.5rem;"></div>
                    <h1>Departamento de<br>Genética</h1>
                    <p class="subtitle">FMRP – USP</p>
                    <p>Excelência em ensino, pesquisa<br>e inovação em genética.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="historia.php" class="btn btn-green">CONHEÇA O DEPARTAMENTO <i class="bi bi-arrow-right ms-1"></i></a>
<!--                        <a href="linhas-pesquisa.php" class="btn btn-outline-light-custom">LINHAS DE PESQUISA <i class="bi bi-arrow-right ms-1"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-indicators">
            <span class="active"></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
				<a href="ensino.php" class="feature-link">
                    <div class="feature-card rge-card">
					
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 15 L25 5 L40 15 L40 35 L25 45 L10 35 Z" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M25 5 L25 25 M25 25 L10 35 M25 25 L40 35" stroke="#1a5c3a" stroke-width="1.5"/>
                                <circle cx="25" cy="25" r="3" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h5>ENSINO</h5>
                        <p>Graduação e Pós-graduação com excelência acadêmica.</p>
                        →
                    </div>
					</a>
                </div>
				
				
                <div class="col-md-6 col-lg-3">
				<a href="linhas-pesquisa.php" class="feature-link">
                    <div class="feature-card rge-card">
                        <!--  DNA PESQUISA  -->
                        <div class="feature-icon">
                            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 10C40 22 40 42 20 54" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"/>
                                <path d="M40 10C20 22 20 42 40 54" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"/>
                            
                                <line x1="23" y1="18" x2="37" y2="18" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="21" y1="30" x2="39" y2="30" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="23" y1="42" x2="37" y2="42" stroke="#1a5c3a" stroke-width="2"/>
                            
                                <circle cx="48" cy="46" r="8" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="54" y1="52" x2="61" y2="59" stroke="#1a5c3a" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h5>PESQUISA</h5>
                        <p>Produzindo conhecimento e promovendo inovação.</p>
                        →
                    </div>
					</a>
                </div>
                <div class="col-md-6 col-lg-3">
				<a href="laboratorios.php" class="feature-link">
                    <div class="feature-card rge-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="12" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <rect x="22" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <rect x="32" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <line x1="15" y1="38" x2="15" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="25" y1="38" x2="25" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="35" y1="38" x2="35" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="10" y1="45" x2="40" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                            </svg>
                        </div>
                        <h5>LABORATÓRIOS</h5>
                        <p>Infraestrutura moderna e tecnologia de ponta.</p>
                        →
                    </div>
					</a>
                </div>
                <div class="col-md-6 col-lg-3">
				<a href="docentes.php" class="feature-link">
                    <div class="feature-card rge-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="8" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <circle cx="32" cy="18" r="8" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M12 30 Q25 25 38 30 Q38 42 25 45 Q12 42 12 30" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <h5>CORPO DOCENTE</h5>
                        <p>Professores e pesquisadores altamente qualificados.</p>
                        →
                    </div>
					</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
<!--    <section class="about-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Sobre Nós</div>
                    <h2>Excelência que<br>transforma ciência</h2>
                    <p>O Departamento de Genética da FMRP/USP tem uma longa trajetória dedicada à formação de profissionais, à produção de conhecimento e à contribuição para o avanço da genética e áreas correlatas.</p>
                    <p>Unimos tradição e inovação para gerar impacto na ciência e na sociedade.</p>
                    <a href="historia.php" class="btn btn-green mt-3">SAIBA MAIS SOBRE O DEPARTAMENTO</a>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/rge1.jpg" alt="Departamento de Genética">
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="section-label">Notícias e Destaques</div>
        <div class="section-header">
            <h2>Fique por dentro</h2>
            <a href="noticias.php" class="see-all-link">VER TODAS AS NOTÍCIAS <i class="bi bi-arrow-right"></i></a>
        </div>

        <!-- Carrossel -->
        <div class="carousel-wrapper">
            <div class="carousel-track" id="newsTrack">

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=400&h=250&fit=crop" alt="Notícia 1">
                            </div>
                            <div class="news-body">
                                <div class="news-date">15 JUN 2026 - 14:00</div>
                                <h5 class="news-title">Jéssica Oliveira de Santis - Doutorado</h5>
                                <p class="news-excerpt">Caracterização Molecular e Abordagens Funcionais para Identificação de Vulnerabilidades Terapêuticas no Meduloblastoma Pediátrico</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 2">
                            </div>
                            <div class="news-body">
                                <div class="news-date">15 MAI 2025</div>
                                <h5 class="news-title">Departamento promove simpósio sobre edição genômica</h5>
                                <p class="news-excerpt">Evento reuniu pesquisadores nacionais e internacionais para discutir os avanços em CRISPR e suas aplicações.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 3">
                            </div>
                            <div class="news-body">
                                <div class="news-date">05 MAI 2025</div>
                                <h5 class="news-title">Novo artigo publicado em revista internacional</h5>
                                <p class="news-excerpt">Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Notícia 4">
                            </div>
                            <div class="news-body">
                                <div class="news-date">28 ABR 2025</div>
                                <h5 class="news-title">Abertas as inscrições para pós-graduação 2026</h5>
                                <p class="news-excerpt">Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 5">
                            </div>
                            <div class="news-body">
                                <div class="news-date">05 MAI 2025</div>
                                <h5 class="news-title">Novo artigo publicado em revista internacional</h5>
                                <p class="news-excerpt">Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="news-card-col">
                    <div class="news-card rge-card">
                        <a href="index.php#" class="news-link">
                            <div class="news-img">
                                <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Notícia 6">
                            </div>
                            <div class="news-body">
                                <div class="news-date">28 ABR 2025</div>
                                <h5 class="news-title">Abertas as inscrições para pós-graduação 2026</h5>
                                <p class="news-excerpt">Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.</p>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div><!-- /.carousel-track -->
        </div><!-- /.carousel-wrapper -->

        <!-- Controles -->
        <div class="carousel-controls">
            <div class="carousel-dots" id="newsDots"></div>
            <div class="d-flex gap-2">
                <button class="carousel-arrow" id="newsPrev" aria-label="Anterior" disabled>
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button class="carousel-arrow" id="newsNext" aria-label="Próximo">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

    </div>
</section>
    <!-- Research Section -->
    <section class="research-section">
        <div class="container">
            <div class="section-label">Nossas Linhas de Pesquisa</div>
            <h2>Conhecimento que gera impacto</h2>

            <div class="research-carousel position-relative">
                <div id="researchCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <path d="M17.5 5 C10 5, 5 12, 5 18 C5 26, 12 30, 17.5 30 C23 30, 30 26, 30 18 C30 12, 25 5, 17.5 5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M12 15 Q17.5 10 23 15 Q23 22 17.5 25 Q12 22 12 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <circle cx="17.5" cy="18" r="2" fill="#1a5c3a"/>
                                            </svg>
                                        </div>
                                        <h5>Genética Molecular</h5>
                                        <p>Estudo dos mecanismos moleculares dos genes e suas funções.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <path d="M8 28 Q8 5 17.5 5 Q27 5 27 28" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <line x1="17.5" y1="5" x2="17.5" y2="28" stroke="#1a5c3a" stroke-width="1.5"/>
                                                <line x1="12" y1="15" x2="23" y2="15" stroke="#1a5c3a" stroke-width="1.5"/>
                                                <line x1="10" y1="22" x2="25" y2="22" stroke="#1a5c3a" stroke-width="1.5"/>
                                            </svg>
                                        </div>
                                        <h5>Genômica e Bioinformática</h5>
                                        <p>Análise de dados genômicos e desenvolvimento de ferramentas computacionais.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <circle cx="12" cy="12" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="23" cy="12" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="17.5" cy="24" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                            </svg>
                                        </div>
                                        <h5>Biologia Celular</h5>
                                        <p>Investigação dos processos celulares em condições fisiológicas e patológicas.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <path d="M17.5 30 L17.5 20 M17.5 20 Q12 15 12 8 Q12 3 17.5 3 Q23 3 23 8 Q23 15 17.5 20" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M10 25 Q8 20 10 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <path d="M25 25 Q27 20 25 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <ellipse cx="17.5" cy="30" rx="8" ry="3" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                            </svg>
                                        </div>
                                        <h5>Genética de Plantas</h5>
                                        <p>Melhoramento genético e resistência a estresses bióticos e abióticos.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <circle cx="10" cy="12" r="5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="25" cy="12" r="5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M7 20 Q17.5 15 28 20 Q28 30 17.5 32 Q7 30 7 20" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                            </svg>
                                        </div>
                                        <h5>Genética de Populações e Evolução</h5>
                                        <p>Estudos sobre diversidade genética, evolução e conservação.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev-custom" type="button" data-bs-target="#researchCarousel" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="carousel-control-next-custom" type="button" data-bs-target="#researchCarousel" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>


<script>
(function () {

    const GAP = 24;
    const track = document.getElementById('newsTrack');
    const dotsEl = document.getElementById('newsDots');
    const prevBtn = document.getElementById('newsPrev');
    const nextBtn = document.getElementById('newsNext');
    const cards = track.querySelectorAll('.news-card-col');
    let current = 0;

    function getVisible() {
        const cardW = cards[0].offsetWidth;
        const wrapperW = track.parentElement.offsetWidth;
        return Math.round(wrapperW / (cardW + GAP));
    }

    function buildDots() {
        const pages = Math.ceil(cards.length / getVisible());
        dotsEl.innerHTML = '';
        for (let i = 0; i < pages; i++) {
            const d = document.createElement('button');
            d.className = 'carousel-dot' + (i === 0 ? ' active' : '');
            d.setAttribute('aria-label', 'Página ' + (i + 1));
            d.addEventListener('click', () => goTo(i));
            dotsEl.appendChild(d);
        }
    }

    function update() {
        const visible = getVisible();
        const pages = Math.ceil(cards.length / visible);
        current = Math.min(current, pages - 1);
        const cardW = cards[0].offsetWidth;
        const offset = current * visible * (cardW + GAP);
        track.style.transform = 'translateX(-' + offset + 'px)';
        dotsEl.querySelectorAll('.carousel-dot').forEach((d, i) =>
            d.classList.toggle('active', i === current)
        );
        prevBtn.disabled = current === 0;
        nextBtn.disabled = current >= pages - 1;
    }

    function goTo(page) {
        const pages = Math.ceil(cards.length / getVisible());
        current = Math.max(0, Math.min(pages - 1, page));
        update();
    }

    prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn.addEventListener('click', () => goTo(current + 1));

    let startX = 0;
    track.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
    track.addEventListener('touchend', e => {
        const dx = e.changedTouches[0].clientX - startX;
        if (Math.abs(dx) > 40) goTo(current + (dx < 0 ? 1 : -1));
    });

    window.addEventListener('resize', () => { buildDots(); update(); });

    buildDots();
    update();

})();
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
