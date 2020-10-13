<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die(); ?>


</header>

<footer class="footer">
    <div class="navigat-wrap">
        <div class="navigat-wrap__box">
            <div class="swiper-button-next active-item"><span class="material-icons">arrow_right_alt</span></div>
            <div class="swiper-button-prev"><span class="material-icons">arrow_right_alt</span></div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="fjc-sb fai-c footer__copyright-box">

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/index/footer__copyright/index.php"
                )
            );?>


            <p>
                <span class="footer__icon">
                    <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/phone.svg" alt="phone">
                </span>
                <span class="footer__link">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/index/footer__link/index.php"
                        )
                    );?>
                    <span class="fast-line"></span>
                </span>
            </p>


            <p>
                <span class="footer__icon">
                    <img src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/email.svg" alt="email">
                </span>
                <span class="footer__link">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/index/footer__email/index.php"
                        )
                    );?>

                    <span class="fast-line"></span>
                </span>
            </p>

            <p class="developer fs-14"><a href="https://sitexpert.pro/">Сайт разработан в SITEXPERT.PRO</a></p>
        </div>
    </div>
</footer>

<span class="cursor"></span>
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