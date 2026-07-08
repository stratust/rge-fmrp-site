<?php
/**
 * style-guide.php — Página de componentes do Design System RGE FMRP
 *
 * Esta página documenta TODOS os componentes visuais do site:
 * - Design Tokens (cores, tipografia, espaçamento, sombras)
 * - Card System (arquitipos e variantes)
 * - Botões e Links
 * - Badges e Tags
 * - Ícones
 * - Seções de layout
 * - Formulários
 *
 * Qualquer nova página deve usar SOMENTE estes componentes.
 * Se precisar de um novo card, veja se um destes já serve antes de criar.
 */
$pageTitle = 'Design System — Departamento de Genética FMRP/USP';
require __DIR__ . '/includes/header.php';
?>

<!-- ===== STYLE GUIDE HEADER ===== -->
<section class="page-header" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%); color: white;">
    <div class="container page-header-content">
        <h1 style="color: white;">Design System</h1>
        <p style="color: rgba(255,255,255,0.9);">Catálogo oficial de componentes. Use apenas estes componentes ao criar ou editar páginas.</p>
    </div>
</section>

<!-- ===== DESIGN TOKENS ===== -->
<section class="py-5">
    <div class="container">
        <div class="section-label mb-2">Fundação</div>
        <h2 class="mb-5" style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Design Tokens</h2>

        <!-- Colors -->
        <h3 class="mb-4" style="font-size: 1.3rem; font-weight: 700; color: #222;">Cores</h3>
        <div class="row g-3 mb-5">
            <div class="col-md-3 col-sm-6">
                <div style="background: var(--primary-green); border-radius: 12px; padding: 1.5rem; color: white; height: 120px; display: flex; flex-direction: column; justify-content: flex-end;">
                    <strong>--primary-green</strong>
                    <small style="opacity: 0.8;">#1a5c3a</small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div style="background: var(--dark-green); border-radius: 12px; padding: 1.5rem; color: white; height: 120px; display: flex; flex-direction: column; justify-content: flex-end;">
                    <strong>--dark-green</strong>
                    <small style="opacity: 0.8;">#0f3d26</small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div style="background: var(--light-green); border-radius: 12px; padding: 1.5rem; color: white; height: 120px; display: flex; flex-direction: column; justify-content: flex-end;">
                    <strong>--light-green</strong>
                    <small style="opacity: 0.8;">#2d7a52</small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div style="background: var(--bg-light); border-radius: 12px; padding: 1.5rem; color: #222; height: 120px; display: flex; flex-direction: column; justify-content: flex-end; border: 1px solid rgba(0,0,0,0.06);">
                    <strong>--bg-light</strong>
                    <small style="opacity: 0.6;">#f8f9fa</small>
                </div>
            </div>
        </div>

        <!-- Typography -->
        <h3 class="mb-4" style="font-size: 1.3rem; font-weight: 700; color: #222;">Tipografia (Fluida com clamp)</h3>
        <div class="rge-card p-4 mb-5">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Elemento</th>
                        <th>Uso</th>
                        <th>Clamp (mobile → desktop)</th>
                        <th>Exemplo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>h1 (hero)</code></td>
                        <td>Título principal de hero sections</td>
                        <td><code>clamp(1.75rem, 6vw, 3rem)</code></td>
                        <td><span style="font-size: clamp(1.75rem, 6vw, 3rem); font-weight: 700; color: #222;">Hero Title</span></td>
                    </tr>
                    <tr>
                        <td><code>h2 (section)</code></td>
                        <td>Títulos de seção</td>
                        <td><code>clamp(1.375rem, 5vw, 2.2rem)</code></td>
                        <td><span style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Section Title</span></td>
                    </tr>
                    <tr>
                        <td><code>h2 (page-header)</code></td>
                        <td>Título no page-header</td>
                        <td><code>clamp(1.625rem, 5.5vw, 2.8rem)</code></td>
                        <td><span style="font-size: clamp(1.625rem, 5.5vw, 2.8rem); font-weight: 700; color: #222;">Page Header</span></td>
                    </tr>
                    <tr>
                        <td><code>.lead</code></td>
                        <td>Parágrafo de destaque</td>
                        <td><code>clamp(0.95rem, 2.5vw, 1.25rem)</code></td>
                        <td><span style="font-size: clamp(0.95rem, 2.5vw, 1.25rem); color: #555;">Lead paragraph text</span></td>
                    </tr>
                    <tr>
                        <td><code>body</code></td>
                        <td>Texto de corpo</td>
                        <td><code>1rem (16px)</code></td>
                        <td><span style="font-size: 1rem; color: #555;">Body text at 16px</span></td>
                    </tr>
                    <tr>
                        <td><code>small</code></td>
                        <td>Metadados, captions</td>
                        <td><code>0.8rem – 0.9rem</code></td>
                        <td><span style="font-size: 0.85rem; color: #888;">Small caption text</span></td>
                    </tr>
                </tbody>
            </table>
            <p class="mt-3"><strong>Importante:</strong> Nunca use <code>font-size</code> dentro de <code>@media</code>. Sempre use <code>clamp(min, vw, max)</code>. O valor <code>max</code> = valor desktop original. O valor <code>min</code> = ~60% do desktop.</p>
        </div>

        <!-- Shadows -->
        <h3 class="mb-4" style="font-size: 1.3rem; font-weight: 700; color: #222;">Sombras (Escadas semânticas)</h3>
        <div class="row g-3 mb-5">
            <div class="col-md-3 col-sm-6">
                <div style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: var(--shadow-sm); height: 80px; border: 1px solid var(--border-soft);">
                    <small><strong>--shadow-sm</strong></small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: 0 3px 15px rgba(0,0,0,0.06); height: 80px;">
                    <small><strong>card base</strong></small><br>
                    <small style="color: #888;">0 3px 15px rgba(0,0,0,0.06)</small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: 0 8px 25px rgba(0,0,0,0.1); height: 80px;">
                    <small><strong>card hover</strong></small><br>
                    <small style="color: #888;">0 8px 25px rgba(0,0,0,0.1)</small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: var(--shadow-lg); height: 80px;">
                    <small><strong>--shadow-lg</strong></small>
                </div>
            </div>
        </div>

        <!-- Spacing -->
        <h3 class="mb-4" style="font-size: 1.3rem; font-weight: 700; color: #222;">Espaçamento (Grid 8pt)</h3>
        <div class="rge-card p-4 mb-5">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Token</th>
                        <th>Valor</th>
                        <th>Uso típico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><code>0.25rem</code></td><td>4px</td><td>Gaps mínimos</td></tr>
                    <tr><td><code>0.5rem</code></td><td>8px</td><td>Spacing entre ícone e texto</td></tr>
                    <tr><td><code>1rem</code></td><td>16px</td><td>Padding interno de cards compactos</td></tr>
                    <tr><td><code>1.5rem</code></td><td>24px</td><td>Padding interno de cards padrão</td></tr>
                    <tr><td><code>2rem</code></td><td>32px</td><td>Padding interno de cards espaçados</td></tr>
                    <tr><td><code>4rem</code></td><td>64px</td><td>Padding vertical de seções</td></tr>
                </tbody>
            </table>
        </div>

        <!-- Border Radius -->
        <h3 class="mb-4" style="font-size: 1.3rem; font-weight: 700; color: #222;">Border Radius</h3>
        <div class="rge-card p-4 mb-5">
            <table class="table table-sm">
                <thead><tr><th>Componente</th><th>Valor</th></tr></thead>
                <tbody>
                    <tr><td>Cards</td><td><code>12px</code> (padrão), <code>16px</code> (hero/feature)</td></tr>
                    <tr><td>Botões</td><td><code>50px</code> (pill shape)</td></tr>
                    <tr><td>Badges/Tags</td><td><code>50px</code> (pill), <code>20px</code> (tag)</td></tr>
                    <tr><td>Ícones</td><td><code>10–14px</code></td></tr>
                    <tr><td>Inputs</td><td><code>10px</code></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ===== CARD SYSTEM ===== -->
