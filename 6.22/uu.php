<?php
// 启用 Session
session_start();

// 从 Session 中获取参数的值
$user = $_SESSION['user'];
$password = $_POST['password'];
echo $user;
      $conn = mysqli_connect('192.168.21.100', 'root', '123456', 'homework');
      $sql1 = "UPDATE login SET `name`='$password' WHERE user='$user';";
      $results = mysqli_query($conn, $sql1);
	  echo $results;
	  if( $results==1){
		 echo "<script>alert('修改成功!');window.location='/6.22/user.php';</script>";
	  }else{
		  echo "<script>alert('修改失败!');window.location='/6.22/up.php';</script>";
	  }
       ?>