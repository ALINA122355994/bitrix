<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("profile");
?><?$APPLICATION->IncludeComponent("bitrix:main.profile", "lk_", Array(
	"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
		"USER_PROPERTY" => array("UF_TIPE"),
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>