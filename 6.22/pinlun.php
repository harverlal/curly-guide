 <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>新闻评论页面</title>
    <link rel="stylesheet" href="/6.22/评论.css">
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
		<li><a href="http://127.0.0.1/6.22/exit.php">退出</a></li>
      </ul>
      <div class="user-info">欢迎，用户</div>
    </nav>
    <div class="container">
        <h1>新闻评论页面</h1>
        <div class="news">
    <?php
		$id=$_GET['a'];
      $conn = mysqli_connect('192.168.21.100', 'root', '123456', 'homework');
      $sql1 = "select * from news where id = '$id';";
      $results = mysqli_query($conn, $sql1);
      while ($row = mysqli_fetch_assoc($results)) {
          echo "<div class='news-item'><h3>" . $row['title'] . "</h3>" . "<p>" . $row['content'] . '</p>' ;
      }
       ?>
        </div>
        <div class="comments">
            <h3>评论区</h3>
            <ul>
                <?php
				$id=$_GET['a'];
				$conn = mysqli_connect('192.168.21.100', 'root', '123456', 'homework');
			  $sql1 = "select * from pl where id='$id';";
			  $results = mysqli_query($conn, $sql1);
			  while ($row = mysqli_fetch_assoc($results)) {
				  echo "<li>";
				  echo " <div class='content'>";
				  echo "<div >".$row['user']."</div>";
				  echo "<div >".$row['pl']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['time']."</div>";;
				  echo "</div>";
				  echo "<br>";
				  echo "</li>";
			  }
				?>
            </ul>
        </div>
		<?php
		$id=$_GET['a'];
		echo "<form action='/6.22/tj.php' method='post'>";
		  echo  "<input type='text' style='display: none;' name='id' value=".$id.">";
		 echo "<input type='text' name='pl'/>";
		  echo "<button>提交</button>";
		echo "</form>";
		?>
    </div>
</body>
</html>