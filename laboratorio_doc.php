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

    

    <link rel="stylesheet" href="assets/css/style.css?v=4">
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
    

   <!-- <link rel="stylesheet" href="assets/css/styleidiomas.css">
     Importante para Ancora topo  -->
    <link rel="stylesheet" href="assets/css/btn-topo.css">

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
                            <li><a class="dropdown-item" href="#">Pesquisadores</a></li>
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
        <li><a class="dropdown-item" href="laboratorio_doc.php?cod=14">Bioinformática</a></li>

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
                <a href="laboratorios.php">Laboratórios de Pesquisa</a>
            </nav>
            <h1>BIOINFORMÁTICA</h1>
			<p class="subtitle">Líder: Prof. Dr. Silvana Giuliatti</p>
            <p>Desenvolvimento de aplicativos para análise de dados obtidos de projetos genoma.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#pesquisa" class="btn-green">LINHAS DE PESQUISA <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="#equipe" class="btn-outline-light-custom">CONHEÇA A EQUIPE <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="section-label">Sobre o Laboratório</div>
                    <h2>Excelência em pesquisa e inovação científica</h2>
                    <p>[Descrição detalhada da missão, visão e objetivos do laboratório. Incluir contexto histórico, ano de fundação, principais conquistas e contribuições científicas para a área.]</p>
                    <p>[Descrição das metodologias utilizadas, modelos experimentais e abordagens inovadoras desenvolvidas pelo grupo.]</p>
                    <p><strong>Palavras-chave:</strong></p>
                    <div>
                        <span class="keyword-badge">[termo 1]</span>
                        <span class="keyword-badge">[termo 2]</span>
                        <span class="keyword-badge">[termo 3]</span>
                        <span class="keyword-badge">[termo 4]</span>
                        <span class="keyword-badge">[termo 5]</span>
                        <span class="keyword-badge">[termo 6]</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=800&h=500&fit=crop" alt="Laboratório de Pesquisa">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Lines Section -->
    <section class="research-section" id="pesquisa">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Pesquisa</div>
                    <h2>Linhas de pesquisa do laboratório</h2>
                    <p style="color: #555; line-height: 1.8;">[Descrição geral das áreas de investigação do laboratório, metodologias empregadas e impacto esperado dos estudos.]</p>
                </div>
            </div>
            <div class="row g-4">
                                                    <div class="col-md-6 col-lg-4">
                    <div class="research-card">
                        <div class="research-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="#1a5c3a" stroke-width="2"/>
                                <path d="M12 6v6l4 2" stroke="#1a5c3a" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h5>DESENVOLVIMENTO DE FERRAMENTAS E ANÁLISES EM BIOINFORMÁTICA</h5>
						                        <p>Tem trabalhado ultimamente com proteínas de animais venenosos, visando a conexão das mesmas com  substratos de plantas medicinais (docking de proteínas). </p>
 						
                    </div>
                </div>
				  				

