<?php
$a =5;
switch ($a){
    case 1: echo 'a bằng 1<br>';        break;
    case 2: echo 'a bằng 2<br>';        break;
    case 3: echo 'a bằng 3<br>';        break;
    case 4: echo 'a bằng 4<br>';        break;
    case 5:
        $a /= 2;// a chia 2
        if (is_int($a)) {
            echo "a là số nguyên";
        } else {
            var_dump($a);
        }
        break;
    default :echo "$a<br>";
}
echo 'Bạn đã thoát khỏi lệnh Switch';
