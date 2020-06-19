<?php
/* function bb(){
    // echo "112";
    return 1+2;
}

var_dump(bb());
$b = bb();
echo $b;
*/

//函数的参数有两个内容，一个叫形参，一个叫实参
function jia($a,$b){//形式的参数
    // $a = 20;
    // $b = 20;
    return $a+$b;
}

jia(985956,5886);//实际的值，叫实参

function jia1($b,$uu,$ii=90){
    $b=30;
    $uu = 50;
    return $b+$uu+$ii;
}
echo jia(1,2);

