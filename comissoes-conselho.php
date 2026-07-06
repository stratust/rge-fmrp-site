
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
</script><!-- Page Header -->
    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.php">Início</a>
                <span class="separator">/</span>
                <span>Departamento</span>
                <span class="separator">/</span>
                <span class="active">Conselho e Comiss&otilde;es</span>
            </nav>
            <h1>Conselho e Comiss&otilde;es</h1>
            <p>Transparência e organização na gestão do Departamento de Genética. Acompanhe a composição das comissões, membros do conselho e calendário de reuniões.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="comissoes-conselho.php#calendario" class="btn btn-green">Calendário de reuni&otilde;es <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
        </div>
    </section>


    <!-- Hero Section
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 hero-content">
                    <div style="width: 40px; height: 3px; background: var(--accent-green); margin-bottom: 1.5rem;"></div>
                    <h1>Conselho e Comiss&otilde;es</h1>
                    <p>Transparência e organização na gestão do Departamento de Genética. Acompanhe a composição das comissões, membros do conselho e calendário de reuniões.</p>
                </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#calendario" class="btn btn-green">Calendário de reuni&otilde;es <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
				
            </div>
        </div>
    </section> -->
    <!-- Filters -->
    <section class="filters-section" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 mb-3 mb-lg-0">
                    <a href="comissoes-conselho.php#conselho"><button type="button" class="filter-btn" data-area="">Conselho</button></a>
                    <a href="comissoes-conselho.php#comgrad"><button type="button" class="filter-btn" data-area="Genética Humana">Comissão de Graduação</button></a>
                    <a href="comissoes-conselho.php#compos"><button type="button" class="filter-btn" data-area="Genética Molecular">Comissão de Pós-Graduação</button></a>
                    <a href="comissoes-conselho.php#compesq"><button type="button" class="filter-btn" data-area="Bioinformática">Comissão de Pesquisa</button></a>
                    <a href="comissoes-conselho.php#cominfo"><button type="button" class="filter-btn" data-area="Bioinformática">Comissão de Informática</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Final - Filters -->

    <!-- Council Section -->
    <section class="council-section" id="conselho">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <div class="section-label">Conselho</div>
                    <h2>Conselho do Departamento</h2>
                    <p>O Conselho do Departamento de Genética é o órgão colegiado máximo de deliberação, composto por representantes docentes, discentes e servidores técnicos, com mandatos definidos em conformidade com o Regimento Geral da USP.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Membros Titulares -->
                <div class="col-lg-6">
                    <div class="council-card rge-card">
                        <h5><i class="bi bi-people-fill"></i> Membros Titulares</h5>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">PJ</div>
                                <div>
                                    <div class="member-name">Prof. Dr. [Nome Completo]</div>
                                    <div class="member-role">Professor Titular</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">AS</div>
                                <div>
                                    <div class="member-name">Profa. Dra. [Nome Completo]</div>
                                    <div class="member-role">Professor Associado</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">HD</div>
                                <div>
                                    <div class="member-name">Prof. Dr. [Nome Completo]</div>
                                    <div class="member-role">Professor Doutor</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">ML</div>
                                <div>
                                    <div class="member-name">Profa. Dra. [Nome Completo]</div>
                                    <div class="member-role">Professor Associado</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">RC</div>
                                <div>
                                    <div class="member-name">Prof. Dr. [Nome Completo]</div>
                                    <div class="member-role">Professor Titular</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                    </div>
                </div>

                <!-- Membros Suplentes -->
                <div class="col-lg-6">
                    <div class="council-card rge-card">
                        <h5><i class="bi bi-person-plus"></i> Membros Suplentes</h5>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">FS</div>
                                <div>
                                    <div class="member-name">Prof. Dr. [Nome Completo]</div>
                                    <div class="member-role">Professor Doutor – Suplente Docente</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">LT</div>
                                <div>
                                    <div class="member-name">Profa. Dra. [Nome Completo]</div>
                                    <div class="member-role">Professor Associado – Suplente Docente</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">AL</div>
                                <div>
                                    <div class="member-name">[Nome do Aluno]</div>
                                    <div class="member-role">Representante Discente – Graduação</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">BR</div>
                                <div>
                                    <div class="member-name">[Nome do Aluno]</div>
                                    <div class="member-role">Representante Discente – Pós-graduação</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                        <div class="member-row">
                            <div class="member-info">
                                <div class="member-avatar">TS</div>
                                <div>
                                    <div class="member-name">[Nome do Servidor]</div>
                                    <div class="member-role">Representante Técnico-Administrativo</div>
                                </div>
                            </div>
                            <span class="mandate-badge">[Data] a [Data]</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Commissions Section -->
    <section class="commissions-section" id="comissoes">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <div class="section-label">Comissões</div>
                    <h2>Comissões do Departamento</h2>
                    <p>As comissões do Departamento de Genética são órgãos colegiados responsáveis por assessorar a chefia em áreas específicas, garantindo a participação democrática e a transparência nas decisões administrativas e acadêmicas.</p>
                </div>
            </div>

            <!-- Comissão de Graduação -->
            <div class="commission-card rge-card" id="comgrad">
                <h5><i class="bi bi-mortarboard"></i> Comissão de Graduação</h5>
                <p class="text-muted mb-3" style="font-size: 0.9rem;">Responsável pela organização, supervisão e avaliação das atividades de ensino de graduação vinculadas ao departamento.</p>
                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>Membro</th>
                                <th>Área / Disciplina</th>
                                <th>Mandato</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Prof. Dr. [Nome do Coordenador]</strong></td>
                                <td>Genética Geral</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Profa. Dra. [Nome]</strong></td>
                                <td>Genética Molecular</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Prof. Dr. [Nome]</strong></td>
                                <td>Citogenética</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Profa. Dra. [Nome]</strong></td>
                                <td>Genética Médica</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Comissão de Pós-Graduação -->
            <div class="commission-card rge-card" id="compos">
                <h5><i class="bi bi-journal-bookmark"></i> Comissão de Pós-Graduação</h5>
                <p class="text-muted mb-3" style="font-size: 0.9rem;">Atua na coordenação dos programas de mestrado e doutorado, seleção de alunos, avaliação de dissertações e teses.</p>
                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>Membro</th>
                                <th>Linha de Pesquisa</th>
                                <th>Mandato</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Prof. Dr. [Nome do Coordenador]</strong></td>
                                <td>Genômica e Bioinformática</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Prof. Dr. [Nome]</strong></td>
                                <td>Genética Molecular</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Profa. Dra. [Nome]</strong></td>
                                <td>Biologia Celular</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Prof. Dr. [Nome]</strong></td>
                                <td>Genética de Populações</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Comissão de Pesquisa -->
            <div class="commission-card rge-card" id="compesq">
                <h5><i class="bi bi-flask"></i> Comissão de Pesquisa</h5>
                <p class="text-muted mb-3" style="font-size: 0.9rem;">Fomenta e acompanha as atividades de pesquisa do departamento, incluindo editais, bolsas e parcerias institucionais.</p>
                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>Membro</th>
                                <th>Laboratório / Área</th>
                                <th>Mandato</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Prof. Dr. [Nome do Coordenador]</strong></td>
                                <td>Lab. de [Nome]</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Profa. Dra. [Nome]</strong></td>
                                <td>Lab. de [Nome]</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Prof. Dr. [Nome]</strong></td>
                                <td>Lab. de [Nome]</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Comissão de Extensão -->
            <div class="commission-card rge-card" id="cominfo">
                <h5><i class="bi bi-globe-americas"></i> Comissão de Informática</h5>
                <p class="text-muted mb-3" style="font-size: 0.9rem;">Coordena as atividades de informática do departamento.</p>
                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>Membro</th>
                                <th>Área de Atuação</th>
                                <th>Mandato</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Profa. Dra. [Nome do Coordenador]</strong></td>
                                <td>Divulgação Científica</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Prof. Dr. [Nome]</strong></td>
                                <td>Genética Médica</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                            <tr>
                                <td><strong>Profa. Dra. [Nome]</strong></td>
                                <td>Educação em Genética</td>
                                <td><span class="mandate-badge">[Data] a [Data]</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section class="calendar-section" id="calendario">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <div class="section-label">Calendário</div>
                    <h2>Calendário de Reuniões</h2>
                    <p>Confira as datas das reuniões ordinárias do Conselho do Departamento de Genética, da Congregação e demais órgãos colegiados para o ano letivo.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="calendar-card rge-card">
                        <span class="semester-badge">1º Semestre / 2026</span>
                        <h5><i class="bi bi-calendar-event"></i> Reuniões Ordinárias</h5>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">04</div>
                                <div class="month">FEV</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">04</div>
                                <div class="month">FEV</div>
                            </div>
                            <div class="event-details">
                                <h6>Comissão Técnico-Administrativa (CTA)</h6>
                                <p>Das 10:30 às 11:30 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-cta">CTA</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">11</div>
                                <div class="month">FEV</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">04</div>
                                <div class="month">MAR</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">11</div>
                                <div class="month">MAR</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">01</div>
                                <div class="month">ABR</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">08</div>
                                <div class="month">ABR</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">06</div>
                                <div class="month">MAI</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">13</div>
                                <div class="month">MAI</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">03</div>
                                <div class="month">JUN</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">10</div>
                                <div class="month">JUN</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="calendar-card rge-card">
                        <span class="semester-badge">2º Semestre / 2026</span>
                        <h5><i class="bi bi-calendar-event"></i> Reuniões Ordinárias</h5>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">05</div>
                                <div class="month">AGO</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">12</div>
                                <div class="month">AGO</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">02</div>
                                <div class="month">SET</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">09</div>
                                <div class="month">SET</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">07</div>
                                <div class="month">OUT</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">14</div>
                                <div class="month">OUT</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">04</div>
                                <div class="month">NOV</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">11</div>
                                <div class="month">NOV</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">02</div>
                                <div class="month">DEZ</div>
                            </div>
                            <div class="event-details">
                                <h6>Conselho do Departamento de Genética</h6>
                                <p>Das 10:00 às 12:00 – Sala de Reuniões do Departamento</p>
                                <span class="event-tag tag-conselho">Conselho</span>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date">
                                <div class="day">09</div>
                                <div class="month">DEZ</div>
                            </div>
                            <div class="event-details">
                                <h6>Congregação FMRP/USP</h6>
                                <p>Das 14:00 às 16:00 – Anfiteatro da Faculdade</p>
                                <span class="event-tag tag-congregacao">Congregação</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert mt-4" style="background: rgba(26,92,58,0.05); border: 1px solid rgba(26,92,58,0.1); border-radius: 12px; padding: 1.2rem 1.5rem; color: #444; font-size: 0.9rem;">
                <i class="bi bi-info-circle-fill me-2" style="color: var(--primary-green);"></i>
                <strong>Nota:</strong> As reuniões do Conselho do Departamento ocorrem sempre na <strong>1ª quarta-feira do mês</strong>, das 10:00 às 12:00. As reuniões da Congregação ocorrem na <strong>terça-feira subsequente</strong>, das 14:00 às 16:00. Reuniões extraordinárias podem ser convocadas mediante editais publicados nesta página.
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
