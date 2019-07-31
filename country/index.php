<? require $_SERVER["DOCUMENT_ROOT"]. "/header.php"; ?>
<div class="static-top-screen">
    <div class="static-top-screen__bg">
        <img src="/app/images/static-top-screen.jpg" alt="">
    </div>
    
    <a href="#" class="static-top-screen-back">
        <svg xmlns="http://www.w3.org/2000/svg" width="11.999" height="20.5" viewBox="0 0 11.999 20.5">
            <path id="Arrow" d="M9.537,20.083.292,10.946a.975.975,0,0,1,0-1.392L9.537.417a1.456,1.456,0,0,1,2.041,0,1.415,1.415,0,0,1,0,2.016L3.669,10.25l7.909,7.815a1.417,1.417,0,0,1,0,2.017,1.456,1.456,0,0,1-2.041,0" fill="#f78f1e"/>
        </svg>
    </a>
    
    <div class="static-top-screen__name">Италия</div>

    <div class="top-screen-mobile-arrow" data-anchor href="#top-form">
        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="16.231" viewBox="0 0 56 16.231">
            <path id="Path_252" data-name="Path 252" d="M15048.083,1262.436l25,10,25-10" transform="translate(-15045.083 -1259.436)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="6" opacity="0.6"/>
        </svg>
    </div>
</div>

<div class="container">
    <? get_top_form(); ?>
</div>

<div class="block-margin"></div>

<div class="container">
    <div class="block-title">Лучшие предложения в Италии</div>
    <div class="block-sub-margin"></div>
    
    <div class="common-slider best-offer" data-common-slider>
        
        <div class="common-slider-inner" data-common-slider-inner>
            <? for($i = 0; $i < 5; $i++) : ?>
                <a href="#" class="best-offer-item">
                    <div class="best-offer-item__img">
                        <img src="/app/images/common-slider-img.jpg" alt="">
                    </div>
                    
                    <div class="best-offer-item-info">
                        <div class="best-offer-item-info__country">Италия</div>
                        <div class="best-offer-item-info__resort">
                            <?= fuck_yeah() ? "Мадонна ди Кампильо ди Кампильо ди" : "Мадонна ди Кампильо"; ?>
                        </div>
                        <div class="best-offer-item-info__price">от 749 €</div>
                        <div class="best-offer-item-info__date">29 ноября — 10 декабря</div>
                    </div>
                </a>
            <? endfor; ?>
        </div>
        
        <? get_common_slider_nav(); ?>
    </div>
</div>

<div class="block-margin"></div>