<section class="py-5" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-label mb-2">Arquitetura</div>
        <h2 class="mb-3" style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Card System</h2>
        <p class="lead mb-5">5 arquitipos base. Tudo no site é uma variação destes. <strong>Não crie um novo tipo de card sem justificativa.</strong></p>

        <!-- Arquétipo 1: Content Card -->
        <h3 class="mb-2" style="font-size: 1.3rem; font-weight: 700; color: #222;">1. Content Card <code>.rge-card</code></h3>
        <p class="text-muted mb-4">Base de todos os cards. Fundo branco, border-radius 12px, sombra suave, hover levanta. <strong>Use sempre a classe <code>rge-card</code></strong> como base.</p>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="rge-card p-4" style="height: 100%;">
                    <h5 class="mb-2" style="font-weight: 600; color: #222;">Título do card</h5>
                    <p style="font-size: 0.9rem; color: #666; line-height: 1.6; margin: 0;">Conteúdo do card base. Use este para informação genérica que não tem imagem nem ícone.</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="rge-card p-4" style="background: #1e1e2e; color: #cdd6f4;">
                    <small style="color: #89b4fa;">HTML:</small>
<pre style="font-size: 0.8rem; margin: 0; color: #cdd6f4;"><code>&lt;div class="rge-card p-4"&gt;
    &lt;h5&gt;Título do card&lt;/h5&gt;
    &lt;p&gt;Conteúdo...&lt;/p&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>

        <!-- Arquétipo 2: Icon Card -->
        <h3 class="mb-2" style="font-size: 1.3rem; font-weight: 700; color: #222;">2. Icon Card <code>.rge-card</code> + <code>.icon-box</code></h3>
        <p class="text-muted mb-4">Card com ícone no topo. Variantes atuais: <code>info-card</code>, <code>contact-card</code>, <code>equipment-card</code>, <code>partner-card</code>. Use o pattern abaixo — todas são equivalentes.</p>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="info-card rge-card" style="height: 100%;">
                    <div class="icon-box"><i class="bi bi-info-circle"></i></div>
                    <h5>Information</h5>
                    <p>Este é o padrão de icon card usado em info-card, contact-card, equipment-card, partner-card, step-card.</p>
                    <a href="#">Saiba mais →</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card rge-card" style="height: 100%;">
                    <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                    <h5>Contato</h5>
                    <p>Email e telefone.</p>
                    <a href="#">contato@rge.fmrp.usp.br</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="rge-card p-4" style="background: #1e1e2e; color: #cdd6f4;">
                    <small style="color: #89b4fa;">HTML pattern:</small>
