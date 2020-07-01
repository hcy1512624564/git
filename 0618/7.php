<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            $year = date('Y');
            $month = date('m');
            $day = date('d');
        ?>
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
            $dd = 1;
            while($dd<=$day){
                echo "<tr>";
                for($i=0;$i<7;$i++){
                    echo "<td>&nbsp;</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>