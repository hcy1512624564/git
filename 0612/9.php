<?php
//explode将字符串搞成数组   
//implode(join)将数组搞成字符串

/*$str = "1,2,3,4,56,7,8";
$new = explode(' ',$str);
//var_dump($new);

$str1 = implode($new);
var_dump($str1);*/


$arr = array(1,2,3,4,5,6,7,8);
//var_dump($arr);
shuffle($arr);
var_dump($arr);

//substr() 从字符串中截取为子字符串

//参数
//1. 要截取的字符串
//2. 从哪个位置开始截取,默认0
//3. 要截取几个,第三参数如果不写,默认截取到最后

$str = "helloworld";
//echo substr($str,5);
//echo substr($str,5,2);

//如果第二个和第三个值是负的
//始终保持截取字符串后三位,到这来,用负数
//echo substr($str,-4,2);

//第三个参数是正的,就是数量,但如果第三个也是负数
//第三个参数是负的,代表结束位置,从后往前数
//echo substr($str,-4,-1);

/**
 * 生成随机字符串
 * @param int $length 产生几位的随机字符
 * @return string 根据参数返回对应的随机字符串
 */

function randStr($length=5){
	$str = str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjklmnpqrstuvwxyz23456789');
	$str = substr($str,0,$length);
	return $str;
}

echo randStr();