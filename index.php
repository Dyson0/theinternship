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
