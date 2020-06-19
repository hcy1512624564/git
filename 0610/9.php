<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="./10.php" method="get">
			<input type="text" name="name" value="老王">
			<input type="text" name="cccc" value="">
			<input type="submit" name="" value="提交">
	</form>
	<a href="http://www.baidu.com/s?wd=<?php echo $_GET['name']; ?>" title="">百度</a>
</body>
</html>