<?php
session_start();
?>
<meta charset = "utf8">

<?php
$tName = "chair";
$tPassword = "123";

$wName = "reviewer";
$wPassword = "234";

$qName = "author";
$qPassword = "345";

$sName = $_GET["sName"];
$sPassword = $_GET["sPassword"];


echo $sName."<br/>".$sPassword."<br/>";

if($tName == $sName && $tPassword == $sPassword){
    //echo "登入成功";
    $_SESSION["check"] = "Yes";
    setcookie("sName",$sName, time() + 60*60*24*7);
    setcookie("sPassword",$sPassword, time() + 60*60*24*7); 
    header("Location:chair.php");
}else if($wName == $sName && $wPassword == $sPassword){
    //echo "登入成功";
    $_SESSION["check"] = "Yes";
    setcookie("sName",$sName, time() + 60*60*24*7);
    setcookie("sPassword",$sPassword, time() + 60*60*24*7); 
    header("Location:reviewer.php");
}else if($qName == $sName && $qPassword == $sPassword){
    //echo "登入成功";
    $_SESSION["check"] = "Yes";
    setcookie("sName",$sName, time() + 60*60*24*7);
    setcookie("sPassword",$sPassword, time() + 60*60*24*7); 
    header("Location:author.php");
}else{
     //echo "登入失敗";
     $_SESSION["ckeck"] = "No";
     header("Location:fail.php");
}
ob_flush(); //暫存
// echo $sName."".$sPassword;

?>
