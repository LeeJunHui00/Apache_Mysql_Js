<?php
$score[0] = intval($_POST["kor"]);
$score[1] = intval($_POST["eng"]);
$score[2] = intval($_POST["math"]);

echo "<B> ※ 오름차순으로 정렬  </B> <br>";
echo "---------------------------------- <br>";

echo " ■ 정렬 전 .....   ";
for ($c = 0; $c <= 2; $c++) {
  echo "  $score[$c]  &nbsp;  ";
}
echo "<br> ---------------------------------- <br>";
sort($score);
echo "■ 정렬 후 .....   ";
for ($c = 0; $c <= 2; $c++) {
  echo "<B>  $score[$c]  &nbsp; </B>";
}
echo "<br> ---------------------------------- <br>";

$sum = 0;

for ($c = 0; $c <= 2; $c++) {
  $sum += $score[$c]; // $sum = $sum + $score[$c] 와 같음
  $cnt = $c + 1; // 0번째가 아니라 1번째부터 표시
  //   echo " {$cnt} 번째 과목점수 :  $score[$c] ... ( 누적합 = {$sum} ) <br>";
}

$avg = $sum / 3; // 평균

echo "---------------------------------- <br>";
echo " ▶ 3과목총점 ..... {$sum} <br> ";
echo " ▶ 3과목평균 ..... {$avg} <br>";
echo "---------------------------------- <br>";

?>