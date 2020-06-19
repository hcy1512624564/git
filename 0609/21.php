<?php
$arr = array('a','b','c','d','e','f');//索引数组.for循环可以搞定

for($i=0;$i<count($arr);$i++){
    echo $arr[$i],'<br/>';
}

//foreach() 专业遍历数组用的
$arr2 = array('name'=>'古巨极','age'=>'40');

//$k => $v k和v的变量名字是随便起的
foreach($arr2 as $k=>$v){
    echo $key;
}