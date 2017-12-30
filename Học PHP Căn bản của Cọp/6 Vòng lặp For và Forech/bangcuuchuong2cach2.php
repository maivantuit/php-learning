<?php

$cuuchuong = 2;
$sotang = 0;
$kq = 0;
if ($cuuchuong < 10) {

    for ($i = 1; $i <= 10; $i++) {
        $sotang ++;
        $kq = $sotang * $cuuchuong;
        echo "$cuuchuong * $sotang =$kq " . "<br/>";
    }
} else {
    
}