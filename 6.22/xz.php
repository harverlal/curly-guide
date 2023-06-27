<?php
$e=$_GET['d'];
//echo $e;
//echo '<br>';
$m=substr($e,5,2);
$d=substr($e,8,2);
//echo $m.'  '.$d;


if($m==1){
	if($d>=21){
		echo '您的星座是水瓶座';
	}
	else{
		echo '您的星座是摩羯座';
	}
}
if($m==2){
	if($d>=20){
		echo '您的星座是双鱼座';
	}
	else{
		echo '您的星座是水瓶座';
	}
}
if($m==3){
	if($d>=21){
		echo '您的星座是白羊座';
	}
	else{
		echo '您的星座是双鱼座';
	}
}
if($m==4){
	if($d>=21){
		echo '您的星座是金牛座';
	}
	else{
		echo '您的星座是白羊座';
	}
}
if($m==5){
	if($d>=22){
		echo '您的星座是双子座';
	}
	else{
		echo '您的星座是金牛座';
	}
}
if($m==6){
	if($d>=22){
		echo '您的星座是巨蟹座';
	}
	else{
		echo '您的星座是双子座';
	}
}
if($m==7){
	if($d>=23){
		echo '您的星座是狮子座';
	}
	else{
		echo '您的星座是巨蟹座';
	}
}
if($m==8){
	if($d>=24){
		echo '您的星座是处女座';
	}
	else{
		echo '您的星座是狮子座';
	}
}
if($m==9){
	if($d>=24){
		echo '您的星座是天枰座';
	}
	else{
		echo '您的星座是处女座';
	}
}
if($m==10){
	if($d>=24){
		echo '您的星座是天蝎座';
	}
	else{
		echo '您的星座是天枰座';
	}
}
if($m==11){
	if($d>=23){
		echo '您的星座是射手座';
	}
	else{
		echo '您的星座是天蝎座';
	}
}
if($m==12){
	if($d>=22){
		echo '您的星座是摩羯座';
	}
	else{
		echo '您的星座是射手座';
	}
}
?>
