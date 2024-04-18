<html>
<head>
<meta charset = "utf8">
<title>高大資管論文投稿系統</title>
</head>
<body>
<center> <b> <font size = "8"> <font color = "black">  高大資管論文投稿系統 </font> </font> </b></center> 
<center>
<!-- <font size = "6"> -->
<form action = "check.php" method = "get">
請選擇您的角色：
<select name = "sPeople[]" multiple>
<option value = "Chair">Chair
<option value = "Reviewer">Reviewer
<option value = "Author">Author
</select>
<br/>
帳號：<input type = "text" name = "sName" placeholder = "Please input your account"><br/>
密碼：<input type = "password" name = "sPassword" placeholder = "Please input your password" required><br/>

<input type = "submit">
</center>
</form>
</body>
</html>
