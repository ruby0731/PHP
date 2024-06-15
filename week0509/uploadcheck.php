<meta charest = 'utf8'>

<?php

echo "檔案名稱：".$FILES["myFile"]["name"]."<br/>";
echo "暫存檔名：".$FILES["myFile"]["tmp_name"]."<br/>";
echo "檔案尺寸：".$FILES["myFile"]["size"]."<br/>";
echo "檔案種類：".$FILES["myFile"]["type"]."<br/>";

echo $ext = pathinfo($FILES["myFile"]["name"].PATHINFO_EXTENSION);

if(copy($FILE["myFile"]["tmp_name"],"test.jpg")){
    echo "檔案上傳成功";
    unlink($FILES["myFile"]["tmp_name"]);
}

?>
