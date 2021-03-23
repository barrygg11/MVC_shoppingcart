<!DOCTYPE html>
<html>
<head>
<title>新增商品</title>
<meta charset="utf-8">
</head>
<body>
<a href="indexedit.php">編輯商品列表</a>
<a href="shoplist.php">購物車</a>
<a href="userlogin.php">切換使用者</a><p>
<form name="addproduct" action="addproductcontroller.php" method="post">
商品：<input type="text" name="product" placeholder="商品名稱" value=""><br>
單價：<input type="text" name="price" placeholder="價錢" value="">元<br>
數量：<input type="text" name="count" placeholder="" value="1">個<br>
總計：<input type="text" name="amount" placeholder="總價" value="">元<br>
<p><input type="submit" name="submit" value="送出">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="Reset" value="清除">
</form>
</body>
</html>