<?php
$arr = array(
    1=>array(
        1=>array('id'=>1,'name'=>'laowang'),
        2=>array('id'=>2,'name'=>'laogao'),
    ),
    2=>array(123)
);
// var_dump($arr);
echo $arr[1][1]['name'];