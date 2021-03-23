<?php
header("Content-Type: text/html; charset=utf8");
if (isset($_POST['submit'])) { 
	include 'model.php';
	$name = $_POST['name'];
	$password = $_POST['password'];
	if ($name && $password) {
		$sql = "select * from user where name = '$name'";
		$result = mysqli_query($db, $sql);
		$rows = mysqli_num_rows($result);
		if (!$rows) { 
			$sql = "insert user(id, name, password) values (null, '$name', '$password')";
			mysqli_query($db, $sql);

			if (!$result) {
				die('Error: '.mysqli_error());
			} else {
				echo "<script>alert('註冊成功！'); location.href = 'userlogin.php';</script>";
			}
		} else { 
			echo "<script>alert('此使用者已被使用過！'); location.href = 'register.php';</script>";
		}
	} else {
		echo "<script>alert('請輸入完整內容！'); location.href = 'register.php';</script>";
	}
mysqli_close($db);
}
?>