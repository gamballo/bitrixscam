<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID;?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <?$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-1.8.2.min.js');?>
    <?$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/slides.min.jquery.js');?>
    <?$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js');?>
    <?$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/functions.js');?>


    <link rel="stylesheet" href="/bitrix/templates/.default/template_style.css" />

    <link rel="icon" type="image/x-icon" href="/bitrix/templates/.default/favicon.ico"/>

    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <div class="hd_header">
            <table>
                <tr>
                    <td rowspan="2" class="hd_companyname">
                        <h1><a href="">Мебельный магазин</a></h1>
                    </td>
                    <td rowspan="2" class="hd_txarea">
                        <span class="tel">8 (495) 212-85-06</span>	<br/>
                        Время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>
                    </td>
                    <td style="width:232px">
                        <form action="">
                            <div class="hd_search_form" style="float:right;">
                                <input placeholder="Поиск" type="text"/>
                                <input type="submit" value=""/>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">

									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>

									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
                        <a href="" class="hd_signup">Зарегистрироваться</a>
                    </td>
                </tr>
            </table>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top_multi",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(0=>"",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>

        </div>
    </div>
    <script type="text/javascript" >
        $().ready(function(){
            $(function(){
                $('#slides').slides({
                    preload: true,
                    generateNextPrev: false,
                    autoHeight: true,
                    play: 4000,
                    effect: 'fade'
                });
            });
        });
    </script>

    <div class="sl_slider" id="slides">
        <div class="slides_container">
            <div>
                <div>
                    <img src="/bitrix/templates/.default/content/1.jpg" alt="" />
                    <h2><a href="">Диваны и кресла</a></h2>
                    <p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
                    <a href="" class="sl_more">Подробнее &rarr;</a>
                </div>
            </div>
            <div>
                <div>
                    <img src="/bitrix/templates/.default/content/1.jpg" alt="" />
                    <h2><a href="">Диваны и кресла</a></h2>
                    <p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
                    <a href="" class="sl_more">Подробнее &rarr;</a>
                </div>
            </div>
        </div>
    </div>


    <!--- // end slider area --->

    <div class="main_container homepage">

        <!-- events -->
        <div class="ev_events">
            <div class="ev_h">
                <h3>Ближайшие события</h3>
                <a href="" class="ev_allevents">Все мероприятия &rarr;</a>
            </div>
            <ul class="ev_lastevent">
                <li>
                    <h4><a href="">29 августа 2012, Москва</a></h4>
                    <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
                </li>
                <li>
                    <h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
                    <p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
                </li>
                <li>
                    <h4><a href="">31 августа 2012, Краснодар</a></h4>
                    <p>Открытие нового магазина в нашей дилерской сети.</p>
                </li>
            </ul>
            <div class="clearboth"></div>
        </div>