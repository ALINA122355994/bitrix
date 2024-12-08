<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
// echo '<pre>';
// print_r($arResult);
// echo '</pre>';
?>

          
        
<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
            <div class="site-section-title">
              <h2>New Properties for You</h2>
            </div>
          </div>
		</div>
		<div class="row mb-5">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
	<div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
 		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block"> 
		<figure> <img alt="Image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-fluid"> 
		</figure>
					<div class="prop-text">
						<div class="inner">
 										<span class="price rounded"><?=$arItem["PROPERTY_PRICE_VALUE"]?></span>
										<h3 class="title"><?=$arItem["NAME"]?></h3>
										<p class="location">
						 				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
										<?=GetMessage('PREVIEW_TEXT')?> <?= $arItem["PREVIEW_TEXT"];?>
										<?endif;?></p>
						</div>
						<div class="prop-more-info">
						<div class="inner d-flex">
										<div class="col">
										<?=GetMessage('AREA')?> <?=$arItem["PROPERTY_TOTAL_AREA_VALUE"]?>
										</div>
										<div class="col">
										<?=GetMessage('BEDS')?> <?=$arItem["PROPERTY_NUMBER_BEDROOMS_VALUE"]?>
										</div>
										<div class="col">
										<?=GetMessage('BATHS')?> <?=$arItem["PROPERTY_NUMBER_BATHROOMS_VALUE"]?>
										</div>
										<div class="col">
										<?=GetMessage('GARAGES')?> <?if($arItem["PROPERTY_PRESENCE_GARAGE_VALUE"]):?>
											<?=$arItem['PROPERTY_PRESENCE_GARAGE_VALUE']?>			
										<?else:?>
										Нет
										<?endif;?>
																				</div>

						</div>
						</div>
					</div>
 					</a>
				</div>
			<?endforeach;?>
			
			
		</div>
		
		<div class="col-md-12 text-center">
            
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
          </div>  
	</div>
</div>