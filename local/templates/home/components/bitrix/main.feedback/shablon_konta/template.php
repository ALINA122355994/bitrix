<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(!empty($arResult["OK_MESSAGE"]))
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>


<?=bitrix_sessid_post()?>



<form action="#" class="p-5 bg-white border">
<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><?endif?></label>
					<input type="text" name="user_name" class="form-control" value="<?=$arResult["AUTHOR_NAME"]?>">
                </div>
              </div>

                 <div class="row form-group">
                <div class="col-md-12">
                <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><?endif?></label>
				<input type="text" name="user_email" class="form-control" value="<?=$arResult["AUTHOR_EMAIL"]?>">
                </div>
              </div>
              
			  <div class="row form-group">
                <div class="col-md-12">
                <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><?endif?></label>
				<textarea name="MESSAGE" rows="5" class="form-control" cols="40"><?=($arResult["MESSAGE"] ?? '')?></textarea>
                </div>
              </div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		
	<div class="mf-message">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>	</div>
	<?endif;?>

		<div class="row form-group">
                <div class="col-md-12">
	<label class="font-weight-bold" for="fullname"><input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>" class="btn btn-primary  py-2 px-4 rounded-0"></label>
	<label class="font-weight-bold" for="fullname"><input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>"class="btn btn-primary  py-2 px-4 rounded-0"></label>
	</div>	</div>
</form>
