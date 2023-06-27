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
        background-color: #f0f0f0;
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
      <h1>管理员页面</h1>
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
    <main>
      <h2>管理新闻</h2>
      <?php
      $conn = mysqli_connect('192.168.16.56', 'root', '1', 'aaa');
      $sql1 = "select * from xinwen;";
      $results = mysqli_query($conn, $sql1);
      while ($row = mysqli_fetch_assoc($results)) {
          echo "<div class='news-item'><h3>" . $row['title'] . "</h3>" . "<p>" . $row['nr'] . '</p>' ."<a href='http://127.0.0.1/6.22/xinwen.html'>编辑</a>" . " <a href='#'>删除</a>". " <a href='http://127.0.0.1/6.22/评论.php?a=1'>评论</a>";
      }
       ?>
    </main>
  </body>
</html>