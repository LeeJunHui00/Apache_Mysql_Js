<?php
echo "while문을 이용한 5의 배수의 합 출력<br>";
echo "---------------------------------<br>";
$cnt = 1;
$result = 0;
while ($cnt <= 100) {
    $result = $cnt * 5 + $result;
    $cnt++;
}
echo "1부터 100까지의 5의 배수의 합 .... [$result]";
?>