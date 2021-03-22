<title>使用者登入</title>
<?php
date_default_timezone_set('Asia/Taipei');
$DateAndTime = date('Y-m-d h:i:s a', time());  
echo "目前時間 $DateAndTime.";
?>
<p>-----當前是使用者模式-----</p>
>切換<a href="adminlogin.php">管理員</a>
<html>
<body>
<form name="login" action="userlogincontroller.php" method="post">
<p>使用者 : <input type=text placeholder="user" name="name"></p>
<p>密碼 : <input type=password placeholder="11111" name="password"></p>
<input type="submit" name="submit" value="登入">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Reset" value="清除">
</body>
</html>