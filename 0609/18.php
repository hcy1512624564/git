<?php
$arr = array('为什么我这么年轻，就这么帅！');
echo $arr[0];
echo "<br/>";


$arr2 = array(
    1=>array('id'=>1,'name'=>'张三'),
    2=>array('id'=>2,'name'=>'李四'),
    3=>array('id'=>3,'name'=>'王五'),
);
var_dump($arr2);

var_dump($arr2[2]['name']);


$arr3 = array('name'=>'老王','age'=>30,'aihao'=>array('篮球','足球','乒乓球'));

echo  $arr3['aihao'][2];