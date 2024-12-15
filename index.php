<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Недвижимость");
?><br>
 <?$GLOBALS['arrFilter'] = array('PROPERTY_PRIORITY_DEAL_VALUE' => 'Да');?> 
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slaider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "172800",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slaider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "advertisement",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"PRICE",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/blog_one.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/blog_two.php"
	)
);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/blog_three.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
					
				</br> <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"New_Properties_You", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "172800",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "New_Properties_You",
		"DETAIL_URL" => "#SITE_DIR#/obyavleniya/#CODE#/",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "DETAIL_PICTURE",
			5 => "IBLOCK_TYPE_ID",
			6 => "IBLOCK_CODE",
			7 => "IBLOCK_NAME",
			8 => "PROPERTY_PRICE",
			9 => "PROPERTY_NUMBER_BEDROOMS",
			10 => "PROPERTY_NUMBER_BATHROOMS",
			11 => "PROPERTY_TOTAL_AREA",
			12 => "PROPERTY_PRESENCE_GARAGE",
			13 => "PROPERTY_IMAGE_GALLERY",
			14 => "PROPERTY_ADDITIONAL_MATERIALS",
			15 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "advertisement",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "",
		"SORT_ORDER2" => ""
	),
	false
);?>


 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"Our_Services", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "7776000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "Our_Services",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PROPERTY_NAME",
			2 => "PROPERTY_TEXT",
			3 => "PROPERTY_LINK",
			4 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "Services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"Footer_News", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "604800",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "#SITE_DIR#/servisy/novosti/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "Footer_News"
	),
	false
);?> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>