<?php
require_once('model.php');
header("Content-Type: text/html; charset=utf8");
if (isset($_POST['submit'])) {
	include 'model.php';
	$name = $_POST['name'];
	$password = $_POST['password'];

	if ($name && $password) {
		$sql = "select * from user where name = '$name' and password='$password'";
		$result = mysqli_query($db, $sql);
		$rows = mysqli_num_rows($result);
		if ($rows) {
			echo "<script>alert('登入成功!'); location.href = 'index.php';</script>";
			exit;
		} else {
			echo "<script>alert('使用者or密碼有問題!'); location.href = 'login.php';</script>";
		}
	} else {
		echo "<script>alert('內容不完整!'); location.href = 'login.php';</script>";
	}
	mysqli_close();
}
?>