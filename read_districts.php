<?php
require('mysql_connection.php');

$results = $mysqli_connection->query("SELECT ID,NAME FROM districts");
foreach($results  as $key => $value){
	$id = $value['ID'];
	$name = $value['NAME'];

	echo "

	<tr>
		<td>$id </td>
		<td>$name</td>
		<td> <a href='delete_user.php?districts_id=".$value['ID']."'>Delete </a> <a> Update </a> </td>
		

	</tr>
	";
}