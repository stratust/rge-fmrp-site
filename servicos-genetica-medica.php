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
                <a href="extensao.php">Extensão</a>
                <span class="separator">/</span>
                <span class="active">Serviços de Genética Médica</span>
            </nav>
            <h1>Serviços de Genética Médica</h1>
                    <p>Atendimento especializado em diagnóstico, aconselhamento e acompanhamento genético para pacientes e famílias.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="servicos-genetica-medica.php#servicos" class="btn-green">CONHEÇA OS SERVIÇOS <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="servicos-genetica-medica.php#equipe" class="btn-outline-light-custom">CONHEÇA A EQUIPE <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
        </div>
    </section>


    <!-- Hero Section 
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 hero-content">
                    <div style="width: 40px; height: 3px; background: var(--accent-green); margin-bottom: 1.5rem;"></div>
                    <h1>Serviços de<br>Genética Médica</h1>
                    <p>Atendimento especializado em diagnóstico, aconselhamento e acompanhamento genético para pacientes e famílias.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#servicos" class="btn-green">CONHEÇA OS SERVIÇOS <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="#equipe" class="btn-outline-light-custom">CONHEÇA A EQUIPE <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Services Section -->
    <section class="services-section" id="servicos">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="section-label">Nossos Serviços</div>
                    <h2>Atendimento integral em genética médica</h2>
                    <p style="color: #555; line-height: 1.8;">O Serviço de Genética Médica do Departamento de Genética da FMRP/USP oferece assistência especializada para diagnóstico, orientação e acompanhamento de condições genéticas e hereditárias, integrando pesquisa, ensino e extensão.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 3 C8 3, 3 8, 3 14 C3 20, 8 25, 14 25 C20 25, 25 20, 25 14 C25 8, 20 3, 14 3" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M14 8 L14 14 L18 18" stroke="#1a5c3a" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="14" cy="14" r="2" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h3>Aconselhamento Genético</h3>
                        <p>Atendimento especializado para avaliação de riscos hereditários, esclarecimento de dúvidas e apoio à decisão sobre exames e reprodução.</p>
                        <ul class="service-list">
                            <li>Avaliação de história familiar</li>
                            <li>Cálculo de riscos de recorrência</li>
                            <li>Orientação pré e pós-teste</li>
                            <li>Aconselhamento em genética oncológica</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="5" y="12" width="18" height="12" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M9 12 L9 8 Q9 4 14 4 Q19 4 19 8 L19 12" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <circle cx="14" cy="18" r="3" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                <line x1="14" y1="15" x2="14" y2="12" stroke="#1a5c3a" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <h3>Diagnóstico Molecular</h3>
                        <p>Exames de DNA de alta precisão para identificação de mutações associadas a doenças genéticas, incluindo sequenciamento de nova geração.</p>
                        <ul class="service-list">
                            <li>Sequenciamento de genes</li>
                            <li>Exoma e genoma clínico</li>
                            <li>Teste de cariotipo molecular</li>
                            <li>Diagnóstico de doenças raras</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="10" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <ellipse cx="14" cy="14" rx="4" ry="10" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                <line x1="4" y1="14" x2="24" y2="14" stroke="#1a5c3a" stroke-width="1.5"/>
                                <line x1="6" y1="8" x2="22" y2="8" stroke="#1a5c3a" stroke-width="1.5"/>
                                <line x1="6" y1="20" x2="22" y2="20" stroke="#1a5c3a" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <h3>Citogenética</h3>
                        <p>Análise cromossômica para diagnóstico de síndromes, alterações numéricas e estruturais, com técnicas clássicas e moleculares.</p>
                        <ul class="service-list">
                            <li>Cariótipo de alta resolução</li>
                            <li>FISH (Hibridização in situ)</li>
                            <li>Array-CGH (Micromatriz)</li>
                            <li>Estudo de mosaicismo</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 4 L14 10 M14 18 L14 24 M4 14 L10 14 M18 14 L24 14" stroke="#1a5c3a" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="14" cy="14" r="4" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <circle cx="14" cy="14" r="2" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h3>Genética Oncológica</h3>
                        <p>Identificação de predisposição hereditária ao câncer, orientação para rastreamento preventivo e acompanhamento de portadores.</p>
                        <ul class="service-list">
                            <li>Painéis de genes de câncer hereditário</li>
                            <li>BRCA1, BRCA2 e genes associados</li>
                            <li>Síndromes de predisposição tumoral</li>
                            <li>Planejamento de rastreamento</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 24 C8 14 12 8 14 6 C16 8 20 14 20 24" stroke="#1a5c3a" stroke-width="2" fill="none" stroke-linecap="round"/>
                                <path d="M11 20 L17 20 M10 16 L18 16" stroke="#1a5c3a" stroke-width="1.5"/>
                                <circle cx="14" cy="4" r="2" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h3>Genética Reprodutiva</h3>
                        <p>Avaliação genética de casais com infertilidade, histórico de perdas gestacionais ou riscos de transmissão de doenças hereditárias.</p>
                        <ul class="service-list">
                            <li>Diagnóstico genético pré-implantação (PGT)</li>
                            <li>Avaliação de cariótipos parentais</li>
                            <li>Screening de portadores</li>
                            <li>Amniocentese e CVS</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card rge-card">
                        <div class="service-icon">
                            <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="4" width="16" height="20" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <line x1="10" y1="9" x2="18" y2="9" stroke="#1a5c3a" stroke-width="1.5"/>
                                <line x1="10" y1="13" x2="18" y2="13" stroke="#1a5c3a" stroke-width="1.5"/>
                                <line x1="10" y1="17" x2="14" y2="17" stroke="#1a5c3a" stroke-width="1.5"/>
                                <circle cx="18" cy="19" r="2" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h3>Genética Pediátrica</h3>
                        <p>Diagnóstico e acompanhamento de síndromes, malformações congênitas e doenças metabólicas em crianças e adolescentes.</p>
                        <ul class="service-list">
                            <li>Avaliação de dismorfias</li>
                            <li>Screening neonatal ampliado</li>
                            <li>Doenças metabólicas hereditárias</li>
                            <li>Atraso de desenvolvimento global</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section" id="agendamento">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-label">Como Funciona</div>
                    <h2>Fluxo de atendimento</h2>
                    <p>Nosso serviço funciona por meio de encaminhamento médico. Após o agendamento, o paciente passa por uma avaliação inicial com equipe multidisciplinar.</p>

                    <div class="info-card mt-4 rge-card">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <h4>Encaminhamento</h4>
                                <p>Solicitação médica com justificativa clínica e histórico familiar.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <h4>Agendamento</h4>
                                <p>Entrada em contato via telefone ou e-mail para marcação da consulta.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <h4>Avaliação Inicial</h4>
                                <p>Consulta com médico geneticista para anamnese detalhada e exame físico.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <h4>Exames e Diagnóstico</h4>
                                <p>Coleta de amostras e realização dos exames genéticos indicados.</p>
                            </div>
                        </div>
                        <div class="step-item">
                            <span class="step-number">5</span>
                            <div class="step-content">
                                <h4>Devolutiva e Acompanhamento</h4>
                                <p>Entrega de resultados com aconselhamento e encaminhamentos necessários.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-label">Informações</div>
                    <h2>Horários e Localização</h2>
                    <p>O Serviço de Genética Médica atua no ambulatório do Hospital das Clínicas da FMRP/USP, com estrutura voltada para atendimento humanizado e sigilo.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="info-card rge-card">
                                <h3><i class="bi bi-clock"></i> Horário de Funcionamento</h3>
                                <ul>
                                    <li><strong>Segunda a sexta:</strong> 8h às 17h</li>
                                    <li><strong>Atendimento:</strong> por agendamento</li>
                                    <li><strong>Urgências:</strong> avaliação caso a caso</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card rge-card">
                                <h3><i class="bi bi-geo-alt"></i> Localização</h3>
                                <ul>
                                    <li>Ambulatório de Genética Médica</li>
                                    <li>Hospital das Clínicas – FMRP/USP</li>
                                    <li>Av. Bandeirantes, 3900</li>
                                    <li>Ribeirão Preto – SP, 14049-900</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-card rge-card">
                                <h3><i class="bi bi-telephone"></i> Contato para Agendamento</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Telefone:</strong> (16) 3315-3300<br>
                                        <strong>Ramal:</strong> 3305 / 3306</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>E-mail:</strong> genetica.medica@fmrp.usp.br<br>
                                        <strong>Secretaria:</strong> segen@fmrp.usp.br</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Staff Section -->
    <section class="staff-section" id="equipe">
        <div class="container">
            <div class="section-label">Equipe</div>
            <h2>Profissionais do Serviço de Genética Médica</h2>
            <p class="mb-5">Nossa equipe multidisciplinar é composta por médicos geneticistas, geneticistas clínicos, biomédicos, psicólogos e assistentes sociais, todos dedicados ao atendimento integral dos pacientes e famílias.</p>

            <!-- Coordenação -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="staff-category">Coordenação</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-4">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>Prof. Dr. [Nome Completo]</h3>
                            <div class="role">Coordenador do Serviço</div>
                            <p>Médico geneticista com doutorado em Genética Médica. Responsável pela gestão clínica e acadêmica do serviço.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> coordenador@fmrp.usp.br</p>
                                <p><i class="bi bi-telephone"></i> Ramal [XXXX]</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>Profa. Dra. [Nome Completo]</h3>
                            <div class="role">Vice-Coordenadora</div>
                            <p>Geneticista clínica com especialização em genética oncológica e reprodutiva. Responsável pela supervisão dos programas de rastreamento.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> vice@fmrp.usp.br</p>
                                <p><i class="bi bi-telephone"></i> Ramal [XXXX]</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>Profa. Dra. [Nome Completo]</h3>
                            <div class="role">Supervisora Técnica</div>
                            <p>Biomédica especialista em diagnóstico molecular e citogenética. Coordena os exames laboratoriais e garantia de qualidade.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> tecnico@fmrp.usp.br</p>
                                <p><i class="bi bi-telephone"></i> Ramal [XXXX]</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipe Médica -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="staff-category">Equipe Médica</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>Dr. [Nome Completo]</h3>
                            <div class="role">Médico Geneticista</div>
                            <p>Especialista em genética pediátrica e síndromes de malformação. Atua no ambulatório de genética clínica.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> medico1@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>Dra. [Nome Completo]</h3>
                            <div class="role">Médica Geneticista</div>
                            <p>Especialista em genética oncológica e aconselhamento genético para câncer hereditário.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> medico2@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>Dr. [Nome Completo]</h3>
                            <div class="role">Médico Geneticista</div>
                            <p>Especialista em genética reprodutiva e medicina fetal. Coordena o programa de pré-natal genético.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> medico3@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>Dra. [Nome Completo]</h3>
                            <div class="role">Médica Geneticista</div>
                            <p>Especialista em doenças raras e genética metabólica. Atua no programa de atenção integral a síndromes raras.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> medico4@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipe Laboratorial -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="staff-category">Equipe Laboratorial</span>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>[Nome Completo]</h3>
                            <div class="role">Biomédica – Diagnóstico Molecular</div>
                            <p>Especialista em sequenciamento de nova geração e análise de variantes genéticas.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> biomol@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>[Nome Completo]</h3>
                            <div class="role">Biomédico – Citogenética</div>
                            <p>Responsável por cariótipos, FISH e array-CGH. Experiência em diagnóstico pré-natal.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> biocito@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>[Nome Completo]</h3>
                            <div class="role">Técnico de Laboratório</div>
                            <p>Suporte técnico em extração de DNA, PCR e preparo de amostras para sequenciamento.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> tecnicolab@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>[Nome Completo]</h3>
                            <div class="role">Bioinformata</div>
                            <p>Análise computacional de dados genômicos, variant calling e interpretação de resultados NGS.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> bioinfo@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipe de Apoio -->
            <div class="row mb-2">
                <div class="col-12">
                    <span class="staff-category">Equipe de Apoio Multidisciplinar</span>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>[Nome Completo]</h3>
                            <div class="role">Psicóloga</div>
                            <p>Atua no aconselhamento psicológico de pacientes e famílias em processo de diagnóstico genético.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> psico@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>[Nome Completo]</h3>
                            <div class="role">Assistente Social</div>
                            <p>Orientação sobre direitos, encaminhamentos sociais e apoio às famílias em situação de vulnerabilidade.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> social@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>[Nome Completo]</h3>
                            <div class="role">Nutricionista</div>
                            <p>Orientação nutricional especializada para pacientes com doenças metabólicas hereditárias.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> nutri@fmrp.usp.br</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="staff-card rge-card">
                        <div class="staff-img">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="staff-body">
                            <h3>[Nome Completo]</h3>
                            <div class="role">Secretária Administrativa</div>
                            <p>Agendamento de consultas, organização de prontuários e atendimento ao público.</p>
                            <div class="staff-contact">
                                <p><i class="bi bi-envelope"></i> secretaria@fmrp.usp.br</p>
                                <p><i class="bi bi-telephone"></i> (16) 3315-3300</p>
                            </div>
                        </div>
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
                    <h2>Agende sua consulta</h2>
                    <p>Para agendar um atendimento ou obter mais informações sobre os serviços de genética médica, entre em contato conosco.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-telephone"></i>
                                <span>(16) 3315-3300 – Ramal 3305</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <span>genetica.medica@fmrp.usp.br</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-clock"></i>
                                <span>Segunda a sexta, 8h às 17h</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>HC-FMRP/USP – Ribeirão Preto, SP</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="mailto:genetica.medica@fmrp.usp.br" class="btn-outline-light-custom d-inline-block">ENVIAR E-MAIL <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
