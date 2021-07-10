<!DOCTYPE html>
<html>
<?php require('mysql_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Trees</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
	<?php include 'header.php';
	$tree_types = $mysqli_connection->query("SELECT trees_types.ID,trees_types.NAME,districts.NAME,members.NAME AS districts_NAME,members_NAME FROM tree_types,districts,members WHERE tree_types.DISTRICT_ID = districts.ID, tree_types.MEMBERS_ID = members.ID"); 
	?>
	<main class="py-4">
		<div class="container">
			<h2>List of trees</h2>
			<hr>
			<table class="table table-striped table-hover">
				<thead>
					<th>ID</th>
					<th>NAME</th>
					<th>DISTRICT</th>
					<th>MEMBER</th>
				</thead>
				<tbody>
					<?php
						foreach($tree_types as $key => $value){
							
							$id = $value["ID"];
							$name = $value["NAME"];
							$district = $value["districts_NAME"];
							$member = $value["members_NAME"];
							echo"
							<tr>
								<td>$id</td>
								<td>$name</td>
								<td>$district</td>
								<td>$member</td>
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