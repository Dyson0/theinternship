<|DOCTYPE html>
	<?php
	require('php_mysql.php');
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>UPDATE USER</title>
	</head>
		<body>
		</body>
		<?php
		$user_id = $_GET['user_id'];

		$this_user = $connection->query("SELECT*FROM users WHERE ID=$user_id ");
		$record = $this_user->fetch_assoc;

		?>
			<form method="POST" action="update_user_data.php">

			<label>NAME</label>
			<input type="text" value="<?php echo $record['NAME']?>" name="name of person">
			<br>
			<label>PHONE NUMBER</label>

			<input type="text" value="<?php echo $record['PHONE_NUMBER']?>" name="phone number of person">
			<input type="hidden" namme="user_id" value="<?php echo $user_id?>">

			<hr>
			<button type="submit">save changes</button>
		</form>
		</body>
	
</html>