<pre style="font-size: 0.8rem; margin: 0; color: #cdd6f4;"><code>&lt;div class="rge-card p-4"&gt;
    &lt;div class="icon-box"&gt;
        &lt;i class="bi bi-*"&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;h5&gt;Título&lt;/h5&gt;
    &lt;p&gt;Descrição&lt;/p&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>

        <!-- Arquétipo 3: Media Card -->
        <h3 class="mb-2" style="font-size: 1.3rem; font-weight: 700; color: #222;">3. Media Card <code>.rge-card</code> + imagem</h3>
        <p class="text-muted mb-4">Card com imagem no topo. Variantes: <code>news-card</code>, <code>course-card</code>, <code>project-card</code>, <code>program-card</code>, <code>featured-card</code>. Todas seguem o mesmo pattern.</p>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="course-card rge-card" style="height: 100%; display: flex; flex-direction: column;">
                    <div style="height: 140px; background: linear-gradient(135deg, var(--primary-green), var(--light-green)); position: relative; overflow: hidden;">
                        <span style="position: absolute; top: 12px; left: 12px; background: var(--primary-green); color: white; padding: 0.3rem 0.9rem; border-radius: 50px; font-size: 0.7rem; font-weight: 600; text-transform: uppercase;">Badge</span>
                    </div>
                    <div style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <div style="font-size: 0.8rem; color: #888; margin-bottom: 0.5rem;"><i class="bi bi-calendar" style="color: var(--primary-green);"></i> Data</div>
                        <h5 style="font-size: 1.05rem; font-weight: 600; color: #222; margin-bottom: 0.5rem;">Media Card Title</h5>
                        <p style="font-size: 0.85rem; color: #666; line-height: 1.6; flex-grow: 1;">Descrição do conteúdo do media card.</p>
                        <a href="#" class="course-link" style="margin-top: 0.5rem;">Saiba mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="rge-card p-4" style="background: #1e1e2e; color: #cdd6f4;">
                    <small style="color: #89b4fa;">HTML pattern:</small>
