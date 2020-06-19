<?php
echo "<pre>";
$arr = array(
    1=>array(
        1=>array('id'=>1,'nmae'=>'laowang'),
        2=>array('id'=>2,'nmae'=>'laogao'),
    ),
    2=>array(123)
);

var_dump($arr);
echo $arr[1][2]['nmae'];
