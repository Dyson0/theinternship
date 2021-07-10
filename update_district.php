<?php
require('mysql_connection.php');
$name = $_POST['district_name'];
$district_id = $_POST['district_id'];
$mysqli_connection->query("UPDATE districts SET NAME='$name' WHERE ID = '$district_id' ");

header("Location:read_district.php");