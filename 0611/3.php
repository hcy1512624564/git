<?php
// array_chunk() 分割数组
//返回一个新的数组
$arr = array(1,2,3,4,5,6,7,8,9);
$arr2 = array_chunk($arr,5);
echo "<pre>";
var_dump($arr2);
