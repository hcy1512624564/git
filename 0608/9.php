<?php
// 输出年份
/* echo "<select>";
for($i=1916;$i<=2020;$i++){
    echo "<option>".$i."</option>";
}
echo "</select>"; */




// 使用双层循环，输出十行十列各行还是变色表格
/* echo "<table border='1' width='800' align='center'>";
for($i=1;$i<=10;$i++){
    if($i%2==0){
        $bgcolor = 'green';
    }else{
        $bgcolor = 'yellow';
    }
    echo "<tr bgcolor='".$bgcolor."'>";
    for($j=1;$j<=10;$j++){
        echo "<td>1</td>";
    }
    echo "</tr>";
}

echo "</table>"; */
echo "<table border='1' width='800' align='center'>";

for($i=0;$i<100;$i++){
    if($i%10==0){
        if($i%20==0){
            echo '<tr bgcolor="red"';
        }else{
            echo '<tr bgcolor="green"';
        }
    }
    echo "<td>".$i."</td>";
    if($i%10 == 9){
        echo $i."<br/>";
    }
}
echo "<table>";




