<?php
$xiaomen = 'on';
$jxlmen = 'on';
$jsmen = 'on';
$shijian = 'meidao';
if($xiaomen == 'on'){
	echo "走进教师楼,爬楼梯准备去教室<br/>";
	if($jsmen == 'on'){
		echo "走进教室,坐凳子上,准备上课";
		if($shijian == 'daole'){
			echo "认真听老王上课扯淡,扯完了接着睡";
		}else{
			echo "找个基友?搞搞基";
		}
	}else{
		echo "门外或者手机上喊,谁拿着钥匙呢?";
	}
}else{
	echo "回去接着睡";
}