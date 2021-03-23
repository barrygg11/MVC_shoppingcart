<?php
    session_start();
    $database_name = "cart";
    $con = mysqli_connect("localhost","root","Zx11111!",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id' => $_GET["id"],
                    'product' => $_POST["product"],
                    'price' => $_POST["price"],
                    'count' => $_POST["count"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="shoplist.php"</script>';
            }else{
                echo '<script>alert("已經在購物車內")</script>';
                echo '<script>window.location="shoplist.php"</script>';
            }
        }else{
            $item_array = array(
                'id' => $_GET["id"],
                'product' => $_POST["product"],
                'price' => $_POST["price"],
                'count' => $_POST["count"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("商品已刪除")</script>';
                    echo '<script>window.location="shoplist.php"</script>';
                }
            }
        }
    }
?>