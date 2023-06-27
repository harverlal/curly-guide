<?php
header('Content-type: text/html; charset=utf-8');
$user=$_POST['user'];
$password=$_POST['password'];
$name=$_POST['name'];
$realname=$_POST['realname'];
$number=$_POST['id'];
$phone=$_POST['phone'];
if(preg_match('/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@#$%^&-]).*$/s',$password)){
$conn=mysqli_connect('192.168.21.100','root','123456','homework');
$sql="insert into login(`user`,`password`,`name`,`realname`,`number`,`phone`) values('$user','$password','$name','$realname','$number','$phone')";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('注册成功');window.location='/6.22/login.html';</script>";
}else{
	echo "<script>alert('注册失败用户名重复');window.location='/6.22/zc.html';</script>";
}

mysqli_close($conn);
}else{
	echo "<script>alert('弱密码');window.location='/6.22/zc.html';</script>";
}

?>