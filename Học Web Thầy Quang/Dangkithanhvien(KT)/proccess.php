<?php

$tentruycap = $_REQUEST["tentruycap"];
$hovaten = $_REQUEST["hovaten"];
$diachi = $_REQUEST["diachi"];
$sodienthoai = $_REQUEST["sodienthoai"];
$email = $_REQUEST["email"];
echo "Chúc mừng bạn đã đăng kí thành công! Thông tin đăng kí như sau:" . "</br>";
echo "Tên truy cập: $tentruycap" . "<br>";
echo "Họ và tên: $hovaten" . "<br>";
echo "Địa chỉ: $diachi"."<br>";
echo "Số điện thoại: $sodienthoai" . "<br>";
echo "Email: $email" . "<br>";
?>