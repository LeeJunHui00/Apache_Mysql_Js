<?php

echo "<h3>mysqli_select_db() 함수로 study_db 데이터베이스 선택</h3>";
echo "<hr>";

$connect = mysqli_connect("localhost", "lee", "0918");
$db = mysqli_select_db($connect, "webprog");

if ($db) {
  echo "데이터 베이스 선택 성공<br><br>";
} else {
  echo "데이터 베이스 선택에 실패했습니다";
}

mysqli_close($connect);
echo "mysql 접속이 종료되었습니다";

?>