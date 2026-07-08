# AGENTS.md — RGE FMRP Site

> Guia completo para qualquer agente (AI ou humano) trabalhar neste repositório.
> Leia este arquivo ANTES de fazer qualquer alteração.

## O que é este site

Site do **Departamento de Genética da FMRP/USP** (Faculdade de Medicina de
Ribeirão Preto, Universidade de São Paulo). Réplica moderna e aprimorada do
site original em `rge.fmrp.usp.br/nrge/`.

- **Domínio de produção**: https://rge.tyko.casa
- **Repo**: https://github.com/stratust/rge-fmrp-site
- **Referência visual (original)**: https://rge.fmrp.usp.br/nrge/

## Stack

| Camada | Tecnologia |
|---|---|
| Backend | PHP 8.3 (Apache, sem framework) |
| CSS | Bootstrap 5.3.2 + `style.css` unificado (~5500 linhas) |
| Ícones | Bootstrap Icons 1.11.3 (`bi bi-*`) |
| Carrosséis | JS vanilla (sem Swiper/jQuery para o carousel de notícias) |
| Tradutor | Google Translate widget (customizado em `rgetradutor.css`) |
| Deploy | Docker (php:8.3-apache) → TrueNAS → Cloudflare |
| Versionamento CSS | `?v=N` no `<link>` do `style.css` (única linha em `includes/header.php`) |

## Estrutura de Arquivos

```
├── *.php (20 páginas)       # Cada uma: $pageTitle + require header + conteúdo + require footer
├── includes/
│   ├── header.php           # DOCTYPE + head + CSS + navbar + dropdown JS
│   └── footer.php           # Footer + scripts (Bootstrap, Swiper) + </body></html>
├── assets/
│   ├── css/
│   │   ├── style.css        # CSS UNIFICADO (todo o site — nunca criar CSS per-page)
│   │   └── rgetradutor.css  # Widget Google Translate
│   └── img/
│       └── logo_genetica_20260612.webp
├── Dockerfile               # php:8.3-apache
└── .htaccess
```

## Arquitetura de Includes (NUNCA quebrar)

Cada página PHP segue EXATAMENTE este padrão:

```php
<?php
$pageTitle = 'Título — Departamento de Genética FMRP/USP';
require __DIR__ . '/includes/header.php';
?>
<!-- conteúdo único da página -->
<?php require __DIR__ . '/includes/footer.php'; ?>
```

**⚠️ CRÍTICO**: Nunca sobrescrever PHPs do repo com versões "flat" do servidor
de produção (sem `require`). O commit `749464f` cometeu esse erro e destruiu a
arquitetura. Restaurado em `98006fd`.

---

## IDENTIDADE VISUAL (DNA do Site)

Esta seção define a identidade visual. **TODA página nova deve seguir estes
padrões.** Se uma página destoa, é bug — não "criatividade".

### Paleta de Cores

```css
:root {
  --primary-green: #1a5c3a;    /* Verde principal — botões, ícones, headings */
  --dark-green: #0f3d26;       /* Verde escuro — footer, page-header bg */
  --light-green: #2d7a52;      /* Verde claro — gradientes, hover states */
  --accent-green: #4ade80;     /* Verde destaque — badges, dots de timeline */
  --bg-light: #f8f9fa;         /* Fundo claro de seções alternadas */
  --text-dark: #222;           /* Headings */
  --text-base: #333;           /* Body text */
  --text-muted: #666;          /* Texto secundário */
}
```

| Uso | Cor | Hex |
|---|---|---|
| Fundo da página | Branco | `#ffffff` |
| Fundo de seção alternada | Cinza muito claro | `#f8f9fa` |
| Headers de página (hero) | Gradiente verde | `#0f3d26 → #1a5c3a` |
| Footer | Verde escuro | `#0f3d26` |
| Texto principal | Quase-preto | `#333` |
| Headings | Preto | `#222` |
| Links e destaques | Verde principal | `#1a5c3a` |
| Badges/destaques | Verde-claro vibrante | `#4ade80` |

### Tipografia

**Fonte**: Inter (Google Fonts), sans-serif.

**Escala tipográfica** (usar `clamp()` para fluidez):

| Elemento | Desktop | Mobile | CSS |
|---|---|---|---|
| Hero h1 | 3rem (48px) | 1.75rem (28px) | `clamp(1.75rem, 6vw, 3rem)` |
| Page header h1 | 2.8rem (45px) | 1.625rem (26px) | `clamp(1.625rem, 5.5vw, 2.8rem)` |
| Section h2 | 2.2rem (35px) | 1.375rem (22px) | `clamp(1.375rem, 5vw, 2.2rem)` |
| Card/section h2 alt | 2rem (32px) | 1.25rem (20px) | `clamp(1.25rem, 4.5vw, 2rem)` |
| Stats number | 2rem (32px) | 1.25rem (20px) | `clamp(1.25rem, 4.5vw, 2rem)` |
| Subtítulo | 1.5rem (24px) | 1rem (16px) | `clamp(1rem, 3.5vw, 1.5rem)` |
| Hero subtitle | 1.5rem (24px) | 1rem (16px) | `clamp(1rem, 3.5vw, 1.5rem)` |
| Heading médio | 1.4rem (22px) | 0.9375rem (15px) | `clamp(0.9375rem, 3vw, 1.4rem)` |
| Card title (h3) | 1.3rem (21px) | 1.1rem (18px) | — (não precisa clamp) |
| Corpo de texto | 0.9rem (14px) | — | fixo |
| Texto secundário | 0.85rem (14px) | — | fixo |
| Labels/meta | 0.8rem (13px) | — | fixo |
| Badges | 0.7rem (11px) | — | fixo |

