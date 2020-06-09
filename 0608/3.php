<?php
/*echo "起床<br>";
echo "酝酿<br>";
echo "蹲上面<br>";
echo ",....";*/


//假如用户名对了
/*if(true){
	//跳转页面到首页
}else{
	//密码错了给提示
	//重新输入密码
}*/

/*if(true):
	echo "123";
endif;*/

/*//语法
if(){
	//
}else{
	//
}

//冒号简写方法
if():

else:

endif;


if()
{

}else
{

}*/

$day = empty($_GET['day']?'1':$_GET['day']);
// $day = 4;
if($day == 1){
    echo "睡";
}elseif($day == 2){
    echo "阿萨德";
}elseif($day == 3){
    echo "唉，上班好累";
}elseif($day == 4){
    echo "快了";
}elseif($day == 5){
    echo "好开心";
}else{
    echo '不行了';
}