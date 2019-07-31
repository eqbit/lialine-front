<? require $_SERVER["DOCUMENT_ROOT"]. "/header.php"; ?>
<div class="static-top-screen static-top-screen--offer" data-offer-detail-top-container>
    <div class="static-top-screen__bg">
        <img src="/app/images/static-top-screen.jpg" alt="">
    </div>
    
    <a href="/country" class="static-top-screen-back">
        <svg xmlns="http://www.w3.org/2000/svg" width="11.999" height="20.5" viewBox="0 0 11.999 20.5">
            <path id="Arrow" d="M9.537,20.083.292,10.946a.975.975,0,0,1,0-1.392L9.537.417a1.456,1.456,0,0,1,2.041,0,1.415,1.415,0,0,1,0,2.016L3.669,10.25l7.909,7.815a1.417,1.417,0,0,1,0,2.017,1.456,1.456,0,0,1-2.041,0" fill="#f78f1e"/>
        </svg>
        <span>Мадонна ди Кампильо</span>
    </a>
    
    <div class="static-top-screen-stars">
        <? for($i = 3; $i <=5; $i++) : ?>
            <img src="/app/images/white-star.png" alt="" class="static-top-screen-stars__star">
        <? endfor; ?>
    </div>
    <div class="static-top-screen__country">Италия, Мадонна ди Кампильо</div>
    <div class="static-top-screen__name">Les Arcs 1950 Le Village</div>
    
    <div class="offer-detail" data-offer-detail>
        <div class="offer-detail-top">
            <div class="offer-detail-top-dates">
                <div class="offer-detail-top-dates__range">29 ноября — 10 декабря</div>
                <div class="offer-detail-top-dates__days">7 ночей</div>
            </div>
            
            <div class="offer-detail-top__price">749 €</div>
        </div>
        
        <div class="offer-detail-middle">
            <div class="offer-detail-middle__title">Цена указана за человека при 2-х местномразмещении и включает:</div>
            
            <div class="offer-detail-middle-includes">
                <div class="offer-detail-middle-includes__item">Перелёт</div>
                <div class="offer-detail-middle-includes__item">Трансфер</div>
                <div class="offer-detail-middle-includes__item">Страховка</div>
                <div class="offer-detail-middle-includes__item">Проживание</div>
            </div>
        </div>
        
        <div class="offer-detail-bottom">
            <div class="offer-detail-bottom-item">
                <div class="offer-detail-bottom-item__title">Отель:</div>
                <div class="offer-detail-bottom-item-value">
                    <span>Les Arcs 1950 Le Village</span>
                    <div class="offer-detail-bottom-item-value-stars">
                        <? for($i = 3; $i <=5; $i++) : ?>
                            <img src="/app/images/star.png" alt="" class="offer-detail-bottom-item-value-stars__star">
                        <? endfor; ?>
                    </div>
                </div>
            </div>
            
            <div class="offer-detail-bottom-item">
                <div class="offer-detail-bottom-item__title">Питание:</div>
                <div class="offer-detail-bottom-item-value">Не включено</div>
            </div>
        </div>
        
        <div class=" btn btn--primary offer-detail-btn" data-offer-submit><span>Забронировать</span></div>
    </div>
</div>


<div class="fixed-offer-detail">
    <div class="fixed-offer-detail__hotel">Les Arcs 1950 Le Village</div>
    <div class="fixed-offer-detail-dates">
        <div class="fixed-offer-detail-dates__date">29 ноября — 10 декабря</div>
        <div class="fixed-offer-detail-dates__days">7 ночей</div>
    </div>
    <div class="fixed-offer-detail__price">749 €</div>
    <div class="btn btn--primary" data-offer-submit><span>Забронировать</span></div>
</div>

