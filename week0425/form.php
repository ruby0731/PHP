<html>
<head>
<meta charset = "utf8">
<title>資管晚會報名表單</title>
</head>

<body background = "background1.jpg">
<form action = "response.php" method = "get">
<center> <b> <font size = "8"> <font color = "black">  資管晚會報名表單 </font> </font> </b></center> 
姓名：<input type = "text" name = "sName" placeholder = "Please input your name"><br/>
科系：<input type = "text" name = "sDepartment" placeholder = "Please input your department"><br/>

年級：
<input type = "checkbox" name = "sLevel" value = "Freshman year">大一
<input type = "checkbox" name = "sLevel" value = "Sophomore year">大二
<input type = "checkbox" name = "sLevel" value = "Junior year">大三
<input type = "checkbox" name = "sLevel" value = "Senior year">大四
<br/>

性別：
<input type = "radio" name = "sGender" value = "man">男
<input type = "radio" name = "sGender" value = "woman">女
<br/>

是否報名：
<input type = "radio" name = "sApply" value = "Y">是
<input type = "radio" name = "sApply" value = "N">否
<br/>

是否團報：
<input type = "radio" name = "sGroup" value = "yes">是
<input type = "radio" name = "sGroup" value = "no">否
<br/>

選擇團報人數：
<input type = "radio" name = "sNumber" value = "three">3人
<input type = "radio" name = "sNumber" value = "four">4人
<input type = "radio" name = "sNumber" value = "five">5人
<br/> 

請選擇有興趣的小活動：
<select name = "sActivity[]" multiple><!終端多選要按著ctrl!>
<option value = "Activity1">你畫我猜
<option value = "Activity2">比手畫腳
<option value = "Activity3">球不落地
<option value = "Activity4">跳跳temple
<option value = "Activity5">矇眼心臟病
</select>
<br/>
<input type = "submit" value = "提交">
</body>
  <?php
        if(isset($_SESSION["check"])) {
            if($_SESSION["check"] == "No") {
                header("Location: fail.php");
            }
        } else {
            header("Location: fail.php");
        }
    ?>
</html>