**Regra**: textos >18px usam `clamp()`. Textos ≤18px podem ser fixos.
**NUNCA** colocar `font-size` dentro de `@media`.

### Espaçamento (8pt Grid)

Todos os valores de padding/margin/gap devem ser múltiplos de 4 ou 8:

```
0.25rem (4px)  •  0.5rem (8px)  •  0.75rem (12px)  •  1rem (16px)
1.25rem (20px) •  1.5rem (24px) •  2rem (32px)     •  2.5rem (40px)
3rem (48px)    •  4rem (64px)
```

| Contexto | Desktop | Mobile |
|---|---|---|
| Section vertical padding | `4rem 0` (64px) | `2.5rem 0` (40px) |
| Card internal padding | `2rem` (32px) | `1.25rem` (20px) |
| Grid gap | `24px` | `12-16px` |
| Page header padding | `100px 0 80px` | `50px 0 40px` |
| Card border-radius | `12px` | — |

### Border Radius

| Elemento | Valor |
|---|---|
| Cards (feature, program, docente) | `12px` |
| Chefia cards | `24px` |
| Badges | `50px` (pill) |
| Botões | `50px` (pill) |
| Page header | `0` (full-width) |
| Timeline content | `16px` |

### Sombras (Elevation)

```css
--shadow-sm: 0 3px 15px rgba(0,0,0,0.06);   /* Cards em grid */
--shadow-md: 0 8px 25px rgba(0,0,0,0.08);    /* Cards elevados */
--shadow-lg: 0 15px 40px rgba(0,0,0,0.10);   /* Hover state */
```

### Botões

```css
/* Botão principal */
.btn-green {
  background: var(--primary-green);
  color: white;
  border: 2px solid var(--primary-green);
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  font-weight: 500;
  font-size: 0.9rem;
}
/* Hover: background → --dark-green, translateY(-2px) */

/* Botão outline (sobre fundo escuro) */
.btn-outline-light-custom {
  background: rgba(255,255,255,0.15);
  border: 1px solid rgba(255,255,255,0.4);
  /* resto igual ao btn-green */
}
```

### Componentes Recorrentes

#### Page Header (toda página interna)
- Fundo: `linear-gradient(135deg, var(--dark-green), var(--primary-green))`
- Texto: branco
- Inclui breadcrumb (Início / Seção / Página)
- h1 + subtítulo
- Padrão de overlay SVG sutil (plus signs pattern, opacity 0.03)

#### Cards
- **Fundo**: branco (NUNCA cinza — o `.bg-light` é para SECTIONS, não cards)
- **Border**: `1px solid rgba(0,0,0,0.04)`
- **Shadow**: `var(--shadow-sm)` no estado normal
- **Hover**: `translateY(-5px)` + `var(--shadow-lg)`
- **Imagens**: vão edge-to-edge (`overflow: hidden` no card, NUNCA `padding` no card)
- **Padding interno**: no `.card-body` apenas, nunca no card container

#### Stats Bar
- Fundo branco, border-bottom
- Números em `--primary-green`, grande, bold
- Labels em uppercase, pequenas, `--text-muted`

#### Section Headers
- `section-label` (uppercase, verde, pequeno, com `::before` linha verde)
- `h2` grande e bold
- Alternar fundo entre branco e `--bg-light` entre seções

#### Footer
- Fundo `--dark-green`
- Logo branco (filter invert)
- Links em `rgba(255,255,255,0.7)`, hover branco
- Social icons: círculos com borda branca translúcida
- Bottom bar: copyright + links legais

### Navbar

- Fundo branco, shadow sutil
- Logo + "FMRP • USP" + "DEPARTAMENTO DE GENÉTICA"
- Links em uppercase, `0.85rem`, peso 500
- Dropdowns: hover abre (desktop), click abre (mobile)
- **⚠️ Dropdowns DEVEM usar `<button>`**, nunca `<span>` (bug de double-tap)
- Bandeiras de tradução (PT/EN/ES) no canto direito
- Hamburger em mobile (Bootstrap collapse)

### Animações e Transições

- **Hover em cards**: `transform: translateY(-5px)` + shadow maior, duração `0.3s ease`
- **Hover em imagens**: `transform: scale(1.05-1.08)`, duração `0.4-0.5s`
- **Hover em links**: gap aumenta de 5px para 10px (flex), `0.3s`
- **NUNCA**: animações que mudam cor de fundo drasticamente, bounce, ou durações >0.5s

