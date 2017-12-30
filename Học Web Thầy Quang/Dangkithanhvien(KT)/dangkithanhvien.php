<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"> 

    </head>


    <body>
        <form method="get" action="proccess.php" name="main-form">
            <table id="table" >
                <tr>
                    <td>ĐĂNG KÍ THÀNH VIÊN</td>
                </tr>
                 <tr>
                     <td>Nhập thông tin truy cập</td>
                </tr>
                <tr>
                    <td><p>Tên truy cập</p></td>
                    <td><p><input type="text" name="tentruycap" value="" placeholder="Mời nhập tên truy cập"></p></td>
                </tr>
                <tr>
                    <td><p><span></span>Mật khẩu</p></td>
                    <td><p><input type="password" name="matkhau" value="" placeholder="Mời nhập mật khẩu"></p></td>
                </tr>
                <tr>
                    <td><p>Nhập lại mật khẩu</p></td>
                    <td><p><input type="password" name="nhaplaimatkhau" value="" placeholder="Mời nhập lại mật khẩu"></p></td>
                </tr>
                <tr>
                    <td><p>Tỉnh thành</p></td>
                    <td><select>
                            <option>Cần Thơ</option>
                            <option>Hà Nội</option>
                            <option>Đà Nẵng</option>
                            <option>TP.HCM</option>
                        </select></td>
                  
                </tr>
                <tr>
                    <td><p>Họ và tên</p></td>
                    <td><p><input type="text" name="hovaten" value="" placeholder="Mời nhập họ tên"></p></td>
                </tr>
              
                <tr>
                    <td><p>Địa chỉ</p></td>
                    <td><p><input type="text" name="diachi" value="" placeholder="Địa chỉ"></p></td>
                    
                </tr>
                <tr>
                    <td><p>Số điện thoại</p></td>
                    <td><p><input type="text" name="sodienthoai" value="" placeholder="Mời nhập số điện thoại"></p></td>
                </tr>
                <tr>
                    <td><p>Email</p></td>
                    <td><p><input type="text" name="email" value="" placeholder="Mời nhập email"></p></td>
                </tr>
                <tr>
                    <td><p>Ngày sinh</p></td>
                    <td><p><input type="text" name="ngaysinh" value="" placeholder="Mời nhập ngày sinh"></p></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input style="background: #3300FF"  type="submit" name="btn_submit" value="Đăng kí"></td>

                </tr>
               

            </table>
        </form>
        <?php
        ?>
    </body>
</html>