<pre style="font-size: 0.8rem; margin: 0; color: #cdd6f4;"><code>&lt;div class="rge-card" style="overflow: hidden"&gt;
    &lt;div style="height: 200px; overflow: hidden"&gt;
        &lt;img src="..." style="object-fit: cover; width: 100%; height: 100%"&gt;
        &lt;span class="badge-pill"&gt;Badge&lt;/span&gt;
    &lt;/div&gt;
    &lt;div style="padding: 1.5rem"&gt;
        &lt;h5&gt;Título&lt;/h5&gt;
        &lt;p&gt;Descrição&lt;/p&gt;
        &lt;a class="feature-link"&gt;Link →&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>

        <!-- Arquétipo 4: Profile Card -->
        <h3 class="mb-2" style="font-size: 1.3rem; font-weight: 700; color: #222;">4. Profile Card <code>.docente-card</code> / <code>.func-card</code></h3>
        <p class="text-muted mb-4">Card de pessoa com foto, nome, cargo e Lattes. Variantes: <code>docente-card</code> (com foto), <code>func-card</code> (sem foto ou com avatar inicial).</p>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="func-card rge-card" style="height: 100%;">
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="width: 55px; height: 55px; background: rgba(26,92,58,0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-green); font-weight: 600; font-size: 1.3rem; flex-shrink: 0;">JD</div>
                        <div>
                            <h5 style="font-size: 1rem; font-weight: 600; color: #222; margin-bottom: 0.2rem;">Jane Doe</h5>
                            <div style="font-size: 0.8rem; color: var(--primary-green); font-weight: 500; margin-bottom: 0.4rem;">Pesquisadora</div>
                            <a href="#" style="font-size: 0.8rem; color: var(--primary-green); font-weight: 500;">Lattes →</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="rge-card p-4" style="background: #1e1e2e; color: #cdd6f4;">
                    <small style="color: #89b4fa;">HTML pattern:</small>
