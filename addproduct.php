<html>
<head>
<title>新增商品</title>
</head>
<body>
<meta charset="utf-8">
<a href="index.php">商品列表</a>
<form name="addproduct" action="addproductcontroller.php" method="post">
商品：<input type="text" name="product" placeholder="EX 水" value=""><br>
單價：<input type="text" name="price" placeholder="EX 10" value="">元<br>
數量：<input type="text" name="count" placeholder="EX 1" value="">個<br>
總計：<input type="text" name="amount" placeholder="EX 10" value="">元<br>
<p><input type="submit" name="submit" value="送出">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="Reset" value="清除">
</body>
</form>
</html>