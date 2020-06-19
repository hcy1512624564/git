<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>友丶星辰</title>
</head>
<body>
<center>
    <?php
    $year = @$_GET['y']?$_GET['y']:date('Y');//获取当前年份
    $month = @$_GET['m']?$_GET['m']:date('m');//获取当前月份
    $day = date('t',mktime(0,0,0,$year,1,$month));//获取当前月份天数
    $w = date('w',mktime(0,0,0,$month,1,$year));//获取当前月份星期几
    echo "<h3>{$year}年{$month}月</h3>";
    ?>
    <table width="600px" border="1">
        <tr>
            <th>星期日</th>
            <th>星期一</th>
            <th>星期二</th>
            <th>星期三</th>
            <th>星期四</th>
            <th>星期五</th>
            <th>星期六</th>
        </tr>
        <?php
        $dd=1;
        while($dd<=$day){
            echo "<tr>";
            for($i=0;$i<7;$i++){
                if(($dd==1&&$i<$w)||$dd>$day){
                    echo "<td>&nbsp;</td>";
                }else{
                    echo "<td>{$dd}</td>";
                    $dd++;
                }
            }
            echo "</tr>";
        }
    echo "</table><br/>";
    $py = $ny = $year;
    $pm = $month-1;
    $nm = $month+1;
    if($pm==0){
        $pm=12;
        $py--;
    }
    if($nm==13){
        $nm=1;
        $ny++;
    }
    echo "<a href='5.php?y={$py}&m={$pm}'>上一月</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='5.php?y={$ny}&m={$nm}'>下一月</a>";
    ?>
</center>
</body>
</html>