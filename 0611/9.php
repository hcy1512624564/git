<?php
//in_array() 检查数组中是否存在某个值
//参数
//1.要匹配的字符串
//2.要匹配哪个数组
//返回值:检测是否在数组中,存在返回true,不存在返回false

//$arr = array(1,2,3,4,5,6,7);
$arr = array('丹丹','美美','蓉蓉','玲玲','猛猛');
var_dump(in_array('猛猛1',$arr));