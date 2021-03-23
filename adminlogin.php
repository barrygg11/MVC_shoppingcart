<?php
date_default_timezone_set('Asia/Taipei');
$DateAndTime = date('Y-m-d h:i:s a', time());  
echo "目前時間 $DateAndTime.";
?>
<p>-----當前是管理員模式-----</p>
>切換<a href="userlogin.php">使用者</a>
<!DOCTYPE html>
<html>
<head>
<title>管理員登入畫面</title>
</head>
<body>
<form name="login" action="adminlogincontroller.php" method="post">
<p>管理員 : <input type=text placeholder="請輸入帳號" name="name"></p>
<p>密碼 : <input type=password placeholder="請輸入密碼" name="password"></p>
<input type="submit" name="submit" value="登入">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" value="清除">
</form>
</body>
</html>