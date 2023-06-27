<?php
 header('Content-type: text/html; charset=utf-8');
session_start();
		if (!isset($_SESSION['user'])) {
         // 如果没有登录，跳转到登录页面，并传递一个message参数
         echo "<script>alert('请先登录');window.location='/6.22/admin.php';</script>";
         exit();
		}
$id=$_POST['id'];
$user=$_SESSION['user'];
$pl=$_POST['pl'];
$date=date('y-m-d h:m:s');
//echo $id."<br>".$pl;
//echo $date.$user;
 if (empty($pl)) {
             echo "<script>alert('评论不能为空');window.location='6.22/admin.php';</script>";
             exit;
         } 
		

$conn=mysqli_connect('192.168.21.100','root','123456','homework');
$sql="insert into pl(`id`,`user`,`pl`,`time`) values('$id','$user','$pl','$date')";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('评论成功');window.location='/6.22/admin.php';</script>";
}else{
	//echo "<script>alert('评论失败');window.location='/6.22/admin.php';</script>";
	printf("Error message: %s\n", mysqli_error($conn));
}
 mysqli_close($conn);

?>