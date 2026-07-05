<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Funcionários — Departamento de Genética FMRP/USP';
$breadcrumb = ['Início', 'Equipe', 'Funcionários'];
$pageSubtitle = 'Equipe administrativa e técnica que dá suporte às atividades de ensino, pesquisa e extensão.';
$pageDesc = 'Funcionários administrativos e técnicos do Departamento de Genética FMRP/USP.';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page_header.php';

$FUNCIONARIOS = [
    ['nome' => 'Ana Paula Ferreira Lima', 'cargo' => 'Secretária Administrativa', 'email' => 'aplima@fmrp.usp.br', 'telefone' => '(16) 3315-9098', 'setor' => 'Secretaria'],
    ['nome' => 'Carlos Eduardo Mendes Rocha', 'cargo' => 'Técnico de Laboratório — Biologia Molecular', 'email' => 'cemrocha@fmrp.usp.br', 'telefone' => '(16) 3315-3150', 'setor' => 'Lab. Biologia Molecular de Fungos'],
    ['nome' => 'Fernanda Cristina da Silva Souza', 'cargo' => 'Analista de Sistemas', 'email' => 'fcsouza@fmrp.usp.br', 'telefone' => '(16) 3315-4503', 'setor' => 'Bioinformática'],
    ['nome' => 'João Batista Alves Nascimento', 'cargo' => 'Técnico de Laboratório — Citogenética', 'email' => 'jbnascimento@fmrp.usp.br', 'telefone' => '(16) 3315-3252', 'setor' => 'Lab. Citogenética'],
    ['nome' => 'Maria Helena Barbosa Cruz', 'cargo' => 'Auxiliar Administrativo', 'email' => 'mhcruz@fmrp.usp.br', 'telefone' => '(16) 3315-9098', 'setor' => 'Secretaria'],
    ['nome' => 'Patrícia Rodrigues Gomes', 'cargo' => 'Técnica de Laboratório — Histologia', 'email' => 'prgomes@fmrp.usp.br', 'telefone' => '(16) 3315-4914', 'setor' => 'Lab. Genética Humana'],
    ['nome' => 'Ricardo Antônio de Oliveira Martins', 'cargo' => 'Técnico de Laboratório — Bioquímica', 'email' => 'raomartins@fmrp.usp.br', 'telefone' => '(16) 3315-3157', 'setor' => 'Lab. Genética Bioquímica'],
    ['nome' => 'Sandra Mara Gonçalves Pereira', 'cargo' => 'Especialista em Laboratório — Sequenciamento', 'email' => 'smgpereira@fmrp.usp.br', 'telefone' => '(16) 3315-8714', 'setor' => 'Plataforma Multiusuária'],
    ['nome' => 'Tatiana Aparecida Fernandes Ribeiro', 'cargo' => 'Técnica em Enfermagem', 'email' => 'tafribeiro@fmrp.usp.br', 'telefone' => '(16) 3315-4914', 'setor' => 'Genética Humana e Médica'],
    ['nome' => 'Vagner Luiz Cardoso da Mata', 'cargo' => 'Técnico de Manutenção de Equipamentos', 'email' => 'vlcata@fmrp.usp.br', 'telefone' => '(16) 3315-3151', 'setor' => 'Infraestrutura'],
];
?>

<!-- ═══════════════ INTRO ═══════════════ -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="section-title">Equipe Técnica e Administrativa</h2>
                <p class="lead text-muted">A excelência do Departamento de Genética só é possível graças à dedicação de nossa equipe de funcionários.</p>
                <p>Nossos técnicos de laboratório, analistas, secretários e especialistas em infraestrutura garantem o funcionamento pleno das atividades de ensino, pesquisa e extensão, provendo suporte técnico especializado e mantendo a infraestrutura operacional.</p>
            </div>
            <div class="col-lg-5">
                <div class="card-custom h-100 bg-primary-green text-white">
                    <div class="card-body p-4">
                        <div class="stat-number text-white" style="font-size:3rem">10</div>
                        <div class="stat-label text-white-50">Profissionais dedicados</div>
                        <hr class="border-light">
                        <p class="mb-0">Técnicos, analistas e administrativos que dão suporte essencial às atividades do departamento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ LISTA ═══════════════ -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Corpo de Funcionários</h2>
        <div class="row g-4">
            <?php foreach ($FUNCIONARIOS as $func): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="card-body p-4">
                        <div class="func-avatar mb-3">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <h3 class="h6 fw-bold mb-1"><?= htmlspecialchars($func['nome']) ?></h3>
                        <p class="text-primary-green small fw-semibold mb-2"><?= htmlspecialchars($func['cargo']) ?></p>
                        <div class="border-top pt-2">
                            <p class="small text-muted mb-1"><i class="bi bi-diagram-3 me-2"></i><?= htmlspecialchars($func['setor']) ?></p>
                            <p class="small mb-1"><a href="mailto:<?= htmlspecialchars($func['email']) ?>" class="text-decoration-none"><i class="bi bi-envelope me-2"></i><?= htmlspecialchars($func['email']) ?></a></p>
                            <p class="small text-muted mb-0"><i class="bi bi-telephone me-2"></i><?= htmlspecialchars($func['telefone']) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
