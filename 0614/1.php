<?php 
var_dump(filetype('./123.txt'));
var_dump(filetype('./123.php'));
var_dump(filetype('./123.ueudj'));
var_dump(filetype('./123.rar'));
var_dump(filetype('./123'));

echo "<br/>";
//is_dir 可以用来判断是否是一个目录(很重要)
var_dump(is_dir('./123.txt'));

echo "<br/>";
//判断给定的文件名是否可读
var_dump(is_readable('./123.txt'));

echo "<br/>";
//判断给定的文件是否可写
var_dump(is_writable('./123.txt'));

echo "<br/>";
//判断给定的文件是否可执行
var_dump(is_executable('./123.exe'));
var_dump(is_executable('./1234.exe'));