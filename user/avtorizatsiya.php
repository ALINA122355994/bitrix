
<?php
define("NEED_AUTH",true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if (isset($_REQUEST["backurl"]) && strlen ($_REQUEST["backurl"])>0)
LocalRedirect($backurl); 
$APPLICATION->SetTitle("Авторизация");
?>

<p>ВЫ зарегистрированы и успешно авторизовалась.</p>
<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>