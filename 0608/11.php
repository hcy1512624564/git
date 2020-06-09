<?php
//把for循环改为while循环的样子
/*for(xxx;xxx;xxx){

}

xxxx
while(xxxx){
	xxxx
}*/


$i = 1;
for(;;){
    if($i>10){
    break;
    }
    echo $i."<br/>";
    $i++;
}
echo "<hr/>";

$j = 1;
while($j<=10){
    echo $j."<br/>";
    $j++;
}
