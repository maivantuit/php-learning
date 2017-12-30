<?php
$a = 2;
for ($a = 2; $a < 10; $a++) {
    $i = 1;
    echo "<br>" . "Bảng cửu chương $a là: $a x $i =" . $a * $i . "<br />";
    for ($i = 2; $i <= 10; $i++) {
        echo "$a x $i =" . $a * $i . "<br />";
    }
}
?>