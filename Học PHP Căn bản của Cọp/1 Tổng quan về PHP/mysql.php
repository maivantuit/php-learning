<meta charset="utf-8">
<?php
$name ="Học PHP Căn bản của Cọp";
$pass="123456";
$data="Học PHP Căn bản của Cọp";
$conn= mysqli_connect("localhost",$name,$pass,$data);
if(mysqli_errno($conn))
    echo "Không thể kết nối đến server";
else 
    echo "Kết nối đến server thành công"
?>