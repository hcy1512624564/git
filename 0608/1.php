<?php
// if else  判断一般是大量的代码，走一段大代码
// 需求：代码量不大，就是非常简单echo，不需要写if
// 使用三元运算
/* if(){

}else{

} */

//判断条件？ 真区间：假区间；
// echo true && true?'真的':'假的';

// $a = 2;
// $b = 3;
// echo $a>$b ? '真的':'假的';

// echo 'ipconfig';
// echo 'tree';

//@错误抑制符只用于一般的测试
//一般不用再网站上线，网站上线一般屏蔽所有错误。
echo @$laowang;

//数组下标指定符
$arr = array('name'=>'老王');
$a = (1+(5/6))%3;
echo $a;