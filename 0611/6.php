<?php
//array_diff()  获取数组的差集,参数个数任意,返回新数组
//array_intersect() 获取数组的交集,参数个数任意,返回新数组

$arr1 = array('one','two','three','four','five','liu');

$arr2 = array('a','b','c','two','three','four');

$arr3 = array('a','中文','英文','one','three');

//以第一个数组(第一个参数)为基准,找其他数字中不存在的没有的差劲
$new = array_diff($arr2,$arr1,$arr3);
var_dump($new);

//找所有数组都有的
$new2 = array_intersect($arr1, $arr2,$arr3);
var_dump($new2);
