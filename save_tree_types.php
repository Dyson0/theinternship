<!DOCTYPE html>
<html>
<?php require('mysql_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>trees</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<main class="py-4">
		<div class="container">
			<h2>Tree types</h2>
			<hr>
		<form method="POST" action="tree_types.php">
				<div class="row">
					<div class="col-md-6">
						<label>Name</label><br>
						<input type="text" name="tree_name"><br>
						<?php
						$results = $mysqli_connection->query("SELECT ID,NAME FROM districts");
						?>
						<label>District</label><br>
						<select class="form-control" name="district_id">
							<?php
							foreach($results  as $key => $value){
							$id = $value['ID'];
							$name = $value['NAME'];
							echo "
							<option value = '$id'>$name</option>";
							}
							?>

						</select>
						<?php
							$members = $mysqli_connection->query("SELECT members.ID,members.NAME,members.EMAIL,districts.NAME AS districts_NAME FROM members,districts WHERE members.DISTRICT_ID = districts.ID"); 
						?>
						<br>
						<label>Member</label><br>
						<select class="form-control" name="members_id"><br>
							<?php
								foreach($members  as $key => $value){
							$id = $value['ID'];
							$name = $value['NAME'];

							echo "
							<option value = '$id'>$name</option>";
							}
							?>
							
						</select>
						<hr>
						<button type="submit">save tree</button>


			</div>
		</div>
	</form>
		</div>
		</main>
	</body>
</html>	