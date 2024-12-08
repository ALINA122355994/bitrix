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
//   print_r($arResult);
//   echo '</pre>';
?>
  
    

    <div class="site-blocks-cover overlay" style="background-image: url(/local/templates/home/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-cente/local/temlates/home/images//local/temlates/home/images/r">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
            <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?></strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
               
                <div><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['0']['SRC']?>" alt="Image" class="img-fluid"></div>
                <div><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['1']['SRC']?>" alt="Image" class="img-fluid"></div>
                <div><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['2']['SRC']?>" alt="Image" class="img-fluid"></div>
                
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                 
                  <li>
                    <span class="property-specs"><?=$arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["NAME"]?></span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"]?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_FLOORS"]["NAME"]?></span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_FLOORS"]["VALUE"]?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Дата обновления</span>
                    <span class="property-specs-number"><?=$arResult["ACTIVE_FROM"]?></span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=$arResult["PROPERTIES"]["PRESENCE_GARAGE"]["NAME"]?></span>
                  <strong class="d-block"><?=$arResult["PROPERTIES"]["PRESENCE_GARAGE"]["VALUE_ENUM"]?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_BATHROOMS"]["NAME"]?> </span>
                  <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_BATHROOMS"]["DISPLAY_VALUE"]?></strong>
                </div>
  
              </div>
              <h2 class="h4 text-black"> <?=$arResult["NAME"]?></h2>
              <?=$arResult["DETAIL_TEXT"]?>

              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3"><?=$arResult["PROPERTIES"]["IMAGE_GALLERY"]["NAME"]?></h2>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['0']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['0']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['1']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['1']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['2']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['2']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['3']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['3']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['4']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['4']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['5']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['5']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['6']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['6']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['7']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['7']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['8']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['8']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['9']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['9']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['10']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['10']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['11']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']['11']['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
              </div>
              <?=$arResult["PROPERTIES"]["ADDITIONAL_MATERIALS"]["NAME"]?>
    <br/>
   <?=$arResult["PROPERTIES"]["LINKS_EXTERNAL_RESOURCES"]["NAME"]?><br/>
   <a href="https://dzen.ru/">Дзен</a>
            </div>
          </div>

            <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>
          
        </div>
      </div>
      
    </div>

  
