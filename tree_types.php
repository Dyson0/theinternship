<?php
require('mysql_connection.php');

$name = $_POST['tree_name'];
$district = $_POST['district_id'];
$member = $_POST['members_id'];


$mysqli_connection->query("INSERT INTO tree_types(NAME,DISTRICT,MEMBER)VALUES('$name','$district','$member')");

header("Location:save_tree_types.php");




?>