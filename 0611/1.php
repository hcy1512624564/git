<?php
// array_combine() 合并俩个数组
$arr = array(
    'a'=>'apple',
    'b'=>'banana',
    'c'=>'caomei',
    'd'=>'digua',
    'e'=>'egg'
);

$arr2 = array(
    '静静',
    '菲菲',
    '秀秀',
    '晓晓',
    ''
);
function myCombine($arr=array(),$arr2=array()){
    if(empty($arr)||empty($arr2)){
        echo '数组不能为空<br/>';
        return false;
    }
    $leng1 = count($arr);
    $leng2 = count($arr2);
    if($leng1 != $leng2){
        echo '长度不一致<br/>';
        return false;
    }
    $key = array();
    $value = array();
    foreach($arr as $val){
        $key[]=$val;
    }
    foreach($arr2 as $val){
        $value[]=$val;
    }
    $new_arr = array();
    for($i=0;$i<$leng1;$i++){
        $new_arr[ $key[$i] ]=$value[$i];
    }
    return $new_arr;
}
echo "<pre>"; 
$a = myCombine($arr,$arr2);
var_dump($a);