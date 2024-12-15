<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Личный кабинет покупателя");

?><?$APPLICATION->IncludeComponent("bitrix:main.profile", "lk_pokupatel", Array(
	"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"USER_PROPERTY" => array("UF_TIPE"),
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
	),
	false
);?>


	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>