<!--                <div class="col-md-6 col-lg-4">
                    <div class="research-card">
                        <div class="research-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="18" height="18" rx="2" stroke="#1a5c3a" stroke-width="2"/>
                                <path d="M3 9h18M9 21V9" stroke="#1a5c3a" stroke-width="2"/>
                            </svg>
                        </div>
                        <h5>[Título da Linha 2]</h5>
                        <p>[Descrição da segunda linha de pesquisa, abordando metodologias utilizadas, colaborações institucionais e impacto esperado dos estudos em desenvolvimento.]</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="research-card">
                        <div class="research-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="3" stroke="#1a5c3a" stroke-width="2"/>
                                <path d="M12 2v4M12 18v4M2 12h4M18 12h4" stroke="#1a5c3a" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h5>[Título da Linha 3]</h5>
                        <p>[Descrição da terceira linha de pesquisa, enfatizando aplicações translacionais, parcerias com hospitais ou indústria e potencial de inovação tecnológica.]</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section" id="equipe">
        <div class="container">
            <div class="section-label">Equipe</div>
            <h2>Pesquisadores e colaboradores</h2>
            <p class="mb-5">[Descrição da composição da equipe, destacando a diversidade de formações e a colaboração entre diferentes níveis de pesquisa.]</p>

            <!-- Coordenação -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="team-category">Coordenação</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-4">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Prof. Dr. [Nome Completo]</h5>
                            <div class="role">Pesquisador Responsável</div>
                            <p>[Doutor em area] pela [instituicao]. Pesquisa em [temas principais]. Coordenador de [projetos/grupos]. [Numero] publicacoes, [h-index].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-mortarboard"></i></a>
                                <a href="#"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Prof. Dr. [Nome Completo]</h5>
                            <div class="role">Co-Pesquisador / Vice-Coordenador</div>
                            <p>[Doutor em area] pela [instituicao]. Atua em [temas especificos] com foco em [metodologia]. Responsavel por [atividade especifica].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-mortarboard"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pos-Doutorandos e Pesquisadores -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="team-category">Pos-Doutorandos e Pesquisadores</span>
                </div>
            </div>


			
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Dr. [Nome Completo]</h5>
                            <div class="role">Pos-Doutorando</div>
                            <p>[Doutor em area] pela [instituicao]. Pesquisa em [tema especifico]. Bolsista [agencia].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Dra. [Nome Completo]</h5>
                            <div class="role">Pesquisadora Visitante</div>
                            <p>[Doutor em area] pela [instituicao]. Colaboracao em [projeto/tema]. Periodo: [datas].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doutorandos -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="team-category">Doutorandos</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Ana Lu&atilde;sa Rodrigues de &Atilde;vila</h5>
                            <div class="role">Doutorando</div>
                            <p>Pesquisa em [tema da tese]. Bolsista [agencia]. Formacao em [area].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Felipe James de Almeida Vasquez</h5>
                            <div class="role">Doutorando</div>
                            <p>Pesquisa em [tema da tese]. Bolsista [agencia]. Formacao em [area].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Laura Maria de Ara&atilde;jo Pereira</h5>
                            <div class="role">Doutorando</div>
                            <p>Pesquisa em [tema da tese]. Bolsista [agencia]. Formacao em [area].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>Levy Bueno Alves</h5>
                            <div class="role">Doutorando</div>
                            <p>Pesquisa em [tema da tese]. Bolsista [agencia]. Formacao em [area].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

				</div>

            <!-- Mestrandos -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="team-category">Mestrandos</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                </div>

            <!-- Iniciacao Cientifica -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="team-category">Iniciacao Cientifica</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Aluno de IC</div>
                            <p>Desenvolve projeto em [tema]. Bolsista [PIBIC/PIBIT/Outro]. Curso de [graduacao].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Aluno de IC</div>
                            <p>Desenvolve projeto em [tema]. Bolsista [PIBIC/PIBIT/Outro]. Curso de [graduacao].</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tecnicos -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="team-category">Equipe Tecnica</span>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Tecnico de Laboratorio</div>
                            <p>Responsavel por [atividades tecnicas]. Formacao em [area]. [Anos] de experiencia.</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Tecnico de Bioinformatica</div>
                            <p>Suporte em analise de dados, pipelines computacionais e manutencao de servidores.</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                                <a href="#"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-card">
                        <div class="team-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-body">
                            <h5>[Nome Completo]</h5>
                            <div class="role">Secretaria / Administrativo</div>
                            <p>Gestao administrativa do laboratorio, compras, relatorios e comunicacao institucional.</p>
                            <div class="team-social">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Publications Section -->
    <section class="pub-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Producao Cientifica</div>
                    <h2>Publicacoes recentes</h2>
                    <p style="color: #555; line-height: 1.8;">[Breve descricao da producao cientifica do laboratorio, destacando revistas de alto impacto e areas de maior contribuicao.]</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <div class="pub-card">
                        <h6>[Titulo completo do artigo cientifico publicado em revista internacional de alto impacto]</h6>
                        <div class="pub-meta">
                            <span><i class="bi bi-journal-text"></i>[Nome da Revista]</span>
                            <span><i class="bi bi-calendar"></i>2025</span>
                            <span><i class="bi bi-people"></i>[Autores, et al.]</span>
                            <span><i class="bi bi-bar-chart"></i>IF: [X.XXX]</span>
                        </div>
                        <p>[Resumo breve dos principais achados e contribuicoes do trabalho para a area de genetica e biologia molecular.]</p>
                        <a href="#" class="pub-link">Ver publicacao <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="pub-card">
                        <h6>[Titulo de outro artigo relevante do laboratorio]</h6>
                        <div class="pub-meta">
                            <span><i class="bi bi-journal-text"></i>[Nome da Revista]</span>
                            <span><i class="bi bi-calendar"></i>2024</span>
                            <span><i class="bi bi-people"></i>[Autores, et al.]</span>
                            <span><i class="bi bi-bar-chart"></i>IF: [X.XXX]</span>
                        </div>
                        <p>[Descricao dos resultados e impacto cientifico desta publicacao na compreensao do tema pesquisado.]</p>
                        <a href="#" class="pub-link">Ver publicacao <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="pub-card">
                        <h6>[Titulo de artigo em revista de acesso aberto ou preprint]</h6>
                        <div class="pub-meta">
                            <span><i class="bi bi-journal-text"></i>[Nome da Revista / BioRxiv]</span>
                            <span><i class="bi bi-calendar"></i>2024</span>
                            <span><i class="bi bi-people"></i>[Autores, et al.]</span>
                        </div>
                        <p>[Descricao do trabalho e seu estagio na pipeline de publicacao.]</p>
                        <a href="#" class="pub-link">Ver publicacao <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="pub-card">
                        <h6>[Titulo de capitulo de livro ou review convidado]</h6>
                        <div class="pub-meta">
                            <span><i class="bi bi-book"></i>[Titulo do Livro / Editora]</span>
                            <span><i class="bi bi-calendar"></i>2024</span>
                            <span><i class="bi bi-people"></i>[Autores]</span>
                        </div>
                        <p>[Capitulo abordando tema com enfoque em aspectos teoricos/aplicados e estado da arte.]</p>
                        <a href="#" class="pub-link">Ver publicacao <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn-green">VER TODAS AS PUBLICACOES <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>

    <!-- Funding Section -->
    <section class="funding-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Financiamentos</div>
                    <h2>Apoio e recursos obtidos</h2>
                    <p style="color: #555; line-height: 1.8;">[Descricao das principais fontes de financiamento que sustentam as pesquisas do laboratorio, incluindo agencias nacionais e internacionais.]</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="funding-card">
                        <div class="funding-icon"><i class="bi bi-cash-stack"></i></div>
                        <h5>[Titulo do Projeto / Edital]</h5>
                        <p>Agencia: [FAPESP / CNPq / CAPES / Outra]</p>
                        <p class="period"><i class="bi bi-calendar-range"></i> [Ano] – [Ano] | Valor: R$ [XXX.XXX,XX]</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="funding-card">
                        <div class="funding-icon"><i class="bi bi-cash-stack"></i></div>
                        <h5>[Titulo do Projeto / Edital]</h5>
                        <p>Agencia: [FAPESP / CNPq / CAPES / Outra]</p>
                        <p class="period"><i class="bi bi-calendar-range"></i> [Ano] – [Ano] | Valor: R$ [XXX.XXX,XX]</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="funding-card">
                        <div class="funding-icon"><i class="bi bi-cash-stack"></i></div>
                        <h5>[Titulo do Projeto / Edital]</h5>
                        <p>Agencia: [FAPESP / CNPq / CAPES / Outra]</p>
                        <p class="period"><i class="bi bi-calendar-range"></i> [Ano] – [Ano] | Valor: R$ [XXX.XXX,XX]</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="funding-card">
                        <div class="funding-icon"><i class="bi bi-cash-stack"></i></div>
                        <h5>[Titulo do Projeto / Edital]</h5>
                        <p>Agencia: [NIH / ERC / NSF / Outra Internacional]</p>
                        <p class="period"><i class="bi bi-calendar-range"></i> [Ano] – [Ano] | Valor: US$ [XXX.XXX,XX]</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="funding-card">
                        <div class="funding-icon"><i class="bi bi-cash-stack"></i></div>
                        <h5>[Titulo do Projeto / Edital]</h5>
                        <p>Agencia: [Industria / Parceria Publico-Privada]</p>
                        <p class="period"><i class="bi bi-calendar-range"></i> [Ano] – [Ano] | Valor: R$ [XXX.XXX,XX]</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnerships Section -->
    <section class="partnerships-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Parcerias</div>
                    <h2>Colaboracoes nacionais e internacionais</h2>
                    <p style="color: #555; line-height: 1.8;">[Descricao das principais parcerias institucionais que fortalecem a pesquisa do laboratorio, promovendo intercambio de conhecimento e recursos.]</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="partnership-card">
                        <div class="partnership-flag">BR</div>
                        <div class="partnership-content">
                            <h6>[Nome da Instituicao]</h6>
                            <p>[Cidade, Estado]</p>
                            <p class="type">Colaboracao Nacional</p>
                            <p style="font-size: 0.8rem; color: #888; margin-top: 0.5rem;">[Breve descricao da parceria e projetos conjuntos]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="partnership-card">
                        <div class="partnership-flag">BR</div>
                        <div class="partnership-content">
                            <h6>[Nome da Instituicao]</h6>
                            <p>[Cidade, Estado]</p>
                            <p class="type">Colaboracao Nacional</p>
                            <p style="font-size: 0.8rem; color: #888; margin-top: 0.5rem;">[Breve descricao da parceria e projetos conjuntos]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="partnership-card">
                        <div class="partnership-flag">US</div>
                        <div class="partnership-content">
                            <h6>[Nome da Instituicao]</h6>
                            <p>[Cidade, Pais]</p>
                            <p class="type">Colaboracao Internacional</p>
                            <p style="font-size: 0.8rem; color: #888; margin-top: 0.5rem;">[Breve descricao da parceria e projetos conjuntos]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="partnership-card">
                        <div class="partnership-flag">UK</div>
                        <div class="partnership-content">
                            <h6>[Nome da Instituicao]</h6>
                            <p>[Cidade, Pais]</p>
                            <p class="type">Colaboracao Internacional</p>
                            <p style="font-size: 0.8rem; color: #888; margin-top: 0.5rem;">[Breve descricao da parceria e projetos conjuntos]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="partnership-card">
                        <div class="partnership-flag">DE</div>
                        <div class="partnership-content">
                            <h6>[Nome da Instituicao]</h6>
                            <p>[Cidade, Pais]</p>
                            <p class="type">Colaboracao Internacional</p>
                            <p style="font-size: 0.8rem; color: #888; margin-top: 0.5rem;">[Breve descricao da parceria e projetos conjuntos]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="partnership-card">
                        <div class="partnership-flag">FR</div>
                        <div class="partnership-content">
                            <h6>[Nome da Instituicao]</h6>
                            <p>[Cidade, Pais]</p>
                            <p class="type">Colaboracao Internacional</p>
                            <p style="font-size: 0.8rem; color: #888; margin-top: 0.5rem;">[Breve descricao da parceria e projetos conjuntos]</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Infrastructure Section -->
    <section class="infra-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Infraestrutura</div>
                    <h2>Equipamentos e instalacoes</h2>
                    <p style="color: #555; line-height: 1.8;">[Descricao da infraestrutura do laboratorio, destacando equipamentos de ponta e instalacoes especializadas.]</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="infra-card">
                        <div class="infra-img">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <div class="infra-body">
                            <h5>[Equipamento Principal 1]</h5>
                            <p>[Descricao tecnica do equipamento e principais aplicacoes no desenvolvimento das pesquisas.]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="infra-card">
                        <div class="infra-img">
                            <i class="bi bi-microscope"></i>
                        </div>
                        <div class="infra-body">
                            <h5>[Equipamento Principal 2]</h5>
                            <p>[Descricao tecnica do equipamento e principais aplicacoes no desenvolvimento das pesquisas.]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="infra-card">
                        <div class="infra-img">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <div class="infra-body">
                            <h5>[Equipamento Principal 3]</h5>
                            <p>[Descricao tecnica do equipamento e principais aplicacoes no desenvolvimento das pesquisas.]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="infra-card">
                        <div class="infra-img">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="infra-body">
                            <h5>[Equipamento Principal 4]</h5>
                            <p>[Descricao tecnica do equipamento e principais aplicacoes no desenvolvimento das pesquisas.]</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Galeria</div>
                    <h2>Momentos do laboratorio</h2>
                    <p style="color: #555; line-height: 1.8;">[Registros fotograficos de atividades do laboratorio, eventos, defesas e momentos da equipe.]</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-img">
                        <i class="bi bi-image"></i>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-img">
                        <i class="bi bi-image"></i>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-img">
                        <i class="bi bi-image"></i>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="gallery-img">
                        <i class="bi bi-image"></i>
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
                    <h2>Entre em contato com o laboratorio</h2>
                    <p>Para colaboracoes cientificas, oportunidades de pos-graduacao, iniciacao cientifica ou mais informacoes sobre nossas pesquisas.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <span>[laboratorio]@fmrp.usp.br</span>
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
                                <span>Bloco [X], Sala [XX] – FMRP/USP</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-clock"></i>
                                <span>Segunda a sexta, 8h as 18h</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="mailto:[laboratorio]@fmrp.usp.br" class="btn-outline-light-custom d-inline-block">ENVIAR E-MAIL <i class="bi bi-arrow-right ms-1"></i></a>
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
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
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
                    <a href="#">Política de Privacidade</a>
                    <a href="#">Acessibilidade</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<a href="#topo" class="btn-topo notranslate" translate="no" aria-label="Voltar ao topo">↑</a>
</body>
</html>
