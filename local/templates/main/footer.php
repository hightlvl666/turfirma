
	<div class="footer">
		<div class="footer-inner">
		<div class="hot-block podval">
				<div class="l-t"></div> <div class="r-t"></div>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_nav_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top_nav_menu",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
			<!--<ul class="footer-menu">
				<li><a href="#">Главная</a></li>
				<li><a href="#">О компании</a></li>
				<li><a href="#">Страны</a></li>
				<li><a href="#">Туры</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>-->
			
			<p>Copyright &copy; Your Company Name</p>
			<div class="l-b"></div> <div class="r-b"></div>
				</div>
		</div>
		
						
						
		
			<ul class="country-footer">
				<li><a href="#">Африка</a></li>
				<li><a href="#">Россия</a></li>
				<li><a href="#">Узбекистан</a></li>
				<li><a href="#">Германия</a></li>
				<li><a href="#">Греция</a></li>
				<li><a href="#">Турция</a></li>
				<li><a href="#">Америка</a></li>
				<li><a href="#">Швеция</a></li>
				<li><a href="#">Австралия</a></li>
				<li><a href="#">Аргентина</a></li>
				<li><a href="#">Малайзия</a></li>
			</ul>
		
	
	</div>
	</body>
	</html>