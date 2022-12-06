<?php
$korean = 92;
$english = 93;
$math = 95;

$sum = $korean + $english + $math;
$avg = sprintf("%0.2f", $sum / 3);
echo "3과목의 총점과 평균, 등급 구하기<br>";
echo "------------------------------<br>";
echo "국어 : $korean 점 <br>";
echo "영어 : $english 점<br>";
echo "수학 : $math 점<br>";
echo "------------------------------<br>";
echo "총점 : $sum 점<br>";
echo "점수 : $avg 점(소수점 둘째까지만 출력)";
echo "------------------------------<br>";
if ($avg >= 90 && $avg <= 100) {
  echo "등급 : 매우 우수 <br>";
} elseif ($avg >= 80 && $avg <= 89) {
  echo "등급 : 우수 <br>";
} elseif ($avg >= 70 && $avg <= 79) {
  echo "등급 : 보통 <br>";
} elseif ($avg >= 60 && $avg <= 69) {
  echo "등급 : 미흡 <br>";
} elseif ($avg < 60) {
  echo "등급 : 매우 미흡 <br>";
}
?>