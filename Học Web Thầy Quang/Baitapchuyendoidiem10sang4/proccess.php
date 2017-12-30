<?php

$hoten = $_REQUEST["hoten"];
$masinhvien = $_REQUEST["masinhvien"];
$monhoc = $_REQUEST["monhoc"];
$thangdiem = $_REQUEST["thangdiem"];
// echo $hoten;
// echo $masinhvien;
// echo $monhoc;
// echo $thangdiem;
 if(isset($hoten) && isset($masinhvien)&& isset($monhoc)&& isset($thangdiem)){
    echo "Họ Tên: $hoten"."<br>";
    echo "Mã sinh viên: $masinhvien"."<br>";
    echo "Môn học: $monhoc"."<br>";
    echo "Thang điểm 4: ";
    if($thangdiem<=10 && $thangdiem>=8.5){
        echo "Điểm A"."<br/>";
        echo "Kết quả: Giỏi";
    } else if($thangdiem<=8.4 &&$thangdiem>7.0) {
        echo "Điểm B"."<br/>";
        echo "Kết quả: Khá";
    } else if($thangdiem<=6.9 &&$thangdiem>5.5) {
        echo "Điểm C"."<br/>";
        echo "Kết quả: Trung bình";
    } else if($thangdiem<=5.4 &&$thangdiem>4.0) {
        echo "Điểm D"."<br/>";
        echo "Kết quả: Yếu";
    } else if($thangdiem<=3.9) {
        echo "Điểm F"."<br/>";
        echo "Kết quả: Kém";
    }
    
    
}
