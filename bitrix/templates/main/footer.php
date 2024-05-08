
    <!-- // end events -->
    <div class="cn_hp_content">
        <div class="cn_hp_category">
            <ul>
                <li>
                    <img src="/bitrix/templates/.default/content/1.png" alt=""/>
                    <h2><a href="">Мягкая мебель</a></h2>
                    <p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                    <div class="clearboth"></div>
                </li>
                <li>
                    <img src="/bitrix/templates/.default/content/2.png" alt=""/>
                    <h2><a href="">Офисная мебель</a></h2>
                    <p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                    <div class="clearboth"></div>
                </li>
                <li>
                    <img src="/bitrix/templates/.default/content/3.png" alt=""/>
                    <h2><a href="">Мебель для кухни</a></h2>
                    <p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                    <div class="clearboth"></div>
                </li>
                <li>
                    <img src="/bitrix/templates/.default/content/4.png" alt=""/>
                    <h2><a href="">Детская мебель</a></h2>
                    <p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                    <div class="clearboth"></div>
                </li>
            </ul>
            <a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
        </div>
        <div class="cn_hp_post">
            <div class="cn_hp_post_new">
                <h3>Новинки</h3>
                <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
            </div>
            <div class="cn_hp_post_action">
                <h3>Акции</h3>
                <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
            </div>
            <div class="cn_hp_post_bestsellersn">
                <h3>Хиты продаж</h3>
                <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news_right",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.M.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
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
                "COMPONENT_TEMPLATE" => "news_right",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0=>"",1=>"",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "news",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "4",
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
                "PROPERTY_CODE" => array(0=>"",1=>"",),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>
        <div class="clearboth"></div>
    </div>
</div>

<script type="text/javascript" >
    $(document).ready(function(){

        $("#foo").carouFredSel({
            items:2,
            prev:'#rwprev',
            next:'#rwnext',
            scroll:{
                items:1,
                duration:2000
            }
        });
    });
</script>

<div class="rw_reviewed">
    <div class="rw_slider">
        <h4>Отзывы</h4>
        <ul id="foo">
            <li>
                <div class="rw_message">
                    <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                    <span class="rw_name">Сергей Антонов</span>
                    <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                    <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
            <li>
                <div class="rw_message">
                    <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                    <span class="rw_name">Дмитрий Иванов</span>
                    <span class="rw_job">Генеральный директор группы компаний "Офис+"</span>
                    <p>“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного клиента.”</p>
                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
            <li>
                <div class="rw_message">
                    <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                    <span class="rw_name">Сергей Антонов</span>
                    <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                    <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
        </ul>
        <div id="rwprev"></div>
        <div id="rwnext"></div>
        <a href="" class="rw_allreviewed">Все отзывы</a>
    </div>
</div>

<div class="ft_footer">
    <div class="ft_container">
        <div class="ft_about">
            <h4>О магазине</h4>
            <ul>
                <li><a href="">Отзывы</a></li>
                <li><a href="">Контакты</a></li>
                <li><a href="">Руководство</a></li>
                <li><a href="">История</a></li>
            </ul>
        </div>
        <div class="ft_catalog">
            <h4>Каталог товаров</h4>
            <ul>
                <li><a href="">Кухни</a></li>
                <li><a href="">Кровати и кушетки</a></li>
                <li><a href="">Гарнитуры</a></li>
                <li><a href="">Тумобчки и прихожие</a></li>
                <li><a href="">Спальни и матрасы</a></li>
                <li><a href="">Аксессуары</a></li>
                <li><a href="">Столы и стулья</a></li>
                <li><a href="">Каталоги мебели</a></li>
                <li><a href="">Раскладные диваны</a></li>
                <li><a href="">Кресла</a></li>
            </ul>

        </div>
        <div class="ft_contacts">
            <h4>Контактная информация</h4>
            <!-- vCard        http://help.yandex.ru/webmaster/hcard.pdf      -->
            <p class="vcard">
						<span class="adr">
							<span class="street-address">ул. Летняя стр.12, офис 512</span>
						</span>
                <span class="tel">8 (495) 212-85-06</span>
                <strong>Время работы:</strong> <br/> <span class="workhours">ежедневно с 9-00 до 18-00</span><br/>
            </p>
            <ul class="ft_solcial">
                <li><a href="" class="fb"></a></li>
                <li><a href="" class="tw"></a></li>
                <li><a href="" class="ok"></a></li>
                <li><a href="" class="vk"></a></li>
            </ul>
            <div class="ft_copyright">© 2000 - 2012 "Мебельный магазин" </div>


        </div>

        <div class="clearboth"></div>
    </div>
</div>
</div>
</body>
</html>