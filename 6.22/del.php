<?php
$c=$_GET['a'];
if(unlink($c)){
	echo "<script>alert('删除成功');window.location='upload/wb.php';</script>";
}
?>