<?php
//array_rand() 随机除去数组的键明
//参数
//1.要随机的数组下标
//2.随机几个
//返回值 随机生成的新数组
$arr = array(0,1,2,3,4,5);
$new = array_rand($arr,2);
var_dump($new);

//做个双色球,概率,都有哪些30选7,31选5....

$arr2 = array('id'=>1,'name'=>'张一山','ai'=>'福原爱东北方言老标准了');

$new2 = array_rand($arr2,3);
var_dump($new2);