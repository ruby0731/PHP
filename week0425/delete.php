<?php

$sNo = $_GET["No"];
echo $sNo;

//連接資料庫
$link = @mysqli_connect(
    'localhost', //MySQL主機名稱
    'root',      //使用者名稱
    '', //密碼
    'test_php'); //預設使用的資料庫名稱

//SQL語法
$SQL="DELECT FROM test WHERE NO = '$sNo'";

//送出查詢
if($result = mtsqli_query($link, $SQL)){
    echo "<br/>刪除成功";
}
echo "<br/><a herf = '0425_index.php'>查看資料庫資料</a>";

?>
