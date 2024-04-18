<html>
<?php
session_start();
?>

<head>
<meta charset = "utf8">
<title>高大資管論文投稿後台</title>
</head>
<h1><font size = "5"> <font color = "black"> 高大資管論文投稿後台資料 </font> </font></h1>
<?php
$sTitle =$_GET["sTitle"];
echo "論文標題：".$sTitle."<br/>";
$sAuthorname =$_GET["sAuthorname"];
echo "作者姓名：".$sAuthorname."<br/>";
$sEmail = $_GET["sEmail"];
echo "作者Email：".$sEmail."<br/>";
$sPrimecomment = $_GET["sPrimecomment"];
echo "論文摘要：".$sPrimecomment."<br/>";

?>
</html>
