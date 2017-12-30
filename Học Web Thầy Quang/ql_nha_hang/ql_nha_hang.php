<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Danh sách loại món ăn</title>
    </head>
    <?php
    // khai báo biến trong pdo
    $pdo = new PDO("mysql:host=localhost;dbname=ql_nha_hang", "root", "");// chú ý localhost:8080 không phải
    //set font
    $pdo->query("set name utf8");
    // xây dựng câu lệnh sql
    $sql = "select ma_loai,ten_loai,mo_ta from loai_mon_an";
    $loai_mon = $pdo->query($sql);// gọi phương thức query truyền bien sql
    //echo $loai_mon->rowCount();
    ?>
    <body>
        <?php
        if ($loai_mon->rowCount() > 0) {
            ?>
            <table width="500" border="0" cellspacing="5" cellpadding="5" align="center">
                <caption>
                    <h2>Thông tin loại món ăn</h2>
                </caption>
                <tr>
                    <td>Mã Loại</td>
                    <td>Tên loại</td>
                    <td>Mô Tả</td>
                </tr>
                <?php
                foreach ($loai_mon as $loai) {
                    //print_r($loai)
             
                    ?>
                    <tr>
                        <td><?php echo "$loai[0]"?></td>
                        <td><?php echo $loai["ten_loai"]    ?></td>
                        <td><?php echo $loai["mo_ta"]    ?></td>
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
