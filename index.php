<? require "header.php"; ?>
<div class="top-screen">
    <div class="top-screen-slider" data-top-slider>
        <div class="top-screen-slider-slide">
            <div class="top-screen-slider-slide__country">Италия</div>
            <div class="top-screen-slider-slide__name">Мадонна ди Кампильо</div>
            <div class="top-screen-slider-slide-price">
                <a href="#" class="btn btn--primary"><span>Туры от 749 €</span></a>
            </div>
            
            <div class="top-screen-slider-slide__bg">
                <img data-lazy="/app/images/top-slide.jpg" alt="">
            </div>
        </div>

        <div class="top-screen-slider-slide">
            <div class="top-screen-slider-slide__country">Lorem</div>
            <div class="top-screen-slider-slide__name">Lorem ipsum dolor</div>
            <div class="top-screen-slider-slide-price">
                <a href="#" class="btn btn--primary"><span>Туры от 749 €</span></a>
            </div>

            <div class="top-screen-slider-slide__bg">
                <img data-lazy="/app/images/top-slide.jpg" alt="">
            </div>
        </div>

        <div class="top-screen-slider-slide">
            <div class="top-screen-slider-slide__country">Lorem</div>
            <div class="top-screen-slider-slide__name">Lorem ipsum dolor sit amet</div>
            <div class="top-screen-slider-slide-price">
                <a href="#" class="btn btn--primary"><span>Туры от 749 €</span></a>
            </div>

            <div class="top-screen-slider-slide__bg">
                <img data-lazy="/app/images/top-slide.jpg" alt="">
            </div>
        </div>

        <div class="top-screen-slider-slide">
            <div class="top-screen-slider-slide__country">Lorem</div>
            <div class="top-screen-slider-slide__name">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
            <div class="top-screen-slider-slide-price">
                <a href="#" class="btn btn--primary"><span>Туры от 749 €</span></a>
            </div>

            <div class="top-screen-slider-slide__bg">
                <img data-lazy="/app/images/top-slide.jpg" alt="">
            </div>
        </div>
    </div>
    
    <div class="top-screen-dots custom-slick-dots"></div>
    
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
    <div class="block-title">Лучшие предложения</div>
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
    <div class="block-title">Страны</div>
    <div class="block-sub-margin"></div>

    <div class="countries common-slider" data-country-slider>
        
        <div class="common-slider-inner" data-country-slider-inner>
            <div class="countries-block">
                <div class="countries-block-top">
                    <div class="countries-block-top__img">
                        <img src="/app/images/italy-thumb.jpg" alt="">
                    </div>

                    <div class="countries-block-top-text">
                        <div class="countries-block-top-text__name">Италия</div>
                        <div class="countries-block-top-text__offers">35 предложений</div>
                    </div>

                    <a href="#" class="countries-block-top-link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="52" viewBox="0 0 52 52">
                            <g id="Component_60_10" data-name="Component 60 – 10" clip-path="url(#clip-path)">
                                <g id="Rectangle_302" data-name="Rectangle 302" fill="none" stroke="#f78f1e" stroke-width="1" opacity="0.3">
                                    <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" fill="none"/>
                                </g>
                                <path id="Arrow" d="M9.537,20.083.292,10.946a.975.975,0,0,1,0-1.392L9.537.417a1.456,1.456,0,0,1,2.041,0,1.415,1.415,0,0,1,0,2.016L3.669,10.25l7.909,7.815a1.417,1.417,0,0,1,0,2.017,1.456,1.456,0,0,1-2.041,0" transform="translate(32 36.5) rotate(180)" fill="#f78f1e"/>
                            </g>
                        </svg>
                    </a>
                </div>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>
            </div>

            <div class="countries-block">
                <div class="countries-block-top">
                    <div class="countries-block-top__img">
                        <img src="/app/images/france-thumb.jpg" alt="">
                    </div>

                    <div class="countries-block-top-text">
                        <div class="countries-block-top-text__name">Франция</div>
                        <div class="countries-block-top-text__offers">35 предложений</div>
                    </div>

                    <a href="#" class="countries-block-top-link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="52" viewBox="0 0 52 52">
                            <g id="Component_60_10" data-name="Component 60 – 10" clip-path="url(#clip-path)">
                                <g id="Rectangle_302" data-name="Rectangle 302" fill="none" stroke="#f78f1e" stroke-width="1" opacity="0.3">
                                    <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" fill="none"/>
                                </g>
                                <path id="Arrow" d="M9.537,20.083.292,10.946a.975.975,0,0,1,0-1.392L9.537.417a1.456,1.456,0,0,1,2.041,0,1.415,1.415,0,0,1,0,2.016L3.669,10.25l7.909,7.815a1.417,1.417,0,0,1,0,2.017,1.456,1.456,0,0,1-2.041,0" transform="translate(32 36.5) rotate(180)" fill="#f78f1e"/>
                            </g>
                        </svg>
                    </a>
                </div>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>
            </div>

            <div class="countries-block">
                <div class="countries-block-top">
                    <div class="countries-block-top__img">
                        <img src="/app/images/austria-thumb.jpg" alt="">
                    </div>

                    <div class="countries-block-top-text">
                        <div class="countries-block-top-text__name">Австрия</div>
                        <div class="countries-block-top-text__offers">35 предложений</div>
                    </div>

                    <a href="#" class="countries-block-top-link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="52" viewBox="0 0 52 52">
                            <g id="Component_60_10" data-name="Component 60 – 10" clip-path="url(#clip-path)">
                                <g id="Rectangle_302" data-name="Rectangle 302" fill="none" stroke="#f78f1e" stroke-width="1" opacity="0.3">
                                    <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" fill="none"/>
                                </g>
                                <path id="Arrow" d="M9.537,20.083.292,10.946a.975.975,0,0,1,0-1.392L9.537.417a1.456,1.456,0,0,1,2.041,0,1.415,1.415,0,0,1,0,2.016L3.669,10.25l7.909,7.815a1.417,1.417,0,0,1,0,2.017,1.456,1.456,0,0,1-2.041,0" transform="translate(32 36.5) rotate(180)" fill="#f78f1e"/>
                            </g>
                        </svg>
                    </a>
                </div>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>

                <a href="#" class="countries-block-resort">
                    <div class="countries-block-resort-info">
                        <div class="countries-block-resort-info__name">Мадонна ди Кампильо</div>
                        <div class="countries-block-resort-info__date">29 ноября — 10 декабря</div>
                    </div>

                    <div class="countries-block-resort__price">от 749 €</div>
                </a>
            </div>
        </div>
        
        <? get_common_slider_nav(); ?>
    </div>
