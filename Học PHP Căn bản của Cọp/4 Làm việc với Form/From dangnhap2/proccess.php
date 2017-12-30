<?php

$userName = $_REQUEST["Login"];
$password = $_REQUEST["password"];
 echo $userName;
 echo $password;
if ($userName == "admin" && $password = "123456") {
    echo "Đăng nhập thành công";
} else {
    echo "Đăng nhập thất bại";
}