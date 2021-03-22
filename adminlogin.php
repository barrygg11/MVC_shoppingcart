<title>管理員登入畫面</title>
<?php
date_default_timezone_set('Asia/Taipei');
$DateAndTime = date('Y-m-d h:i:s a', time());  
echo "目前時間 $DateAndTime.";
?>
<p>-----當前是管理員模式-----</p>
>切換<a href="userlogin.php">使用者</a>
<html>
<body>
<form name="login" action="adminlogincontroller.php" method="post">
<p>使用者 : <input type=text name="name"></p>
<p>密碼 : <input type=password name="password"></p>
<input type="submit" name="submit" value="登入">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" value="清除">
</body>
</html>