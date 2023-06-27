<?php
header('Content-type: text/html; charset=utf-8');
$user=$_POST['user'];
$password=$_POST['password'];
$conn=mysqli_connect('192.168.21.100','root','123456','homework');
echo $user."  ".$password;
$sql1="select * from login;";
echo $sql1;
$results = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_assoc($results)) {
    
	 if ($row['user'] == $user and $row['password'] == $password){
		 // 启用 Session
session_start();

// 将需要传递的参数存储在 Session 中
$_SESSION['user'] = $user;

// 页面跳转
header('Location: index.html');
	echo "<script>alert('登录成功');window.location='/6.22/index.html';</script>";
	}
		
	}
	echo "<script>alert('登录失败');window.location='/6.22/login.html';</script>";
mysqli_close($conn);

?>