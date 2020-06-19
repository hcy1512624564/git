<?php
$handle = opendir('./bin');
//var_dump($handle);

/*var_dump(readdir($handle));
var_dump(readdir($handle));
var_dump(readdir($handle));
var_dump(readdir($handle));
var_dump(readdir($handle));*/

while($filename = readdir($handle)){
	echo $filename.'<br>';
}