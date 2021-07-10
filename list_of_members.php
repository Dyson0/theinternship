<!DOCTYPE html>
<html>
<?php require('mysql_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
	<?php include 'header.php';
	$members = $mysqli_connection->query("SELECT members.ID,members.NAME,members.EMAIL,districts.NAME AS districts_NAME FROM members,districts WHERE members.DISTRICT_ID = districts.ID"); 
	?>
	<main class="py-4">
		<div class="container">
			<h2>List of members</h2>
			<hr>
			<table class="table table-striped table-hover">
				<thead>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>DISTRICT</th>
				</thead>
				<tbody>
					<?php
						foreach ($members as $key => $value){
							$id = $value["ID"];
							$name = $value["NAME"];
							$email = $value["EMAIL"];
							$district = $value["districts_NAME"];
							echo"
							<tr>
								<td>$id</td>
								<td>$name</td>
								<td>$email</td>
								<td>$district</td>
								<td> <a>Delete </a> <a> Update </a> </td>
	
							</tr>
							";
						}

		
					?>
				</tbody>
			</table>
		</div>
	</main>
</body>
</html>