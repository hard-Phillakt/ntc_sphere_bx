<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>




    <div class="swiper-container" id="header-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide animate">
                <div class="slider-item slider-item__0"></div>
                <div class="layer layer__one">
                    <div class="fjc-s ffd-column"><h1 id="slider-item-one__box"
                                                      class="title title__h1 title__0 fs-80 tt__upercase fontw-700 mb-20">
                            <span class="color__orange" id="slider-item-one__first-title">М</span><span
                                    class="color__blue-light" id="slider-item-one__last-title">ониторинг</span></h1>
                        <div class="fjc-s">
                            <ul class="ul list-items-ul">
                                <li class="color__blue-light list-items list-items__0 fs-16">— Автоматизированный
                                    сбор и обработка данных
                                </li>
                                <li class="color__blue-light list-items list-items__0 fs-16">— Прогнозирование и
                                    остаточный ресурс
                                </li>
                                <li class="color__blue-light list-items list-items__0 fs-16">— SMS и Email
                                    информирование
                                </li>
                            </ul>
                        </div>
                        <div class="fjc-s mt-40">

                        <div class="article-wrap article-wrap-act-0">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:news",
                                "projects_templ_sphere_index",
                                array(
                                    "ADD_ELEMENT_CHAIN" => "N",
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "N",
                                    "BROWSER_TITLE" => "-",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                                    "DETAIL_FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "DETAIL_PAGER_SHOW_ALL" => "N",
                                    "DETAIL_PAGER_TEMPLATE" => "",
                                    "DETAIL_PAGER_TITLE" => "",
                                    "DETAIL_PROPERTY_CODE" => array(
                                        0 => "AUTHOR",
                                        1 => "DATE",
                                        2 => "",
                                    ),
                                    "DETAIL_SET_CANONICAL_URL" => "N",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "2",
                                    "IBLOCK_TYPE" => "projects",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "LIST_FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "LIST_PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "MESSAGE_404" => "",
                                    "META_DESCRIPTION" => "-",
                                    "META_KEYWORDS" => "-",
                                    "NEWS_COUNT" => "3",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "SEF_FOLDER" => "/projects/",
                                    "SEF_MODE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_STATUS_404" => "Y",
                                    "SET_TITLE" => "Y",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "USE_CATEGORIES" => "N",
                                    "USE_FILTER" => "N",
                                    "USE_PERMISSIONS" => "N",
                                    "USE_RATING" => "N",
                                    "USE_RSS" => "N",
                                    "USE_SEARCH" => "N",
                                    "USE_SHARE" => "N",
                                    "COMPONENT_TEMPLATE" => "projects_templ_sphere_index",
                                    "SEF_URL_TEMPLATES" => array(
                                        "news" => "",
                                        "section" => "#SECTION_CODE_PATH#",
                                        "detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
                                    )
                                ),
                                false
                            );?>
                        </div>

<!--                            <ul class="ul fjc-s article-wrap">-->
<!--                                <li class="fjc-s mr-30 mb-30 article__li_0"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__one"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">ММДЦ МОСКВА-СИТИ»</span></h3>-->
<!--                                        </article>-->
<!--                                    </a></li>-->
<!--                                <li class="fjc-s mr-30 mb-30 article__li_0"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__two"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">«Космос» на ВДНХ</span></h3></article>-->
<!--                                    </a></li>-->
<!--                                <li class="fjc-s article__li_0"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__three"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">ГТС северного терминала морского порта АКТАУ</span>-->
<!--                                            </h3></article>-->
<!--                                    </a></li>-->
<!--                            </ul>-->

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide animate">
                <div class="slider-item slider-item__1"></div>
                <div class="layer layer__two">
                    <div class="fjc-s ffd-column"><h1 id="slider-item-two__box"
                                                      class="title title__h1 title__1 fs-80 tt__upercase fontw-700 mb-20">
                            <span class="color__orange" id="slider-item-two__first-title">Д</span><span
                                    class="color__blue-light" id="slider-item-two__last-title">иагностика</span></h1>
                        <div class="fjc-s">
                            <ul class="ul list-items-ul">
                                <li class="color__blue-light list-items list-items__1 fs-16">Анализ комплекса
                                    параметров вибрации для определения<br>технического состояния оборудования
                                </li>
                            </ul>
                        </div>
                        <div class="fjc-s mt-40">


                            <div class="article-wrap article-wrap-act-1">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news",
                                    "projects_templ_sphere_index",
                                    array(
                                        "ADD_ELEMENT_CHAIN" => "N",
                                        "ADD_SECTIONS_CHAIN" => "Y",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "N",
                                        "BROWSER_TITLE" => "-",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                                        "DETAIL_DISPLAY_TOP_PAGER" => "N",
                                        "DETAIL_FIELD_CODE" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "DETAIL_PAGER_SHOW_ALL" => "N",
                                        "DETAIL_PAGER_TEMPLATE" => "",
                                        "DETAIL_PAGER_TITLE" => "",
                                        "DETAIL_PROPERTY_CODE" => array(
                                            0 => "AUTHOR",
                                            1 => "DATE",
                                            2 => "",
                                        ),
                                        "DETAIL_SET_CANONICAL_URL" => "N",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "2",
                                        "IBLOCK_TYPE" => "projects",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "LIST_FIELD_CODE" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "LIST_PROPERTY_CODE" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "MESSAGE_404" => "",
                                        "META_DESCRIPTION" => "-",
                                        "META_KEYWORDS" => "-",
                                        "NEWS_COUNT" => "3",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "SEF_FOLDER" => "/projects/",
                                        "SEF_MODE" => "Y",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_STATUS_404" => "Y",
                                        "SET_TITLE" => "Y",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N",
                                        "USE_CATEGORIES" => "N",
                                        "USE_FILTER" => "N",
                                        "USE_PERMISSIONS" => "N",
                                        "USE_RATING" => "N",
                                        "USE_RSS" => "N",
                                        "USE_SEARCH" => "N",
                                        "USE_SHARE" => "N",
                                        "COMPONENT_TEMPLATE" => "projects_templ_sphere_index",
                                        "SEF_URL_TEMPLATES" => array(
                                            "news" => "",
                                            "section" => "#SECTION_CODE_PATH#",
                                            "detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
                                        )
                                    ),
                                    false
                                );?>
                            </div>

