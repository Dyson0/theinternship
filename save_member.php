<?php
require('mysql_connection.php');
require('../css/AfricasTalkingGateway.php');

$name = $_POST['person_name'];

$email = $_POST['person_email'];

$password = md5($_POST['person_password']);

$district = $_POST['district_id'];

$mysqli_connection->query("INSERT INTO members(NAME,EMAIL,PASSWORD,DISTRICT_ID)VALUES('$name','$email','$password','$district')");

$message = "Hello".$name."thank you for creating an account with Climate change Uganda. You will login with your email and your password";
$username = "sandbox";
$apiKey = "e634670cf78becaa2e243f3ad5be7244bc53e275b2a7936f73b6617f834be381";
$recipients = "+256758903012";
$gateway = new AfricasTalkingGateway($username,$apiKey,"sandbox");
$gateway->sendMessage(+256758903012,$message);




header("Location:list_of_members.php");


