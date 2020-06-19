<?php
$arr = array(
    'a'=>'阿山',
    'b'=>'小日本',
    'c'=>'棒子',
    'e'=>'老毛子',
);
var_dump(current($arr));


echo next($arr);
echo next($arr);
echo prev($arr);
echo prev($arr);
echo key($arr);
echo end($arr);
echo reset($arr);
echo current($arr);
echo next($arr);