<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true){die();}?>
<!DOCTYPE html>

<html lang="en">
	<head>


		<title><?$APPLICATION->ShowTitle()?></title>

        <?$APPLICATION->SetAdditionalCSS("/local/media/css/global.css")?>
        <?$APPLICATION->SetAdditionalCSS("/local/media/css/layout.css")?>
        <?$APPLICATION->AddHeadScript("/local/media/js/jquery-1.2.6.min.js")?>
        <?$APPLICATION->AddHeadScript("/local/media/js/main.js")?>

<!--<script>
		$(document).ready(function(){

			$('.btn').click(function(){
				$('#panel').animate({ opacity: "hide" }, "slow");


			});

		});




		</script>-->
		<link rel="shortcut icon" href="/favicon.ico" />
	    <?$APPLICATION->ShowHead()?>
    </head>
	<body>
    <?$APPLICATION->ShowPanel()?>
	<!-- Wrapper begin-->
	<div class="wrapper">
		<!-- Header begin -->
        <div class="header">

            <h1><a class="logo" href="/">
                    <?    $APPLICATION->IncludeFile(
                        $APPLICATION->GetTemplatePath(SITE_DIR."local/include_areas/logo.php"),
                        Array(),
                        Array("MODE"=>"php")
                    );?>
                </a></h1>
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "super_top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);
                
                ?>
         <!--  <ul class="help">
                <li><a class="hot" href="#">Горячие предложения</a></li>
                <li><a class="find-tour" href="#">Найти тур</a></li>
                <li><a class="clients" href="#">Подержка клиентов</a></li>
            </ul>-->
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_nav_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top_nav_menu",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_nav_menu"
	),
	false
);?>
            <!--<ul class="menu">
                <li><a class="active" href="#">Главная</a></li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Страны</a></li>
                <li><a href="#">Туры</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>-->

        </div>
		<? /*   $APPLICATION->IncludeFile(
		    			$APPLICATION->GetTemplatePath(SITE_DIR."local/include_areas/nav_.php"),
		    			Array(),
		    			Array("MODE"=>"html")
		    );*/?><!--
        --><?/* include $_SERVER['DOCUMENT_ROOT'].'/local/in'*/?>

		<!-- Content begin-->
		<div class="content">
			<div class="section">
				<!-- Baner -->
                <?
                $cur_page=$APPLICATION->GetCurPage();
                ?>
                <?if($cur_page=="/"):?>

                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "all",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?>
                    

				<?endif;?>
			

				<!-- Okroshka -->
				<fieldset>
					<legend>Навигация</legend>
					<ul class="breadcrumbs">
						<li><a class="home" href="#">Главная</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>	
				</fieldset>

				<!-- Content text-->
				
				<h2 class="info"><?$APPLICATION->ShowTitle()?></h2>
				

					
