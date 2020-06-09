<?php
/* switch(要匹配的条件){
    case x:
        xxxxx
    break;
    case 2:
        xxxxx
    break;
    default;
} */
// $day = empty($_GET['day']?'1':$_GET['day']);
/* $sex = empty($_GET['sex']?'1':$_GET['sex']);
switch($sex){
    case 0:
        echo "大雕萌妹了解一下";
    break;
    case 1:
        echo "汉字了解一些";
    break;
    case 2;
        echo "电话佛啊";
    break;
} */





/* $status = empty($_GET['s']?'1':$_GET['s']);
switch($status){
    case 1:
        echo "<a href='5.php?s=2'>已付款<a/>";
    break;
    case 2:
        echo "<a href='.php?s=2'>已发货<a/>";
    break;
    case 3:
        echo "<a href='5.php?s=2'>确认订单<a/>";
    break;
    case 4:
        echo "<a href='5.php?s=2'>评论<a/>";
    break;
    case 5:
        echo "评论完成";
    break;
} */

$status = 2;
switch($status){
	case 1:
		echo "老王";
		break;
	case 2:
		echo "<a href='demo8.php?s=3'>已发货</a>";
		break;
	case 3:
		echo "<a href='demo8.php?s=4'>确认订单</a>";
		break;
	case 4:
		echo "<a href='demo8.php?s=5'>评论</a>";
		break;
	case 5:
		echo "评论完成";
		break;	
}