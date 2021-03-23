<!DOCTYPE html>
<html>
    <head>
    <title>首頁</title>
    <meta charset= "UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
<body>
<h4><a href="adminlogin.php">管理員新增商品</a></h4><p>
<h2>商品列表：</h2>
<?php
session_start();
  include "model.php";
$sql = "select * from list";
$result = mysqli_query($db, $sql);
  echo '<table class="table table-bordered table-striped">';
  echo "<thead>";
  echo "<tr>";
  echo "<th>商品</th>";
  echo "<th>單價</th>";
  echo "<th>數量</th>";
  echo "<th>總計</th>";
  echo "<td>" . "總共有 " . mysqli_num_rows($result) . " 筆商品" . "</td>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
	echo "<td>" . $row['product'] . "</td>";
	echo "<td>" . $row['price'] . "元" . "</td>";
	echo "<td>" . $row['count'] . "個" . "</td>";
  echo "<td>" . $row['amount'] . "元" . "</td>";
  echo "</tr>";
} 
?>

</table>

<p><form name="search" action="search.php" method="post">
<input type="submit" name="submit" value="搜尋商品"><p><p>
<p><h4><a href="shoplist.php">購物車</a></h4><p>
</form>
</body>
</html>