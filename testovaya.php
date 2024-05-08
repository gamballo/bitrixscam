<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая");
?>&nbsp;<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"FORGOT_PASSWORD_URL" => "/user/",	// Страница забытого пароля
		"PROFILE_URL" => "/user/profile.php",	// Страница профиля
		"REGISTER_URL" => "/user/registration.php",	// Страница регистрации
		"SHOW_ERRORS" => "N",	// Показывать ошибки
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>