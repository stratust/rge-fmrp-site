
<style>
.docente-foto {
  width: 100px;
  height: 100px;
/*  object-fit: cover;
  border-radius: 50%;*/
  margin: 0 auto 18px;
  display: block;
  box-shadow: 0 10px 26px rgba(0,0,0,.16);
}
.docente-foto-borda {
  width: 100px;
  height: 100px;
/*  object-fit: cover; */
  border-radius: 25%;
  margin: 0 auto 18px;
  display: block;
  box-shadow: 0 10px 26px rgba(0,0,0,.16);
}
</style>

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
</script>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.php">Início</a>
                <span class="separator">/</span>
                <span>Departamento</span>
                <span class="separator">/</span>
                <span class="active">História</span>
            </nav>
            <h1>História do Departamento</h1>
            <p>Desde sua fundação em 1965, o Departamento de Genética da FMRP/USP construiu uma trajetória de excelência em ensino, pesquisa e formação de recursos humanos de alta qualidade.</p>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">1965</span>
                        <span class="stat-label">Ano de Fundação</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">60+</span>
                        <span class="stat-label">Anos de História</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">700+</span>
                        <span class="stat-label">Titulações de Pós</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">1971</span>
                        <span class="stat-label">Pós-Graduação</span>
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
                    <div class="section-label">Origens</div>
                    <h2>Da visão de um visionário à excelência em Genética</h2>
                    <p class="lead">Em setembro de 1963, o Prof. Dr. José Moura Gonçalves, então Diretor da FMRP, convidou o Prof. Dr. Warwick Estevam Kerr para organizar a disciplina de Genética na Faculdade de Medicina de Ribeirão Preto.</p>
                    <p>Warwick Kerr, agrônomo formado pela ESALQ-USP, especialista em abelhas, organizador e Chefe do Departamento de Biologia da FFCL de Rio Claro e primeiro Diretor Científico da FAPESP, transferiu-se para a FMRP, assumindo o cargo em 29 de novembro de 1964.</p>
                    <p>A disciplina de Genética havia sido criada em 29 de setembro de 1964, pela Portaria GR nº 91. A primeira aula oficial foi ministrada aos estudantes de Medicina e Ciências Biológicas no dia <strong>6 de março de 1965</strong>, data considerada o marco inicial do novo departamento.</p>
                    <p>Antes da chegada de Kerr, o ensino de Genética era feito de forma segmentada, em disciplinas dos Departamentos de Bioquímica, Morfologia, Patologia e no Laboratório de Hematologia. A estruturação da Genética foi fundamental não apenas para o Curso de Medicina, mas também para o recém-criado Curso de Ciências Biológicas.</p>

                    <div class="quote-block">
                        <p>A semente que aqui foi plantada por ele germinou com muita vigor e, graças ao dinamismo inicial do Prof. Kerr e dos seus competentes sucessores, o grupo da genética nunca mais parou de crescer até os dias de hoje.</p>
                        <div class="quote-author">— Prof. Dr. Lionel Segui Gonçalves</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-img">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800&h=600&fit=crop" alt="Laboratório de Genética">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-label text-center justify-content-center mb-2">Linha do Tempo</div>
            <h2 class="text-center mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Marcos Históricos</h2>

            <div class="timeline">
                <div class="timeline-item highlight  ultima-etapa">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">1963 – 1964</div>
                        <div class="timeline-title">O Convite e a Chegada</div>
                        <div class="timeline-text">Em setembro de 1963, o Prof. Dr. José Moura Gonçalves convida Warwick Estevam Kerr para organizar a disciplina de Genética. Kerr assume em 29 de novembro de 1964, trazendo consigo ex-alunos e colaboradores da FFCL de Rio Claro.</div>
                        <span class="timeline-badge">Fundação</span>
                    </div>
                </div>

                <div class="timeline-item highlight">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">6 de Março de 1965</div>
                        <div class="timeline-title">Primeira Aula e Instalação</div>
                        <div class="timeline-text">A primeira aula oficial de Genética é ministrada aos estudantes de Medicina e Ciências Biológicas. O departamento é instalado em precárias condições: parte do prédio central da Medicina, a antiga lavanderia e dois canis desativados da faculdade.</div>
                        <span class="timeline-badge">Marco Inicial</span>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">1965 – 1969</div>
                        <div class="timeline-title">Expansão e Primeiras Contratações</div>
                        <div class="timeline-text">São contratados os primeiros docentes: Henrique Krieger (1965), Moacyr Antonio Mestriner (1966), Luiz Hildebrando Pereira da Silva (1968) e Francisco Alberto de Moura Duarte (1969). São criados os setores de Genética de Abelhas, Genética Bioquímica, Citogenética e Mutagênese.</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">1969</div>
                        <div class="timeline-title">Reforma Universitária</div>
                        <div class="timeline-text">Em decorrência da Reforma Universitária, os Departamentos de Genética e de Matemática Aplicada à Biologia são reunidos, resultando no Departamento de Genética e Matemática Aplicada à Biologia, que permanece assim até o ano 2000.</div>
                    </div>
                </div>

                <div class="timeline-item highlight">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">1971</div>
                        <div class="timeline-title">Criação da Pós-Graduação</div>
                        <div class="timeline-text">É criado o Programa de Pós-Graduação em Genética da FMRP/USP, com o Prof. Kerr como primeiro coordenador. Inicialmente com apenas 8 docentes credenciados, o programa viria a se tornar um dos mais importantes do país na área.</div>
                        <span class="timeline-badge">Pós-Graduação</span>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">1972</div>
                        <div class="timeline-title">Integração do Grupo</div>
                        <div class="timeline-text">Com a transferência da Profa. Dra. Iris Ferrari do Departamento de Clínica Médica, completa-se o grupo de docentes da fase inicial. Até então, o departamento funcionava em precárias condições no andar superior do Prédio Central da FMRP.</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">1974 – 1975</div>
                        <div class="timeline-title">Transição de Liderança</div>
                        <div class="timeline-text">Em 1974, o Prof. Kerr é convidado para dirigir o Instituto Nacional de Pesquisas da Amazônia (INPA) em Manaus. O Prof. Dr. Lionel Segui Gonçalves assume a coordenação do setor de Genética de Abelhas. Kerr deixa o departamento em 1975, mas a semente plantada continuaria a germinar.</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">1975 – 2000</div>
                        <div class="timeline-title">Crescimento e Consolidação</div>
                        <div class="timeline-text">Nos anos seguintes, novas especialidades são incorporadas: Genética de Microrganismos, Genética Quantitativa e de Populações, Genética Evolutiva, Genética Médica e Clínica. O departamento se consolida como um dos mais produtivos da FMRP e da USP.</div>
                    </div>
                </div>

                <div class="timeline-item highlight">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2000</div>
                        <div class="timeline-title">Autonomia Definitiva</div>
                        <div class="timeline-text">Após a Reestruturação Departamental na USP, o Departamento de Genética e Matemática Aplicada à Biologia se separa definitivamente. A área de Genética volta a ter total autonomia, retomando o nome de Departamento de Genética.</div>
                        <span class="timeline-badge">Reestruturação</span>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2011</div>
                        <div class="timeline-title">40 Anos de Pós-Graduação</div>
                        <div class="timeline-text">O departamento comemora 40 anos de Pós-Graduação em Genética, com quase 700 titulações (326 dissertações de mestrado e 367 teses de doutorado). O programa se consolida como referência nacional e internacional na formação de geneticistas.</div>
                    </div>
                </div>

                <div class="timeline-item highlight">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2015</div>
                        <div class="timeline-title">50 Anos do Departamento</div>
                        <div class="timeline-text">Comemoração do cinquentenário do Departamento de Genética. A trajetória de meio século é marcada pela produção científica de excelência, formação de centenas de mestres e doutores e a consolidação de linhas de pesquisa de relevância internacional.</div>
                        <span class="timeline-badge">Cinquentenário</span>
                    </div>
                </div>

                <div class="timeline-item highlight">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2024 – Atual</div>
                        <div class="timeline-title">Presente e Futuro</div>
                        <div class="timeline-text">Hoje o Departamento de Genética da FMRP/USP conta com 12 docentes, 5 linhas de pesquisa, 14 laboratórios de pesquisa e 3 laboratórios de ensino, mantendo o legado de excelência iniciado por Warwick Kerr há quase 60 anos.</div>
                        <span class="timeline-badge">Gestão Atual</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founders Section -->
    <section class="founders-section">
        <div class="container">
            <div class="section-label mb-2">Personalidades</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Figuras Fundamentais</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="founder-card rge-card">
                        <div class="founder-avatar"><img 
              src="assets/img/fotos_antigas/kerr.jpg" 
              alt="Kerr"
              class="docente-foto-borda"></div>
                        <h5 class="founder-name">Prof. Dr. Warwick Estevam Kerr</h5>
                        <div class="founder-role">Fundador e Primeiro Chefe (1965–1975)</div>
                        <p class="founder-desc">Agrônomo, geneticista e primeiro Diretor Científico da FAPESP. Criou o Departamento de Genética em 1965 e o primeiro sistema de integração inter-unidades da USP. Foi também diretor do INPA e reitor da Universidade Estadual do Maranhão. Faleceu em 15 de setembro de 2018, aos 96 anos.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="founder-card rge-card">
                        <div class="founder-avatar"><img 
              src="assets/img/fotos_antigas/Jose-Moura-Goncalves.jpg" 
              alt="Kerr"
              class="docente-foto-borda"></div>
                        <h5 class="founder-name">Prof. Dr. José Moura Gonçalves</h5>
                        <div class="founder-role">Diretor da FMRP (1963)</div>
                        <p class="founder-desc">Bioquímico e Diretor da FMRP na época da convocação de Kerr. Foi o líder do processo de criação do Curso de Ciências Biológicas na faculdade e o responsável por trazer o ensino de Genética para Ribeirão Preto.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="founder-card rge-card">
                        <div class="founder-avatar"><img 
              src="assets/img/fotos_antigas/iris.jpg"               alt="Iris Ferrari"
              class="docente-foto-borda"></div>
                        <h5 class="founder-name">Iris Ferrari</h5>
                        <div class="founder-role">Serviço de Genética Médica (1975-1978)</div>
