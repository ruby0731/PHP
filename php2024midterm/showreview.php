<html>
<?php
session_start();

?>

<head>
<meta charset = "utf8">
<title>高大資管論文評論後台</title>
</head>
<h1><font size = "5"> <font color = "black"> 高大資管論文評論後台資料 </font> </font></h1>
<?php
$sComment =$_GET["sComment"];
echo "評論：".$sComment."<br/>";
$sFeedback = $_GET["sFeedback"];
echo "意見與回饋：".$sFeedback."<br/>";

?>
</html>
