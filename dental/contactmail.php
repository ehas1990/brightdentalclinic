<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$ename = $_POST['ename'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to="info@a2zserver.in";
$txt = "Name : " . $ename . "\r\n phone : " . $phone . "\r\n Email : " . $email . "\r\n message : " . $message ;
$sub="Bright Dental Clinic";
$headers = "From:" . $email;
if(mail($to,$sub,$txt,$headers)) {


  "Successfully Submitted";

} else {
  
 
 "Somethin wentwrong";
  
}

require_once "contact.html";
?>
