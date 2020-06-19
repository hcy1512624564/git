<?php
function func(){
    return 1;
    return 2;
}
$a =func();
echo $a;

echo "<hr/>";

function func2(){
    // 如果你想让函数执行完了以后，有一个结果，后面接着用这个结果，必
    // 须写return返回结果。直接写echo，出来的结果是function执行完自
    // 己输出的结果
    return 1;
}
var_dump(func2());
echo "<hr/>";
function func3(){
    return 1+2;
}
$c =func3();
// var_dump(func3());
echo $C;