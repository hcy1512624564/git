<?php
// ini_set('display_errors','off');屏蔽所有错误
// ini_set('display_errors','on');提示所有错误
// ini_set('display_errors','0');关闭所有错误
// ini_set('display_errors','1');提示所有错误


// error_reporting(E_ALL);


error_reporting(E_ALL & ~E_NOTICE);
echo $a;