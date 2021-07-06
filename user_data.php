<?php

require('php_mysql.php');

$name_of_person = $phone_number_of_person ="";

if(!empty($_POST['name_of_person']))
$name_of_person= $_POST['name_of_person'];

if(!empty($_POST['phone_number_of_person']))

 $phone_number_of_person = $_POST['phone_number_of_person'];

$connection->query("INSERT INTO users(NAME,PHONE_NUMBER)VALUES('$name_of_person','$phone_number_of_person')");


header("location:user_form.php");