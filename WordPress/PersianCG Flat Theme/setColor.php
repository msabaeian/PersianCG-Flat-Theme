<?php
if(isset($_GET['color'])){
$color = $_GET['color'];

if($color == 'blue'){
	setcookie("color", "blue",time()+60*60*24*30,'/');
}

if($color == 'gold'){	
	setcookie("color", "gold",time()+60*60*24*30,'/'); 
}
	
if($color == 'green'){
	setcookie("color", "green",time()+60*60*24*30,'/');
}

if($color == 'red'){	
	setcookie("color", "red",time()+60*60*24*30,'/');
}

echo '<!doctype html><html><head><meta charset="utf-8"><title>تغیر رنگ با موفقیت انجام شد</title><style>
.ok{
	width:500px;
	height:100px;
	margin:0 auto;
	margin-top:22%;
	background:#95a5a6;
	color:#fff;
	line-height:100px;
	text-align:center;
}
</style>
<meta http-equiv="refresh" content="5; URL=http://www.persiancg.ir/" />
<head>
<body bgcolor="#ecf0f1">
<div class="ok">
<h5>انتخاب رنگ با موفقیت انجام شد. طی 5 ثانیه به صفحه اصلی باز خواهید گشت</h5>
</div>
</body>
</html>';

}

if(!isset($_GET['color'])){
	echo'<!doctype html><html><head><meta charset="utf-8"><title>خطا</title></head><body dir="rtl"><h1>دسترسی مجاز نیست</h1></body></html>';		
}
?>