<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>新闻网站</title>
</head>
<body>
<h2>修改新闻</h2>
<?php
	$id=$_GET['a'];
	echo "<form action='newsupdate.php' method='post' accept-charset='utf-8' >";
	echo "<input type='text' style='display: none;' name='id' value=".$id."><br>";
	echo "标题: <input type='text' name='title'><br>";
	echo "内容: <textarea name='nr'></textarea><br>";
	echo "图片：<input type='file' name='img'><br>";
	echo "<input type='submit'>";
	echo "</form>";
?> 
</body>
</html>