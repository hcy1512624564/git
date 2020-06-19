<?php
//100多个函数,今天都要看一遍
//array_flip() 键值对调.

$arr = array(
	'猛哥'=>'一点不猛,刚',
	'彩军'=>'猛',
	'B哥'=>'扛把子',
	'上单一霸'=>'我',
	'牛哥'=>'小'
	);
$arr1 = array(
	'test1',
	'test2'
	);
$new = array_flip($arr1);
var_dump($new);

//作业:foreach($arr as $key=>$value);