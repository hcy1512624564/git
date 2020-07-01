<?php
$dirname = date("Y-m-d");

//生成一个随机数
$filename = "ASDFGHJKLZXCVBNMQWERTYUIOP";
$filename = substr(str_shuffle($filename),0,6);
$extArr = ['txt','sad','sada'];
$filename .= mt_rand(1111,9999).$filename;
$filename .='.'.$extArr[0];

if(!file_exists($dirname)){
    @mkdir($dirname,0777);
}

file_put_contents($dirname.'/'.$filename,"1111",FILE_APPEND);