<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>BT</title>
    </head>
    <body>
        <table align="center" width="400px" border="1px" cellspacing="0" cellpading="3">
            <tr>
                <th>STT</th>
                <th>Nội dung</th>
                <th>Hình ảnh</th>
                <th>Thao tác</th>
            </tr>
            <?php $n = 6; ?>
            <?php
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 == 0)
                    echo"<tr bgcolor='#669933'>";
                else
                    echo "<tr > ";
                ?>
                <td><center><?php echo $i; ?></center></td>
            <td>&nbsp;<u>Iphone</u> 7 </td>
            <td><center><IMG SRC=iP7.jpg style="width :30px ; height:40px"></center></td>
        <td><center><u><i><b>Xem chi tiết</b></i></u></center></td>
    </tr>
<?php } ?>
</table>
</body>
</html>
