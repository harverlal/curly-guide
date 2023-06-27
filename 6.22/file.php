<?php
$file=$_FILES['file'];
$path=dirname(__FILE__)."\\"."upload";
echo move_uploaded_file($file['tmp_name'],$path."\\".$file['name']);
echo  "<script>alert('上传成功');window.location='upload/wb.php';</script>"；
?>
