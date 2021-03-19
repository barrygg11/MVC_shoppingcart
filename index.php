<html>
    <head>
        <meta charset= "UTF-8">
        <title>商品列表</title>
    </head>
    <body>
        商品列表：
        <div class = "Product">
        <table border = "1">
            <tr>
            <td>商品序號</td>
            <td>商品名稱</td>
            <td>商品價錢</td>
            </tr>
            <tr>
            <td>1</td>
            <td>水</td>
            <td>10</td>
            </tr>
            <tr>
            <td>2</td>
            <td>可樂</td>
            <td>15</td>
            </tr>
            <tr>
            <td>3</td>
            <td>果汁</td>
            <td>20</td>
            </tr>
            <tr>
            <td>4</td>
            <td>啤酒</td>
            <td>30</td>
            </tr>
        </table> <p><p>
<select>
    <option>飲料</option>
    <option>水</option>
    <option>可樂</option>
    <option>果汁</option>
    <option>啤酒</option>
</select>
<select>
    <option>金額</option>
    <option>10</option>
    <option>15</option>
    <option>25</option>
    <option>30</option>
    <option>40</option>
</select>
<input type="button" value="加入購物車" name="button"><p>
</body>
</html>



<?php
$a="10"; $b="15"; $c="20"; $d="30";
echo '總金額',($a + $b + $c +$d),'元';

