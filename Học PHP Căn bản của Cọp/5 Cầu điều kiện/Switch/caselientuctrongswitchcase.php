
<?php

switch ($a = 3) {
    case 0:
        echo "a bằng 0";
        break;
    case 2:
        echo "a bằng 2";
        break;
    case 3:
    case 4:
    case 5:
    case 6:
        echo "a có giá trị trong khoảng từ 3 đến 6";
        break;
    default:
        echo "$a";
}
?>