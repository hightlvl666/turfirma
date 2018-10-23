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
<div>
<ul>
<? foreach ($arResult["SECTIONS"] as $pram):

    $file = CFile::ResizeImageGet($pram['PICTURE']["ID"], array('width'=>250, 'height'=>250), BX_RESIZE_IMAGE_EXACT, true);
    //echo "<pre>";print_r($file);echo "</pre>";
?>


        <li>
            <h2><?=$pram["NAME"]?></h2><br>
            <div>
                <a href="">
                    <img src="<?=$file['src']?>" alt="">
                </a>
            </div><br>
            <p><?=$pram["DESCRIPTION"]?></p>
        </li><br>

    <?echo "<pre>";print_r($pram);echo "</pre>";?>
<?endforeach?>

</ul>
</div>
