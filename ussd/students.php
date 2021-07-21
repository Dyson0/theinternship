<!DOCTYPE html5>
<html>
    <?php require('sql_connection.php') ?>
    <head>
    	<meta charset="utf-8">
    	<title>Students</title>
    	<link rel="stylesheet" type="text/css" href="../africatalking/css/app.css">
    </head>
    <body>
    	<?php include './../header.php'; 
    	    $students = $sqliCon->query("SELECT st.id, st.name, st.email, st.phone_number, st.course FROM students AS st");
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
            			<th>COURSE</th>
            		</thead>

            		<tbody>     			
            			<?php 
            			    foreach($students as $key => $value){
                			  	$id = $value["id"];
                			  	$name = $value["name"];
                			  	$email = $value["email"];
                			  	$phone = $value["phone_number"];
                			  	$course = $value["course"];

                			  	echo "
                			  	<tr>
                			  	    <td>$id</td>  
                			  	    <td>$name</td>
                			  	    <td>$email</td>   
                			  	    <td>$phone</td>  
                			  	    <td>$course</td> 
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