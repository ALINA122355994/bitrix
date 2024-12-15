<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">

<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"shablon_konta", 
	array(
		"EMAIL_TO" => "gaffarova_2001@mail.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "18",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => "shablon_konta"
	),
	false
);?>
  </div>
  </div>  </div>
  </div> </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>