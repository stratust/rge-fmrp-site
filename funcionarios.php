
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
</script> <!-- Page Header -->
    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.php">Início</a>
                <span class="separator">/</span>
                <span>Equipe</span>
                <span class="separator">/</span>
                <span class="active">Funcionários</span>
            </nav>
            <h1>Equipe de Funcionários</h1>
            <p>Conheça os técnicos, secretários e colaboradores administrativos que mantêm o funcionamento do Departamento de Genética da FMRP/USP.</p>
        </div>
    </section>
    <!-- Final - Page Header -->

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">28</span>
                        <span class="stat-label">Funcionários</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Setores</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">18</span>
                        <span class="stat-label">Funcionários de Lab.</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Anos de Casa</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Bar -->


<!--  Funcioanarios da Secretaria do Depto de Genetica   -->

<!-- Secretaria -->
<section class="setor-section">
    <div class="container">
        <div class="section-label mb-2">Setor Administrativo</div>

        <div class="setor-header">
            <div class="setor-icon"><i class="bi bi-building"></i></div>
            <div>
                <h2 class="setor-title">Secretaria do Departamento</h2>
                <p class="setor-desc">Atendimento acadêmico, administrativo e apoio às atividades do departamento.</p>
            </div>
        </div>

        <div class="row g-3">

            
                <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            A                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Ana Claudia Crescencio de Souza                            </div>

                            <div class="func-role">
                                 
                                                                                              SECRETÁRIA                                          
                            </div>

                            <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:ANACLAU@FMRP.USP.BR">
                                    anaclau@fmrp.usp.br                                </a>
                            </div>

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3102                            </div>


                        </div>
                    </div>
                </div>

            
                <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            M                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Márcia Delfino Hayaxibara                            </div>

                            <div class="func-role">
                                 
                                                              SECRETÁRIA                                          
                            </div>

                            <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:MDELFINO@HCRP.FMRP.USP.BR">
                                    mdelfino@hcrp.fmrp.usp.br                                </a>
                            </div>

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-2598                            </div>


                        </div>
                    </div>
                </div>

            
                <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            S                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Silvia Sant’anna Consiglieri                            </div>

                            <div class="func-role">
                                 
                                                              SECRETÁRIA                                          
                            </div>

                            <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:SILVIA_CONSIGLIERI@FMRP.USP.BR">
                                    silvia_consiglieri@fmrp.usp.br                                </a>
                            </div>

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3293                            </div>


                        </div>
                    </div>
                </div>

            
                <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            S                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Susie Adriana Penha Nalon                            </div>

                            <div class="func-role">
                                 
                                                              SECRETÁRIA                                          
                            </div>

                            <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:SUSIENAL@FMRP.USP.BR">
                                    susienal@fmrp.usp.br                                </a>
                            </div>

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-9098                            </div>


                        </div>
                    </div>
                </div>

            
        </div>
    </div>
</section>
<!-- Final - Secretaria -->
    


<!-- Técnicos de Laboratório -->
    <section class="setor-section">
        <div class="container">
            <div class="section-label mb-2">Apoio Técnico</div>
            
            <div class="setor-header">
                <div class="setor-icon"><i class="bi bi-flask"></i></div>
                <div>
                    <h2 class="setor-title">Técnicos de Laboratório</h2>
                    <p class="setor-desc">Suporte técnico aos laboratórios de pesquisa e ensino do departamento.</p>
                </div>
            </div>
            
            <div class="row g-3">

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            C                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Cláudia Emília Vieira Wiezel                            </div>

                            <div class="func-role">
                                ESPECIALISTA EM LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:CWIEZEL@FMRP.USP.BR">
                                    cwiezel@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-8573                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            D                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Daniela Dedemo Ribeiro                            </div>

                            <div class="func-role">
                                TÉCNICA DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:DANIELADIRIBEIRO@HOTMAIL.COM">
                                    danieladiribeiro@hotmail.com                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3256                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            E                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Elisabete Maria da Silveira Barreto Beira                            </div>

                            <div class="func-role">
                                TÉCNICA DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:BETE.BARRETO@GMAIL.COM">
                                    bete.barreto@gmail.com                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3281                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            G                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Greice Andreotti de Molfetta                            </div>

                            <div class="func-role">
                                ESPECIALISTA EM LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:GAMOLF@FMRP.USP.BR">
                                    gamolf@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 2101-9362                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            J                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Jairo de Souza                            </div>

                            <div class="func-role">
                                TÉCNICO DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:JSOUZA@FMRP.USP.BR">
                                    jsouza@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3077                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            L                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Lucimar Aparecida Fernandes Laureano                            </div>

                            <div class="func-role">
                                TÉCNICA DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:LAFLAUREANO@HOTMAIL.COM">
                                    laflaureano@hotmail.com                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-2743                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            L                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Luiz Augusto da Costa Junior                            </div>

                            <div class="func-role">
                                TÉCNICO DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:LACOSTA@FMRP.USP.BR">
                                    lacosta@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3082                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            L                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Luiz Roberto Aguiar                            </div>

                            <div class="func-role">
                                TÉCNICO DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:LRAGUIAR@FMRP.USP.BR">
                                    lraguiar@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3077                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            M                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Marcos Diogo Martins                            </div>

                            <div class="func-role">
                                AUXILIAR DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:MMARTINS@FMRP.USP.BR">
                                    mmartins@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3078                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            M                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Maria do Carmo Tomitão Canas                            </div>

                            <div class="func-role">
                                TÉCNICA DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:CARMO@RGE.FMRP.USP.BR">
                                    carmo@rge.fmrp.usp.brrge.fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3050                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            M                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Mendelson Mazucato                            </div>

                            <div class="func-role">
                                AUXILIAR DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:MENDEL@FMRP.USP.BR">
                                    mendel@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3224                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            M                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Márcio Rogério Penha                            </div>

                            <div class="func-role">
                                TÉCNICO DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:MRPENHA2000@YAHOO.COM.BR">
                                    mrpenha2000@yahoo.com.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3080                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            P                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Paulo Ricardo Epifânio                            </div>

                            <div class="func-role">
                                AUXILIAR DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:PAULO@FMRP.USP.BR">
                                    paulo@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3103                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            R                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Reginaldo Aparecido Vila                            </div>

                            <div class="func-role">
                                TÉCNICO DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:RVILA@FMRP.USP.BR">
                                    rvila@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-4909                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            R                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Rogério Aparecido Pereira                            </div>

                            <div class="func-role">
                                TÉCNICO DE LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:RPEREIRA@FMRP.USP.BR">
                                    rpereira@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-4578                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            S                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Sarah Cristina Freitas de Mello                            </div>

                            <div class="func-role">
                                TÉCNICA DE LABORATÓRIO                            </div>

                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3141                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            V                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Vanderci Massaro de Oliveira                            </div>

                            <div class="func-role">
                                ESPECIALISTA EM LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:CUCA@FMRP.USP.BR">
                                    cuca@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3078                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            V                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Vera Lucia Castelo Figueiredo                            </div>

                            <div class="func-role">
                                ESPECIALISTA EM LABORATÓRIO                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:VERA@FMRP.USP.BR">
                                    vera@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-4397                            </div>


                        </div>
                    </div>
                </div>

            
            </div>
        </div>
    </section>
