<?php
$localhost = "localhost";
$username = "root";
$password = "Zx11111!";
$dbname = "cart";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM list";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM list WHERE product ='$name'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>搜尋商品</title>
<h1><a href="adminlogin.php">管理員新增商品</a></h1><p>
<h1><a href="index.php">商品列表</a></h1><p>
<h1><a href="shoplist.php">購物車</a></h1><p>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
<label>搜尋</label>
<form action="" method="GET">
<input type="text" placeholder="輸入商品" name="search">&nbsp;
<input type="submit" value="搜尋" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>商品列表</h2>
    <table class="table table-striped table-responsive">
    <tr>
    <th>商品</th>
    <th>單價</th>
    <th>數量</th>
    <th>總計</th>
    </tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['product']; ?></td>
    <td><?php echo $row['price'] . "元"; ?></td>
    <td><?php echo $row['count'] . "個"; ?></td>
    <td><?php echo $row['amount'] . "元"; ?></td>

    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>