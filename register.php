<!DOCTYPE html>
<html>
<head>
<title>註冊使用者</title>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<p><a href="userlogin.php">登入</a></p>
<form name="register" action="registercontroller.php" method="post">
<p>使用者 : <input type=text name="name"></p>
<p>密碼 : <input type=password name="password"></p>
<input type="submit" name="submit" value="註冊">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Ｒeset" value="清除">
</form>
</body>
</html>