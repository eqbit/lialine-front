<?

function pre($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function get_countries() {
    return [
        "Италия",
        "Франция",
        "Австрия"
    ];
}

function get_resorts($country = false) {
    $resorts = [
        "Италия" => [
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо"
        ],
        "Франция" => [
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо"
        ],
        "Австрия" => [
            "Мадонна ди Кампильо",
            "Мадонна ди Кампильо"
        ]
    ];
    
    return $country
        ? $resorts[$country]
        : reset($resorts);
}

function fuck_yeah() {
    return rand(0, 9) > 5;
}

function draw_tripadvisor_rating($rating) {
    echo "<span>" .$rating. "</span>";
    
    $integer = floor($rating);
    $remainder = $rating - $integer;
    
    if($remainder > .8) {
        $integer++;
        $remainder = 0;
    }
    
    for($i = 1; $i <= 5; $i ++) : ?>
        <div class="tripadvisor-dot
            <?= $i <= $integer ? ' tripadvisor-dot--full' : ''; ?>
            <?= $i == $integer + 1 && $remainder > 0.4 ? ' tripadvisor-dot--half' : ''; ?>
            ">
            <span></span>
        </div>
    <? endfor;
}

require_once "blocks/bottom_form.php";
require_once "blocks/top_form.php";
require_once "blocks/common_slider_nav.php";

