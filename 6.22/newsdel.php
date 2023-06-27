<?php
	$id=$_GET['a'];
// echo $id;
	$conn=mysqli_connect('192.168.21.100','root','123456','homework');
	$sqldel = "DELETE FROM news WHERE id = '$id';";
	$results = mysqli_query($conn, $sqldel);
	if(mysqli_affected_rows($conn) > 0) {
		echo "<script>alert('删除成功');window.location='admin.php';</script>";
	} else {
		echo "<script>alert('删除失败');window.location='admin.php';</script>";
	}	  
?>