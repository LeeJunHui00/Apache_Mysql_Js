<?php

echo "<h3> mysqli_connect 함수 사용";
echo "<hr>";

$db_host = "localhost";
$db_user = "lee";
$db_passwd = "0918";

$conn = mysqli_connect($db_host, $db_user, $db_passwd);

if ($conn) {
  echo "mysql 서버에 성공적으로 연결되었습니다.<br><br>";
  echo "호스트 : " . $db_host . "<br>";
  echo "사용자 : " . $db_user . "<br>";
  echo "패스워스 : " . $db_passwd . " <br>";

  if (is_resource($conn)) {
    mysqli_close($conn);
  }
}

?>