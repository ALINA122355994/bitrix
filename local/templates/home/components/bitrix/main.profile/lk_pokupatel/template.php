<?php

use Bitrix\Main\Web\Json;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

if(isset($arResult["SHOW_SMS_FIELD"]) && $arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}


?>




<div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">

<?ShowError($arResult["strProfileError"]);?>
<?
if (isset($arResult['DATA_SAVED']) && $arResult['DATA_SAVED'] == 'Y')
	ShowNote(GetMessage('PROFILE_DATA_SAVED'));
?>

<?if(isset($arResult["SHOW_SMS_FIELD"]) && $arResult["SHOW_SMS_FIELD"] == true):?>

<form method="post" action="<?=$arResult["FORM_TARGET"]?>">
<?=$arResult["BX_SESSION_CHECK"]?>
<input type="hidden" name="lang" value="<?=LANG?>" />
<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
<input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />
<table class="profile-table data-table">
	<tbody>
		<tr>
			<td><?echo GetMessage("main_profile_code")?><span class="starrequired">*</span></td>
			<td><input size="30" type="text" name="SMS_CODE" value="<?=htmlspecialcharsbx($arResult["SMS_CODE"])?>" autocomplete="off" /></td>
		</tr>
	</tbody>
</table>

<p><input type="submit" name="code_submit_button" value="<?echo GetMessage("main_profile_send")?>" /></p>

</form>

<script>
new BX.PhoneAuth({
	containerId: 'bx_profile_resend',
	errorContainerId: 'bx_profile_error',
	interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
	data:
		<?= Json::encode([
			'signedData' => $arResult["SIGNED_DATA"],
		])?>,
	onError:
		function(response)
		{
			var errorDiv = BX('bx_profile_error');
			var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
			errorNode.innerHTML = '';
			for(var i = 0; i < response.errors.length; i++)
			{
				errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
			}
			errorDiv.style.display = '';
		}
});
</script>

<div id="bx_profile_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_profile_resend"></div>

<?else:?>

<script>
<!--
var opened_sections = [<?
$arResult["opened"] = $_COOKIE[$arResult["COOKIE_PREFIX"]."_user_profile_open"] ?? '';
$arResult["opened"] = preg_replace("/[^a-z0-9_,]/i", "", $arResult["opened"]);
if ($arResult["opened"] <> '')
{
	echo "'".implode("', '", explode(",", $arResult["opened"]))."'";
}
else
{
	$arResult["opened"] = "reg";
	echo "'reg'";
}
?>];
//-->

var cookie_prefix = '<?=$arResult["COOKIE_PREFIX"]?>';
</script>
<form method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
<?=$arResult["BX_SESSION_CHECK"]?>
<input type="hidden" name="lang" value="<?=LANG?>" />
<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />

<div class="profile-link profile-user-div-link"><a title="<?=GetMessage("REG_SHOW_HIDE")?>" href="javascript:void(0)" onclick="SectionClick('reg')"><?=GetMessage("REG_SHOW_HIDE")?></a></div>
<div class="profile-block-<?= !str_contains($arResult["opened"], "reg") ? "hidden" : "shown"?>" id="user_div_reg">
<table class="profile-table data-table">
	<thead>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</thead>
	<tbody>
	
	
  


	<div class="row form-group">
  <div class="col-md-12 mb-3 mb-md-0">
	<label class="font-weight-bold" for="fullname"><?=GetMessage('NAME')?></label>
	<input type="text" name="NAME" maxlength="50" value="<?=$arResult["arUser"]["NAME"]?>" class="form-control" placeholder=<?=$arResult["arUser"]["NAME"]?>>
  </div>
</div>


	<div class="row form-group">
  <div class="col-md-12 mb-3 mb-md-0">
	<label class="font-weight-bold" for="fullname"><?=GetMessage('LAST_NAME')?></label>
	<input type="text" name="LAST_NAME" maxlength="50" value="<?=$arResult["arUser"]["LAST_NAME"]?>" class="form-control" placeholder=<?=$arResult["arUser"]["LAST_NAME"]?>>
  </div>
</div>

<div class="row form-group">
  <div class="col-md-12 mb-3 mb-md-0">
	<label class="font-weight-bold" for="fullname"><?=GetMessage('SECOND_NAME')?></label>
	<input type="text" name="LAST_NAME" maxlength="50" value="<?=$arResult["arUser"]["SECOND_NAME"]?>" class="form-control" placeholder=<?=$arResult["arUser"]["SECOND_NAME"]?>>
  </div>
</div>

<div class="row form-group">
  <div class="col-md-12 mb-3 mb-md-0">
  <span class="font-weight-bold"><?=GetMessage("USER_BIRTHDAY_DT")?> (<?=$arResult["DATE_FORMAT"]?>):</span>
			<?
			$APPLICATION->IncludeComponent(
				'bitrix:main.calendar',
				'',
				array(
					'SHOW_INPUT' => 'Y',
					'FORM_NAME' => 'form1',
					'INPUT_NAME' => 'PERSONAL_BIRTHDAY',
					'INPUT_VALUE' => $arResult["arUser"]["PERSONAL_BIRTHDAY"],
					'SHOW_TIME' => 'N'
				),
				null,
				array('HIDE_ICONS' => 'Y')
			);
			//=CalendarDate("PERSONAL_BIRTHDAY", $arResult["arUser"]["PERSONAL_BIRTHDAY"], "form1", "15")
			?>
	</div>
	</div>
	<div class="row form-group">
  <div class="col-md-12 mb-3 mb-md-0">

  <span class="font-weight-bold">	<?echo GetMessage("USER_PHOTO")?>*</span>
			
			<?=$arResult["arUser"]["PERSONAL_PHOTO_INPUT"]?>
			<?
			if ($arResult["arUser"]["PERSONAL_PHOTO"] <> '')
			{
			?>
			<br />
				<?=$arResult["arUser"]["PERSONAL_PHOTO_HTML"]?>
			<?
			}
			?>
		</div>
		</div>


		<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0">
		<span class="font-weight-bold"><?echo GetMessage("main_profile_phone_number")?><?if($arResult["PHONE_REQUIRED"]):?>*</span><?endif?>
	<input type="text" name="PHONE_NUMBER" maxlength="50" class="form-control" value="<? echo $arResult["arUser"]["PHONE_NUMBER"]?>" />
	</div>
</div>

<div class="row form-group">
  <div class="col-md-12 mb-3 mb-md-0">
  <span class="font-weight-bold">EMAIL</span>
	<input type="text" name="EMAIL" maxlength="50" value="<? echo $arResult["arUser"]["EMAIL"]?>" class="form-control" placeholder="<?=$arResult["arUser"]["EMAIL"]?>">
  </div>
  </div>

       
		
		
		<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0">
		<div class="font-weight-bold">
			

<div class="row form-group">
  <div class="col-md-12">
	<input type="submit" value="ВХОД" class="btn btn-primary  py-2 px-4 rounded-0">
  </div>
</div>

			</div>
			</div>
			</div>
	</div>
	</div>
	</div>
	</div>

	<?// ******************** /User properties ***************************************************?>

</form>

	
	<?// ******************** /User properties ***************************************************?>
	
</form>
<?
if($arResult["SOCSERV_ENABLED"])
{
	$APPLICATION->IncludeComponent("bitrix:socserv.auth.split", ".default", array(
			"SHOW_PROFILES" => "Y",
			"ALLOW_DELETE" => "Y"
		),
		false
	);
}
?>

<?endif?>
</div>
</div>
</div>
