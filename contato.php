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
                <span class="active">Contato</span>
            </nav>
            <h1>Contato</h1>
            <p>Estamos à disposição para esclarecer dúvidas, receber sugestões e discutir oportunidades de colaboração.</p>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="section-label">Fale Conosco</div>
                    <h2>Como podemos<br>ajudar?</h2>
                    <p>Entre em contato conosco pelos canais abaixo ou preencha o formulário. Nossa equipe responde em até 2 dias úteis.</p>
                    <p>Para assuntos acadêmicos específicos, recomendamos contatar diretamente a secretaria correspondente.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="contact-card rge-card">
                                <div class="contact-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <h2 class="h5">Endereço</h2>
                                <p>Av. Bandeirantes, 3900<br>Ribeirão Preto – SP<br>CEP 14049-900</p>
                                <a href="https://maps.google.com" target="_blank">Ver no mapa <i class="bi bi-box-arrow-up-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-card rge-card">
                                <div class="contact-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <h2 class="h5">Telefone</h2>
                                <p>Departamento:<br><strong>(16) 3315-9098</strong></p>
                                <p>Secretaria Acadêmica:<br><strong>(16) 3315-3293</strong></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-card rge-card">
                                <div class="contact-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <h2 class="h5">E-mail</h2>
                                <p>Departamento:<br><a href="mailto:secgen@fmrp.usp.br">secgen@fmrp.usp.br</a></p>
                                <p>Pós-graduação:<br><a href="mailto:ppg.pggen@usp.br">ppg.pggen@usp.br</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-card rge-card">
                                <div class="contact-icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <h2 class="h5">Horário de Atendimento</h2>
                                <p>Segunda a sexta-feira<br><strong>8h às 12h</strong> e <strong>13h às 17h</strong></p>
                                <p style="font-size: 0.8rem; color: #888;">Atendimento presencial mediante agendamento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="form-section" id="contato">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-label">Envie uma mensagem</div>
                    <h2>Formulário de contato</h2>
                    <p>Preencha os campos ao lado com suas informações e a natureza do seu contato. Campos marcados com * são obrigatórios.</p>
                    <div class="mt-4">
                        <h3 class="h6" style="font-size: 0.9rem; font-weight: 600; color: #444; margin-bottom: 1rem;">Para assuntos específicos:</h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 0.6rem; font-size: 0.9rem; color: #666;">
                                <i class="bi bi-mortarboard me-2" style="color: var(--primary-green);"></i>
                                <strong>Graduação:</strong> <a href="mailto:gradgenetica@fmrp.usp.br">gradgenetica@fmrp.usp.br</a>
                            </li>
                            <li style="margin-bottom: 0.6rem; font-size: 0.9rem; color: #666;">
                                <i class="bi bi-journal-bookmark me-2" style="color: var(--primary-green);"></i>
                                <strong>Pós-graduação:</strong> <a href="mailto:ppg.pggen@usp.br">ppg.pgen@usp.br</a>
                            </li>
                            <li style="margin-bottom: 0.6rem; font-size: 0.9rem; color: #666;">
                                <i class="bi bi-people me-2" style="color: var(--primary-green);"></i>
                                <strong>Extensão:</strong> <a href="mailto:extensao@fmrp.usp.br">extensao@fmrp.usp.br</a>
                            </li>
                            <li style="margin-bottom: 0.6rem; font-size: 0.9rem; color: #666;">
                                <i class="bi bi-briefcase me-2" style="color: var(--primary-green);"></i>
                                <strong>Parcerias:</strong> <a href="mailto:parcerias@fmrp.usp.br">parcerias@fmrp.usp.br</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form class="contact-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nome completo *</label>
                                <input type="text" class="form-control" placeholder="Seu nome" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">E-mail *</label>
                                <input type="email" class="form-control" placeholder="seu@email.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Telefone</label>
                                <input type="tel" class="form-control" placeholder="(16) 99999-9999">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Assunto *</label>
                                <select class="form-select" required><option value="">Selecione...</option>
                                    <option selected disabled>Selecione...</option>
                                    <option>Informações sobre Graduação</option>
                                    <option>Informações sobre Pós-graduação</option>
                                    <option>Cursos de Extensão</option>
                                    <option>Pesquisa e Colaboração</option>
                                    <option>Visitas e Tours</option>
                                    <option>Outro assunto</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mensagem *</label>
                                <textarea class="form-control" placeholder="Escreva sua mensagem aqui..." required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacyCheck" required style="border-color: #ccc;">
                                    <label class="form-check-label" for="privacyCheck" style="font-size: 0.85rem; color: #666;">
                                        Concordo com a <a href="contato.php#" style="color: var(--primary-green);">Política de Privacidade</a> e autorizo o uso dos dados fornecidos para contato.
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn-submit">ENVIAR MENSAGEM <i class="bi bi-send-fill"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.0!2d-47.85!3d-21.18!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDEwJzQ4LjAiUyA0N8KwNTEnMDAuMCJX!5e0!3m2!1spt-BR!2sbr!4v1609459200000!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="map-overlay">
                    <h3 class="h6"><i class="bi bi-geo-alt-fill me-1" style="color: var(--primary-green);"></i> Departamento de Genética</h3>
                    <p>Av. Bandeirantes, 3900 — FMRP/USP<br>Ribeirão Preto, SP</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-label">Equipe Administrativa</div>
            <h2>Quem atende você</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="team-card rge-card">
                        <div class="team-avatar">MS</div>
                        <div class="team-info">
                            <h2 class="h5">Susie Nalon</h2>
                            <div class="role">Secretária do Departamento</div>
                            <p><i class="bi bi-envelope me-1"></i> <a href="mailto:secgen@fmrp.usp.br">secgen@fmrp.usp.br</a></p>
                            <p><i class="bi bi-telephone me-1"></i> (16) 3315-9098</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-card rge-card">
                        <div class="team-avatar">JO</div>
                        <div class="team-info">
                            <h2 class="h5">Silvia</h2>
                            <div class="role">Secretaria Acadêmica</div>
                            <p><i class="bi bi-envelope me-1"></i> <a href="mailto:secgen@fmrp.usp.br">secgen@fmrp.usp.br</a></p>
                            <p><i class="bi bi-telephone me-1"></i> (16) 3315-3293</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-card rge-card">
                        <div class="team-avatar">AS</div>
                        <div class="team-info">
                            <h2 class="h5">Ana Santos</h2>
                            <div class="role">Coordenação de Pós-graduação</div>
                            <p><i class="bi bi-envelope me-1"></i> <a href="mailto:ana.santos@fmrp.usp.br">ana.santos@fmrp.usp.br</a></p>
                            <p><i class="bi bi-telephone me-1"></i> (16) 3315-3302</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-card rge-card">
                        <div class="team-avatar">PC</div>
                        <div class="team-info">
                            <h2 class="h5">Pedro Costa</h2>
                            <div class="role">Coordenação de Extensão</div>
                            <p><i class="bi bi-envelope me-1"></i> <a href="mailto:pedro.costa@fmrp.usp.br">pedro.costa@fmrp.usp.br</a></p>
                            <p><i class="bi bi-telephone me-1"></i> (16) 3315-3303</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-card rge-card">
                        <div class="team-avatar">CL</div>
                        <div class="team-info">
                            <h2 class="h5">Carla Lima</h2>
                            <div class="role">Comunicação e Eventos</div>
                            <p><i class="bi bi-envelope me-1"></i> <a href="mailto:carla.lima@fmrp.usp.br">carla.lima@fmrp.usp.br</a></p>
                            <p><i class="bi bi-telephone me-1"></i> (16) 3315-3304</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-card rge-card">
                        <div class="team-avatar">RF</div>
                        <div class="team-info">
                            <h2 class="h5">Roberto Ferreira</h2>
                            <div class="role">Infraestrutura e Laboratórios</div>
                            <p><i class="bi bi-envelope me-1"></i> <a href="mailto:roberto.ferreira@fmrp.usp.br">roberto.ferreira@fmrp.usp.br</a></p>
                            <p><i class="bi bi-telephone me-1"></i> (16) 3315-3305</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social CTA -->
    <section class="social-cta">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h3><i class="bi bi-megaphone me-2"></i>Acompanhe nossas redes sociais</h3>
                    <p class="mb-0">Fique por dentro das novidades, eventos e conquistas do Departamento de Genética.</p>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-lg-end gap-3">
                        <a href="contato.php#" class="social-btn"><i class="bi bi-instagram"></i></a>
                        <a href="contato.php#" class="social-btn"><i class="bi bi-facebook"></i></a>
                        <a href="contato.php#" class="social-btn"><i class="bi bi-youtube"></i></a>
                        <a href="contato.php#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                        <a href="contato.php#" class="social-btn"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
