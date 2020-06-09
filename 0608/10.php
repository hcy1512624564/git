<?php
/* 
while(判断条件){
    //循环体
}
*/

$i = 1;
while($i<=10){
    echo $i."<br/>";
    $i++;
}

echo "<hr/>";



echo "<table border='1' width='800' align='center'>";
$i= 1;
while($i<=10){
    echo "<tr>";
    $j = 1;
    while($j<=10){
        echo "<td>".$i."</td>";
        $j++;
    }
echo "</tr>";
$i++;
}
echo "</table>";