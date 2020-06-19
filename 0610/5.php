<?php
$arr = array(
    0=>array('name'=>'萌萌','age'=>17,'sex'=>'妹子'),
    1=>array('name'=>'————','age'=>17,'sex'=>'少女'),
    2=>array('name'=>'西西','age'=>20,'sex'=>'娘炮'),
    3=>array('name'=>'晶晶','age'=>25,'sex'=>'汉子'),
    4=>array('name'=>'丹丹','age'=>28,'sex'=>'女神'),
);
echo "<pre>";
var_dump($arr);

/* foreach($arr as $k=>$v){
    foreach($v as $key=>$value){
        echo $key."=======".$value."<br/>";
    }
} */

/* foreach($arr as $k=>$v){
    echo $v['name'].'<br/>';
    echo $v['age'].'<br/>';
    echo $v['sex'].'<br/>';
} */


echo "<table border='1' width='800' align='center'>";
echo "<tr>";
    echo "<th>姓名</th>";
    echo "<th>年龄</th>";
    echo "<th>性别</th>";
    echo "<th>操作</th>";
echo "</tr>";
foreach($arr as $key=>$value){
    echo "<tr>";
        echo "<td>".$value['name']."</td>";
        echo "<td>".$value['age']."</td>";
        echo "<td>".$value['sex']."</td>";
        echo "<td><a href=''>修改</a>|<a href=''>删除</a>|<a href='./6.php'>是否冻结</td>";
    echo "</tr>";
}

echo "</table>";










