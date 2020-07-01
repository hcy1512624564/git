<?php
include_once('./func.php');
include_once('./fileUpload.php');
//接收表单数据信息
// $date = $_POST;
// my_print($date);

// //接收表单上传文件信息
// my_print($_FILES);
/* Array
(
    [nickname] => wqeq
    [password] => 1232131
)
Array
(
    [path] => Array
        (
            [name] => Tulips.jpg
            [type] => image/jpeg
            [tmp_name] => C:\Windows\php18AD.tmp
            [error] => 0
            [size] => 620888
        )

)
 */
$keysArr = array_keys($_FILES);
$name = $keysArr[0];
$extArr = array('jpg', 'jpeg', 'png');
$res = fileUplad($name,'./upload',1024*1024*1024,$extArr,false);
my_print($res);