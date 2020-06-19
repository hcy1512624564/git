<?php
function demo1(){
	return "人家才不要呢";
}

function  demo2(){
	return "我也不要呢";
}


function result($suan){
	return $suan();
}
//将函数名demo1 函数名demo2 作为字符串参数传递给result函数,name可以自动调用上面的函数,
// 我们就说demo1,demo2是result的回调函数
echo result('demo1');