### Grid System

Usar Bootstrap grid (`row`, `col-*`):

| Contexto | Desktop | Tablet | Mobile |
|---|---|---|---|
| Feature cards | 4 colunas | 2 colunas | 1 coluna |
| Program cards | 3 colunas | — | 1 coluna |
| Docente cards | 3-4 colunas | 2 colunas | 1 coluna |
| Stats | 4-6 colunas | 2-3 colunas | 2 colunas |

Usar `.row.g-4` (gap de 24px) por padrão.

---

## REGRAS CRÍTICAS (leia antes de alterar CSS)

1. **TODO CSS em `style.css`** — nunca criar CSS per-page
2. **Bump `?v=N`** no `header.php` a cada mudança CSS
3. **Comparar com o original** antes de mudar propriedades: `curl -sk 'https://rge.fmrp.usp.br/nrge/assets/css/rgeSECTION.css' | grep -A10 '.selector'`
4. **Não adicionar classes extras** — se o original usa `.program-card`, não adicionar `.program-card.rge-card`
5. **`grep -n` antes de adicionar** — o seletor pode já existir
6. **Ícones em containers coloridos**: SEMPRE `color: white`
7. **Tipografia fluida**: `clamp()` para fontes >18px, nunca `font-size` em `@media`
8. **Touch targets**: mínimo 44×44px em mobile
9. **Espaçamento**: múltiplos de 4 ou 8 apenas (8pt grid)
10. **Dropdowns**: `<button>`, nunca `<span>`

## Responsivo

4 breakpoints consolidados (`max-width`):

| Breakpoint | O que muda |
|---|---|
| 992px | Navbar encolhe, hero menor, sections menos padding |
| 768px | Timeline left-aligned, chefia 2-col, footer empilha, table scroll |
| 576px | Touch targets 44px, filter wrap, carousel 85%, table→card, footer centralizado |
| 375px | Hero menor, padding mínimo |

## Validação Pré-Deploy

```bash
# 1. Integridade (includes, syntax, órfãos)
python3 scripts/validate-deploy.py

# 2. W3C HTML (todas as páginas)
python3 scripts/w3c-validate.py --all

# 3. W3C CSS
curl -s "https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Frge.tyko.casa%2Fassets%2Fcss%2Fstyle.css%3Fv%3DN&profile=css3svg&output=json" \
  | python3 -c "import json,sys; d=json.loads(sys.stdin.read()); print(d.get('cssvalidation',{}).get('result',{}))"

# 4. Todos os PHPs com includes
grep -lc "require.*includes/header" *.php | wc -l  # deve ser 20
```

## Deploy

Ver skill `rge-fmrp-deploy`. Resumo:

```bash
# Upload arquivos modificados
sshpass -p 'SENHA' scp arquivo.php truenas_admin@192.168.68.62:/tmp/rge_project_new/

# Build + restart
sshpass -p 'SENHA' ssh truenas_admin@192.168.68.62 "
  echo 'SENHA' | sudo -S bash -c '
    cd /tmp/rge_project_new
    docker build -t stratust/rge-fmrp:latest .
    docker stop rge-fmrp && docker rm rge-fmrp
    docker run -d --name rge-fmrp -p 30210:80 --restart unless-stopped stratust/rge-fmrp:latest
  '
"
```

## Páginas (Inventário)

| Página | Seção do Menu | Componentes Principais |
|---|---|---|
| `index.php` | — | Hero, feature cards (4), news carousel, research section |
| `historia.php` | Departamento | Page header, timeline (alternating desktop/left mobile) |
| `chefia.php` | Departamento | Chefia grid (4-col), profile cards, histórico timeline |
| `comissoes-conselho.php` | Departamento | Filtros, member cards, custom table |
| `plataformas-multiusuarios.php` | Departamento | Platform cards, equipment grid |
| `ensino.php` | Ensino | Hero, program cards (3), stats |
| `graduacao.php` | Ensino | Info sections, discipline list |
| `pos-graduacao.php` | Ensino | Program cards (3), curriculum grid |
| `cursos_extensao.php` | Ensino/Extensão | Course cards, badges |
| `linhas-pesquisa.php` | Pesquisa | Research cards, stats |
| `projetos.php` | Pesquisa | Project cards, funding info |
| `publicacoes.php` | Pesquisa | Publication cards, featured pub, filters |
| `residencia-genetica-medica.php` | Extensão | Info sections, rotation cards |
| `servicos-genetica-medica.php` | Extensão | Service cards, contact |
| `docentes.php` | Equipe | Filters, docente cards (photo + info) |
| `funcionarios.php` | Equipe | Staff cards |
| `laboratorios.php` | Laboratórios | Lab cards with header gradient |
| `laboratorio_doc.php` | Laboratórios | Lab detail, docente info |
| `contato.php` | — | Contact cards, form, map |
| `noticias.php` | — | News grid/list |
