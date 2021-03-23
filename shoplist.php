<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>購物車</title>
</head>
<body>
<a href="adminlogin.php">管理員新增商品</a><p>
        <h2>購物車</h2>
        <?php
            require_once('shoplistcontroller.php');
            $query = "SELECT * FROM list ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="shoplistcontroller.php?action=add&id=<?php echo $row["id"]; ?>">
                                <h5>商品： <?php echo $row["product"]; ?></h5>
                                <h5>$<?php echo $row["price"]; ?>元</h5>
                                <input type="text" name="count" class="form-control" placeholder="請輸入數量">
                                <input type="hidden" name="product" value="<?php echo $row["product"]; ?>">
                                <input type="hidden" name="price" value="<?php echo $row["price"]; ?>"><p>
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="新增購物車">
                        </form>
                    <?php
                }
            }
        ?>

<h3 class="title2">顯示已購物的商品</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th>商品</th>
                <th>單價</th>
                <th>數量</th>
                <th>總計</th>
                <th>操作</th>
            </tr>
            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["product"]; ?></td>
                            <td><?php echo $value["price"]; ?></td>
                            <td><?php echo $value["count"]; ?></td>
                            <td> $ <?php echo number_format($value["price"] * $value["count"]); ?></td>
                            <td><a href="shoplist.php?action=delete&id=<?php echo $value["id"]; ?>"><span
                                        class="text-danger">刪除</span></a></td>
                                        </tr>
                        <?php
                        $total = $total + ($value["price"] * $value["count"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">總金額</td>
                            <th align="right">$ <?php echo number_format($total ); ?> 元</th>
                            <td></td>
                        </tr>
                        <?php
}
?>
            </table>
        </div>
    </div>
</body>
</html>