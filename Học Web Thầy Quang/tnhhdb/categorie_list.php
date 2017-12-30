<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Danh sách Categories</title>
    </head>
    <?php
    // khai báo biến trong pdo
    $pdo = new PDO("mysql:host=localhost;dbname=tnhhdb", "root", "");// chú ý localhost:8080 không phải
    //set font
    $pdo->query("set name utf8");
    // xây dựng câu lệnh sql
    $sql = "select categorieID,name,picture from categories";
    $cate = $pdo->query($sql);// gọi phương thức query truyền bien sql
    //echo $cate->rowCount();
    ?>
    <body>
        <?php
        if ($cate->rowCount()> 0) {
            ?>
            <table width="500" border="0" cellspacing="5" cellpadding="5" align="center">
                <caption>
                    <h2>Thông tin Categories</h2>
                </caption>
                <tr>
                    
                    <td>categorieID</td>
                    <td>name</td>
                    <td>hinh anh</td>
                </tr>
                <?php
                foreach ($cate as $loai) {
                    //print_r($loai)
             
                    ?>
                    <tr>
                     
                        <td><?php echo $loai["categorieID"]    ?></td>
                        <td><?php echo $loai["name"]    ?></td>
                        <td><?php echo $loai["picture"]    ?></td>
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
