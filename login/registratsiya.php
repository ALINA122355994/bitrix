<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	"REGISTR", 
	array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
		),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array(
			0 => "UF_TIPE",
		),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y",
		"COMPONENT_TEMPLATE" => "REGISTR"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>