<!-- Final - Técnicos de Laboratório -->    
    
    

<!-- Informatica -->
    <section class="setor-section">
        <div class="container">
            <div class="section-label mb-2">Apoio Especializado</div>
            <div class="setor-header">
                <div class="setor-icon"><i class="bi bi-pc-display"></i></div>
                <div>
                    <h2 class="setor-title">Informática</h2>
                    <p class="setor-desc">Suporte tecnológico e gestão do acervo bibliográfico do departamento.</p>
                </div>
            </div>
            
            <div class="row g-3">
            
                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            M                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Marco Pinto Corrado                            </div>

                            <div class="func-role">
                                                                
                                INFORMÁTICA                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:MCORRADO@FMRP.USP.BR">
                                    mcorrado@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-0553                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            P                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Pablo Rodrigo Sanches                            </div>

                            <div class="func-role">
                                
                                ANALISTA DE SISTEMAS                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:PSANCHES@USP.BR">
                                    psanches@usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3224                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            P                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Pedro Roberto Rodrigues Prado                            </div>

                            <div class="func-role">
                                
                                ANALISTA DE SISTEMAS                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:PEDRO@FMRP.USP.BR">
                                    pedro@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3708                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            S                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Sebastião Paulo Framartino Bezerra                            </div>

                            <div class="func-role">
                                                                
                                INFORMÁTICA                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:SPFBEZER@FMRP.USP.BR">
                                    spfbezer@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3135                            </div>


                        </div>
                    </div>
                </div>

                            
                
            </div>
        </div>
    </section>
    <!-- Final  - Informatica  -->
    



<!-- Manutenção e Infraestrutura -->
    <section class="setor-section">
        <div class="container">
            <div class="section-label mb-2">Infraestrutura</div>
            <div class="setor-header">
                <div class="setor-icon"><i class="bi bi-tools"></i></div>
                <div>
                    <h2 class="setor-title">Manutenção e Infraestrutura</h2>
                    <p class="setor-desc">Cuidado com as instalações, equipamentos e ambientes do departamento.</p>
                </div>
            </div>

            <div class="row g-3">

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            R                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Roberto da Silva Mazzuco                            </div>

                            <div class="func-role">
                                AUXILIAR DE SERVIÇOS GERAIS                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:RMAZZUCO@FMRP.USP.BR">
                                    rmazzuco@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3077                            </div>


                        </div>
                    </div>
                </div>

                            <div class="col-md-6 col-lg-4">
                    <div class="func-card rge-card">
                        <div class="func-avatar">
                            R                        </div>

                        <div class="func-info">

                            <div class="func-name">
                                Rosana Márcia Silva Cruz                            </div>

                            <div class="func-role">
                                AUXILIAR DE SERVIÇOS GERAIS                            </div>

                                                        <div class="func-detail">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:RCRUZ@FMRP.USP.BR">
                                    rcruz@fmrp.usp.br                                </a>
                            </div>
                                                        

                            <div class="func-detail">
                                <i class="bi bi-telephone"></i>
                                (16) 3315-3050                            </div>


                        </div>
                    </div>
                </div>

            
            </div>
        </div>
    </section>
<!-- Manutenção e Infraestrutura -->



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