<!--                        <p class="founder-desc">Ex-aluno e orientado de Kerr, assumiu a coordenação do setor de Genética de Abelhas em 1974. Um dos docentes mais antigos do grupo da Genética de Ribeirão Preto, tendo acompanhado todo o desenvolvimento do departamento desde seus primórdios.</p> -->
							<p class="founder-desc">Em 1977 ingressou no recém-inaugurado programa de residência em Genética Médica do Hospital das Clínicas da Faculdade de Medicina,
Após concluir a residência foi contratada como Médica Geneticista pelo HC-FMRP-USP, onde atuou até 1993, tendo ainda obtido o título de Mestre com um trabalho de pesquisa sobre raquitismo hipofosfatêmico.</p>
 
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="founder-card rge-card">
                        <div class="founder-avatar"><img 
              src="assets/img/fotos_antigas/Henrique-Krieger.webp" 
              alt="Kerr"
              class="docente-foto-borda"></div>
                        <h5 class="founder-name">Prof. Dr. Henrique Krieger</h5>
                        <div class="founder-role">Primeiro Docente Contratado (1965)</div>
                        <p class="founder-desc">Biólogo formado pela Universidade Federal do Paraná, retornava de um doutorado na Universidade do Havaí sob orientação do Prof. Newton Morton. Foi o segundo docente contratado pelo departamento, contribuindo para a consolidação da Genética Humana.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="founder-card rge-card">
                        <div class="founder-avatar"><img 
              src="assets/img/fotos_antigas/mestriner.jpg" 
              alt="Kerr"
              class="docente-foto-borda"></div>
                        <h5 class="founder-name">Prof. Dr. Moacyr Antonio Mestriner</h5>
                        <div class="founder-role">Docente Fundador (1966)</div>
                        <p class="founder-desc">Médico que havia estagiado no Departamento de Bioquímica da FMRP. Foi contratado inicialmente como biologista, integrando-se ao grupo de docentes da fase inicial e contribuindo para o desenvolvimento da Genética Bioquímica.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="founder-card rge-card">
                        <div class="founder-avatar"><img 
              src="assets/img/fotos_antigas/Hildebrando.jpg" 
              alt="Kerr"
              class="docente-foto-borda"></div>
                        <h5 class="founder-name">Prof. Dr. Luiz Hildebrando Pereira da Silva</h5>
                        <div class="founder-role">Docente Fundador (1968)</div>
                        <p class="founder-desc">Pesquisador do Instituto Pasteur em Paris, convidado a retornar ao Brasil em 1968. Organizou o laboratório de Genética de Microrganismos no departamento, trazendo expertise internacional em genética microbiana.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Numbers Section -->
    <section class="numbers-section">
        <div class="container">
            <div class="section-label text-center justify-content-center mb-2">Em Números</div>
            <h2 class="text-center mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">A Trajetória em Dados</h2>

            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="number-card rge-card">
                        <span class="number-value">60+</span>
                        <span class="number-label">Anos de História</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="number-card rge-card">
                        <span class="number-value">700+</span>
                        <span class="number-label">Titulações de Pós</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="number-card rge-card">
                        <span class="number-value">12</span>
                        <span class="number-label">Docentes</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="number-card rge-card">
                        <span class="number-value">14</span>
                        <span class="number-label">Labs de Pesquisa</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="number-card rge-card">
                        <span class="number-value">5</span>
                        <span class="number-label">Linhas de Pesquisa</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="number-card rge-card">
                        <span class="number-value">1000</span>
                        <span class="number-label">Publica&ccedil;&otilde;es</span>
                    </div>
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
