<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Danh sách Product</title>
    </head>
    <?php
    // khai báo biến trong pdo
    $pdo = new PDO("mysql:host=localhost;dbname=tnhhdb", "root", "");// chú ý localhost:8080 không phải
    //set font
    $pdo->query("set name utf8");
    // xây dựng câu lệnh sql
    $sql = "select productID,name,price,picture,description from products";
    $prod = $pdo->query($sql);// gọi phương thức query truyền bien sql
    //echo $cate->rowCount();
    ?>
    <body>
        <?php
        if ($prod->rowCount()> 0) {
            ?>
            <table width="500" border="0" cellspacing="5" cellpadding="5" align="center">
                <caption>
                    <h2>Thông tin Categories</h2>
                </caption>
                <tr>
                    
                    <td>Product</td>
                    <td>name</td>
                    <td>hinh anh</td>
                </tr>
                <?php
                foreach ($prod as $loai) {
                    //print_r($loai)
             
                    ?>
                    <tr>
                     
                        <td><?php echo $loai["productID"]    ?></td>
                        <td><?php echo $loai["name"]    ?></td>
                        <td><?php echo $loai["price"]    ?></td>
                        <td><?php echo $loai["picture"]    ?></td>
                        <td><?php echo $loai["description"]    ?></td>
                        
                    </tr>
                    <?php
                }
                ?>

            </table>
            <?php
        }
        ?>
    </body>
</html>
