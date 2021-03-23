<?php
$db = mysqli_connect("localhost", "root", "Zx11111!", "cart") or die(mysqli_error());

if (!$db) {
    die('資料庫連結失敗!');
} else {
   echo '資料庫連結成功';
}

mysqli_query($db, "SET NAMES 'utf8'");

?>