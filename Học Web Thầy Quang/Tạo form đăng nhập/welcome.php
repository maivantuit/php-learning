<?php 
/*$taikhoan = $_POST["Login"] ."<br/>";
$password = $_POST["password"];
 echo "Chào bạn:"."<br>" .$taikhoan;
 echo $password;*/

/*if(isset($_POST["Login"])){
    echo "Chào bạn: ". $_POST["Login"] . "<br>";
}*/
$taikhoan = $_POST["Login"];
$matkhau= $_POST["password"];
if(isset($taikhoan) && isset($matkhau)){
    print "Chào bạn: $taikhoan" ."<br>";
    print "Mật khẩu của bạn: $matkhau";
}
$taikhoan = $_POST["Login"];

/*switch (isset($taikhoan) ){
    case $_POST["Login"]: "Chào bạn: $taikhoan" ;        break;
    case $_POST["Login"]: "Chào bạn: $taikhoan" ;        break;
    default :"Bạn đăng nhập thất bại";
}*/
