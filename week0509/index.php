<meta charset = 'utf8'>

<?php

//連接資料庫
$link = @mysqli_connect(  //@表示不顯示錯誤訊息
    'localhost',  //MySQL主機名稱 
    'root',       //使用者名稱 
    '',           //密碼
    'school'      //預設使用的資料庫名稱
);      

if (!$link)
    die("無法開啟資料庫!<br/>");
else
    echo "資料庫:開啟成功!<br/>";    

//SQL語法
$SQL = "SELECT * FROM student";    //*表示選取所有資料

//送出查詢
$result = mysqli_query($link,$SQL);    //link表示開啟的資料庫連結(school),sql表示SQL指令字串


//結果轉陣列轉表格
echo "<table border='1'>";
while($row = mysqli_fetch_assoc($result)){  
    echo "<tr>";
        echo "<td>".$row["no"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["studentID"]."</td>";
        echo "<td>".$row["height"]."</td>";
        echo "<td><a href='del.php?No=".$row["No"]."'>刪除</a></td>";
        echo "<td><a href='update.php?No=".$row["No"]."'>修改</a></td>";
        //參數前面要加?
    echo "</tr>";
}
echo "</table>";

mysqli_close($link);    //關閉MySQL資料庫連接和釋放資料庫連接資源佔用的記憶體空間
?>
