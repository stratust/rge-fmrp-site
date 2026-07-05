# Departamento de Genética — FMRP/USP

Clone otimizado do site oficial do Departamento de Genética da Faculdade de Medicina de Ribeirão Preto (FMRP/USP).

## Estrutura

```
.
├── index.php                  # Homepage (hero video + features + news + research)
├── historia.php               # História e marcos do departamento
├── chefia.php                 # Chefia atual + histórico
├── comissoes-conselho.php     # Comissões e conselho
├── plataformas-multiusuarios.php
├── ensino.php                 # Hub ensino
├── graduacao.php              # Graduação + disciplinas
├── pos-graduacao.php          # Pós-graduação + disciplinas
├── cursos_extensao.php        # Cursos de extensão
├── linhas-pesquisa.php        # 5 linhas de pesquisa
├── projetos.php               # Projetos em andamento
├── publicacoes.php            # Publicações com filtro
├── laboratorios.php           # 14 labs pesquisa + 3 ensino
├── laboratorio_doc.php        # Página individual de laboratório (?cod=N)
├── docentes.php               # 17 docentes + filtros
├── funcionarios.php           # Funcionários
├── noticias.php               # Notícias
├── residencia-genetica-medica.php
├── servicos-genetica-medica.php
├── contato.php                # Formulário de contato
├── includes/
│   ├── header.php             # Navbar + tradutor (include)
│   ├── footer.php             # Footer + scripts (include)
│   ├── data.php               # Todos os dados (arrays PHP)
│   └── page_header.php        # Header reutilizável de páginas internas
├── assets/
│   ├── css/
│   │   ├── rgepadrao.css      # CSS principal (24KB)
│   │   ├── btn-topo.css       # Botão voltar ao topo
│   │   ├── rgetradutor.css    # Estilos do tradutor Google
│   │   └── extras.css         # Carousel + correções + acessibilidade
│   ├── js/
│   │   ├── main.js            # Dropdown hover + carousel + utils
│   │   └── tradutor.js        # Google Translate integration
│   └── img/
│       ├── logo_genetica_20260612.webp
│       └── video_1.mp4        # Hero background (22MB, .gitignored)
├── Dockerfile
├── .htaccess
├── .gitignore
└── README.md
```

## Stack

- **Backend:** PHP 8.3 (sem framework)
- **Frontend:** Bootstrap 5.3.2 + CSS customizado + vanilla JS
- **Fontes:** Google Fonts (Inter)
- **Tradutor:** Google Translate (PT/EN/ES)
- **Container:** `php:8.3-apache`

## Docker

```bash
docker build -t rge-fmrp .
docker run -p 8080:80 rge-fmrp
# Acesse http://localhost:8080/nrge/
```

## Deploy no TrueNAS (Dockhand)

```bash
docker tag rge-fmrp stratust/rge-fmrp:latest
docker push stratust/rge-fmrp:latest
# Registrar stack via Dockhand API
```

## Correções aplicadas vs. original

1. **Erros de syntax PHP** — corrigidos (`=>` faltando em arrays)
2. **setInterval → MutationObserver** — tradutor agora usa observer em vez de polling
3. **Debounce no resize** — carousel não recalcula a cada pixel
4. **scroll-behavior: smooth** — navegação mais fluida
5. **prefers-reduced-motion** — respeita preferência do usuário
6. **preconnect** — DNS resolution antecipada para CDNs
7. **loading="lazy"** — imagens não bloqueiam render
8. **focus-visible** — acessibilidade de teclado
9. **defer em scripts** — não bloqueiam parsing
10. **Header/footer como includes** — DRY, sem duplicação
11. **Dados centralizados** — includes/data.php com todos os arrays
12. **.htaccess com cache + compressão + headers de segurança**
