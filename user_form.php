<|DOCTYPE html>
<?php
require('php_mysql.php');
?>
	
<html>
	<head>
		<meta charset="utf-8">
		<title>User form</title>
	</head>
	<body>
		<h2>CREATE USER </h2>
		<hr>
		<form method="POST" action="user_data.php">

			<label>NAME</label>
			<input type="text" name="name of person">
			<br>
			<label>PHONE NUMBER</label>

			<input type="text" name="phone number of person">
			<br>
			<button type="submit">save</button>
		</form>

		<table>
			<thead>
				<th>ID</th> <th>NAME</th> <th>PHONE_NUMBER</th> <th>Action</th>
			
				</thead>
				<tbody>

		
		<?php
		$read_records = $connection ->query("SELECT * FROM users");

		foreach ($read_records as $key => $value) {
			echo"
			<tr> 
				<td> ".$value['ID']."</td> 
				<td>" .$value['NAME']." </td>
				<td>".$value['PHONE_NUMBER']."</td> 
				<td> <a href='delete_user.php?user_id=".$value['ID']."'>Delete </a> <a> Update </a> </td>
			</tr>";
		}


		?>

		</tbody>

	    </table>
	

	</body>
</html>