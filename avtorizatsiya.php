<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form", 
	".default", 
	array(
		"AUTH_FORGOT_PASSWORD_URL" => "/lichnyy-kabinet-pokupatelya/",
		"AUTH_REGISTER_URL" => "/lichnyy-kabinet-pokupatelya/registratsiya.php",
		"AUTH_SUCCESS_URL" => "/lichnyy-kabinet-pokupatelya/index.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>