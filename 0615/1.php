<?php
/**
 * 自然中的斐波那契数列
 * 这个数列从第3项开始，每一项都等于前俩项之和
*/
function foo($num){
    if($num>2){
        $res = foo($num-1)+foo($num-2);
        return $res;
    }
    return 1;
}
echo foo(1),'<br/>';
echo foo(2),'<br/>';
echo foo(3),'<br/>';
echo foo(4),'<br/>';
echo foo(5),'<br/>';
echo foo(6),'<br/>';
echo foo(7),'<br/>';
echo foo(8),'<br/>';
echo foo(9),'<br/>';