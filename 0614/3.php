<?php
//basename--返回路径中的文件名部分

$path = './home/httpd/html/index.php';
$file1 = basename($path);
$file2 = basename($path,'.php');

//echo $file2; 

// 返回路径部分,注意,最后是没有那个 '/',后面要用函数
$file3 = dirname($path);
//echo $file3;

$file4 = pathinfo($path);
var_dump($file4);
$file5 = pathinfo($path,PATHINFO_DIRNAME);
var_dump($file5);