<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?
if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}

if (!empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>
	<div class="site-section">
      <div class="container">
        <div class="row">
		<div class="col-md-12 col-lg-8 mb-5">

<form action="#" class="p-5 bg-white border" action="<?=$arResult["AUTH_URL"]?>">
	<div class="col-md-12 mb-3 mb-md-0"><?=GetMessage("AUTH_PLEASE_AUTH")?></div>
		<input type="hidden" name="AUTH_FORM" value="Y" />
		<input type="hidden" name="TYPE" value="AUTH" />
		<?if ($arResult["BACKURL"] <> ''):?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?endif?>
		<?foreach ($arResult["POST"] as $key => $value):?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
		<?endforeach?>

	
			  <div class="row form-group">
			  <div class="col-md-12 mb-3 mb-md-0">
			  <label class="font-weight-bold"><?=GetMessage("AUTH_LOGIN")?></label>
			  <input class="form-control" type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" />
				</div>
				</div>

				
				<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold"><?=GetMessage("AUTH_PASSWORD")?></label>
			<input class="form-control" type="password" name="USER_PASSWORD" maxlength="50" autocomplete="off" />
<?if($arResult["SECURE_AUTH"]):?>
				<span  class="font-weight-bold" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
				</span>
				<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
				
				</span>
				</noscript>
<script>
document.getElementById('bx_auth_secure').style.display = 'inline-block';
</script>
<?endif?>
</div>
</div>
			
			<?if($arResult["CAPTCHA_CODE"]):?>
				<tr>
					<td></td>
					<td><input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /></td>
				</tr>
				<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
					<td class="bx-auth-label"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:</td>
					<td><input class="bx-auth-input form-control" type="text" name="captcha_word" maxlength="50" value="" size="15" autocomplete="off" /></td>
					</div>
					</div>
			<?endif;?>
<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
	<div class="row form-group">
	<div class="col-md-12">
				<td></td>
				<td><input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" /><label for="USER_REMEMBER">&nbsp;<?=GetMessage("AUTH_REMEMBER_ME")?></label></td>
	</div>
	</div>
<?endif?>
<div class="row form-group">
<div class="col-md-12">
				<td class="btn btn-primary  py-2 px-4 rounded-0"><input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>" /></td>
				
                </div>
              </div>
		

<?if ($arParams["NOT_SHOW_LINKS"] != "Y"):?>
		<noindex>
			<p>
				<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
			</p>
		</noindex>
<?endif?>

<?if($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y"):?>
		<noindex>
			<p>
				<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a><br />
				
			</p>
		</noindex>
<?endif?>

	
</div>
</form>
</div>
</div>
</div>
</div>



