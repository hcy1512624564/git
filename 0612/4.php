<?php
ini_set('display_errors',1);//开启
error_reporting(E_ALL);//开启所有错误

$sum=0;//此处如果屏蔽掉，初次使用sum时，变量未定义会notice报错
for($i=0;$i<=10;$i++){
	$sum+=$i;
} 
echo $sum;

strlen();