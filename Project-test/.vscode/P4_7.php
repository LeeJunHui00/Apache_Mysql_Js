<?php
echo "continue 문을 사용하여 1부터 10까지 홀수의 합<br>";
echo "-------------------------------------------<br>";
$cnt = 0;
$sum = 0;

while ($cnt < 10) {
    $cnt++;
    $a = $cnt % 2;
    if ($a != 1) {
        continue;
    }
    $sum += $cnt;
}
echo "[$sum]";
?>