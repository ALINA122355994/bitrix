<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
IncludeTemplateLangFile(__FILE__);
?>


<?$APPLICATION->ShowHead();?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

 <title><?$APPLICATION->ShowTitle()?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php
    use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500" rel="stylesheet">');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
    
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
    
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
 ?>
 </head>

<body>
<div id="panel">
	<?$APPLICATION->ShowPanel();?></div>

	<div class="site-loader"></div>

<div class="site-wrap">

  <div class="site-mobile-menu">
	<div class="site-mobile-menu-header">
	  <div class="site-mobile-menu-close mt-3">
		<span class="icon-close2 js-menu-toggle"></span>
	  </div>
	</div>
	<div class="site-mobile-menu-body"></div>
  </div> <!-- .site-mobile-menu -->

  <div class="border-bottom bg-white top-bar">
	<div class="container">
	  <div class="row align-items-center">
		<div class="col-6 col-md-6">
		  <p class="mb-0">
              
            <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                  class="d-none d-md-inline-block ml-2"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/phone.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?></span></a></br>
               
               <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
               class="d-none d-md-inline-block ml-2"> 
			  
			   <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/email.php"
	)
);?> </span></a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">

          <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/mesenger.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?> 
          </div>
        </div>
      </div>

    </div>
	
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="/index.php" class="h5 text-uppercase text-black"><strong>
             
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/logo.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</strong></a>  </h1>
          </div>
          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1",
		"MENU_THEME" => "site"
	),
	false
);?>

</div>
      </div>
    </div>
  </div>

<?
$current_link = $APPLICATION->GetCurPage();
if ($current_link !== "/"):

$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"navi", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "navi"
	),
	false
);?>
<?endif?>




 