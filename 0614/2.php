<?php 
/*//检测文件是否存在 bool 存在返回true,否则返回false
var_dump(file_exists('./123456.txt'));
var_dump(file_exists('./123.txt'));

//检查目录是否存在也好使
var_dump(file_exists('./123'));

//取得文件的大小,字节(人眼不好识别字节的大小),统计不了文件夹
var_dump(filesize('./123'));


date_default_timezone_set('PRC');

//获取文件的创建时间
var_dump(date('Y-m-d H:i:s',filectime('./123.txt')));

//获取文件的修改时间
var_dump(date('Y-m-d H:i:s',filemtime('./123.txt')));

//获取文件的访问时间,liunx系统用的,windows没效果,给的创建时间
var_dump(date('Y-m-d H:i:s',fileatime('./123.txt')));

//获取文件大部分属性
var_dump(stat('./123.txt'));*/


/*
	1kb = 1024 Byte;
	1MB = 1024*1024 Byte;
	1GB = 1024*1024*1024 Byte;
	1TB = 1024*1024*1024*1024 Byte;
	1PB = 1024*1024*1024*1024*1024 Byte;
	1EB = 1024*1024*1024*1024*1024*1024 Byte;
 */

//1TB硬盘  1024GB   970GB

//1024MB = 1GB
//1024GB = 1TB

/*******************************************************
 * 根据用户给出的字节大小自动转换想要的单位
 *
 * @author 路上有妖气
 * @date 2018-10-25
 *
 * @param string 文件名称
 * @return mixed 如果文件有问题或者不存在,返回bool值得false,
 * 如果正常,返回文件转换好的大小
 *******************************************************/
 
 //如果打字快

 function getSize($filename){
 	//判断文件是否存在,不存在返回false
 	if(!file_exists($filename)){
 		return false;
 	}

 	//得到文件的大小,以字节为单位的
 	$filesize = filesize($filename);

 	if($filesize<1024){
 		return $filesize.'Bytes';
 	}elseif($filesize>=1024 && $filesize<pow(1024,2)){
 		return ($filesize/1024).'KB';
 	}elseif($filesize>=pow(1024,2) && $filesize<pow(1024,3)){
 		return ($filesize/pow(1024,2)).'MB';
 	}elseif($filesize>=pow(1024,3)){
 		return ($filesize/pow(1024,3)).'GB';
 	}
 }

//  var_dump(getSize('./1234.exe'));