<pre style="font-size: 0.8rem; margin: 0; color: #cdd6f4;"><code>&lt;div class="rge-card p-3"&gt;
    &lt;div style="display: flex; gap: 1rem"&gt;
        &lt;img src="foto.jpg" class="profile-photo"&gt;
        &lt;div&gt;
            &lt;h5&gt;Nome&lt;/h5&gt;
            &lt;div class="role"&gt;Cargo&lt;/div&gt;
            &lt;a href="lattes"&gt;Lattes →&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>

        <!-- Arquétipo 5: Highlight/Info Box -->
        <h3 class="mb-2" style="font-size: 1.3rem; font-weight: 700; color: #222;">5. Highlight Box <code>.highlight-box</code></h3>
        <p class="text-muted mb-4">Box de destaque para informações importantes, não é um card clicável.</p>
        <div class="highlight-box mb-5">
            <h3><i class="bi bi-info-circle me-2"></i>Box de Informação</h3>
            <p>Use para destacar texto importante dentro de uma seção. Tem fundo verde claro e borda verde.</p>
        </div>

        <!-- Indexação de variantes -->
        <h3 class="mb-3" style="font-size: 1.3rem; font-weight: 700; color: #222;">Mapeamento: Classes legadas → Arquétipos</h3>
        <div class="rge-card p-4">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Classe legada</th>
                        <th>Arquétipo</th>
                        <th>Onde é usada</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><code>rge-card</code></td><td>Content Card (base)</td><td>Todas as páginas</td><td><span class="badge bg-success">Oficial</span></td></tr>
                    <tr><td><code>info-card</code></td><td>Icon Card</td><td>ensino, extensão, pos-grad</td><td><span class="badge bg-success">Ícone + texto</span></td></tr>
                    <tr><td><code>contact-card</code></td><td>Icon Card</td><td>contato</td><td><span class="badge bg-success">Ícone + texto</span></td></tr>
                    <tr><td><code>equipment-card</code></td><td>Icon Card</td><td>infraestrutura</td><td><span class="badge bg-success">Ícone + texto</span></td></tr>
                    <tr><td><code>partner-card</code></td><td>Icon Card</td><td>projetos</td><td><span class="badge bg-success">Ícone + texto</span></td></tr>
                    <tr><td><code>step-card</code></td><td>Icon Card</td><td>infraestrutura (acesso)</td><td><span class="badge bg-success">Ícone + texto</span></td></tr>
                    <tr><td><code>stat-card</code></td><td>Icon Card (centro)</td><td>infraestrutura</td><td><span class="badge bg-warning text-dark">Centralizado</span></td></tr>
                    <tr><td><code>news-card</code></td><td>Media Card</td><td>index (carousel)</td><td><span class="badge bg-success">Imagem + texto</span></td></tr>
                    <tr><td><code>course-card</code></td><td>Media Card</td><td>extensão</td><td><span class="badge bg-success">Imagem + texto</span></td></tr>
                    <tr><td><code>project-card</code></td><td>Media Card</td><td>projetos</td><td><span class="badge bg-success">Imagem + texto</span></td></tr>
                    <tr><td><code>program-card</code></td><td>Media Card</td><td>ensino, pos-grad</td><td><span class="badge bg-success">Imagem + texto</span></td></tr>
                    <tr><td><code>featured-card</code></td><td>Media Card</td><td>index (destaque)</td><td><span class="badge bg-success">Imagem + texto</span></td></tr>
                    <tr><td><code>docente-card</code></td><td>Profile Card</td><td>docentes</td><td><span class="badge bg-success">Foto + dados</span></td></tr>
                    <tr><td><code>func-card</code></td><td>Profile Card</td><td>funcionários</td><td><span class="badge bg-success">Avatar + dados</span></td></tr>
                    <tr><td><code>team-card</code></td><td>Profile Card</td><td>contato (equipe)</td><td><span class="badge bg-success">Avatar + dados</span></td></tr>
                    <tr><td><code>highlight-box</code></td><td>Highlight Box</td><td>pos-grad, genmed</td><td><span class="badge bg-success">Box de info</span></td></tr>
                    <tr><td><code>comissao-card</code></td><td>Content Card</td><td>chefia</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>council-card</code></td><td>Content Card</td><td>comissões</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>commission-card</code></td><td>Content Card</td><td>comissões</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>calendar-card</code></td><td>Content Card</td><td>comissões</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>norm-card</code></td><td>Icon Card (flex)</td><td>comissões</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>rotation-card</code></td><td>Content Card (border-left)</td><td>residência</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>pub-card</code></td><td>Content Card</td><td>publicações</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>doc-card</code></td><td>Icon Card (flex)</td><td>residência</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>admission-card</code></td><td>Content Card (bg-light)</td><td>pos-grad</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>infra-card</code></td><td>Media Card</td><td>infraestrutura</td><td><span class="badge bg-success">Imagem + texto</span></td></tr>
                    <tr><td><code>research-card</code></td><td>Icon Card</td><td>infraestrutura</td><td><span class="badge bg-success">Ícone + texto</span></td></tr>
                    <tr><td><code>platform-card</code></td><td>Media Card (gradient header)</td><td>infraestrutura</td><td><span class="badge bg-info text-dark">Especial</span></td></tr>
                    <tr><td><code>funding-card</code></td><td>Icon Card</td><td>projetos</td><td><span class="badge bg-success">Ícone + texto</span></td></tr>
                    <tr><td><code>partnership-card</code></td><td>Icon Card</td><td>projetos</td><td><span class="badge bg-success">Ícone + texto</span></td></tr>
                </tbody>
            </table>
            <p class="mt-3"><strong>Verde:</strong> usa o arquétipo base diretamente. <strong>Azul:</strong> tem customizações específicas (layout institucional), mas visualmente segue o mesmo DNA.</p>
        </div>
    </div>
</section>

<!-- ===== BUTTONS ===== -->
<section class="py-5">
    <div class="container">
        <div class="section-label mb-2">Ações</div>
        <h2 class="mb-5" style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Botões & Links</h2>

        <h3 class="mb-4" style="font-size: 1.3rem; font-weight: 700; color: #222;">Botões Primários (Pill Shape)</h3>
        <div class="rge-card p-4 mb-5">
            <div class="d-flex flex-wrap gap-3 mb-4">
                <a href="#" class="btn btn-green">Botão Verde <i class="bi bi-arrow-right ms-1"></i></a>
                <a href="#" class="btn btn-submit">Submit</a>
                <a href="#" class="btn-white">Botão Branco</a>
                <a href="#" class="btn-outline-white">Outline Branco</a>
            </div>
            <div style="background: #1e1e2e; color: #cdd6f4; border-radius: 8px; padding: 1rem;">
