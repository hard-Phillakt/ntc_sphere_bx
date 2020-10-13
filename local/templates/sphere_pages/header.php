<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die(); ?>

<?php

use Bitrix\Main\Page\Asset;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width,initial-scale=1">'); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php

    $APPLICATION->ShowHead();

    // Css
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/2.bundle.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/0.bundle.min.css");

    // String
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">');
    Asset::getInstance()->addString('<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css">');
    Asset::getInstance()->addString('<script src="https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js"></script>');


    // Js
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/bundle.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/2.bundle.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/0.bundle.min.js");

    ?>

</head>
<body>
<?php

$APPLICATION->ShowPanel();

?>
<main id="page">
    <header class="header-wrap pb-60">
        <div class="header-second">
            <div class="container">
                <div class="row header-second-row fjc-c fai-c">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/pages/logo/logo.php"
                            )
                        );?>

<!--                        <a href="/" class="logo"><img-->
<!--                                    src="--><?//= DEFAULT_TEMPLATE_PATH; ?><!--/images/logo.png" alt="logo"></a>-->


                    </div>
                    <div class="col-lg-6">
<!--                        <div class="fjc-c tac header-second__desc"><span class="fs-21 color__blue-dark fontw-700">Мониторинг, Диагностика,<br>Автоматизация</span>-->
                        <div class="fjc-c tac header-second__desc">
                            <span class="fs-21 color__blue-dark fontw-700">
                               <?$APPLICATION->IncludeComponent(
                                   "bitrix:main.include",
                                   "",
                                   Array(
                                       "AREA_FILE_SHOW" => "file",
                                       "AREA_FILE_SUFFIX" => "inc",
                                       "EDIT_TEMPLATE" => "",
                                       "PATH" => "/include/pages/header_second__desc/index.php"
                                   )
                               );?>
                            </span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
<!--                        <div><span><img src="--><?//= DEFAULT_TEMPLATE_PATH; ?><!--/images/phone.svg"-->
<!--                                        alt="phone"> </span><span class="header-second__link"><a href="tel:+74991131030"-->
<!--                                                                                                 class="fs-16 color__black fontw-700 ml-10">+7 (499) 113-10-30</a> <span-->
<!--                                        class="fast-line"></span></span></div>                        -->

                        <div>
                            <span>
                                <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/phone.svg" alt="phone">
                            </span>
                            <span class="header-second__link">
<!--                                <a href="tel:+74991131030" class="fs-16 color__black fontw-700 ml-10">+7 (499) 113-10-30</a>-->
                                   <?$APPLICATION->IncludeComponent(
                                       "bitrix:main.include",
                                       "",
                                       Array(
                                           "AREA_FILE_SHOW" => "file",
                                           "AREA_FILE_SUFFIX" => "inc",
                                           "EDIT_TEMPLATE" => "",
                                           "PATH" => "/include/pages/header_second__link/index.php"
                                       )
                                   );?>
                                <span class="fast-line"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "default_menu",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "default",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "default_menu"
                            )
                        );?>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><span><a href="#!" class="color__orange">Главная</a> </span><i>- </i><span>О компании</span>
                </div>
            </div>
        </div>
    </section>