<div class="container">
    <div class="possibilities">
        <div class="possibilities-slider-container" data-possibilities-slider-container>
            <div class="possibilities-slider" data-possibilities-slider>
                <div class="possibilities-slider-slide">
                    <a href="/app/images/possibilities-full.jpg"
                       class="possibilities-slider-slide__img"
                       data-fancybox="possibilities">
                        <img src="/app/images/possibilities-small.jpg" alt="">
                    </a>
                </div>

                <div class="possibilities-slider-slide">
                    <a href="/app/images/possibilities-full.jpg"
                       class="possibilities-slider-slide__img"
                       data-fancybox="possibilities">
                        <img src="/app/images/possibilities-small.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="possibilities-slider-arrow possibilities-slider-arrow--prev" data-possibilities-prev>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70" viewBox="0 0 70 70">
                    <g id="Group_963" data-name="Group 963" transform="translate(1386 1500) rotate(180)">
                        <g transform="matrix(-1, 0, 0, -1, 1386, 1500)">
                            <rect id="Rectangle_256-2" data-name="Rectangle 256" width="52" height="52" rx="26" transform="translate(61 58) rotate(180)" fill="#fff" opacity="0.2"/>
                        </g>
                        <path id="Arrow" d="M9.537,20.083.292,10.946a.975.975,0,0,1,0-1.392L9.537.417a1.456,1.456,0,0,1,2.041,0,1.415,1.415,0,0,1,0,2.016L3.669,10.25l7.909,7.815a1.417,1.417,0,0,1,0,2.017,1.456,1.456,0,0,1-2.041,0" transform="translate(1358 1478) rotate(180)" fill="#fff"/>
                    </g>
                </svg>
            </div>

            <div class="possibilities-slider-arrow possibilities-slider-arrow--next" data-possibilities-next>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70" viewBox="0 0 70 70">
                    <g id="Group_962" data-name="Group 962" transform="translate(-1316 -1436)">
                        <g transform="matrix(1, 0, 0, 1, 1316, 1436)">
                            <rect id="Rectangle_256-2" data-name="Rectangle 256" width="52" height="52" rx="26" transform="translate(9 6)" fill="#fff" opacity="0.2"/>
                        </g>
                        <path id="Arrow" d="M9.537,20.083.292,10.946a.975.975,0,0,1,0-1.392L9.537.417a1.456,1.456,0,0,1,2.041,0,1.415,1.415,0,0,1,0,2.016L3.669,10.25l7.909,7.815a1.417,1.417,0,0,1,0,2.017,1.456,1.456,0,0,1-2.041,0" transform="translate(1358 1478) rotate(180)" fill="#fff"/>
                    </g>
                </svg>
            </div>

            <div class="possibilities-slider-dots custom-slick-dots custom-slick-dots--possibilities"></div>
        </div>
        
        <div class="possibilities-text">
            <div class="possibilities-text__title">Возможности для катания</div>
            <div class="possibilities-text__description">
                Итальянские курорты могут предложить как небольшие камерные зоны катания, так и огромные объединенные регионы – Sella Ronda в Долмитах (около 500 км трасс), объединенный регион Червиния + Церматт (около 360 км трасс), Vialattea (около 400 км трасс). Качество подготовки склонов и логистика трасс – также имеет явное влияние традиций сопредельных курортов – безупречное в Доломитах, и не всегда высокого качества на западных курортах. Цены на ски-пасс сильно отличаются – от 180 евро в локальных зонах катания, до 280 в больших объединенных территориях.
            </div>
            <a href="#" class="possibilities-text__link">
                <span>Подобрать тур в Италии</span>

                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13">
                    <g id="Controls_Small_Arrow_Fw" data-name="Controls Small / Arrow / Fw" transform="translate(-0.067 -0.5)">
                        <path id="Arrow" d="M0,1.371,1.393,0,8,6.5,1.393,13,0,11.629,5.214,6.5Z" transform="translate(0.067 0.5)" fill="#f78f1e"/>
                    </g>
                </svg>
            </a>
        </div>
    </div>
</div>

<div class="block-margin"></div>

<div class="container">
    <div class="block-title">Оптимальный выбор курорта для отдыха</div>
    <div class="block-sub-margin"></div>

    <div class="common-slider optimal" data-common-slider>

        <div class="common-slider-inner" data-common-slider-inner>
            <? for($i = 0; $i < 5; $i++) : ?>
                <a href="#" class="optimal-item">
                    <div class="optimal-item__img">
                        <img src="/app/images/optimal.jpg" alt="">
                    </div>
                    
                    <div class="optimal-item-text">
                        <div class="optimal-item-text__title">Валь Гардена</div>
                        <div class="optimal-item-text__price">Туры от от 99 €</div>
                    </div>
                </a>
            <? endfor; ?>
        </div>
        
        <? get_common_slider_nav(); ?>
    </div>
</div>

<div class="block-margin"></div>

<div class="e-map" id="e-map"></div>

<div class="block-margin"></div>

<div class="container">
    <div class="block-title">Подбор тура</div>

    <div class="block-sub-margin"></div>
    
    <? get_bottom_form(true); ?>
</div>
<? require $_SERVER["DOCUMENT_ROOT"]. "/footer.php";
