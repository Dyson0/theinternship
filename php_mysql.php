<?php
$mysqli_connection = new mysqli("localhost","root","","climate");



$mysqli_connection->query("CREATE TABLE districts(ID INT(11)NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID), NAME VARCHAR(30) NOT NULL UNIQUE)");


$members_table = $mysqli_connection->query("CREATE TABLE members(ID INT(11)NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID), NAME VARCHAR(30) NOT NULL,  EMAIL VARCHAR(50) NOT NULL UNIQUE, PASSWORD VARCHAR(100) NOT NULL, DISTRICTS_ID INT(11) NOT NULL,FOREIGN KEY(DISTRICTS_ID) REFERENCES districts(ID) )");
