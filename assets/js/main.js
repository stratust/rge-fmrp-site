/**
 * main.js — Dropdown hover + Carousel + utilities
 * Otimizado: event delegation, sem jQuery, lazy init
 */
document.addEventListener('DOMContentLoaded',function(){

    // ── Dropdown hover (desktop only) ───────────────────
    if(window.matchMedia('(min-width: 992px)').matches){
        document.querySelectorAll('.nav-item.dropdown').forEach(function(menu){
            var submenu=menu.querySelector('.dropdown-menu');
            if(!submenu)return;
            menu.addEventListener('mouseenter',function(){menu.classList.add('show');submenu.classList.add('show')});
            menu.addEventListener('mouseleave',function(){menu.classList.remove('show');submenu.classList.remove('show')});
        });
    }

    // ── News carousel (se existir na página) ────────────
    var track=document.getElementById('newsTrack');
    if(track){
        var GAP=24;
        var cards=track.querySelectorAll('.news-card-col');
        var dotsEl=document.getElementById('newsDots');
        var prevBtn=document.getElementById('newsPrev');
        var nextBtn=document.getElementById('newsNext');
        var current=0;

        function getVisible(){
            var cardW=cards[0].offsetWidth;
            var wrapperW=track.parentElement.offsetWidth;
            return Math.max(1,Math.round(wrapperW/(cardW+GAP)));
        }

        function buildDots(){
            var pages=Math.ceil(cards.length/getVisible());
            dotsEl.innerHTML='';
            for(var i=0;i<pages;i++){
                var d=document.createElement('button');
                d.className='carousel-dot'+(i===0?' active':'');
                d.setAttribute('aria-label','Página '+(i+1));
                d.addEventListener('click',function(idx){return function(){goTo(idx)}}(i));
                dotsEl.appendChild(d);
            }
        }

        function update(){
            var visible=getVisible();
            var pages=Math.ceil(cards.length/visible);
            current=Math.min(current,pages-1);
            var cardW=cards[0].offsetWidth;
            var offset=current*visible*(cardW+GAP);
            track.style.transform='translateX(-'+offset+'px)';
            dotsEl.querySelectorAll('.carousel-dot').forEach(function(d,i){d.classList.toggle('active',i===current)});
            if(prevBtn)prevBtn.disabled=current===0;
            if(nextBtn)nextBtn.disabled=current>=pages-1;
        }

        function goTo(page){
            var pages=Math.ceil(cards.length/getVisible());
            current=Math.max(0,Math.min(pages-1,page));
            update();
        }

        if(prevBtn)prevBtn.addEventListener('click',function(){goTo(current-1)});
        if(nextBtn)nextBtn.addEventListener('click',function(){goTo(current+1)});

        // Touch/swipe support
        var startX=0;
        track.addEventListener('touchstart',function(e){startX=e.touches[0].clientX},{passive:true});
        track.addEventListener('touchend',function(e){
            var dx=e.changedTouches[0].clientX-startX;
            if(Math.abs(dx)>40)goTo(current+(dx<0?1:-1));
        });

        // CORREÇÃO: debounce no resize
        var resizeTimer;
        window.addEventListener('resize',function(){clearTimeout(resizeTimer);resizeTimer=setTimeout(function(){buildDots();update()},150)});

        buildDots();
        update();
    }

    // ── Lazy load images (correção: loading="lazy" fallback) ──
    // Native lazy loading is now used via attribute, no JS needed
});
