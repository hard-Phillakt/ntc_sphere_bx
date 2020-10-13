<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<footer class="footer-second">
    <div class="little-circle pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "default_menu_footer",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "default",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "default_menu_footer"
                        ),
                        false
                    ); ?>

                </div>
                <div class="col-lg-3">
                    <div>
                        <span>
                            <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/phone.svg" alt="phone">
                        </span>
                        <span class="footer-second__link">
                               <?$APPLICATION->IncludeComponent(
                                   "bitrix:main.include",
                                   "",
                                   Array(
                                       "AREA_FILE_SHOW" => "file",
                                       "AREA_FILE_SUFFIX" => "inc",
                                       "EDIT_TEMPLATE" => "",
                                       "PATH" => "/include/pages/footer_second__link/index.php"
                                   )
                               );?>
                            <span class="fast-line"></span>
                        </span>
                    </div>
                    <div class="mt-20 mb-60">
                        <span>
                            <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/email.svg" alt="email"> </span><span class="footer-second__link">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/pages/footer_second__email/index.php"
                                    )
                                );?>
                            <span class="fast-line"></span>
                        </span>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div>
<!--                        <p class="fs-16 color__white">г. Москва, ул. Летниковская, д. 10, стр. 2, офис 510</p>-->
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/pages/footer_second__desc/index.php"
                            )
                        );?>
                    </div>
                </div>

            </div>

            <div class="row mt-60">
                <div class="col-lg-12">
                    <div class="fjc-sb copyright">

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/pages/footer_second__copyright/index.php"
                            )
                        );?>

                        <div class="developer">
                            <a href="https://sitexpert.pro/" class="color__white fs-14 opac__07">Разработка сайта – СайтЭксперт</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

    <div class="hamburger hamburger--collapse" type="button"><span class="hamburger-box"><span
                    class="hamburger-inner"></span></span></div>
    <div id="sidebar-menu" class="sidebar-menu">
        <div class="sidebar-menu__wrap">
            <ul class="sidebar-menu__list mb-60">
                <li><a href="#!">О компании</a></li>
                <li><a href="#!">Новости</a></li>
                <li><a href="#!">Решения и услуги</a></li>
                <li><a href="#!">Проекты</a></li>
                <li><a href="#!">Контакты</a></li>
                <li>
                    <div class="fjc-sb fai-c footer__copyright-box">
                        <div class="fai-c mb-30"><span class="footer__icon"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/phone.svg"
                                                                                 alt="phone"> </span><span
                                    class="footer__link"><a href="tel:+74991131030" class="fs-16 color__white fontw-700">+7 (499) 113-10-30</a> <span
                                        class="fast-line"></span></span></div>
                        <div class="fai-c"><span class="footer__icon"><img src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/email.svg"
                                                                           alt="email"> </span><span
                                    class="footer__link"><a href="mailto:info@ntcsphere.com"
                                                            class="fs-16 color__white fontw-700">info@ntcsphere.com</a> <span
                                        class="fast-line"></span></span></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</main>
</body>
</html>
