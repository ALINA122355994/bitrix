<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>






<?
if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>

<?if($arResult["FORM_TYPE"] == "login"):?>

	


<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" class="p-5 bg-white border" action="<?=$arResult["AUTH_URL"]?>">

<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
<?foreach ($arResult["POST"] as $key => $value):?>
	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	
		<div class="row form-group">
  			<div class="col-md-12 mb-3 mb-md-0">
  			<label class="font-weight-bold" type="text" for="fullname" name="USER_LOGIN" value="<?$arResult["USER_LOGIN"]?>"><?=GetMessage("AUTH_LOGIN")?></label>
			<input type="text" value="<?$arResult["USER_LOGIN"]?>" name="USER_LOGIN" id="<?$arResult["USER_LOGIN"]?>" class="form-control" placeholder="<?=GetMessage("AUTH_LOGIN")?>">
   			</div>
		</div>
			<script>
				BX.ready(function() {
					var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
					if (loginCookie)
					{
						var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
						var loginInput = form.elements["USER_LOGIN"];
						loginInput.value = loginCookie;
					}
				});
			</script>


		<div class="row form-group">
  			<div class="col-md-12">
  				<label class="font-weight-bold" name="USER_PASSWORD"><?=GetMessage("AUTH_PASSWORD")?></label>
  				<input type="password"  class="form-control" name="USER_PASSWORD" placeholder="<?=GetMessage("AUTH_PASSWORD")?>">
  			</div>
		</div>

		<noindex><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" class="hd_forgotpassword" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a><noindex></br>
		
		<?if ($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
	<noindex><a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="hd_signup" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a><noindex>
  <?endif?>
		
		<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
		<div class="head_remember_me" style="margyn-top: 10px">
				<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
				<label for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>"><?echo GetMessage("AUTH_REMEMBER_SHORT")?></label>
		</div>
		<?endif?>
		
<?if ($arResult["CAPTCHA_CODE"]):?>
	
			<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
			<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
			<input type="text" name="captcha_word" maxlength="50" value="" />
<?endif?>

			<div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" class="btn btn-primary  py-2 px-4 rounded-0">
				  </br>
				
                </div>
              </div>
	</form>
 </div>

		
<?
elseif($arResult["FORM_TYPE"] == "otp"):
?>

<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="OTP" />
	<table width="95%">
		<tr>
			<td colspan="2">
			<?echo GetMessage("auth_form_comp_otp")?><br />
			<input type="text" name="USER_OTP" maxlength="50" value="" size="17" autocomplete="off" /></td>
		</tr>
<?if ($arResult["CAPTCHA_CODE"]):?>
		<tr>
			<td colspan="2">
			<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
			<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
			<input type="text" name="captcha_word" maxlength="50" value="" /></td>
		</tr>
<?endif?>
<?if ($arResult["REMEMBER_OTP"] == "Y"):?>
		<tr>
			<td valign="top"><input type="checkbox" id="OTP_REMEMBER_frm" name="OTP_REMEMBER" value="Y" /></td>
			<td width="100%"><label for="OTP_REMEMBER_frm" title="<?echo GetMessage("auth_form_comp_otp_remember_title")?>"><?echo GetMessage("auth_form_comp_otp_remember")?></label></td>
		</tr>
<?endif?>
		<tr>
			<td colspan="2"><input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><noindex><a href="<?=$arResult["AUTH_LOGIN_URL"]?>" rel="nofollow"><?echo GetMessage("auth_form_comp_auth")?></a></noindex><br /></td>
		</tr>
	</table>
</form>

<?
else:
?>

<form action="<?=$arResult["AUTH_URL"]?>">
	<table width="95%">
		<tr>
			<td align="center">
				<?=$arResult["USER_NAME"]?><br />
				[<?=$arResult["USER_LOGIN"]?>]<br />
				<a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br />
			</td>
		</tr>
		<tr>
			<td align="center">
			<?foreach ($arResult["GET"] as $key => $value):?>
				<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			<?endforeach?>
			<?=bitrix_sessid_post()?>
			<input type="hidden" name="logout" value="yes" />
			<input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
			</td>
		</tr>
	</table>
</form>
<?endif?>

