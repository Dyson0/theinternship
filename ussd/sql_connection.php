<?php

$sqliCon = new mysqli("localhost","root","Asingwir3*");

$sqliCon->query("CREATE DATABASE IF NOT EXISTS ussd");

mysqli_select_db($sqliCon, "ussd");

$sqliCon->query("CREATE TABLE IF NOT EXISTS members(id int( 11) not null auto_increment, PRIMARY KEY(id), phone_number varchar(20) not null unique, name varchar(50) not null)");


$sqliCon->query("CREATE TABLE IF NOT EXISTS trees(id int( 11) not null auto_increment, PRIMARY KEY(id), member_id int(11) not null, number_of_trees int(11) not null, FOREIGN KEY(member_id) REFERENCES members(id))");

$sqliCon->query("CREATE TABLE IF NOT EXISTS students(ID INT(11)NOT NULL auto_increment,PRIMARY KEY(ID),NAME VARCHAR(30) NOT NULL,EMAIL VARCHAR(20) NOT NULL,PHONE_NUMBER VARCHAR(14) NOT NULL,COURSE VARCHAR(30) NOT NULL)");
