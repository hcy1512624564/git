<?php
//list()
/*$arr = array(1,'萱萱',0,);
list($a,$b,$c,$d) = $arr;

echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
var_dump($d);*/


//each()
$arr = array(
	'a'=>'阿三',
	'b'=>'小日本',
	'c'=>'棒子',
	'e'=>'老毛子'
	);
// var_dump(each($arr));
/* var_dump(each($arr));
var_dump(each($arr));
var_dump(each($arr));
var_dump(each($arr));
var_dump(each($arr)); */

while(list($key,$value) = each($arr)){
	echo $key.'<br>';
	echo $value.'<br>';
}
