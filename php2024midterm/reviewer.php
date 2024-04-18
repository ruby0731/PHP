<?php
session_start();
$url = "showreview.php"; 
?>
<html>
<head>
<meta charset = "utf8">
<title>Reviewer登入介面</title>
</head>
<body>
<center> <b> <font size = "8"> <font color = "black">  Reviewer您好，歡迎進入論文評論網頁 </font> </font> </b></center> 
<form method="GET" action="showreview.php">
論文評論決定：
<input type = "radio" name = "sComment" value = "Accept">Accept
<input type = "radio" name = "sComment" value = "Minor">Minor Revision
<input type = "radio" name = "sComment" value = "Major">Major Revision
<input type = "radio" name = "sComment" value = "Reject">Reject
<br/> 
請輸入您的意見及反饋：
<textarea name = "sFeedback" value = "" rows = "10" cols = "10"> 
</textarea><!rows調整框格長度 cols調整框格寬度!>
<br/> 
<input type = "submit">
<meta http-equiv="refresh";url=<?php echo $url; ?>">   
</body>

</html>
