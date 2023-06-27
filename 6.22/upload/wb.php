<?php
if(isset($_GET['a'])){
	$path=$_GET['a'];
}else{
	$path=dirname(__FILE__);
}
	
	$b=scandir($path);
	foreach($b as $key => $value){
		if(filetype($path."\\".$value) == 'dir'){
			$c=$path.'\\'.$value;
		echo "<a href='http://127.0.0.1/wb.php?a=".$c."'>".$value."\\</a>".'<br>';
		}else{
			$c=$path.'\\'.$value;
	
		     echo "<a href='http://127.0.0.1/wj.php?a=".$c."'>".$value."</a>"."<a href='http://127.0.0.1/del.php?a=".$c."'>"."<button>删除</button>"."</a>".'<br>';
		}
	}
?>