<?php

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

$sumofalltrees=array(569,80003,767363,8984,59,803,7363,89,90,703,763,29);

echo "sumofalltrees is" .array_sum($sumofalltrees). "in both districts <br><br>";
setcookie('sumofalltrees','866818',time()+3600);

if(isset($_cookie['sumofalltrees'])){
	echo $_cookie['sumofalltrees'];
}
else{
	echo"----the echo doesnt exist----<br>;
}

$sumofmusabutrees=array(8984,89,29);
echo ("sumofmasabutrees is" .array_sum($sumofmusabutrees). "in both districts<br>"