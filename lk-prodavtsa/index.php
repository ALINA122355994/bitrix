<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ЛК продавца");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"profilea",
	Array(
		"CHECK_RIGHTS" => "Y",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array("UF_TIPE"),
		"USER_PROPERTY_NAME" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>