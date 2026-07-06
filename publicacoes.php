
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
                <span class="active">Publicações</span>
            </nav>
            <h1>Publicações</h1>
            <p>Produção científica do Departamento de Genética em revistas nacionais e internacionais.</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <form class="filter-form row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label" style="font-size: 0.8rem; font-weight: 600; color: #666; text-transform: uppercase; letter-spacing: 0.5px;">Buscar</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0" style="border-color: #e0e0e0;"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Título, autor ou palavra-chave..." style="border-color: #e0e0e0;">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label" style="font-size: 0.8rem; font-weight: 600; color: #666; text-transform: uppercase; letter-spacing: 0.5px;">Ano</label>
                    <select class="form-select">
                        <option selected>Todos os anos</option>
                        <option>2025</option>
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label" style="font-size: 0.8rem; font-weight: 600; color: #666; text-transform: uppercase; letter-spacing: 0.5px;">Área</label>
                    <select class="form-select">
                        <option selected>Todas as áreas</option>
                        <option>Genética Molecular</option>
                        <option>Genômica e Bioinformática</option>
                        <option>Biologia Celular</option>
                        <option>Genética de Plantas</option>
                        <option>Genética Médica</option>
                        <option>Genética de Populações</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn-filter w-100"><i class="bi bi-funnel me-1"></i> Filtrar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Publications Section -->
    <section class="pub-section">
        <div class="container">
            <div class="section-label">Artigos Científicos</div>
            <div class="section-header">
                <h2>Publicações recentes</h2>
                <span class="pub-count">Exibindo 1–10 de 156 publicações</span>
            </div>

            <!-- Featured Publication -->
            <div class="featured-pub">
                <span class="badge-highlight"><i class="bi bi-star-fill me-1"></i> Destaque</span>
                <h3>Novel regulatory mechanisms in gene expression control during cellular stress response</h3>
                <p>Silva, A. B.; Oliveira, C. D.; Santos, E. F.; Costa, G. H.; Lima, I. J. — Departamento de Genética, FMRP/USP</p>
                <p class="journal"><i class="bi bi-journal-text me-1"></i> Nature Genetics & Development, 2025</p>
                <div class="actions">
                    <a href="publicacoes.php#" class="btn-featured"><i class="bi bi-box-arrow-up-right"></i> Acessar artigo</a>
                    <a href="publicacoes.php#" class="btn-featured-outline"><i class="bi bi-file-pdf"></i> PDF</a>
                </div>
            </div>

            <!-- Publication 1 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>MAI</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética Molecular</span>
                    <h5 class="pub-title">Transcriptional reprogramming in response to DNA double-strand breaks: a systems biology approach</h5>
                    <p class="pub-authors"><strong>Oliveira, C. D.</strong>; Ferreira, M. N.; Almeida, P. Q.; et al.</p>
                    <p class="pub-journal">Nucleic Acids Research, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 14.9</span>
                        <span><i class="bi bi-quote"></i> 12 citações</span>
                        <span><i class="bi bi-eye"></i> 845 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 2 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>ABR</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genômica e Bioinformática</span>
                    <h5 class="pub-title">Comparative genomics reveals adaptive evolution in tropical plant species under climate change scenarios</h5>
                    <p class="pub-authors"><strong>Santos, E. F.</strong>; Lima, I. J.; Costa, G. H.; et al.</p>
                    <p class="pub-journal">Molecular Ecology, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 4.9</span>
                        <span><i class="bi bi-quote"></i> 8 citações</span>
                        <span><i class="bi bi-eye"></i> 623 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 3 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>ABR</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética Médica</span>
                    <h5 class="pub-title">Whole-exome sequencing identifies new candidate genes for hereditary neurological disorders in Brazilian families</h5>
                    <p class="pub-authors"><strong>Costa, G. H.</strong>; Silva, A. B.; Ferreira, M. N.; et al.</p>
                    <p class="pub-journal">American Journal of Human Genetics, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 9.0</span>
                        <span><i class="bi bi-quote"></i> 15 citações</span>
                        <span><i class="bi bi-eye"></i> 1.204 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 4 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>MAR</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Biologia Celular</span>
                    <h5 class="pub-title">Mitochondrial dynamics and autophagy interplay in neurodegenerative disease models: implications for therapeutic targeting</h5>
                    <p class="pub-authors"><strong>Ferreira, M. N.</strong>; Almeida, P. Q.; Lima, I. J.; et al.</p>
                    <p class="pub-journal">Cell Reports, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 7.5</span>
                        <span><i class="bi bi-quote"></i> 6 citações</span>
                        <span><i class="bi bi-eye"></i> 512 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 5 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>MAR</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genômica e Bioinformática</span>
                    <h5 class="pub-title">Machine learning approaches for predicting pathogenic variants in non-coding regions of the human genome</h5>
                    <p class="pub-authors"><strong>Lima, I. J.</strong>; Costa, G. H.; Silva, A. B.; et al.</p>
                    <p class="pub-journal">Bioinformatics, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 4.4</span>
                        <span><i class="bi bi-quote"></i> 4 citações</span>
                        <span><i class="bi bi-eye"></i> 378 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 6 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>FEV</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética de Plantas</span>
                    <h5 class="pub-title">CRISPR-mediated resistance to viral pathogens in staple crop species: field trial validation</h5>
                    <p class="pub-authors"><strong>Almeida, P. Q.</strong>; Santos, E. F.; Oliveira, C. D.; et al.</p>
                    <p class="pub-journal">Plant Biotechnology Journal, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 10.1</span>
                        <span><i class="bi bi-quote"></i> 9 citações</span>
                        <span><i class="bi bi-eye"></i> 756 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 7 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>FEV</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética de Populações</span>
                    <h5 class="pub-title">Phylogeographic structure and conservation genetics of endemic amphibians in the Atlantic Forest hotspot</h5>
                    <p class="pub-authors"><strong>Silva, A. B.</strong>; Ferreira, M. N.; Lima, I. J.; et al.</p>
                    <p class="pub-journal">Conservation Genetics, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 2.5</span>
                        <span><i class="bi bi-quote"></i> 3 citações</span>
                        <span><i class="bi bi-eye"></i> 289 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 8 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2025
                    <span>JAN</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética Molecular</span>
                    <h5 class="pub-title">Epigenetic regulation of stem cell differentiation: role of histone modifications and non-coding RNAs</h5>
                    <p class="pub-authors"><strong>Oliveira, C. D.</strong>; Costa, G. H.; Almeida, P. Q.; et al.</p>
                    <p class="pub-journal">Stem Cell Reports, 2025</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 7.2</span>
                        <span><i class="bi bi-quote"></i> 7 citações</span>
                        <span><i class="bi bi-eye"></i> 534 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 9 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2024
                    <span>DEZ</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Genética Médica</span>
                    <h5 class="pub-title">Population-based screening for carrier status of recessive disorders in the Brazilian Midwest</h5>
                    <p class="pub-authors"><strong>Santos, E. F.</strong>; Lima, I. J.; Silva, A. B.; et al.</p>
                    <p class="pub-journal">Genetics in Medicine, 2024</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 8.8</span>
                        <span><i class="bi bi-quote"></i> 11 citações</span>
                        <span><i class="bi bi-eye"></i> 892 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>

            <!-- Publication 10 -->
            <div class="pub-card rge-card">
                <div class="pub-year-badge">
                    2024
                    <span>NOV</span>
                </div>
                <div class="pub-content">
                    <span class="pub-tag">Biologia Celular</span>
                    <h5 class="pub-title">Oxidative stress-induced senescence in fibroblasts: protective role of autophagy modulation</h5>
                    <p class="pub-authors"><strong>Ferreira, M. N.</strong>; Almeida, P. Q.; Oliveira, C. D.; et al.</p>
                    <p class="pub-journal">Aging Cell, 2024</p>
                    <div class="pub-meta">
                        <span><i class="bi bi-graph-up"></i> IF: 7.8</span>
                        <span><i class="bi bi-quote"></i> 5 citações</span>
                        <span><i class="bi bi-eye"></i> 445 acessos</span>
                    </div>
                    <div class="pub-actions">
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-box-arrow-up-right"></i> DOI</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-file-pdf"></i> PDF</a>
                        <a href="publicacoes.php#" class="pub-action-link"><i class="bi bi-share"></i> Citar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section class="pagination-section">
        <div class="container">
            <nav aria-label="Navegação de publicações">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="publicacoes.php#" aria-label="Anterior">
                            <i class="bi bi-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="publicacoes.php#">1</a></li>
                    <li class="page-item"><a class="page-link" href="publicacoes.php#">2</a></li>
                    <li class="page-item"><a class="page-link" href="publicacoes.php#">3</a></li>
                    <li class="page-item"><a class="page-link" href="publicacoes.php#">4</a></li>
                    <li class="page-item"><a class="page-link" href="publicacoes.php#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="publicacoes.php#" aria-label="Próximo">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Explore nossas linhas de pesquisa</h2>
            <p class="mx-auto">Conheça os grupos de pesquisa por trás dessas publicações e descubra oportunidades de colaboração e formação.</p>
            <a href="linhas-pesquisa.php" class="btn-green">LINHAS DE PESQUISA <i class="bi bi-arrow-right"></i></a>
        </div>
    </s
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
