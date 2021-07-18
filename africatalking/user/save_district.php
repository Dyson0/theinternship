<?php
require('sql_connection.php');

if (!isset($_POST['district_name'])) {
	echo "Name is not set";
	exit();
}


$d_name = $_POST['district_name'];

$sql_connection->query("INSERT INTO districts(NAME)VALUES('$d_name')");

header("Location:districts.php");