</div>

<div class="block-margin"></div>

<div class="container">
    <div class="block-title">Мы вам предлагаем</div>
    
    <div class="advantages">
        <div class="advantages-item">
            <div class="advantages-item__img">
                <img src="/app/images/advantages-1.png" alt="">
            </div>
            
            <div class="advantages-item__title">Более 30 лет</div>
            
            <div class="advantages-item__text">
                — наш собственный <br>
                опыт катания
            </div>
        </div>

        <div class="advantages-item">
            <div class="advantages-item__img">
                <img src="/app/images/advantages-2.png" alt="">
            </div>

            <div class="advantages-item__title">Более 15 000 км</div>

            <div class="advantages-item__text">
                трасс различной сложности <br>
                пройдено за это время
            </div>
        </div>

        <div class="advantages-item">
            <div class="advantages-item__img">
                <img src="/app/images/advantages-3.png" alt="">
            </div>

            <div class="advantages-item__title">Более 50</div>

            <div class="advantages-item__text">
                горнолыжных курортов опробованы <br>
                с точки зрения катания и проживания
            </div>
        </div>

        <div class="advantages-item">
            <div class="advantages-item__img">
                <img src="/app/images/advantages-4.png" alt="">
            </div>

            <div class="advantages-item__title">Более 120 км/ч</div>

            <div class="advantages-item__text">
                максимальная скорость <br>
                на трассе по данным GPS
            </div>
        </div>
    </div>
</div>

<div class="block-margin"></div>

<div class="container">
    <div class="block-title">Подбор тура</div>
    
    <div class="block-sub-margin"></div>
    
    <? get_bottom_form(false); ?>
</div>
<? require "footer.php";
