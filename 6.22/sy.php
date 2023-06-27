
<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'/>
    <title>新闻网站</title>
    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
      }
      header {
        background-color: #3a7bd5;
        color: white;
        padding: 20px;
      }
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
        display: flex;
      }
      nav ul li {
        margin-left: 20px;
        font-size: 18px;
      }
      nav ul li a {
        text-decoration: none;
        color: #333;
      }
      nav ul li a:hover {
        color: #3a7bd5;
      }
      main {
        padding: 20px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-gap: 20px;
      }
      .news-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
      }
      .news-card {
        background-color: white;
        border: 1px solid #ddd;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        padding: 10px;
      }
      .news-card h3 {
        margin-top: 0;
      }
      .news-card p {
        margin-bottom: 0;
      }
      .news-card img {
        width: 100%;
        height: auto;
      }
      .sidebar {
        background-color: white;
        border: 1px solid #ddd;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>新闻网站</h1>
    </header>
     <nav>
      <ul>
        <li><a href="http://127.0.0.1/6.22/sy.php">主页</a></li>
        <li><a href="http://127.0.0.1/6.22/login.html">登录</a></li>
        <li><a href="http://127.0.0.1/6.22/zc.html">注册</a></li>
        <li><a href="http://127.0.0.1/6.22/admin.php">管理</a></li>
        <li><a href="http://127.0.0.1/6.22/updown.html">上传下载</a></li>
      </ul>
      <div class="user-info">欢迎，用户</div>
    </nav>
    <main>
      <div class="news-list">
         <div class="news-card">
          <img src="https://picsum.photos/300/200" alt="News image">
			<?php
		  $conn=mysqli_connect('192.168.16.56','root','1','aaa');
		  $sql1 = "select * from xinwen;";
		  $results = mysqli_query($conn, $sql1);
		  while ($row = mysqli_fetch_assoc($results)) {
             echo '<h3>'.$row['title'].'</h3>';
          }
			?>
         </div>
         <div class="news-card">
          <img src="https://picsum.photos/300/200" alt="News image">
          <?php
		  $conn=mysqli_connect('192.168.16.56','root','1','aaa');
		  $sql1 = "select * from xinwen2;";
		  $results = mysqli_query($conn, $sql1);
		  while ($row = mysqli_fetch_assoc($results)) {
             echo '<h3>'.$row['title'].'</h3>';
          }
			?>
         </div>
         <div class="news-card">
          <img src="https://picsum.photos/300/200" alt="News image">
        <?php
		  $conn=mysqli_connect('192.168.16.56','root','1','aaa');
		  $sql1 = "select * from xinwen3;";
		  $results = mysqli_query($conn, $sql1);
		  while ($row = mysqli_fetch_assoc($results)) {
             echo '<h3>'.$row['title'].'</h3>';
          }
			?>
         </div>
         <div class="news-card">
          <img src="https://picsum.photos/300/200" alt="News image">
        <?php
		  $conn=mysqli_connect('192.168.16.56','root','1','aaa');
		  $sql1 = "select * from xinwen4;";
		  $results = mysqli_query($conn, $sql1);
		  while ($row = mysqli_fetch_assoc($results)) {
             echo '<h3>'.$row['title'].'</h3>';
          }
			?>
         </div>
      </div>
      <div class="sidebar">
        <h3>热门新闻</h3>
        <ul>
          <li><a href="#">热门新闻标题一</a></li>
          <li><a href="#">热门新闻标题二</a></li>
          <li><a href="#">热门新闻标题三</a></li>
          <li><a href="#">热门新闻标题四</a></li>
          <li><a href="#">热门新闻标题五</a></li>
        </ul>
      </div>
    </main>
  </body>
</html>        