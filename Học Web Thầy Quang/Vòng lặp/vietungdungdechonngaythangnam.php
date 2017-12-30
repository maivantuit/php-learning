<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel=”stylesheet” type=”text/css” href=”CSSngaythangnam.css” />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="0">
            <tr>
                <td>Ngày:
                    <select name="ngay" id="ngay">
                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
                <td>thang:
                    <select name="thang" id="thang">
                        <?php $i = 1;
                        while ($i <= 12) {
                            ?>
                            <option value="<?php echo $i; ?>"
                        <?php echo $i; ?>
                        </option>
                        <?php $i++;
                    }
                    ?>
                </select>
            </td>
            <td>Năm:
                <select name="nam" id="nam">
                        <?php $i = 1900;
                        do {
                            ?>
                        <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                        </option>
    <?php
    $i++;
} while ($i <= 2016);
?>
                </select>
            </td>
            <td></td>
        </tr>
    </table>
</body>
</html>
