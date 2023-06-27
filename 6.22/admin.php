 </head>
   <meta charset='UTF-8'/>
 <style>
 nav ul {
  display: flex;
  list-style: none;
  justify-content: center;
  margin: 0;
  padding: 0;
}

nav li {
  margin: 0 10px;
}

nav a {
  position: relative;
  color: #333;
  text-decoration: none;
  font-size: 18px;
  transition: all 0.3s ease-in-out;
}

nav a:hover {
  color: #eee;
  transform: scale(1.1);
}

nav a:before {
  content: '';
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: #333;
  transition: all 0.3s ease-in-out;
}

nav a:hover:before {
  width: 100%;
}
	 .news {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  margin: 20px 0;
  border: 1px solid #ddd;
  padding: 20px;
}
.news-add-button {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 30px;
}

.news-add-button button {
  background-color: #FFBE00;
  color: #fff;
  font-size: 18px;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  transition: all 0.2s ease-in-out;
}

.news-add-button button:hover {
  background-color: #FFD300;
  transform: scale(1.05);
}
.news img {
  margin-right: 20px;
  max-width: 300px;
  max-height: 300px;
}

.news-content {
  flex: 1;
}

.news-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.news-text {
  font-size: 18px;
  margin-bottom: 10px;
}

.news-link {
  font-size: 16px;
  color: #0077cc;
}

.news-link:hover {
  text-decoration: underline;
}
 </style>
  <body>
    <header>
      <h1>管理员页面</h1>
    </header>
    <nav>
      <ul>
        <li><a href="http://127.0.0.1/6.22/index.html">主页</a></li>
        <li><a href="http://127.0.0.1/6.22/admin.html">管理</a></li>
        <li><a href="http://127.0.0.1/6.22/updown.html">上传下载</a></li>
      </ul>
      <div class="user-info">欢迎，用户</div>
    </nav>
    <main>
  <h2>管理新闻</h2>
  <a href='http://127.0.0.1/6.22/newsadd.html'><button>添加新闻</button></a>
  <?php
    header('Content-type: text/html; charset=utf-8');
    $conn=mysqli_connect('192.168.21.100','root','123456','homework');
    $sql1 = "select * from news;";
    $results = mysqli_query($conn, $sql1);
	mysqli_query($conn, "SET NAMES 'utf8'");
    while ($row = mysqli_fetch_assoc($results)) {
      $id=$row['id'];
      echo '<div class="news">';
      echo "<img src='IMG/".$row['img']."' width='300' height='300'>";
      echo '<div class="news-content">';
      echo '<div class="news-title">'.$row['title'].'</div>';
      echo '<div class="news-text">'.$row['content'].'</div>';
      echo '<div class="news-link">';
      echo "<a href='http://127.0.0.1/6.22/newsdel.php?a=" . $id . "'>删除</a>&nbsp";
      echo "<a href='http://127.0.0.1/6.22/newsupd.php?a=" . $id . "'>修改</a>&nbsp";
      echo "<a href='http://127.0.0.1/6.22/pinlun.php?a=". $id ."'>评论</a>";
      echo '</div>'; // end of <div class="news-link">
      echo '</div>'; // end of <div class="news-content">
      echo '</div>'; // end of <div class="news">
    }
  ?>
</main>
  </body>
</html>