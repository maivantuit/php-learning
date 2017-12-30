<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tìm tổng của 2 số</title>
    </head>
    <body>
        <form method="post" name="main-form">
            <table >

                <tr>
                    <td><p>Nhập số 1</p></td>
                    <td><p><input type="text" name="so1" value="" placeholder="Mời nhập số 1"></p></td>
                    <td><p>Nhập số 1</p></td>
                    <td><p><input type="text" name="so2" value="" placeholder="Mời nhập số 2"></p></td>
                </tr> 
                <tr>
                    <td colspan="2" align="center"> <input style="background:#CC0000"  type="submit" name="btn_submit" value="Send"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST["so1"]) && isset($_POST["so2"])) {
            $a = $_POST["so1"];
            $b = $_POST["so2"];
//            $kq=$a+$b;
//            echo "Tổng 2 số là: ".$kq;
            while ($b != $a) {
                if ($a > $b) {
                    $a = $a - $b;
                } else {
                    $b = $b - $a;
                }
            }
            echo "Ước chung lớn nhất là: ".$a;
        }
        ?>

    </body>
</html>
