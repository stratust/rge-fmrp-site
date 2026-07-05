<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Contato — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Contato'];
$pageSubtitle = 'Entre em contato com o Departamento de Genética da FMRP/USP.';
$pageDesc = 'Contato com o Departamento de Genética FMRP/USP: endereço, telefone, email e formulário.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';

$enviado = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Apenas simula envio (não envia email real)
    $enviado = true;
}
?>

<!-- ═══════════════ CONTATO INFO + FORM ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- INFO -->
            <div class="col-lg-5">
                <h2 class="section-title">Informações de Contato</h2>
                <p class="text-muted mb-4">Estamos à disposição para atender a sua demanda. Utilize os canais abaixo ou preencha o formulário.</p>

                <div class="contact-item mb-4">
                    <div class="contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div>
                        <h5 class="h6 fw-bold">Endereço</h5>
                        <p class="text-muted mb-0">Departamento de Genética – FMRP/USP<br>Av. Bandeirantes, 3900<br>Ribeirão Preto – SP, 14049-900</p>
                    </div>
                </div>
                <div class="contact-item mb-4">
                    <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
                    <div>
                        <h5 class="h6 fw-bold">Telefone</h5>
                        <p class="text-muted mb-0"><a href="tel:+551633159098" class="text-decoration-none">(16) 3315-9098</a></p>
                    </div>
                </div>
                <div class="contact-item mb-4">
                    <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
                    <div>
                        <h5 class="h6 fw-bold">E-mail</h5>
                        <p class="text-muted mb-0"><a href="mailto:secgen@fmrp.usp.br" class="text-decoration-none">secgen@fmrp.usp.br</a></p>
                    </div>
                </div>
                <div class="contact-item mb-4">
                    <div class="contact-icon"><i class="bi bi-clock-fill"></i></div>
                    <div>
                        <h5 class="h6 fw-bold">Horário de Atendimento</h5>
                        <p class="text-muted mb-0">Segunda a Sexta-feira<br>08h00 às 17h00</p>
                    </div>
                </div>
            </div>

            <!-- FORMULÁRIO -->
            <div class="col-lg-7">
                <div class="card-custom">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h3 fw-bold mb-4">Envie sua Mensagem</h2>

                        <?php if ($enviado): ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="bi bi-check-circle-fill me-3 fs-3"></i>
                            <div>
                                <strong>Mensagem enviada com sucesso!</strong><br>
                                Agradecemos seu contato. Retornaremos em breve.
                            </div>
                        </div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label fw-semibold">Nome completo *</label>
                                    <input type="text" class="form-control form-control-lg" id="nome" name="nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold">E-mail *</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="assunto" class="form-label fw-semibold">Assunto *</label>
                                    <input type="text" class="form-control form-control-lg" id="assunto" name="assunto" required>
                                </div>
                                <div class="col-12">
                                    <label for="mensagem" class="form-label fw-semibold">Mensagem *</label>
                                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary-green btn-lg px-5">
                                        <i class="bi bi-send-fill me-2"></i>Enviar Mensagem
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ MAPA ═══════════════ -->
<section class="py-0">
    <div class="ratio ratio-21x9" style="max-height:400px">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.5!2d-47.86!3d-21.17!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sAv.%20Bandeirantes%2C%203900%20Ribeir%C3%A3o%20Preto!5e0!3m2!1spt-BR!2sbr!4v1700000000000"
            width="100%" height="400" style="border:0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Mapa — Departamento de Genética FMRP/USP"></iframe>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
