<?php
require 'WxAppFormID.php';

$siteID = 6688;
$userID = 10086;
$formID = 'sdgsrgweweqw123124233dfdfsassdfg=fdgdfxcwe';


//WxAppFormID::saveFormId($siteID, $userID, $formID);

echo WxAppFormID::getFormId($siteID,$userID);
