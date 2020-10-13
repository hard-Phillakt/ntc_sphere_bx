<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<ul class="ul fjc-s">

<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <li class="fjc-s mr-30 mb-30" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="fjc-s">
            <article class="fjc-s article article__one"
                     style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);
                             background-position: 50%;
                             background-size: 100%;"
            >
                <h3 class="fs-18 fontw-700">
                    <span class="color__white tt__upercase">«<?echo $arItem["NAME"]?>»</span>
                </h3>
            </article>
        </a>
    </li>

<?endforeach;?>

</ul>


