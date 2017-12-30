<?php

$diem = 4.0;
if ($diem <= 10 && $diem >= 8.5) {
    echo "Với số điểm $diem : Xếp loại A";
} else if ($diem <= 8.4 && $diem >= 7.0) {
    echo "Với số điểm $diem : Xếp loại B";
} else if ($diem <= 6.9 && $diem >= 5.5) {
    echo "Với số điểm $diem : Xếp loại C";
} else if ($diem >= 4.0 && $diem<=5.4) {
    echo "Với số điểm $diem : Xếp loại D";
} else echo "Điểm F";  