<div class="offer-gallery-container" data-offer-gallery-container data-offer-detail-bottom-container>
    
    <div class="block-margin"></div>
    
    <div class="container">
        <div class="offer-gallery-text">
            <div class="offer-gallery-text__title">Мадонна ди Кампильо</div>
            <div class="offer-gallery-text__description">
                Область катания – Paradiski. Вторая по размерам савойская зона катания – около 450 км. трасс.
                Кроме огромного региона катания – на всех станциях реализован главный козырь французских
                курортов – катание «от дверей». Немаловажным является высотное расположение зоны катания
                — большая часть трасс находится на высоте более 2000 метров.
            </div>
        </div>
        
        <div class="offer-gallery-slider-container">
            <div class="offer-gallery-slider">
                
                <div class="offer-gallery-slider-arrow offer-gallery-slider-arrow--prev" data-offer-slider-prev>
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M0 26C0 40.3594 11.6406 52 26 52C40.3594 52 52 40.3594 52 26C52 11.6406 40.3594 0 26 0C11.6406 0 0 11.6406 0 26Z" fill="white"/>
                        <path d="M28.5372 36.083L19.2922 26.946C19.1997 26.8552 19.1262 26.7469 19.076 26.6274C19.0258 26.5079 19 26.3796 19 26.25C19 26.1204 19.0258 25.9921 19.076 25.8726C19.1262 25.7531 19.1997 25.6448 19.2922 25.554L28.5372 16.417C28.8095 16.1494 29.176 15.9995 29.5577 15.9995C29.9394 15.9995 30.3059 16.1494 30.5782 16.417C30.7118 16.5487 30.818 16.7056 30.8904 16.8786C30.9628 17.0517 31.0001 17.2374 31.0001 17.425C31.0001 17.6126 30.9628 17.7983 30.8904 17.9714C30.818 18.1444 30.7118 18.3013 30.5782 18.433L22.6692 26.25L30.5782 34.065C30.7118 34.1968 30.8178 34.3538 30.8902 34.527C30.9625 34.7001 30.9998 34.8859 30.9998 35.0735C30.9998 35.2611 30.9625 35.4469 30.8902 35.62C30.8178 35.7932 30.7118 35.9502 30.5782 36.082C30.3059 36.3496 29.9394 36.4995 29.5577 36.4995C29.176 36.4995 28.8095 36.3496 28.5372 36.082" fill="white"/>
                    </svg>
                </div>
                <div class="offer-gallery-slider-arrow offer-gallery-slider-arrow--next" data-offer-slider-next>
                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M52 26C52 11.6406 40.3594 0 26 0C11.6406 0 0 11.6406 0 26C0 40.3594 11.6406 52 26 52C40.3594 52 52 40.3594 52 26Z" fill="white"/>
                        <path d="M23.4628 15.917L32.7078 25.054C32.8003 25.1448 32.8738 25.2531 32.924 25.3726C32.9742 25.4921 33 25.6204 33 25.75C33 25.8796 32.9742 26.0079 32.924 26.1274C32.8738 26.2469 32.8003 26.3552 32.7078 26.446L23.4628 35.583C23.1905 35.8506 22.824 36.0005 22.4423 36.0005C22.0606 36.0005 21.6941 35.8506 21.4218 35.583C21.2882 35.4513 21.182 35.2944 21.1096 35.1214C21.0372 34.9483 20.9999 34.7626 20.9999 34.575C20.9999 34.3874 21.0372 34.2017 21.1096 34.0286C21.182 33.8556 21.2882 33.6987 21.4218 33.567L29.3308 25.75L21.4218 17.935C21.2882 17.8032 21.1822 17.6462 21.1098 17.473C21.0375 17.2999 21.0002 17.1141 21.0002 16.9265C21.0002 16.7389 21.0375 16.5531 21.1098 16.38C21.1822 16.2068 21.2882 16.0498 21.4218 15.918C21.6941 15.6504 22.0606 15.5005 22.4423 15.5005C22.824 15.5005 23.1905 15.6504 23.4628 15.918" fill="white"/>
                    </svg>
                </div>
                
                <div class="offer-gallery-slider-full" data-offer-gallery-full>
                    <? for($i = 0; $i < 10; $i++) : ?>
                        <div class="offer-gallery-slider-full-item">
                            <img data-lazy="/app/images/offer-gallery-big.png" alt="">
                        </div>
                    <? endfor; ?>
                </div>
                
                <div class="offer-gallery-slider-thumbs" data-offer-gallery-thumbs>
                    <? for($i = 0; $i < 10; $i++) : ?>
                        <div class="offer-gallery-slider-thumbs-item">
                            <img src="/app/images/offer-gallery-small.png" alt="">
                        </div>
                    <? endfor; ?>
                </div>
            </div>
            <div class="custom-slick-dots offer-gallery-slider-dots"></div>
        </div>
    </div>
</div>
    
<div class="block-margin"></div>

<div class="container">
    <div class="block-title">Похожие предложения</div>
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
    
    <? get_bottom_form(true); ?>
</div>

<form style="display: none;" data-hidden-hotel-form>
    <input type="text" name="country" value="Италия">
    <input type="text" name="resort" value="Мадонна ди Кампильо">
    <input type="text" name="hotelName" value="Les Arcs 1950 Le Village">
    <input type="text" name="hotelDates" value="29 ноября — 10 декабря">
    <input type="text" name="hotelDays" value="7 ночей">
    <input type="text" name="hotelPrice" value="749 €">
    <input type="text" name="hotelImg" value="/app/images/hotel-thumb.jpg">
    <input type="text" name="hotelStars" value="5">
</form>

<? require $_SERVER["DOCUMENT_ROOT"]. "/footer.php";
