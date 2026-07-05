/**
 * tradutor.js — Google Translate integration
 * Corrected & extracted from inline blocks
 */
function googleTranslateElementInit(){new google.translate.TranslateElement({pageLanguage:'pt',includedLanguages:'en,es',autoDisplay:false},'google_translate_element')}

function marcarIdiomaAtivo(lang){
    const map={pt:'btn-pt',en:'btn-en',es:'btn-es'};
    Object.values(map).forEach(id=>{const b=document.getElementById(id);if(!b)return;b.style.fontWeight='normal';b.style.opacity='0.7';b.style.borderBottom='none'});
    const active=document.getElementById(map[lang]);
    if(active){active.style.fontWeight='bold';active.style.opacity='1';active.style.borderBottom='2px solid #000'}
}

function traduzirParaIngles(){
    marcarIdiomaAtivo('en');
    ['','domain=.usp.br','domain=.fmrp.usp.br'].forEach(d=>{document.cookie="googtrans=/pt/en; path=/; "+d});
    localStorage.setItem('googtrans','/pt/en');
    setTimeout(()=>{const c=document.querySelector('.goog-te-combo');if(c){c.value='en';c.dispatchEvent(new Event('change'))}else location.reload()},800);
}

function traduzirParaEspanhol(){
    marcarIdiomaAtivo('es');
    ['','domain=.usp.br','domain=.fmrp.usp.br'].forEach(d=>{document.cookie="googtrans=/pt/es; path=/; "+d});
    localStorage.setItem('googtrans','/pt/es');
    setTimeout(()=>{const c=document.querySelector('.goog-te-combo');if(c){c.value='es';c.dispatchEvent(new Event('change'))}else location.reload()},800);
}

function resetParaPortugues(){
    marcarIdiomaAtivo('pt');
    [window.location.hostname,'.usp.br','.fmrp.usp.br'].forEach(d=>{
        document.cookie="googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain="+d;
        document.cookie="googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/nrge/; domain="+d;
    });
    document.cookie="googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    location.reload();
}

// CORREÇÃO: usar MutationObserver em vez de setInterval (mais performático)
const observer=new MutationObserver(()=>{
    const banner=document.querySelector('iframe.goog-te-banner-frame');
    if(banner){banner.style.display='none';banner.style.visibility='hidden';banner.style.height='0'}
    document.body.style.top='0px';
    document.documentElement.style.top='0px';
});
observer.observe(document.body,{childList:true,subtree:true,attributes:true,attributeFilter:['style']});

// Marca idioma ativo ao carregar
window.addEventListener('load',()=>{
    const c=document.cookie.split('; ').find(r=>r.startsWith('googtrans='));
    if(c&&c.includes('/en'))marcarIdiomaAtivo('en');
    else if(c&&c.includes('/es'))marcarIdiomaAtivo('es');
    else marcarIdiomaAtivo('pt');
});
