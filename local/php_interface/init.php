<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/include.php");
AddEventHandler("main", "OnAfterUserRegister", ["UserGroupHandler", "OnAfterUserRegisterHandler"]);
?>