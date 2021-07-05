<?php 
$sumofalldistricts=arrays(569,80003,767363,8984,69,703,763,29,69,803,7363,89);

echo"-----sum(sumofalldistricts)-----= ".array_sum(sumofalldistricts),"----<br>;

setcookie("sumofalldistricts","873450",time()+3600);

if(isset($_cookie['sumofalldistricts'])){

 echo $_cookie['sumofalldistricts'];

 setcookie("sumofalldistricts","",time()-60);
}

else{
	echo"-------the cookie doesnt exist-----" ."<br>;

}

$sumofmasabu_trees=array(8984,29,89);
echo("-----sum(sumofmasabu_trees)----",array_sum($sumofmasabu_trees),-------<br>);