<pre style="font-size: 0.8rem; margin: 0; color: #cdd6f4;"><code>&lt;a class="btn btn-green"&gt;Texto &lt;i class="bi bi-arrow-right ms-1"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="btn-submit"&gt;Submit&lt;/a&gt;
&lt;a class="btn-white"&gt;Branco&lt;/a&gt;
&lt;a class="btn-outline-white"&gt;Outline Branco&lt;/a&gt;</code></pre>
            </div>
            <table class="table table-sm mt-3">
                <thead><tr><th>Classe</th><th>Uso</th><th>Quando</th></tr></thead>
                <tbody>
                    <tr><td><code>btn btn-green</code></td><td>CTA principal</td><td>Botão padrão da maioria das páginas</td></tr>
                    <tr><td><code>btn-submit</code></td><td>Submit de formulário</td><td>Apenas em forms de contato</td></tr>
                    <tr><td><code>btn-white</code></td><td>Botão em fundo verde</td><td>CTA sections, social-cta</td></tr>
                    <tr><td><code>btn-outline-white</code></td><td>Botão secundário em fundo verde</td><td>Quando há 2 CTAs em fundo verde</td></tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-4" style="font-size: 1.3rem; font-weight: 700; color: #222;">Links de Ação</h3>
        <div class="rge-card p-4 mb-5">
            <div class="d-flex flex-column gap-3 mb-4">
                <a href="#" class="feature-link">Saiba Mais →</a>
                <a href="#" class="course-link">Ver curso <i class="bi bi-arrow-right"></i></a>
                <a href="#" class="project-link">Ver projeto <i class="bi bi-arrow-right"></i></a>
            </div>
            <table class="table table-sm">
                <thead><tr><th>Classe</th><th>Quando</th></tr></thead>
                <tbody>
                    <tr><td><code>feature-link</code></td><td>Link genérico "Saiba Mais" dentro de cards e seções</td></tr>
                    <tr><td><code>course-link</code> / <code>project-link</code></td><td>Mesma coisa que feature-link, usar feature-link preferencialmente</td></tr>
                </tbody>
            </table>
            <p class="mt-2"><strong>Nota:</strong> <code>course-link</code>, <code>project-link</code>, <code>program-link</code> são visualmente idênticos a <code>feature-link</code>. Use <code>feature-link</code> em código novo.</p>
        </div>
    </div>
</section>

<!-- ===== BADGES & TAGS ===== -->
<section class="py-5" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-label mb-2">Metadados</div>
        <h2 class="mb-5" style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Badges & Tags</h2>
        <div class="rge-card p-4">
            <div class="d-flex flex-wrap gap-3 mb-4 align-items-center">
                <span class="program-badge">Program Badge</span>
                <span class="course-badge">Course Badge</span>
                <span class="course-badge online">Online</span>
                <span class="course-badge hybrid">Híbrido</span>
                <span class="project-status active">Ativo</span>
                <span class="project-status completed">Concluído</span>
                <span class="project-status new">Novo</span>
                <span class="discipline-tag">Optativa</span>
                <span class="project-tag">Genética</span>
                <span class="badge-highlight">Destaque</span>
            </div>
            <table class="table table-sm">
                <thead><tr><th>Classe</th><th>Tipo</th><th>Uso</th></tr></thead>
                <tbody>
                    <tr><td><code>program-badge</code></td><td>Pill verde</td><td>Badge sobre imagem em program cards</td></tr>
                    <tr><td><code>course-badge</code></td><td>Pill verde (variantes: online=azul, hybrid=roxo)</td><td>Sobre imagem em course cards</td></tr>
                    <tr><td><code>project-status</code></td><td>Pill com cor por status (active=verde, completed=cinza, new=azul)</td><td>Sobre imagem em project cards</td></tr>
                    <tr><td><code>discipline-tag</code></td><td>Pill verde claro</td><td>Tag de modalidade (Optativa/Obrigatória)</td></tr>
                    <tr><td><code>project-tag</code></td><td>Pill verde claro</td><td>Tag de categoria de projeto</td></tr>
                    <tr><td><code>badge-highlight</code></td><td>Pill verde claro em fundos escuros</td><td>Publicação destacada</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ===== ICON PATTERNS ===== -->
