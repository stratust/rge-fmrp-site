// Audit complete consistency of ALL visual elements across ALL pages
// Usage: node audit-all-elements.js | python3 -c "import json,sys; d=json.load(sys.stdin); ..."
const { chromium } = require('playwright');

const PAGES = [
  'index.php', 'chefia.php', 'comissoes-conselho.php', 'contato.php',
  'cursos_extensao.php', 'docentes.php', 'ensino.php', 'funcionarios.php',
  'graduacao.php', 'historia.php', 'laboratorio_doc.php', 'laboratorios.php',
  'linhas-pesquisa.php', 'noticias.php', 'plataformas-multiusuarios.php',
  'pos-graduacao.php', 'projetos.php', 'publicacoes.php',
  'residencia-genetica-medica.php', 'servicos-genetica-medica.php'
];

const ELEMENT_CATEGORIES = [
  // Heading hierarchy
  { name: 'page-header h1', selector: '.page-header h1' },
  { name: 'hero h1', selector: '.hero-section h1' },
  { name: 'section h2', selector: 'section > .container > h2, section > .container > div > h2:not([class*="h5"]):not([class*="h6"])' },
  { name: 'card-title h3', selector: 'h3.program-name, h3.discipline-name, h3.news-title, h3.docente-name, h3.pub-title, h3.lab-name, h3.research-title, h3.project-title, h3.founder-name, h3.course-title, h3.course-name, h3.comissao-title, h3.admission-title, h3.lab-teach-name' },
  { name: 'h4', selector: 'h4' },
  
  // Links and buttons
  { name: 'feature-link', selector: '.feature-link' },
  { name: 'see-all-link', selector: '.see-all-link' },
  { name: 'btn-green', selector: '.btn-green' },
  { name: 'btn-white', selector: '.btn-white' },
  { name: 'lab-link', selector: '.lab-link' },
  { name: 'project-link', selector: '.project-link' },
  { name: 'course-link', selector: '.course-link' },
  { name: 'news-link', selector: '.news-link' },
  { name: 'pub-action-link', selector: '.pub-action-link' },
  
  // Body text
  { name: 'body-text', selector: 'p:not(.lead):not(.program-desc):not(.discipline-info-item):not([class*="meta"]):not([class*="stat"])' },
  { name: 'lead-text', selector: '.lead' },
  
  // Labels and metadata
  { name: 'section-label', selector: '.section-label' },
  { name: 'badge', selector: '.badge, .news-badge, .program-badge, .course-badge' },
  { name: 'meta-text', selector: '.program-meta-item, .news-date, .discipline-info-item, .project-meta, .course-meta, .rotation-meta' },
  
  // Icons
  { name: 'icon-box', selector: '.icon-box i, .program-icon i, .course-icon i, .step-icon i' },
];

async function audit() {
  const browser = await chromium.launch({ args: ['--no-sandbox'] });
  const results = {};

  for (const pageName of PAGES) {
    const page = await browser.newPage({ viewport: { width: 1280, height: 900 } });
    const url = 'http://192.168.68.62:30210/' + pageName;
    
    try {
      await page.goto(url, { waitUntil: 'domcontentloaded', timeout: 8000 });
      await page.waitForTimeout(800);

      for (const cat of ELEMENT_CATEGORIES) {
        const elements = await page.evaluate((selector) => {
          const els = document.querySelectorAll(selector);
          return Array.from(els).slice(0, 3).map(el => {
            const cs = window.getComputedStyle(el);
            return {
              tag: el.tagName,
              text: el.textContent.trim().substring(0, 25),
              fontSize: cs.fontSize,
              fontWeight: cs.fontWeight,
              color: cs.color,
            };
          });
        }, cat.selector);

        if (elements.length > 0) {
          if (!results[cat.name]) results[cat.name] = [];
          results[cat.name].push({
            page: pageName,
            count: elements.length,
            sample: elements[0]
          });
        }
      }
    } catch (e) {
      // Timeout or error, skip
    }
    await page.close();
  }

  // Group by category and report size consistency
  const report = {};
  for (const [catName, items] of Object.entries(results)) {
    const allSizes = items.map(i => i.sample.fontSize);
    const uniqueSizes = [...new Set(allSizes)];
    const isConsistent = uniqueSizes.length === 1;
    
    report[catName] = {
      status: isConsistent ? 'CONSISTENT' : 'INCONSISTENT',
      sizes: uniqueSizes,
      occurrences: items.length,
      pages: items.map(i => `${i.page}(${i.sample.fontSize})`).join(', ')
    };
  }

  console.log(JSON.stringify(report, null, 2));
  await browser.close();
}

audit().catch(e => { console.error('ERROR:', e.message); process.exit(1); });
