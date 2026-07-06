
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
</script><!-- Page Header -->
    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.php">Início</a>
                <span class="separator">/</span>
                <span>Departamento</span>
                <span class="separator">/</span>
                <span class="active">Chefia</span>
            </nav>
            <h1>Chefia do Departamento</h1>
            <p>A gestão do Departamento de Genética da FMRP/USP é conduzida por uma equipe comprometida com a excelência acadêmica, a inovação científica e o fortalecimento da comunidade universitária.</p>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">61</span>
                        <span class="stat-label">Anos de História</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">21</span>
                        <span class="stat-label">Chefias</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">2024</span>
                        <span class="stat-label">Gestão Atual</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">2</span>
                        <span class="stat-label">Anos de Mandato</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Final - Stats Bar -->    
    
    

    <!-- Chefia Atual -->
    <section class="chefia-section">
        <div class="container">
            <div class="section-label mb-2">Gestão 2024-2026</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Chefia Atual</h2>

            <div class="row g-4 justify-content-center">
                <!-- Chefe -->
                 <!-- Adicionado h-100 na coluna para ela esticar por igual se houver diferença de texto -->
                <div class="col-md-6 col-lg-5 d-flex">
                   <!-- Adicionado d-flex flex-column h-100 para o card ocupar toda a altura e aceitar o comportamento flex -->
                    <div class="chefia-card d-flex flex-column h-100 rge-card" style="width: 100%;">
                        <div class="chefia-card-header">
                            <span class="chefia-badge">Chefe</span>
                            <div class="chefia-avatar">
                                 <!-- A FOTO ENTRA AQUI SUBSTITUINDO O �?CONE - CHEFE -->
                                 <img src="assets/img/fotos_docentes/foto14.png" alt="Foto do Chefe">
                            </div>
                        </div>
                        <!-- Modificado: Adicionado d-flex flex-column e flex-grow-1 para preencher o espaço interno -->
                        <!-- ALTERAÇÃO AQUI: Adicionado padding-bottom: 0px !important; -->
                       <div class="chefia-card-body d-flex flex-column flex-grow-1"  style="padding-bottom: 0px !important;"  >
                            <h3 class="chefia-name">Wilson Araújo da Silva Junior</h3>
                            <div class="chefia-role">Chefe do Departamento</div>
                            <p class="chefia-area">
                                Professor Titular do Departamento de Genética da FMRP/USP. Pesquisador na área de Genética Molecular Humana, com ênfase em diversidade genética de populações, marcadores do DNA nuclear e mitocondrial, e microRNAs em neoplasias hematológicas.
                            </p>
                            <div class="chefia-contact">
                                <div class="chefia-contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <a href="mailto:wilsonjr@usp.br">wilsonjr@usp.br</a>
                                </div>
                                <div class="chefia-contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span>(16) 3315-8714</span>
                                </div>
                                
                                <!--
                                <div class="chefia-contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Bloco H – FMRP/USP</span>
                                </div>
                                -->
                                
                            </div>
                            
                            <!-- O margin-top: auto agora funcionará perfeitamente por conta do ecossistema flex montado acima -->
                            <div class="chefia-links" style="margin-top: auto; padding-top: 20px;">
                                <!-- Curriculo Lates -->
                                                                       <a href="https://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4782663H3" target="_blank" 
                                          rel="noopener noreferrer"  class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;"   title="Currículo Lattes"  > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  ></a>
                                                                <!-- Pagina pessoal -->
                                                            </div>
                        </div>
                    </div>
                </div>
                <!-- Final - Chefe -->

                <!-- Vice-Chefe -->
                 <!-- Adicionado h-100 na coluna para ela esticar por igual se houver diferença de texto -->
                  <div class="col-md-6 col-lg-5 d-flex">
                     <!-- Adicionado d-flex flex-column h-100 para o card ocupar toda a altura e aceitar o comportamento flex -->
                      <div class="chefia-card d-flex flex-column h-100 rge-card" style="width: 100%;"  >
                        <div class="chefia-card-header chefia-card-header-vice"  >
                            <span class="chefia-badge">Vice-Chefe</span>
                            <div class="chefia-avatar">
                                 <!-- A FOTO ENTRA AQUI SUBSTITUINDO O �?CONE - VICE -->
                                 <img src="assets/img/fotos_docentes/foto3.png" alt="Foto do Vice-Chefe">
                            </div>
                        </div>
                        <!-- Modificado: Adicionado d-flex flex-column e flex-grow-1 para preencher o espaço interno -->
                        <!-- ALTERAÇÃO AQUI: Adicionado padding-bottom: 0px !important; -->
                       <div class="chefia-card-body d-flex flex-column flex-grow-1"  style="padding-bottom: 0px !important;"  >
                            <h3 class="chefia-name">Ester Silveira Ramos</h3>
                            <div class="chefia-role">Vice-Chefe do Departamento</div>
                            <p class="chefia-area">
                                Professora Associada do Departamento de Genética da FMRP/USP. Pesquisadora na área de Genética Animal, com foco em melhoramento genético aplicado a bovinos de corte, reprodução assistida, precocidade sexual, crescimento e epigenética.
                            </p>
                            <div class="chefia-contact" >
                                <div class="chefia-contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <a href="mailto:esramos@fmrp.usp.br">esramos@fmrp.usp.br</a>
                                </div>
                                <div class="chefia-contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span>(16) 3315-4914</span>
                                </div>
                                
                                <!--
                                <div class="chefia-contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Bloco H – FMRP/USP</span>
                                </div>
                                -->
                                
                            </div>
                            
                            <!-- O margin-top: auto agora funcionará perfeitamente por conta do ecossistema flex montado acima -->
                            <div class="chefia-links" style="margin-top: auto; padding-top: 20px;">
                                <!-- Curriculo Lates -->
                                                                       <a href="http://lattes.cnpq.br/0408321083175019" target="_blank" 
                                          rel="noopener noreferrer"  class="docente-link docente-link-primary" 
                                         style="background-color: #fff;
                                                          border: 1px solid #ddd;
                                                          border-radius: 20px;
                                                          padding: 4px 12px;
                                                          color: #333;
                                                          font-size: 0.75rem;
                                                          font-weight: 600;
                                                          display: inline-flex;
                                                          align-items: center;
                                                          gap: 8px;"   title="Currículo Lattes"  > 
                                        <img src="assets/img/logo_lattes.png" alt="Currículo Lattes"  
                                            style="background-color:#FFFFFF;  object-fit:contain; display:block;"  ></a>
                                                                <!-- Pagina pessoal -->
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- Final - div class=container  -->
    </section>
    <!-- Final - section Chefia Atual -->

    <!-- Comissões e Coordenações -->
    <section class="comissoes-section" id="comissao">
        <div class="container">
            <div class="section-label mb-2">Estrutura de Gestão</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Comissões e Coordenações</h2>

            <div class="row g-5">
                <div class="col-md-6 col-lg">
				<a href="comissoes-conselho.php#conselho" class="feature-link">
                    <div class="comissao-card rge-card">
                        <div class="comissao-icon"><i class="bi bi-journal-check"></i></div>
                        <h5 class="comissao-title">Conselho</h5>
                        <p class="comissao-desc">Conselho do departamento.</p>
                        <div class="comissao-members">
                            <strong>Chefe:</strong> A definir<br>
                            <strong>Vice-chefe:</strong> A definir
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-md-6 col-lg">
				<a href="comissoes-conselho.php#comgrad" class="feature-link">
                    <div class="comissao-card rge-card">
                        <div class="comissao-icon"><i class="bi bi-journal-check"></i></div>
                        <h5 class="comissao-title">Comissão de Graduação</h5>
                        <p class="comissao-desc">Responsável pela organização e supervisão das atividades de ensino de graduação do departamento.</p>
                        <div class="comissao-members">
                            <strong>Coordenador:</strong> A definir<br>
                            <strong>Membros:</strong> 3 docentes
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-md-6 col-lg">
								<a href="comissoes-conselho.php#compos" class="feature-link">
                    <div class="comissao-card rge-card">
                        <div class="comissao-icon"><i class="bi bi-mortarboard"></i></div>
                        <h5 class="comissao-title">Comissão de Pós-Graduação</h5>
                        <p class="comissao-desc">Coordenação do Programa de Pós-Graduação em Genética, incluindo seleção e acompanhamento de alunos.</p>
                        <div class="comissao-members">
                            <strong>Coordenador:</strong> A definir<br>
                            <strong>Membros:</strong> 5 docentes
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-md-6 col-lg">
								<a href="comissoes-conselho.php#compesq" class="feature-link">
                    <div class="comissao-card rge-card">
                        <div class="comissao-icon"><i class="bi bi-clipboard-data"></i></div>
                        <h5 class="comissao-title">Comissão de Pesquisa</h5>
                        <p class="comissao-desc">Fomento e supervisão das atividades de pesquisa, incluindo projetos, bolsas e parcerias institucionais.</p>
                        <div class="comissao-members">
                            <strong>Coordenador:</strong> A definir<br>
                            <strong>Membros:</strong> 4 docentes
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-md-6 col-lg">
								<a href="comissoes-conselho.php#cominfo" class="feature-link">
                    <div class="comissao-card rge-card">
                        <div class="comissao-icon"><i class="bi bi-shield-check"></i></div>
                        <h5 class="comissao-title">Comissão de Informática</h5>
                        <p class="comissao-desc">Coordena as atividades de informática do departamento.</p>
                        <div class="comissao-members">
                            <strong>Coordenador:</strong> A definir<br>
                            <strong>Membros:</strong> 3 docentes
                        </div>
                    </div>
                </div>
				</a>
            </div>
        </div>
    </section>
    <!-- Final - Comissões e Coordenações -->
    
    

