<!DOCTYPE html>
<html>
<?php require('mysql_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<main class="py-4">
		<div class="container">
			<h2>Create an account</h2>
			<hr>
			<form method="POST" action="save_member.php">
				<div class="row">
					<div class="col-md-6">
						<label>Name</label><br>
						<input type="text" name="person_name" class="form-control" required=""><br>
						<label>Email</label><br>
						<input type="email" name="person_email" class="form-control"required><br>
						<label>Password</label><br>
						<input type="password" name="person_password"><br>
						<!---read district---->
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
						<hr>
						<button  type="submit">Register</button>
					</div>
					
				</div>
			</form>
		</div>
		
	</main>
</body>
</html>