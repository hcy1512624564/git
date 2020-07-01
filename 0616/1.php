<?php
//文件的引入
// include './func.php';


//引入一个并不存在的脚本 会报一个警告级别的错误 下面的语句仍然会继续执行
// include './func1.php';
// echo "执行到了这里";

//这里使用require 引入一个并不存在的脚本 下面语句不会继续执行
// require('./func1.php');
// echo "执行到了这里";


//保证只引入一次
// include_once('./func.php');
// include_once('./func.php');

require_once('./func.php');
require_once('./func.php');

