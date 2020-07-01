<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>友丶星辰</title>
</head>
<body>
	<center>
	<?php 
		$year = @$_GET['y']?$_GET['y']:date('Y');//获取当前年份
		$month = @$_GET['m']?$_GET['m']:date('m');//获取当前月份
		$day = date('t',mktime(0,0,0,$month,1,$year));//当前月的天数
		//echo $day;
		$w = date('w',mktime(0,0,0,$month,1,$year));//定义当前月1号星期几
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
			//累加循环31天出来
			$dd = 1;//日
			while($dd<=$day){ // 29<=31
				echo "<tr>";
					for($i=0;$i<7;$i++){
						if(($dd==1 && $i<$w) || $dd>$day){
							echo "<td>&nbsp;</td>";
						}else{
							echo "<td>{$dd}</td>";
							$dd++;// dd == 7
						}
						
					}
				echo "</tr>";
			}
		 
	echo "</table><br/><br/>";
	$py = $ny = $year;
	$pm = $month-1;//上个月
	$nm = $month+1;//下个月

	//防止出现负月和13月以上的情况
	if($pm==0){
		$pm=12;
		$py--;
	}

	if($nm==13){
		$nm=1;
		$ny++;
	}
	echo "<a href='demo5.php?y={$py}&m={$pm}'>上一月</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='demo5.php?y={$ny}&m={$nm}'>下一月</a>";

	?>
	</center>
</body>
</html>