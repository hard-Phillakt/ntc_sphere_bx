<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

    <section class="content mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><h1 class="fs-40 color__blue-dark fontw-700">Контакты</h1></div>
            </div>
            <div class="row pt-100">
                <div class="col-lg-4 mb-60">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="icon-sphere"><img
                                        src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/orange-sphere.svg" alt="orange-sphere">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="content__box-text"><h3 class="content__h3 fs-14 color__black mb-10">Телефон</h3>
                                <p class="fs-14 color__black"><a href="tel:+74991131030"
                                                                 class="content__link fs-18 color__black fontw-700 tt__upercase">+7
                                        (499) 113-10-30</a></p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-60">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="icon-sphere"><img
                                        src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/orange-sphere.svg" alt="orange-sphere">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="content__box-text"><h3 class="content__h3 fs-14 color__black mb-10">Email</h3>
                                <p class="fs-14 color__black"><a href="mailto:info@ntcsphere.ru"
                                                                 class="content__link fs-18 color__orange fontw-700 tt__upercase">info@ntcsphere.ru</a>
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="icon-sphere"><img
                                        src="<?= DEFAULT_TEMPLATE_PATH; ?>/images/orange-sphere.svg" alt="orange-sphere">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="content__box-text"><h3 class="content__h3 fs-14 color__black mb-10">Адрес</h3>
                                <p class="fs-14 color__black">115114, г. Москва, ул. Летниковская, д. 10, стр. 2, офис
                                    510</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="map" style="height:500px"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>