<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>管理员页面</title>
    <style>
      /* Use a custom font from Google Fonts */
      @import url("https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap");
      /* Use a light gray as the background */
      body {
        margin: 0;
        padding: 0;
        font-family: "Noto Sans JP", sans-serif;
        background-color: #8abcd1;
      }
      /* Use a darker gray for the header */
      header {
        background-color: #333333;
        color: white;
        padding: 20px;
      }
      /* Use flexbox to align the nav items */
      nav {
        background-color: white;
        border-bottom: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
      }
      nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
      }
      /* Use black for the nav links */
      nav ul li a {
        margin-left: 20px;
        font-size: 18px;
        color: black;
        text-decoration: none;
      }
      /* Center the main content and add some margin */
      main {
        max-width: 800px;
        margin: 40px auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      /* Add some spacing and border to the news items */
      .news-item {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #ddd;
      }
      /* Use red for the buttons */
      .button {
        background-color: red;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>用户管理页面</h1>
    </header>
    <nav>
      <ul>
        <li><a href="http://127.0.0.1/6.22/index.html">返回上一级</a></li>
        <li><a href="http://127.0.0.1/6.22/index.html">退出</a></li>
        <li><a href="http://127.0.0.1/6.22/admin.html">管理</a></li>
        <li><a href="http://127.0.0.1/6.22/updown.html">上传下载</a></li>
		 <li><a href="http://127.0.0.1/6.22/zc.html">退出</a></li>
		   <li><a href="http://127.0.0.1/6.22/login.html">注销</a></li>
      </ul>
      <div class="user-info">欢迎回来</div>
    </nav>
    <main>
      <h2>用户管理</h2>
	  <div>基本信息</div>
	<?php
// 启用 Session
session_start();

// 从 Session 中获取参数的值
$user = $_SESSION['user'];
      $conn = mysqli_connect('192.168.21.100', 'root', '123456', 'homework');
      $sql1 = "SELECT * FROM login WHERE user='" . $user . "';";
      $results = mysqli_query($conn, $sql1);
	  echo "<table>";
      while ($row = mysqli_fetch_assoc($results)) {
		  
          echo "<tr><td>用户名称:".'</td><td>'.$row['user']."<td></tr>";
		  echo "<tr><td>密码:".'</td><td>'.$row['password']."<td></tr>";
		  echo "<tr><td>昵称:".'</td><td>'.$row['name']."<td></tr>";
		  echo "<tr><td>真实姓名:".'</td><td>'.$row['realname']."<td></tr>";
		  echo "<tr><td>身份证号:".'</td><td>'.$row['number']."<td></tr>";
		   echo "<tr><td>电话:".'</td><td>'.$row['phone']."<td></tr>";
		  
      }
	  echo "</table>";
       ?>
    <button onclick="window.location.href='http://127.0.0.1/6.22/uu.html'" type="button" id="add">修改昵称</button>
	<button onclick="window.location.href='http://127.0.0.1/6.22/up.html'" type="button" id="add">修改密码</button>
    </main>
  </body>
</html>