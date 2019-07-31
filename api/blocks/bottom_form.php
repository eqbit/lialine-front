<?php

function get_bottom_form($is_simple = true, $country = false, $resort = false) {
    if($is_simple) : ?>
        <form class="tour-selection-grid-full" data-tour-selection-form-full>
            <select name="country"
                    data-nice-select
                    data-coutnry-select
                    class="top-form-select top-form-select--country tour-selection-grid-full-item tour-selection-grid-full-item-1">
                <? foreach(get_countries() as $country_name) : ?>
                    <option value="<?= $country_name; ?>"<?= $country == $country_name ? " selected" : ""; ?>>
                        <?= $country_name; ?>
                    </option>
                <? endforeach; ?>
            </select>
        
            <select name="resort"
                    data-nice-select
                    data-resort-select
                    class="top-form-select tour-selection-grid-full-item tour-selection-grid-full-item-2">
                <option value="">Любой курорт</option>
                <? foreach(get_resorts($country) as $resort_name) : ?>
                    <option value="<?= $resort_name; ?>"<?= $resort == $resort_name ? " selected" : ""; ?>><?= $resort_name; ?></option>
                <? endforeach; ?>
            </select>
        
            <div class="tour-selection-grid-date tour-selection-grid-full-item tour-selection-grid-full-item-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                    <path id="Path_208" data-name="Path 208" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" fill="#f78f1e"/>
                </svg>
            
                <input type="text"
                       class="tour-selection-grid-date__input"
                       name="date_from"
                       placeholder="Заезд"
                       data-date-range-from-f-f>
            </div>
        
            <div class="tour-selection-grid-quantity tour-selection-grid-full-item tour-selection-grid-full-item-4">
                <select name="adults" data-nice-select class="tour-selection-grid-select tour-selection-grid-select--quantity">
                    <option value="1">1 взрослый</option>
                    <option value="2" selected>2 взрослых</option>
                    <option value="3">3 взрослых</option>
                    <option value="4">4 взрослых</option>
                </select>
            
                <select name="kids" data-nice-select class="tour-selection-grid-select tour-selection-grid-select--quantity">
                    <option value="0" data-display="0 детей">без детей</option>
                    <option value="1">1 ребенок</option>
                    <option value="2">2 детей</option>
                    <option value="3">3 детей</option>
                    <option value="4">4 детей</option>
                </select>
            </div>
        
            <select name="difficulty"
                    data-nice-select
                    class="our-selection-grid-select tour-selection-grid-full-item tour-selection-grid-full-item-5">
                <option value="" data-display="Уровень сложности">Выберите уровень сложности</option>
                <option value="Просто">Просто</option>
                <option value="Средне">Средне</option>
                <option value="Сложно">Сложно</option>
            </select>
        
            <input type="text"
                   class="tour-selection-grid__input tour-selection-grid-full-item tour-selection-grid-full-item-6"
                   placeholder="Электронная почта"
                   required
                   name="email">
            <input type="text"
                   class="tour-selection-grid__input tour-selection-grid-full-item tour-selection-grid-full-item-7"
                   placeholder="Телефон"
                   required
                   data-phone
                   name="phone">
            <input type="text"
                   class="tour-selection-grid__input tour-selection-grid-full-item tour-selection-grid-full-item-8"
                   placeholder="Ваше имя"
                   required
                   name="name">
        
            <div class="tour-selection-grid-bottom">
                <div class="tour-selection-grid-bottom-agreement">
                    <div class="checkbox-check-mark">
                        <input type="checkbox" required checked name="agreement">
                        <span></span>
                    </div>
                    <span class="tour-selection-grid-bottom-agreement__text">Согласие на обработку персональных
                        данных</span>
                </div>
            
                <button type="submit" class="btn btn--primary"><span>Подобрать тур</span></button>
            </div>
        </form>
    <? else : ?>
        <div class="tour-selection">
            <div class="tour-selection-swipe">
                <span data-swipe-text>Я не знаю,куда хочу поехать, предложите мне лучший вариант</span>
                <div data-swipe></div>
            </div>
        
            <form class="tour-selection-grid-small" data-tour-selection-form-small>
                <div class="tour-selection-grid-date tour-selection-grid-small-item tour-selection-grid-small-item-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                        <path id="Path_208" data-name="Path 208" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" fill="#f78f1e"/>
                    </svg>
                
                    <input type="text"
                           class="tour-selection-grid-date__input"
                           name="date_from"
                           placeholder="Заезд"
                           data-date-range-from-s-f>
                </div>
            
                <div class="tour-selection-grid-quantity tour-selection-grid-small-item tour-selection-grid-small-item-2">
                    <select name="adults" data-nice-select class="tour-selection-grid-select tour-selection-grid-select--quantity">
                        <option value="1">1 взрослый</option>
                        <option value="2" selected>2 взрослых</option>
                        <option value="3">3 взрослых</option>
                        <option value="4">4 взрослых</option>
                    </select>
                
                    <select name="kids" data-nice-select class="tour-selection-grid-select tour-selection-grid-select--quantity">
                        <option value="0" data-display="0 детей">без детей</option>
                        <option value="1">1 ребенок</option>
                        <option value="2">2 детей</option>
                        <option value="3">3 детей</option>
                        <option value="4">4 детей</option>
                    </select>
                </div>
            
                <select name="difficulty"
                        data-nice-select
                        class="our-selection-grid-select tour-selection-grid-small-item tour-selection-grid-small-item-3">
                    <option value="" data-display="Уровень сложности">Выберите уровень сложности</option>
                    <option value="Просто">Просто</option>
                    <option value="Средне">Средне</option>
                    <option value="Сложно">Сложно</option>
                </select>
            
                <input type="text"
                       class="tour-selection-grid__input tour-selection-grid-small-item tour-selection-grid-small-item-4"
                       placeholder="Электронная почта"
                       required
                       name="email">
                <input type="text"
                       class="tour-selection-grid__input tour-selection-grid-small-item tour-selection-grid-small-item-5"
                       placeholder="Телефон"
                       required
                       data-phone
                       name="phone">
                <input type="text"
                       class="tour-selection-grid__input tour-selection-grid-small-item tour-selection-grid-small-item-6"
                       placeholder="Ваше имя"
                       required
                       name="name">
            
                <div class="tour-selection-grid-bottom">
                    <div class="tour-selection-grid-bottom-agreement">
                        <div class="checkbox-check-mark">
                            <input type="checkbox" required checked name="agreement">
                            <span></span>
                        </div>
                        <span class="tour-selection-grid-bottom-agreement__text">Согласие на обработку персональных
                        данных</span>
                    </div>
                
                    <button type="submit" class="btn btn--primary"><span>Подобрать тур</span></button>
                </div>
            </form>
        
            <form class="tour-selection-grid-full" data-tour-selection-form-full style="display: none;">
                <select name="country"
                        data-nice-select
                        data-coutnry-select
                        class="top-form-select top-form-select--country tour-selection-grid-full-item tour-selection-grid-full-item-1">
                    <? foreach(get_countries() as $country_en => $country_ru) : ?>
                        <option value="<?= $country_en; ?>"<?= $country == $country_en ? " selected" : ""; ?>>
                            <?= $country_ru; ?>
                        </option>
                    <? endforeach; ?>
                </select>
            
                <select name="resort"
                        data-nice-select
                        data-resort-select
                        class="top-form-select tour-selection-grid-full-item tour-selection-grid-full-item-2">
                    <option value="">Любой курорт</option>
                    <? foreach(get_resorts($country) as $resort_name) : ?>
                        <option value="<?= $resort_name; ?>"<?= $resort == $resort_name ? " selected" : ""; ?>><?= $resort_name; ?></option>
                    <? endforeach; ?>
                </select>
            
                <div class="tour-selection-grid-date tour-selection-grid-full-item tour-selection-grid-full-item-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                        <path id="Path_208" data-name="Path 208" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" fill="#f78f1e"/>
                    </svg>
                
                    <input type="text"
                           class="tour-selection-grid-date__input"
                           name="date_from"
                           placeholder="Заезд"
                           data-date-range-from-f-f>
                </div>
            
                <div class="tour-selection-grid-quantity tour-selection-grid-full-item tour-selection-grid-full-item-4">
                    <select name="adults" data-nice-select class="tour-selection-grid-select tour-selection-grid-select--quantity">
                        <option value="1">1 взрослый</option>
                        <option value="2" selected>2 взрослых</option>
                        <option value="3">3 взрослых</option>
                        <option value="4">4 взрослых</option>
                    </select>
                
                    <select name="kids" data-nice-select class="tour-selection-grid-select tour-selection-grid-select--quantity">
                        <option value="0" data-display="0 детей">без детей</option>
                        <option value="1">1 ребенок</option>
                        <option value="2">2 детей</option>
                        <option value="3">3 детей</option>
                        <option value="4">4 детей</option>
                    </select>
                </div>
            
                <select name="difficulty"
                        data-nice-select
                        class="our-selection-grid-select tour-selection-grid-full-item tour-selection-grid-full-item-5">
                    <option value="" data-display="Уровень сложности">Выберите уровень сложности</option>
                    <option value="Просто">Просто</option>
                    <option value="Средне">Средне</option>
                    <option value="Сложно">Сложно</option>
                </select>
            
                <input type="text"
                       class="tour-selection-grid__input tour-selection-grid-full-item tour-selection-grid-full-item-6"
                       placeholder="Электронная почта"
                       required
                       name="email">
                <input type="text"
                       class="tour-selection-grid__input tour-selection-grid-full-item tour-selection-grid-full-item-7"
                       placeholder="Телефон"
                       required
                       data-phone
                       name="phone">
                <input type="text"
                       class="tour-selection-grid__input tour-selection-grid-full-item tour-selection-grid-full-item-8"
                       placeholder="Ваше имя"
                       required
                       name="name">
            
                <div class="tour-selection-grid-bottom">
                    <div class="tour-selection-grid-bottom-agreement">
                        <div class="checkbox-check-mark">
                            <input type="checkbox" required checked name="agreement">
                            <span></span>
                        </div>
                        <span class="tour-selection-grid-bottom-agreement__text">Согласие на обработку персональных
                        данных</span>
                    </div>
                
                    <button type="submit" class="btn btn--primary"><span>Подобрать тур</span></button>
                </div>
            </form>
        </div>
    <? endif;
}