<!DOCTYPE html>
<html>

<?php require('sql_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Students</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'header.php'; 

	  $students = $mysqli_connection->query("SELECT students.ID,students.NAME,students.EMAIL,students.PHONE_NUMBER,course.ID AS course_id FROM students,courses WHERE students.COURSE_ID = COURSE.ID");

	?>

    <main class="py-4">
        <div class="container">

        	<h2>List of students</h2>
        	<hr>

        	<table class="table table-striped table-hover">
        		<thead>
        			<th>ID</th>
        			<th>NAME</th>
        			<th>EMAIL</th>
        			<th>PHONE_NUMBER</th>
        			<th>COURSE_ID</th>
        		</thead>

        		<tbody>     			
        			<?php 

        			  foreach($students as $key => $value) {

        			  	$id = $value["ID"];
        			  	$name = $value["NAME"];
        			  	$email = $value["EMAIL"];
        			  	$phone = $value["PHONE_NUMBER"];
        			  	$course = $value["course_id"];

        			  	echo "

        			  	<tr>

        			  	  <td> $id</td>  
        			  	  <td>$name</td>
        			  	   <td> $email</td>   
        			  	  <td>$phone</td>  
        			  	  <td> $course</td>  




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