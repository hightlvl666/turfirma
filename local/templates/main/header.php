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

				<ul class="baner" id="my_slider" >
					<li ><a href="#"><img src="<?=IMAGES_PATH?>/src/baner1.png" alt="" /></a></li>
					<li ><a href="#"><img src="<?=IMAGES_PATH?>/src/baner2.png" alt="" /></a></li>
					<li ><a href="#"><img src="<?=IMAGES_PATH?>/src/baner3.png" alt="" /></a></li>
				</ul>	
				
			

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
				
				<h2 class="info">Контактная информация</h2>
				
				<p>Обратитесь к нашим специалистам и получите профессиональную консультацию по услугам нашей компании.</p>
					<p>Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе.</p>
					<p>Будем рады помочь вам и ответить на все ваши вопросы. </p>
					
					
					<div class="hot-block">
						<div class="l-t"></div> <div class="r-t"></div>
						<h2 class="proposal">Горячие предложения</h2>
						<div class="l-b"></div> <div class="r-b"></div>
					</div>
					 <div class="tour-block">
						<div class="shadow-block">
							<div class="inner-shadow">
							<img src="<?=IMAGES_PATH?>/src/pic1.jpg" alt="" />
							</div>
						</div>
						<h3>Мексика</h3>
						<p>Начиная от <span>789$</span></p>
						<div class="hot-block next">
						<div class="l-t"></div> <div class="r-t"></div>
						<a class="more" href="#">подробнее</a>
						<div class="l-b"></div> <div class="r-b"></div>
					</div>
					 </div>
					 
					 <div class="tour-block">
						<div class="shadow-block">
							<div class="inner-shadow">
							<img src="<?=IMAGES_PATH?>/src/pic2.jpg" alt="" />
							</div>
						</div>
						<h3>Мальдивы</h3>
						<p>Начиная от <span>649$</span></p>
						<div class="hot-block next">
						<div class="l-t"></div> <div class="r-t"></div>
						<a class="more" href="#">подробнее</a>
						<div class="l-b"></div> <div class="r-b"></div>
					</div>
					 </div>
					 
					 <div class="tour-block">
						<div class="shadow-block">
							<div class="inner-shadow">
							<img src="<?=IMAGES_PATH?>/src/pic3.jpg" alt="" />
							</div>
						</div>
						<h3>Бали</h3>
						<p>Начиная от <span>559$</span></p>
						<div class="hot-block next">
						<div class="l-t"></div> <div class="r-t"></div>
						<a class="more" href="#">подробнее</a>
						<div class="l-b"></div> <div class="r-b"></div>
					</div>
					 </div>
			</div>
			
			<div class="aside">
				<dl class="country">
					<dt> Страны</dt>
					
					<dd>
						<ul class="country-main">
							<li><a href="#">Америка</a></li>
							<li><a href="#">Мексика</a></li>
							<li><a href="#">Карибы</a></li>
							<li><a href="#">Европа</a></li>
							<li><a href="#">Конада</a></li>
							<li><a href="#">Азия</a></li>
							<li><a href="#">Австралия</a></li>
							<li><a href="#">Россия</a></li>
							<li><a href="#">Узбекистан</a></li>
							<li><a href="#">Турция</a></li>
							<li><a href="#">Африка</a></li>
						</ul>
					</dd>
				</dl>
				<div class="search">
					<h3>Найти тур</h3>
					<div class="inner-search">
					<form action="" method="" name="">
					
					<dl>
						<dt>Страна</dt>
						<dd><select  name="country-name">
							<option selected="selected">Выберите страну</option>
							<option >Америка</option>
							<option >Мексика</option>
							<option >Карибы</option>
							<option >Россия</option>
						   </select>
						</dd>
						
						<dt>Город (Курорт)</dt>
						<dd><select  name="city-name">
							<option selected="selected">Выберите город</option>
							<option >Ташкент</option>
							<option >Бухара</option>
							<option >Хива</option>
							<option >Москва</option>
						   </select>
						</dd>
						
						<dt>Тип тура</dt>
						<dd><select  name="tour-name">
							<option selected="selected">Любой тип</option>
							<option >Образование</option>
							<option >Отдых</option>
							<option >Путешествие</option>
							<option >Экскурсия</option>
						   </select>
						</dd>
						
						<dt>Цена до ($)</dt>
						<dd>
						<input type="text" />
						</dd>
					</dl>
					
						<label><input type="checkbox"/> <span>Горячий тур</span></label>
						<p><input type="submit" value="Найти"/></p>
					</form>	
				</div>
				</div>
			</div>
		</div>
	</div>
