<?php
$title=$_POST['title'];
$nr=$_POST['nr'];
$img=$_POST['img'];
echo  $title.$nr.$img;
$conn=mysqli_connect('192.168.21.100','root','123456','homework');
$sql="insert into news(`title`,`content`,`img`) values('$title','$nr','$img');";
echo $sql;

if(mysqli_query($conn,$sql)){
	echo "<script>alert('发布成功');window.location='admin.php';</script>";
}else{
	/*printf("Error message: %s\n", mysqli_error($conn));*/
	echo "<script>alert('发布失败');window.location='newsadd.html';</script>";
}

?>