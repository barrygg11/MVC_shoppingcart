<!DOCTYPE html>
<html>
    <head>
    <title>首頁</title>
    <meta charset= "UTF-8">
    </head>
<body>
<a href="adminlogin.php">管理員新增商品</a><p>
<style type="text/css">
body{
 font-family:"微軟正黑體";
}
td input{
 font-family:"微軟正黑體";
 width:100%;
}
table {
 margin: 0px;
 padding: 0px;
 background-color:#999999;
 font-size:0.85em;
 font-family:"微軟正黑體";
}
td {
 background-color:#FFF;
 text-align: center;
 margin: 0px;
 padding: 3px;
}
</style>
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
<input type="submit" name="submit" value="搜尋商品"><p>
<a href="shoplist.php">購物車</a><p>
</form>
</body>
</html>