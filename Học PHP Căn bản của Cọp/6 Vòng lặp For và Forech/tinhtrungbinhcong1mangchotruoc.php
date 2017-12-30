<?php
$a = array(9,7,5,4,7,9,5,7,3,8);
$tong=0;
$TBC=0;
foreach($a as $value){ 
    $tong=$tong+$value;//$dem+=$value
    $TBC=$dem/2;    
}
echo "Trung binh cong cua mang la: $TBC";