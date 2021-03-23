<?php
if (isset($_POST['submit'])) {
    include "model.php";
    $product = $_POST['product'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $amount = $_POST['amount'];
    $sql = "INSERT list(product, price, count, amount) VALUES ('$product', '$price', '$count', '$amount')";
    if (!mysqli_query($db, $sql)) {
		die(mysqli_error());
	} else { 
        echo "<script>alert('新增商品成功!'); location.href = 'addproduct.php';</script>";
        exit;
            }
        }
?>