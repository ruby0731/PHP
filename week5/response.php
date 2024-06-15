<html>
<meta charset="utf8">
<?php

$sName = $_GET["sName"];
echo "姓名：".$sName."<br/>";
$sDepartment =$_GET["sDepartment"];
echo "科系：".$sDepartment."<br/>";
$sLevel = $_GET["sLevel"];
echo "年級：".$sLevel."<br/>";
$sGender = $_GET["sGender"];
echo "性別：".$sGender."<br/>";
$sApply = $_GET["sApply"];
echo "是否報名：".$sApply."<br/>";
$sGroup = $_GET["sGroup"];
echo "是否團報：".$sGroup."<br/>";
$sNumber = $_GET["sNumber"];
echo "團報人數：".$sNumber."<br/>";
$sActivity = $_GET["sActivity"];
echo "有興趣活動：";
foreach($sActivity as $value){
    echo $value." ";
}

?>
</html>
