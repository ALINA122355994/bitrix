<?php
class UserGroupHandler
{
    public static function OnAfterUserRegisterHandler(&$arFields)
    {
        if ($arFields["USER_ID"] > 0) {
            $buyerGroupId = 12; // ID группы "Покупатель"
            $sellerGroupId = 13; // ID группы "Продавец"

            // Определяем группу по выбранной радиокнопке
            if ($arFields["UF_USER_TYPE"] == "buyer") {
                CUser::SetUserGroup($arFields["USER_ID"], [$buyerGroupId]);
            } elseif ($arFields["UF_USER_TYPE"] == "seller") {
                CUser::SetUserGroup($arFields["USER_ID"], [$sellerGroupId]);
            }
        }
    }
}
?>