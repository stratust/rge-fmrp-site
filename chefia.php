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
                        <h2 class="h5 comissao-title">Conselho</h2>
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
                        <h2 class="h5 comissao-title">Comissão de Graduação</h2>
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
                        <h2 class="h5 comissao-title">Comissão de Pós-Graduação</h2>
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
                        <h2 class="h5 comissao-title">Comissão de Pesquisa</h2>
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
                        <h2 class="h5 comissao-title">Comissão de Informática</h2>
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
<?php require __DIR__ . '/includes/footer.php'; ?>
