<?php

if (isset($_REQUEST['son'])) {
    $son = $_REQUEST['son'];
    
    for ($i = 2; $i <= $son; $i++) {
        $nt = 1;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $nt = 0;
                break;
            }
        } if ($nt == 1)
            echo " $i";
    }
    // kiểm tra dữ liệu 
if ($son <= 0 || $son = null) {
        echo "Vui lòng nhập đúng dữ liệu!";
    }
    
}

?>