<section class="py-5">
    <div class="container">
        <div class="section-label mb-2">Pictogramas</div>
        <h2 class="mb-5" style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Padrões de Ícones</h2>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="rge-card p-4 text-center">
                    <div class="icon-box mx-auto mb-3"><i class="bi bi-info-circle"></i></div>
                    <h5>Icon Box <code>.icon-box</code></h5>
                    <p style="font-size: 0.85rem; color: #666;">Quadrado com fundo verde claro, ícone verde. Tamanho 50×50px, radius 10px.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="rge-card p-4 text-center">
                    <div class="program-icon mx-auto mb-3"><i class="bi bi-mortarboard"></i></div>
                    <h5>Gradient Icon <code>.program-icon</code></h5>
                    <p style="font-size: 0.85rem; color: #666;">Quadrado com gradiente verde, ícone branco. Tamanho 56×56px, radius 14px.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="rge-card p-4 text-center">
                    <div class="contact-icon mx-auto mb-3"><i class="bi bi-envelope"></i></div>
                    <h5>Contact Icon <code>.contact-icon</code></h5>
                    <p style="font-size: 0.85rem; color: #666;">Idêntico ao icon-box. Use icon-box preferencialmente.</p>
                </div>
            </div>
        </div>

        <div class="rge-card p-4">
            <h5 class="mb-3">Ícones Bootstrap disponíveis (biblioteca: Bootstrap Icons)</h5>
            <div class="d-flex flex-wrap gap-2" style="font-size: 1.5rem; color: var(--primary-green);">
                <i class="bi bi-mortarboard"></i>
                <i class="bi bi-award"></i>
                <i class="bi bi-lightning-charge"></i>
                <i class="bi bi-info-circle"></i>
                <i class="bi bi-envelope"></i>
                <i class="bi bi-telephone"></i>
                <i class="bi bi-geo-alt"></i>
                <i class="bi bi-clock"></i>
                <i class="bi bi-calendar"></i>
                <i class="bi bi-file-text"></i>
                <i class="bi bi-book"></i>
                <i class="bi bi-person"></i>
                <i class="bi bi-people"></i>
                <i class="bi bi-arrow-right"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-check-circle"></i>
                <i class="bi bi-globe"></i>
                <i class="bi bi-dna"></i>
                <i class="bi bi-search"></i>
                <i class="bi bi-download"></i>
                <i class="bi bi-credit-card"></i>
                <i class="bi bi-house"></i>
                <i class="bi bi-bank"></i>
            </div>
            <p class="mt-3"><a href="https://icons.getbootstrap.com/" target="_blank">icons.getbootstrap.com</a> — referência completa. Sempre use <code>bi bi-nome</code>.</p>
        </div>
    </div>
</section>

<!-- ===== LAYOUT SECTIONS ===== -->
<section class="py-5" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-label mb-2">Estrutura</div>
        <h2 class="mb-5" style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Seções de Layout</h2>

        <div class="rge-card p-4 mb-4">
            <h5>Page Header <code>.page-header</code></h5>
            <p style="font-size: 0.9rem; color: #666;">Fundo verde com gradiente, breadcrumb, título h1 e subtítulo. <strong>Toda página tem.</strong></p>
        </div>

        <div class="rge-card p-4 mb-4">
            <h5>Section Label <code>.section-label</code></h5>
            <div class="section-label mb-2">Exemplo de label</div>
            <p style="font-size: 0.9rem; color: #666;">Label pequeno acima do título de cada seção. Texto verde, uppercase, letter-spacing.</p>
        </div>

        <div class="rge-card p-4 mb-4">
            <h5>Alternância de fundo de seção</h5>
            <p style="font-size: 0.9rem; color: #666;">Seções alternam entre <code>background: white</code> e <code>background: var(--bg-light)</code>. Sempre use <code>padding: 4rem 0</code> (mobile: <code>3rem 0</code>).</p>
        </div>

        <div class="rge-card p-4 mb-4">
            <h5>CTA Section <code>.cta-section</code></h5>
            <p style="font-size: 0.9rem; color: #666;">Seção de fundo verde no final de páginas para call-to-action. Contém título, texto e botão branco.</p>
        </div>

        <div class="rge-card p-4">
            <h5>Grid de cards (Bootstrap)</h5>
            <p style="font-size: 0.9rem; color: #666;">Use <code>.row.g-4</code> com colunas Bootstrap:</p>
            <table class="table table-sm">
                <thead><tr><th>Contexto</th><th>Classes</th></tr></thead>
                <tbody>
                    <tr><td>3-4 cards por linha</td><td><code>col-md-6 col-lg-4</code> ou <code>col-md-6 col-lg-3</code></td></tr>
                    <tr><td>2 cards por linha</td><td><code>col-md-6</code></td></tr>
                    <tr><td>Timeline/lista</td><td><code>col-12</code></td></tr>
                </tbody>
            </table>
            <p class="mt-2"><strong>Importante:</strong> Sempre adicione <code>g-4</code> (gap) no <code>.row</code>. Sempre use <code>h-100</code> no card para alinhar alturas.</p>
        </div>
    </div>
