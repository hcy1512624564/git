<?php
//count() 统计数字元素或者对象中的成员个数
//参数
//1.要统计的数组
//2.true或者false
//true代表递归统计个数
//false 代表不递归统计个人(默认值)
//返回值 统计出来的个数

$arr = array(1,2,3,4=>array(5,6,7,8,9),5);
echo count($arr,true);