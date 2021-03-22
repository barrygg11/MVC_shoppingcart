<html>
    <head>
        <meta charset= "UTF-8">
        <title>購物車</title>
    </head>
  <body>
商品列表：
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
</body>
</html>