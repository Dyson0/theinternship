<?php
require('mysql_connection.php');

if(!isset($_POST['district_name'])){
	echo"Name is not set";
	exit();
}
$d_name = $_POST['district_name'];

$mysqli_connection->query("INSERT INTO districts(NAME)VALUES('$d_name')");

header("Location:districts.php");