<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$ename = $_POST['ename'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$Treatment = $_POST['Treatment'];
$Doctor = $_POST['Doctor'];
$DateTime = $_POST['DateTime'];
$to="info@a2zserver.in";
$txt = "Name : " . $ename . "\r\n phone : " . $phone . "\r\n Email : " . $email . "\r\n Treatment : " . $Treatment . " \r\n  Doctor : " . $Doctor ."  \r\n Date &Time:" . $DateTime;
$sub="Bright Dental Clinic";
$headers = "From:" . $email;
if(mail($to,$sub,$txt,$headers)) {


  "Successfully Submitted";

} else {
  
 
 "Somethin wentwrong";
  
}

require_once "contact.html";
?>
