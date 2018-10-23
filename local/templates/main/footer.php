
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
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "nav_left_menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left_nav_menu",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "nav_left_menu",
                    "USE_EXT" => "Y",
                    "COMPONENT_TEMPLATE" => "nav_left_menu"
                ),
                false
            );?>
            <!--<ul class="country-main">

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
            </ul>-->
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