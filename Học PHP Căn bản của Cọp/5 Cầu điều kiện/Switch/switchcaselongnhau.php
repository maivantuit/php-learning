<?php

$a = 6;
$check = is_int($a); // kiểm tra $a có phải số nguyên không
switch ($check) {
    case "True": // nếu $a là số nguyên thì thực thi các dòng lệnh bên dưới
        switch ($a) {
            case 0: echo "a bằng 0";
                break;
            case 2: echo "a bằng 2";
                break;
            case 3: echo "a bằng 3";
                break;
            case 4: echo "a bằng 4";
                break;
            case 5: echo "a bằng 5";
                break;
            default :echo "$a";
        }
        break;
    default : echo "a không phải là số nguyên";
}
    