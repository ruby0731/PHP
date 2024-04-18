<?php

session_start();
$_SESSION["ckeck"] = "No";
setcookie ( "name", "", time () -100 );
header("Location:index.php");

?>
