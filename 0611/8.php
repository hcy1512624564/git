<?php
//array_sum 返回数组值得和(数字)
$arr = array(1,2,'嘿嘿嘿');
//写大量的代码的,逻辑性比较强,一定记得先有一个步打印一步.
//var_dump($arr);

$sum = array_sum($arr);
var_dump($sum);

//自定义函数,遍历所有元素,if判断把里面是数字的全部留下来相加就可以