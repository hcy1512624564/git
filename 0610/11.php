<?php 
/*var_dump($_GET);
var_dump($_POST);*/
var_dump($_FILES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="./12.php" method="post" enctype="multipsrt/form-data">
    <input type="text" name="name" value="" placeholder="用户名"><br/>
    <input type="password" name="pwd" value="" placeholder="密码"><br/>
    <input type="file" name="pic" value="" placeholder=""><br/>
    <input type="submit" name="" value="提交">
    </form>
</body>
</html>