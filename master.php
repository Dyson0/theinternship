<?php 
$multidymentionalArrays= array(
   'Wakiso' => array(
   	     'Muvule' => 569
	     'Eucalyptus' => 80003
	     'Musizi' => 767363
	     'Musabu' => 8984
   ),
   'Kabale'=> array(
   	      'Muvule' => 69
	      'Eucalyptus' => 803
	      'Musizi' => 7363
	      'Musabu' => 89
   ),
   'Kabale'=> array(
   	       'Muvule' => 90
	       'Eucalyptus' => 703
	       'Musizi' => 763
	       'Musabu' => 29
   ),

);

foreach ($multidymentionalArrays as $index => $value) {
	echo"=====" .$index."=====<br>";
	foreach ($value as $key => $trees) {
		echo $key." = " .$trees."<br>";
	}

}