<?php
//代码是从上到下执行
//函数的格式
/* 
function 函数名(参数1，参数2，参数3...){
    // 函数的执行语句
}
*/

//函数名();

echo "123";

//函数名一般工作的时候采用小驼峰命名法
//大驼峰 Laownag--->全部的单词的首字母大写
//小驼峰 laoWang --->首个单词字母小写，后面的单词首字母以侓大写
function aaa(){
    //如果想要让函数有返回值，必须写return.
    // return相当于一个信息采集员，采集到内容以后，把内容返回给调用处
    return 123;
    //后面一侓都是废物代码
    echo "123";
}
echo aaa();
var_dump(function_exists("aaa1"));