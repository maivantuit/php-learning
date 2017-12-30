<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tìm ước số chung của mảng nguyên</title>
        
        <script src="../jquery-3.2.0.min.js" type="text/javascript"></script>

        <script>
            function kiemtra(){
                var day_so = document.getElementById("day_soID").value.length;// khai báo biến day_so
                if(day_so==0){
                    alert("Vui lòng nhập vào");
                }else if(day_so <=2){
                    alert("Bạn nhập quá ngắn hoặc không đủ giá trị");
                }else
                    alert("Bạn cần nhập các số nguyên"):
                
            }
        </script>
        
    </head>
   
    
    <body>
        <form method="post" name="main-form">
            <table >

                <tr>
                    <td><p>Nhập mảng số nguyên</p></td>
                    <td><p><input type="text" id="day_soID" name="day_so" value="" placeholder="Mời nhập lần lượt các số nguyên: " size="40"></p></td>

                </tr> 
                <tr>
                    <td colspan="2" align="center"> <input style="background:#CC0000"  type="submit" onclick="kiemtra();" name="btn_submit" value="Send"></td>
                </tr>
            </table>
        </form>
        
        <?php
       



        if (isset($_POST["day_so"])) { // kiểm tra người đã nhập vào dãy số chưa
            $day_so = $_POST["day_so"];            //gán LẤY GIÁ TRỊ
            $mang = explode(",", $day_so); // đổi dãy gạch chuổi ra mảng = hàm explode; các phẩn tử được lấy căn cứ trên dấu phẩy
            $n = count($mang); //đếm xem mảng có bn phần tử;
            // -----------------IN RA DÃY SỐ VÀ KIỂM TRA DÃY SỐ ĐÓ BẰNG AJAX, TÍNH HỢP LỆ CỦA DỮ LIỆU(EXCEPTION)
            //------------------TỒNG DÃY SỐ
//           $tong = 0;  // đầu tiên cho mảng =0
//            for ($i = 0; $i < $n; $i++) {
//                $tong += $mang[$i];
//            }
//            echo "Tổng cuả mảng là:" . $tong;
            /* ---------------------TÌM ƯỚC CHUNG LỚN NHẤT UCLN
            $ucln=0;
            for($i=0;$i<$n;$i++){
                $ucln=[$i];
                $i++;
                while ($ucln!=[$i]){
                    if($ucln>$i){
                        $ucln-=$i[$i];
                        
                    } else {
                        $i[$i]-=$ucln;
                    }
                    
                }
                echo "Ước chung lớn nhất: ".$ucln;
            }*/
      }
        ?>

    </body>
</html>
