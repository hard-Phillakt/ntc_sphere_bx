<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die(); ?>

<?php use Bitrix\Main\Page\Asset;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die(); ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width,initial-scale=1">'); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php

    $APPLICATION->ShowHead();

    // Css
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/2.bundle.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/0.bundle.min.css");

    // Js
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/bundle.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/2.bundle.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/0.bundle.min.js");

    ?>
</head>
<body style="overflow:hidden">

<?php

$APPLICATION->ShowPanel();

?>
<main id="app">
    <div class="menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4">

<!--                    <div class="logo"><a href="/"><img src="--><?//= DEFAULT_TEMPLATE_PATH; ?><!--/images/logo.png"-->
<!--                                                       alt="logo"></a></div>-->
                    <div class="logo">

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/index/logo/logo.php"
                            )
                        );?>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div>
                        <ul class="menu-list ul fjc-sb">
                            <li class="fjc-s">
                                <a href="/about" class="menu__link fs-14 color__blue-dark">О компании</a>
                                <span class="fast-line"></span>
                            </li>
                            <li class="fjc-s">
                                <a href="#!" class="menu__link fs-14 color__blue-dark">Новости</a>
                                <span class="fast-line"></span>
                            </li>
                            <li class="fjc-s">
                                <a href="#!" class="menu__link fs-14 color__blue-dark">Решения и  услуги</a>
                                <span class="fast-line"></span>
                            </li>
                            <li class="fjc-s">
                                <a href="#!" class="menu__link fs-14 color__blue-dark">Проекты</a>
                                <span class="fast-line"></span>
                            </li>
                            <li class="fjc-s">
                                <a href="/contact" class="menu__link fs-14 color__blue-dark">Контакты</a>
                                <span class="fast-line"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">