<!-- Histórico de Chefias -->
<section class="historico-section">
   <div class="container">
        <div class="section-label mb-2">Trajetória Institucional</div>
        <h2 class="mb-5 text-center" style="font-size: 2rem; font-weight: 700; color: #222;">Histórico de Chefias</h2>

<div class="timeline">
                    <div class="timeline-item current">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2024 – 2026                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> WILSON ARAÚJO DA SILVA JUNIOR                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> ESTER SILVEIRA RAMOS                    </div>
                
                                    <span class="timeline-badge">Gestão Atual</span>
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2020 – 2024                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> ESTER SILVEIRA RAMOS                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> NILCE MARIA MARTINEZ ROSSI                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2016 – 2020                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> AGUINALDO LUIZ SIMÕES                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> WILSON ARAÚJO DA SILVA JUNIOR                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2012 – 2016                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> WILSON ARAÚJO DA SILVA JUNIOR                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> LUCIA REGINA MARTELLI                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2008 – 2012                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> AGUINALDO LUIZ SIMÕES                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> WILSON ARAÚJO DA SILVA JUNIOR                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2007 – 2008                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> NILCE MARIA MARTINEZ ROSSI                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> AGUINALDO LUIZ SIMÕES                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2006 – 2007                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> NILCE MARIA MARTINEZ ROSSI                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> EUCLEIA PRIMO BETIOLI CONTEL                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2005 – 2006                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> MOACYR ANTONIO MESTRINER                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> EUCLEIA PRIMO BETIOLI CONTEL                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2003 – 2005                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> NILCE MARIA MARTINEZ ROSSI                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> EUCLEIA PRIMO BETIOLI CONTEL                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    2001 – 2003                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> NILCE MARIA MARTINEZ ROSSI                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> JOÃO MONTEIRO DE PINA NETO                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1997 – 2001                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> EUCLEIA PRIMO BETIOLI CONTEL                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> NILCE MARIA MARTINEZ ROSSI                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1995 – 1997                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> FRANCISCO ALBERTO DE MOURA DUARTE                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> MOACYR ANTONIO MESTRINER                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1991 – 1995                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> MOACYR ANTONIO MESTRINER                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> EUCLEIA PRIMO BETIOLI CONTEL                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1987 – 1991                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> FRANCISCO ALBERTO DE MOURA DUARTE                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> MOACYR ANTONIO MESTRINER                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1984 – 1987                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> IRIS FERRARI                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> MOACYR ANTONIO MESTRINER                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1981 – 1984                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> FRANCISCO ALBERTO DE MOURA DUARTE                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> IRIS FERRARI                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1979 – 1981                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> WARWICK ESTEVAM KERR                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> IRIS FERRARI                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1979 – 1979                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> HUMBERTO DE QUEIROZ MENEZES                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> IRIS FERRARI                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1975 – 1978                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> IRIS FERRARI                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> GERALDO GARCIA DUARTE                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1974 – 1975                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> WARWICK ESTEVAM KERR                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> MARIA APARECIDA DE PAIVA FRANCO                    </div>
                
                
            </div>
        </div>

                    <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    1970 – 1974                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <strong class="strchefe" >Chefe:</strong> WARWICK ESTEVAM KERR                </div>

                                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> GERALDO GARCIA DUARTE                    </div>
                
                
            </div>
        </div>

        
  
   
       <div class="timeline-item ultima-etapa"  >
            <div class="timeline-dot"  ></div>

            <div class="timeline-content timeline-content-esquerda">
                <div class="timeline-year">
                </div>
                <div class="timeline-name">
                     USP/FMRP<br>
                     Departamento de Genética 
                </div>
                Fundado em 1965
            </div>
        </div>

  
  
</div>

</div>
</section>
<!-- Final - Histórico de Chefias com BD/TB -->

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
