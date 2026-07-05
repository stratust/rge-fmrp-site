<?php
/**
 * Header padrão — Departamento de Genética FMRP/USP
 * Uso: require __DIR__ . '/includes/header.php';
 *
 * Variáveis opcionais antes do include:
 *   $pageTitle  — título da <title>
 *   $breadcrumb — array ['Início','Seção','Subseção']
 *   $pageDesc   — meta description
 */
if (!isset($pageTitle))  $pageTitle  = 'Departamento de Genética - FMRP/USP';
if (!isset($breadcrumb)) $breadcrumb = ['Início'];
if (!isset($pageDesc))   $pageDesc   = 'Departamento de Genética da Faculdade de Medicina de Ribeirão Preto - USP. Excelência em ensino, pesquisa e extensão em Genética.';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- OTIMIZAÇÃO: preconnect para CDNs -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://flagcdn.com">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image" content="assets/img/logo_genetica_20260612.webp">

    <!-- Bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- CSS local -->
    <link rel="stylesheet" href="assets/css/rgepadrao.css">
    <link rel="stylesheet" href="assets/css/btn-topo.css">
    <link rel="stylesheet" href="assets/css/rgetradutor.css">
    <link rel="stylesheet" href="assets/css/extras.css">

    <!-- Google Translate -->
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="assets/js/tradutor.js" defer></script>
</head>
<body>

<div id="topo"></div>

<!-- ═══════════════ NAVBAR ═══════════════ -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <div class="d-flex align-items-center">
                <img src="assets/img/logo_genetica_20260612.webp" alt="Logo do Departamento de Genética" class="logo-genetica me-2">
                <div>
                    <div class="fw-bold">FMRP &bull; USP</div>
                    <div class="text-muted small" style="margin-top:-4px">DEPARTAMENTO DE GENÉTICA</div>
                </div>
            </div>
        </a>

        <div class="d-flex align-items-center order-lg-last">
            <div class="d-flex align-items-center me-3">
                <div class="tradutor-custom-buttons notranslate">
                    <button id="btn-pt" onclick="resetParaPortugues()" class="btn-tradutor" aria-label="Português">
                        <img src="https://flagcdn.com/br.svg" width="20" alt="PT" loading="lazy"></button>
                    <button id="btn-en" onclick="traduzirParaIngles()" class="btn-tradutor" aria-label="English">
                        <img src="https://flagcdn.com/us.svg" width="20" alt="EN" loading="lazy"></button>
                    <button id="btn-es" onclick="traduzirParaEspanhol()" class="btn-tradutor" aria-label="Español">
                        <img src="https://flagcdn.com/es.svg" width="20" alt="ES" loading="lazy"></button>
                </div>
                <div id="google_translate_element" style="display:none"></div>
            </div>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Menu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Departamento</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="historia.php">Sobre o Departamento</a></li>
                        <li><a class="dropdown-item" href="chefia.php">Chefias</a></li>
                        <li><a class="dropdown-item" href="comissoes-conselho.php">Conselho e Comissões</a></li>
                        <li><a class="dropdown-item" href="plataformas-multiusuarios.php">Equipamentos Multiusuário</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Ensino</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="ensino.php">Ensino</a></li>
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
                        <li><a class="dropdown-item" href="residencia-genetica-medica.php">Residência em Genética Médica</a></li>
                        <li><a class="dropdown-item" href="servicos-genetica-medica.php">Serviços em Genética Médica</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Equipe</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="docentes.php">Docentes</a></li>
                        <li><a class="dropdown-item" href="funcionarios.php">Funcionários</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle menu-titulo" data-bs-toggle="dropdown" role="button" aria-expanded="false">Laboratórios</span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="laboratorios.php">Laboratórios</a></li>
                        <li><a class="dropdown-item" href="laboratorio_doc.php?cod=14">Bioinformática</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="assets/js/main.js" defer></script>
