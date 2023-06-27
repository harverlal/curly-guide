<?php
	$title = $_POST['title'];
	$nr = $_POST['nr'];
	$img = $_POST['img'];
	$id = $_POST['id'];

	$conn = mysqli_connect('192.168.21.100', 'root', '123456', 'homework');
	$sql = "UPDATE news SET title = \"$title\", content = \"$nr\", img = \"$img\" where id = $id";

	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_execute($stmt);

	if(mysqli_affected_rows($conn) > 0){
		echo "<script>alert('修改成功');window.location='admin.php';</script>";
	}else{
		echo "<script>alert('修改失败');window.location='admin.php';</script>";
	}
?>