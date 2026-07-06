
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
                <span class="active">Pós-Graduação</span>
            </nav>
            <h1>Ensino de Pós-Graduação</h1>
            <p>O Programa de Pós-Graduação em Genética da FMRP/USP oferece formação de excelência em nível de Mestrado e Doutorado, preparando pesquisadores, docentes e profissionais especializados desde 1971.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://rge.fmrp.usp.br/pg" class="btn btn-green"  target="_blank">Saiba Mais<i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">1971</span>
                        <span class="stat-label">Fundação do Programa</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">700+</span>
                        <span class="stat-label">Titulações Concedidas</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">1A</span>
                        <span class="stat-label">Conceito Capes</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Modalidades</span>
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
                    <div class="section-label">Sobre o Programa</div>
                    <h2>Excelência na formação de pesquisadores desde 1971</h2>
                    <p class="lead">O Programa de Pós-Graduação em Genética da Faculdade de Medicina de Ribeirão Preto da USP tem como objetivos aprimorar a formação de docentes do ensino superior, formar pesquisadores e preparar profissionais especializados em sub-áreas da Genética.</p>
                    <p>A área de Genética, por sua natureza, é ampla, estendendo-se desde a Genética de Microrganismos até a Genética Vegetal, Animal e Humana. As abordagens nas investigações utilizam desde os métodos da genética clássica até os mais modernos da biologia molecular.</p>
                    <p>Os laboratórios onde os alunos desenvolvem suas pesquisas são bem montados, recebendo sistematicamente alunos e docentes de outros cursos de pós-graduação que desejam implantar, em suas universidades, as técnicas praticadas na Genética da FMRP.</p>
                </div>
                <div class="col-lg-6">
                    <div class="intro-img">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800&h=500&fit=crop" alt="Pós-Graduação em Genética">
                    </div>
				</div>
				<a href="https://rge.fmrp.usp.br/pg" class="feature-link"  target="_blank">
                        Saiba Mais →
				</a>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section">
        <div class="container">
            <div class="section-label mb-2">Modalidades</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Nossos Cursos</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="program-card rge-card">
                        <div class="program-icon"><i class="bi bi-mortarboard"></i></div>
                        <h5 class="program-name">Mestrado em Genética</h5>
                        <p class="program-desc">Formação voltada para a preparação de profissionais do ensino superior e pesquisadores. O candidato ao título de Mestre deve integralizar créditos em disciplinas de caráter mais abrangente, desenvolvendo uma dissertação de qualidade.</p>
                        <div class="program-meta">
                            <div class="program-meta-item"><i class="bi bi-clock"></i> Duração: 24 meses</div>
                            <div class="program-meta-item"><i class="bi bi-file-text"></i> Dissertação obrigatória</div>
                            <div class="program-meta-item"><i class="bi bi-book"></i> Créditos em disciplinas obrigatórias e optativas</div>
                        </div>
				<a href="https://rge.fmrp.usp.br/pg" class="feature-link"  target="_blank">
                        Saiba Mais →
				</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="program-card rge-card">
                        <div class="program-icon"><i class="bi bi-award"></i></div>
                        <h5 class="program-name">Doutorado em Genética</h5>
                        <p class="program-desc">Formação avançada orientada para a produção de conhecimento original. O candidato ao título de Doutor cumpre disciplinas mais especializadas, tanto dentro da área de concentração como em outras áreas relacionadas ao seu projeto de pesquisa.</p>
                        <div class="program-meta">
                            <div class="program-meta-item"><i class="bi bi-clock"></i> Duração: 48 meses</div>
                            <div class="program-meta-item"><i class="bi bi-file-text"></i> Tese obrigatória</div>
                            <div class="program-meta-item"><i class="bi bi-book"></i> Disciplinas especializadas</div>
                        </div>
				<a href="https://rge.fmrp.usp.br/pg" class="feature-link"  target="_blank">
                        Saiba Mais →
				</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="program-card rge-card">
                        <div class="program-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5 class="program-name">Doutorado Direto em Genética</h5>
                        <p class="program-desc">Modalidade acelerada para candidatos com excelente desempenho acadêmico e potencial de pesquisa comprovado. Permite a obtenção do título de Doutor sem a necessidade prévia do título de Mestre, com projeto de pesquisa contínuo.</p>
                        <div class="program-meta">
                            <div class="program-meta-item"><i class="bi bi-clock"></i> Duração: 48 meses</div>
                            <div class="program-meta-item"><i class="bi bi-file-text"></i> Tese obrigatória</div>
                            <div class="program-meta-item"><i class="bi bi-star"></i> Para candidatos de excelência</div>
                        </div>
				<a href="https://rge.fmrp.usp.br/pg" class="feature-link"  target="_blank">
                        Saiba Mais →
				</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Disciplines Section -->
    <section class="disciplines-section">
        <div class="container">
            <div class="section-label mb-2">Grade Curricular</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Disciplinas do Programa</h2>

            <div class="highlight-box mb-5">
                <h3><i class="bi bi-info-circle me-2"></i>Organização Curricular</h3>
                <p>O candidato ao título de Mestre deve integralizar créditos em disciplinas de caráter mais abrangente. O candidato ao título de Doutor é orientado para cumprir disciplinas mais especializadas, tanto dentro da área de concentração como em outras áreas relacionadas com seu projeto individual de pesquisa. O curso aceita alunos com formação na área biológica (biólogos, agrônomos, médicos, veterinários, zootecnistas, farmacêuticos, bioquímicos, etc.) e exige formação em Medicina para aqueles que pretendem fazer Genética Clínica.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-001</div>
                        <h5 class="discipline-name">Genética de Microrganismos</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-002</div>
                        <h5 class="discipline-name">Genética de Populações e Evolução</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-003</div>
                        <h5 class="discipline-name">Genética Animal</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-004</div>
                        <h5 class="discipline-name">Genética Vegetal</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-005</div>
                        <h5 class="discipline-name">Genética Molecular</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-006</div>
                        <h5 class="discipline-name">Genética Humana</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-007</div>
                        <h5 class="discipline-name">Citogenética</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-008</div>
                        <h5 class="discipline-name">Bioinformática</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-009</div>
                        <h5 class="discipline-name">Genética Clínica</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-010</div>
                        <h5 class="discipline-name">Biologia Molecular</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-011</div>
                        <h5 class="discipline-name">Genômica e Proteômica</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 60h – 4 créditos</div>
                        </div>
                        <span class="discipline-tag">Optativa</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="discipline-card rge-card">
                        <div class="discipline-code">PGG-012</div>
                        <h5 class="discipline-name">Seminários em Genética</h5>
                        <div class="discipline-info">
                            <div class="discipline-info-item"><i class="bi bi-clock"></i> 30h – 2 créditos</div>
                        </div>
                        <span class="discipline-tag">Obrigatória</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Section -->
 <!--   <section class="admission-section">
        <div class="container">
            <div class="section-label mb-2">Processo Seletivo</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Como Ingressar</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="admission-card rge-card">
                        <div class="admission-icon"><i class="bi bi-person-check"></i></div>
                        <h5 class="admission-title">Pré-Requisitos</h5>
                        <div class="admission-desc">
                            <ul>
                                <li>Graduação em áreas da biologia (Biológicas, Agronomia, Medicina, Veterinária, Farmácia, Bioquímica, etc.)</li>
                                <li>Formação em Medicina obrigatória para a linha de Genética Clínica</li>
                                <li>Formação em outras áreas não impede o ingresso ao curso</li>
                                <li>Interesse comprovado em pesquisa científica</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="admission-card rge-card">
                        <div class="admission-icon"><i class="bi bi-calendar-check"></i></div>
                        <h5 class="admission-title">Processo Seletivo</h5>
                        <div class="admission-desc">
                            <ul>
                                <li>Processo seletivo unificado pela FUVEST/FMRP-USP</li>
                                <li>Inscrições: geralmente em maio (2º semestre) e novembro (1º semestre)</li>
                                <li>Taxa de inscrição: R$ 219,00</li>
                                <li>Prova objetiva e dissertativa on-line</li>
                                <li>Análise do projeto de pesquisa e currículo</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="admission-card rge-card">
                        <div class="admission-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h5 class="admission-title">Documentação</h5>
                        <div class="admission-desc">
                            <ul>
                                <li>Diploma ou certificado de conclusão da graduação</li>
                                <li>Histórico escolar da graduação</li>
                                <li>Currículo Lattes atualizado</li>
                                <li>Carta de intenção / projeto de pesquisa prévio</li>
                                <li>Cartas de recomendação (quando solicitadas)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-box">
                        <h4><i class="bi bi-headset me-2"></i>Contato da Pós-Graduação</h4>
                        <div class="contact-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>Departamento de Genética – Bloco H<br>Av. Bandeirantes, 3900 – Ribeirão Preto – SP<br>CEP: 14049-900</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-telephone"></i>
                            <span>(16) 3315-9098</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:pggen@fmrp.usp.br">pggen@fmrp.usp.br</a>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-globe"></i>
                            <a href="https://sites.usp.br/pggen/" target="_blank">sites.usp.br/pggen</a>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-clock"></i>
                            <span>Segunda a sexta-feira, 8h às 17h</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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
