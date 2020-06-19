<?php
function callback($errno,$errstr,$errfile,$errline){
	echo "自定义错误处理:错误级别:{$errno},错误信息是:{$errstr}.所在文件是:{$errfile}的第{$errline}行出错";
}
set_error_handler('callback');

echo $a;



//调试的时候要出现所有错误,上线屏蔽所有错误