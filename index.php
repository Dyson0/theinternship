
$<?php
$DISTRICTS = array(
	'Wakiso' => array(
		'Muvule'=> 569,
		'Eucalyptus' => 80003,
		'Musizi' => 767363,
		'Musabu' => 8984,
),
	'Kabale' => array(
		'Muvule'=> 59,
		'Eucalytus' => 803,
		'Musizi' => 7363,
		'Musabu' => 89,
),
	'Kabale' => array(
		'Muvule'=> 90,
		'Eucalyptus' => 703,
		'Musizi' => 763,
		'Musabu' => 29,
),

);




foreach ($DISTRICTS as $index => $value) {
	echo"<br>=====" . $index."=====<br>";

	echo"<br>Muvule=" .$value['Muvule'];
	echo"<br>Eucalyptus=" .$value['Eucalyptus'];
	echo"<br>Musizi=" .$value['Musizi'];
	echo"<br>Musabu=" .$value['Musabu'];
}

$sumofalldistricts=array(569,80003,767363,8984,59,803,7363,89,90,703,763,29);

echo"----sum(sumofalldistricts)----=" .array_sum($sumofalldistricts)."------<br><br><br>";

setcookie("sumofalldistricts","866818",time()+3600);

if(isset($_COOKIE['sumofalldistricts'])){
	echo $_COOKIE['sumofalldistricts'];
setcookie("sumofalldistricts","",time()-60);
}
else{
	echo"----the echo doesnt exist----" ."<br>";
}

$sumofmusabu_trees=array(8984,89,29);
echo "----sum(sumofmusabu_trees)----=" .array_sum($sumofmusabu_trees)."----<br><br>";

session_start();
$_SESSION['sumofmasabu_trees']="9102";
echo $_SESSION["sumofmasabu_trees"]. "<br>";
?>

<|DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title> The internship</title>

		</head>

		<body>
			<form method="POST" action "master.php">
				<label>sumoftrees</label>
			    <input type"number" name - +>
			    <a href="master.php">Master page </a>				
			</form>
		</body>
	</html>



