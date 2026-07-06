<?php
$pageTitle = 'Departamento de Genética - FMRP/USP';
require __DIR__ . '/includes/header.php';
?>
<!-- Page Header -->
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

<?php require __DIR__ . '/includes/footer.php'; ?>
