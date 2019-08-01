<?php

function get_top_form($country = false, $resort = false) {
    ?>
    <div class="block-margin top-form-margin"></div>
    <div class="block-title top-form-title" id="top-form">Подбор тура</div>
    
    <form class="top-form" data-top-form>
        <select name="country"
                data-nice-select
                data-coutnry-select
                class="top-form-select top-form-select--country top-form-item top-form-item-1">
            <? foreach(get_countries() as $country_name) : ?>
                <option value="<?= $country_name; ?>"<?= $country_name == $country ? " selected" : ""; ?>>
                    <?= $country_name; ?>
                </option>
            <? endforeach; ?>
        </select>
        
        <select name="resort"
                data-nice-select
                data-resort-select
                class="top-form-select top-form-item top-form-item-2">
            <option value="">Любой курорт</option>
            <? foreach(get_resorts($country) as $resort_name) : ?>
                <option value="<?= $resort_name; ?>"<?= $resort == $resort_name ? " selected" : ""; ?>><?= $resort_name; ?></option>
            <? endforeach; ?>
        </select>
        
        <div class="top-form-date top-form-item top-form-item-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                <path id="Path_208" data-name="Path 208" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" fill="#f78f1e"/>
            </svg>
            
            <input type="text"
                   class="top-form-date__input"
                   name="date_from"
                   placeholder="Заезд"
                   data-date-range-from
                   readonly
            >
        </div>
        
        <div class="top-form-quantity top-form-item top-form-item-4">
            <select name="adults" data-nice-select class="top-form-select top-form-select--quantity">
                <option value="1">1 взрослый</option>
                <option value="2" selected>2 взрослых</option>
                <option value="3">3 взрослых</option>
                <option value="4">4 взрослых</option>
            </select>
            
            <select name="kids" data-nice-select class="top-form-select top-form-select--quantity">
                <option value="0" data-display="0 детей">без детей</option>
                <option value="1">1 ребенок</option>
                <option value="2">2 детей</option>
                <option value="3">3 детей</option>
                <option value="4">4 детей</option>
            </select>
        </div>
        
        <button type="submit"
                class="btn btn--primary btn--top-form top-form-item top-form-item-5">
            <span>Найти тур</span>
        </button>
    </form>
    <?
}