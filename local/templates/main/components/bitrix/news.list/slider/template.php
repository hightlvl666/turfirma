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
<ul class="baner" id="my_slider" >
    <?foreach($arResult["ITEMS"] as $slider):
        $link=$slider["PROPERTIES"]["LINK"]["VALUE"];
        $file = CFile::ResizeImageGet($slider['PREVIEW_PICTURE']["ID"], array('width'=>568, 'height'=>209), BX_RESIZE_IMAGE_EXACT, true);

        ?>
        <li>
            <?if($link):?>
                <a href="<?=$link?>">
            <?endif;?>

                <img src="<?=$file["src"]?>" alt="<?=$slider["NAME"]?>" />

              <?if($link):?>
                    </a>
              <?endif;?>

        </li>
    <?endforeach?>
</ul>

