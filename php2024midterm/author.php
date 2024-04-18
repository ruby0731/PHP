<?php
session_start();
$url = "showrpaper.php"; 
?>

<html>
<head>
<meta charset = "utf8">
<title>Author登入介面</title>
</head>
<body>
<center> <b> <font size = "8"> <font color = "black">  Author您好，歡迎進入論文評論網頁 </font> </font> </b></center> 
<form method="GET" action="showpaper.php">
論文標題：<br/><input type = "text" name = "sTitle" placeholder = "請輸入您的論文標題"><br/>
作者姓名：<input type = "text" name = "sAuthorname" placeholder = "請輸入您的姓名"><br/>
作者Email：<input type = "text" name = "sEmail" placeholder = "請輸入您的Email"><br/>
論文摘要：
<textarea name = "sPrimecomment" value = "" rows = "10" cols = "10"> 
</textarea><!rows調整框格長度 cols調整框格寬度!>
<br/> 
<input type = "submit">
<meta http-equiv="refresh";url=<?php echo $url; ?>">  
</body>
</html>
