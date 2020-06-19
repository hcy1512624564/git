<?php
// array_slice()获取数组一段值，截取数组
// 参数
// 1.要操作的数组
// 2.以谁开始
// 3.要几个，可以是负数(从后往前数)
// 返回值是一个新数组
$arr = array(1,2,3,4,5,6);
$new_arr = array_slice($arr,3,5);



var_dump($new_arr);








