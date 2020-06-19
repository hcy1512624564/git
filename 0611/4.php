<?php
$arr = array(
	'十年生死',
	'两茫茫',
	'喜羊羊',
	'灰太狼',
	'谁要让孩子看',
	'死爹没有娘',
	'郑渊洁',
	'日本-奥特曼',
	'老美'
);

$arr1 = array(
    '吊毛',
    '卵子',
    '骚鸡'
);
$arr2 = array(
    "a"=>'草'
);
$arr3 = array(
    '萱萱',
    '韩小野'
);
// $new_arr = array_merge($arr,$arr1,$arr2,$arr3);
// echo "<pre>";
// var_dump($new_arr);

function myMerge(){
    $arr = func_get_args();
    // var_dump($arr);
    $new_arr =array();
    foreach($arr as $value){
        foreach($value as $key=>$val){
            if(is_numeric($key)){
                $new_arr[]=$val;
            }else{
                $new_arr[$key]=$val;
            }
        }
    }
    return $new_arr;
}
echo "<pre>";
var_dump(myMerge($arr,$arr2,$arr1,$arr3));