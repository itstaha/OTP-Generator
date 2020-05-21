<?php
/*
 * PHP OTP Class
 * https://github.com/itstaha/OTP-Generator/
*/

require_once("OTP.php");

$otp = new OTP;
$code = $otp->generate(5);
echo "OTP : ".$code;
