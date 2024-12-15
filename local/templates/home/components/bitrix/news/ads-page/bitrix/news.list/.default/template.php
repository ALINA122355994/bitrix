<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

?>

          
        

<div class="site-section site-section-sm bg-light">
<div class="container">
	<div class="row mb-5">
		<div class="col-12">
			<div class="site-section-title">

			<h2><?=$arParams['DISPLAY_SET_TITLE'];?></h2>
         
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
									<?=GetMessage('AREA')?></br><?=$arItem['DISPLAY_PROPERTIES']["TOTAL_AREA"]["VALUE"]?>
									</div>
									<div class="col">
									<?=GetMessage('BEDS')?></br><?=$arItem['DISPLAY_PROPERTIES']['NUMBER_BEDROOMS']['VALUE']?>
									</div>
									<div class="col">
									<?=GetMessage('BATHS')?></br> <?=$arItem['DISPLAY_PROPERTIES']['NUMBER_BATHROOMS']['VALUE']?>
									</div>
									<div class="col">
									<?=GetMessage('GARAGES')?></br><?if($arItem['DISPLAY_PROPERTIES']['PRESENCE_GARAGE']['VALUE']):?>
									<?=$arItem['PROPERTIES']['PRESENCE_GARAGE']['VALUE']?>			
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
			
							
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			
			<?=$arResult["NAV_STRING"]?>
			<?endif;?>	
	</div>
	</div>
			</div>  
			</div>
	