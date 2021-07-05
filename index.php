<?php


 $DISTRICTS = array(
    'Wakiso' => array(
   	     'Muvule' => 569,
	     'Eucalyptus' => 80003,
	     'Musizi' => 767363,
	     'Musabu' => 8984,
   ),
   'Kabale'=> array(
   	      'Muvule' => 69,
	      'Eucalyptus' => 803,
	      'Musizi' => 7363,
	      'Musabu' => 89,
   ),
   'Kabale'=> array(
   	       'Muvule' => 90,
	       'Eucalyptus' => 703,
	       'Musizi' => 763,
	       'Musabu' => 29,
   ),

);


// echo $DISTRICTS["wakiso"]["Muvule"];

foreach ($DISTRICTS as $index => $value){

     echo"<br>=====" .$index."=====<br>";
    
	echo"<br>Muvule=".$value['Muvule'];
	echo"<br>Eucalyptus=". $value['Eucalyptus'];
	echo"<br>Musizi=". $value['Musizi'];
	echo"<br>Musabu=". $value['Musabu'];
}

$sumofalltrees=arrays(569,80003,767363,8984,69,703,763,29,69,803,7363,89);

echo"-----sum(sumofalltrees)-----= ".array_sum(sumofalldistricts),"----<br>;

setcookie("sumofalltrees","866807",time()+3600);

if(isset($_cookie['sumofalltrees'])){

 echo $_cookie['sumofalltrees'];

 setcookie("sumofalltrees","",time()-60);
}

else{
	echo"-------the cookie doesnt exist-----" ."<br>;

}

$sumofmasabu_trees=array(8984,29,89);
echo("-----sum(sumofmasabu_trees)----",array_sum($sumofmasabu_trees),-------<br>);

session_start();

$_SESSION['sumofmasabu_trees']="9102";
echo $_SESSION["sumofmasabu_trees"]. ",<br>";
?>

<DOCTYPE html>

 <html>
 	<head>
 		meta charset="utf-8"
 		<title>The internship</title>
 	</head>
 	<body>
 		
 		<form method="POST" action "master.php">
 			<label>sumofalltrees</label>
 			<input type="number"name="">
 			<a href="master.php">Master page</a>
 	</body>

</html>
