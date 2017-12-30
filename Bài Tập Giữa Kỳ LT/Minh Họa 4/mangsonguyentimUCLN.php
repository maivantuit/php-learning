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
                    <td><p>Nhập mảng số nguyên</p></td>
                    <td><p><input type="text" name="day_so" value="" placeholder="Mời nhập lần lượt các số nguyên: " size="40"></p></td>

                </tr> 
                <tr>
                    <td colspan="2" align="center"> <input style="background:#CC0000"  type="submit" name="btn_submit" value="Send"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST["day_so"])) { // kiểm tra người đã nhập vào dãy số chưa
            $day_so = $_POST["day_so"];            //gán

            $mang = explode(",", $day_so); // đổi dãy gạch chuổi ra mảng = hàm explode; các phẩn tử được lấy căn cứ trên dấu phẩy
            $n = count($mang); //đếm xem mảng có bn phần tử;
            $tong = 0;  // đầu tiên cho mảng =0
            for ($i = 0; $i < $n; $i++) {
                $tong += $mang[$i];
            }
            echo "Tổng cảu mảng là:" . $tong;
        }
        ?>

    </body>
</html>
