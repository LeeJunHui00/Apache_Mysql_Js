<?php

echo "<h3>mysqli_query() 함수를 이용한 테이블 생성</h3>";
echo "<hr><br>";
$connect = mysqli_connect("localhost", "lee", "0918");
$db = mysqli_select_db($connect, "webprog");

if ($db) {
  echo "1. mysql 접속 : <B> lee 계정 접속 </b>";
  echo "2. 데이터베이스 선택 : <B> webprog </B>";
} else {
  echo "webprog 데이터 베이스 선택 실패";
  echo "프로그램을 종료합니다";
  exit();
}

$sql = "create table guest ( ";
$sql = $sql . "id varchar (12) not null, ";
$sql = $sql . "name varchar (10) not null, ";
$sql = $sql . "sex char (4) , ";
$sql = $sql . "age int , ";
$sql = $sql . "point int , ";
$sql = $sql . "email varchar (30) , ";
$sql = $sql . "Primary Key (id)) ";
// $sql = $sql . "default charset=utf-8 ";

$result = mysqli_query($connect, $sql);

if ($result) {
  echo "3. 테이블 생성 : <B> guest 테이블 </B>";
} else {
  echo "<hr>";
  echo "'guest' 테이블 생성에 실패했습니다";
}

?>