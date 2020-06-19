<?php
function  sum(){
	//自动获取所有实参的值,并且以数组方式返回
	$arr = func_get_args();
	//var_dump($arr);
	
	//帮你获取所有实参的个数
	$num = func_num_args();
	//var_dump($num);
	
	// echo func_get_arg(7);
	for($i=0;$i<$num;$i++){
		var_dump(func_get_arg($i));
	}
}

sum("北方人","南方人");