<!--                            <ul class="ul fjc-s article-wrap">-->
<!--                                <li class="fjc-s mr-30 mb-30 article__li_1"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__one"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">ММДЦ МОСКВА-СИТИ»</span></h3>-->
<!--                                        </article>-->
<!--                                    </a></li>-->
<!--                                <li class="fjc-s mr-30 mb-30 article__li_1"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__two"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">«Космос» на ВДНХ</span></h3></article>-->
<!--                                    </a></li>-->
<!--                                <li class="fjc-s article__li_1"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__three"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">ГТС северного терминала морского порта АКТАУ</span>-->
<!--                                            </h3></article>-->
<!--                                    </a></li>-->
<!--                            </ul>-->

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide animate">
                <div class="slider-item slider-item__2"></div>
                <div class="layer layer__three">
                    <div class="fjc-s ffd-column"><h1 id="slider-item-three__box"
                                                      class="title title__h1 title__2 fs-80 tt__upercase fontw-700 mb-20">
                            <span class="color__orange" id="slider-item-three__first-title">А</span><span
                                    class="color__blue-light" id="slider-item-three__last-title">втоматизация</span></h1>
                        <div class="fjc-s">
                            <ul class="ul list-items-ul">
                                <li class="color__blue-light list-items list-items__2 fs-16">Работа с ключевыми
                                    зарубежными и отечественными<br>производителями
                                </li>
                            </ul>
                        </div>
                        <div class="fjc-s mt-40">


                            <div class="article-wrap article-wrap-act-2">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news",
                                    "projects_templ_sphere_index",
                                    array(
                                        "ADD_ELEMENT_CHAIN" => "N",
                                        "ADD_SECTIONS_CHAIN" => "Y",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "N",
                                        "BROWSER_TITLE" => "-",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                                        "DETAIL_DISPLAY_TOP_PAGER" => "N",
                                        "DETAIL_FIELD_CODE" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "DETAIL_PAGER_SHOW_ALL" => "N",
                                        "DETAIL_PAGER_TEMPLATE" => "",
                                        "DETAIL_PAGER_TITLE" => "",
                                        "DETAIL_PROPERTY_CODE" => array(
                                            0 => "AUTHOR",
                                            1 => "DATE",
                                            2 => "",
                                        ),
                                        "DETAIL_SET_CANONICAL_URL" => "N",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "2",
                                        "IBLOCK_TYPE" => "projects",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "LIST_FIELD_CODE" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "LIST_PROPERTY_CODE" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "MESSAGE_404" => "",
                                        "META_DESCRIPTION" => "-",
                                        "META_KEYWORDS" => "-",
                                        "NEWS_COUNT" => "3",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "SEF_FOLDER" => "/projects/",
                                        "SEF_MODE" => "Y",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_STATUS_404" => "Y",
                                        "SET_TITLE" => "Y",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N",
                                        "USE_CATEGORIES" => "N",
                                        "USE_FILTER" => "N",
                                        "USE_PERMISSIONS" => "N",
                                        "USE_RATING" => "N",
                                        "USE_RSS" => "N",
                                        "USE_SEARCH" => "N",
                                        "USE_SHARE" => "N",
                                        "COMPONENT_TEMPLATE" => "projects_templ_sphere_index",
                                        "SEF_URL_TEMPLATES" => array(
                                            "news" => "",
                                            "section" => "#SECTION_CODE_PATH#",
                                            "detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
                                        )
                                    ),
                                    false
                                );?>
                            </div>

<!--                            <ul class="ul fjc-s article-wrap">-->
<!--                                <li class="fjc-s mr-30 mb-30 article__li_2"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__one"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">ММДЦ МОСКВА-СИТИ»</span></h3>-->
<!--                                        </article>-->
<!--                                    </a></li>-->
<!--                                <li class="fjc-s mr-30 mb-30 article__li_2"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__two"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">«Космос» на ВДНХ</span></h3></article>-->
<!--                                    </a></li>-->
<!--                                <li class="fjc-s article__li_2"><a href="#!" class="fjc-s">-->
<!--                                        <article class="fjc-s article article__three"><h3 class="fs-18 fontw-700"><span-->
<!--                                                        class="color__white tt__upercase">ГТС северного терминала морского порта АКТАУ</span>-->
<!--                                            </h3></article>-->
<!--                                    </a></li>-->
<!--                            </ul>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>