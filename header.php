<?
require "init.php";
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lialine</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/app/styles/app.css?ver=<?= time(); ?>">
    <script src="/app/vendor/jquery/script.js"></script>
    
    <script src="/app/vendor/switch-btn/script.js"></script>
    <link rel="stylesheet" href="/app/vendor/switch-btn/style.css">
</head>
<body>
<header class="header">

    <div class="header-copy">ООО «Дейли». Уполномоченное агенство Pac Group</div>
    <div class="header-row">
        <div class="header-row-logos">
            <a href="#"><img src="/app/images/pac-logo.png" alt=""></a>

            <div class="header-row-logos-sep"></div>

            <a href="/"><img src="/app/images/lia-logo.png" alt=""></a>
        </div>

        <div class="header-row-contacts">
            <a class="header-row-contacts__title" data-anchor href="#footer">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20">
                    <path id="Path_200" data-name="Path 200" d="M12,2A7,7,0,0,0,5,9c0,5.25,7,13,7,13s7-7.75,7-13A7,7,0,0,0,12,2Zm0,9.5A2.5,2.5,0,1,1,14.5,9,2.5,2.5,0,0,1,12,11.5Z" transform="translate(-5 -2)" fill="#fff"/>
                </svg>

                <span>Контакты</span>
            </a>

            <a href="mailto:info@lialine.ru" class="header-row-contacts__mail">info@lialine.ru</a>

            <a href="tel:+7 (495) 232-24-25" class="header-row-contacts__phone">+7 (495) 232-24-25</a>

            <a href="tel:+7 (495) 232-24-25" class="header-row-contacts__phone-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="52" viewBox="0 0 52 52">
                    <defs>
                        <clipPath id="clip-path">
                            <rect width="52" height="52" fill="none"/>
                        </clipPath>
                        <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ff9d00"/>
                            <stop offset="1" stop-color="#f77b00"/>
                        </linearGradient>
                    </defs>
                    <g id="Component_25_1" data-name="Component 25 – 1" clip-path="url(#clip-path)">
                        <circle id="Oval" cx="26" cy="26" r="26" fill="url(#linear-gradient)"/>
                        <path id="Call_Icon" data-name="Call Icon" d="M4.655,11.048s6.537,5.966,10.221,4.086a3.335,3.335,0,0,0,1.117-1.653c.1-.819-.747-1.369-1.074-1.556-.783-.449-1.588-.868-2.386-1.294a1.166,1.166,0,0,0-.824-.213,2.827,2.827,0,0,0-.508.167c-.562.264-1.023.513-1.632.761,0,0-.622-.182-2.941-2.293C4.163,6.808,4.5,5.974,4.5,5.974a9.064,9.064,0,0,0,.855-1.288,3.207,3.207,0,0,0,.309-.594c.062-.213-.065-.365-.171-.552C5.252,3.123,5,2.713,4.738,2.308A14.86,14.86,0,0,0,3.249.253c-.061-.065-.2-.26-.318-.253A5.02,5.02,0,0,0,.389,1.23C-1.594,4.49,4.655,11.048,4.655,11.048Z" transform="translate(17.143 18.674)" fill="#fff"/>
                    </g>
                </svg>
            </a>

        </div>
    </div>
</header>
<main>