</section>

<!-- ===== FORMS ===== -->
<section class="py-5">
    <div class="container">
        <div class="section-label mb-2">Input</div>
        <h2 class="mb-5" style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Formulários</h2>
        <div class="rge-card p-4">
            <form class="contact-form">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Seu nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Assunto</label>
                    <select class="form-select">
                        <option>Selecione...</option>
                        <option>Dúvida</option>
                        <option>Sugestão</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensagem</label>
                    <textarea class="form-control" rows="3" placeholder="Sua mensagem"></textarea>
                </div>
                <button type="button" class="btn-submit">Enviar <i class="bi bi-send ms-1"></i></button>
            </form>
            <p class="mt-3"><strong>Classes:</strong> <code>.contact-form</code> wrapper, inputs com <code>.form-control</code> / <code>.form-select</code>, focus com borda verde. Use <code>.btn-submit</code> no botão.</p>
        </div>
    </div>
</section>

<!-- ===== RULES ===== -->
<section class="py-5" style="background: var(--bg-light);">
    <div class="container">
        <div class="section-label mb-2">Regras Críticas</div>
        <h2 class="mb-5" style="font-size: clamp(1.375rem, 5vw, 2.2rem); font-weight: 700; color: #222;">Regras Para Novas Páginas</h2>
        <div class="rge-card p-4">
            <ol style="line-height: 2;">
                <li><strong>Sempre comece com:</strong> <code>$pageTitle</code> → <code>require header.php</code> → conteúdo → <code>require footer.php</code></li>
                <li><strong>Toda página tem <code>.page-header</code></strong> com breadcrumb e título h1.</li>
                <li><strong>Use <code>clamp()</code> para tipografia</strong> — nunca <code>font-size</code> em <code>@media</code>.</li>
                <li><strong>Use <code>.rge-card</code> como base</strong> para qualquer card novo. Adicione variantes com classes auxiliares, não recrie do zero.</li>
                <li><strong>Seções alternam fundo</strong>: white → <code>var(--bg-light)</code> → white.</li>
                <li><strong>Use <code>.row.g-4</code></strong> + colunas Bootstrap para grids.</li>
                <li><strong>Adicione <code>h-100</code></strong> em todos os cards dentro de colunas para alinhar alturas.</li>
                <li><strong>Use <code>.section-label</code></strong> acima de cada título h2 de seção.</li>
                <li><strong>Hover de card</strong>: sempre <code>translateY(-3px)</code> + sombra mais forte. Nunca <code>scale()</code>.</li>
                <li><strong>Links dentro de cards</strong>: use <code>.feature-link</code>, não crie link custom.</li>
                <li><strong>Antes de criar um componente novo</strong>, verifique se um destes já atende. Se criar, adicione nesta página.</li>
                <li><strong>Ícones</strong>: sempre <code>bi bi-nome</code> (Bootstrap Icons).</li>
                <li><strong>Bordas arredondadas</strong>: cards 12px, hero/feature 16px, botões 50px, badges 50px, tags 20px.</li>
                <li><strong>Antes de deploy</strong>: valide com W3C (0 erros), teste mobile (375px), faça screenshot.</li>
            </ol>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
