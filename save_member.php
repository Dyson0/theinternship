<?php
require('mysql_connection.php');

$name = $_POST['person_name'];

$email = $_POST['person_email'];

$password = md5($_POST['person_password']);

$district = $_POST['district_id'];

$mysqli_connection->query("INSERT INTO members(NAME,EMAIL,PASSWORD,DISTRICT_ID)VALUES('$name','$email','$password','$district')");

header("Location:list_of_members.php");


