<?php
require('mysql_connection.php');

$name = $_POST['district_name'];

$district_id = $_GET['$district_id'];
$mysqli_connection->query("DELETE FROM districts WHERE ID = $district_id");
header("Location:districts.php");
?>