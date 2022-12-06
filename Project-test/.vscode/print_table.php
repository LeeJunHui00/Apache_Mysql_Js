<?php
$connect = mysqli_connect("localhost", "lee", "0918");
$db = mysqli_select_db($connect, "webprog");

// 테이블 있는지 확인. 없으면 테이블 생성하고 시작하기
$result = mysqli_query($connect, " SHOW tables LIKE 'guest'");
if (!mysqli_num_rows($result) > 0) {
  // echo "테이블 없음";
  $sql = "CREATE TABLE guest ( ";
  $sql = $sql . "id varchar (12) NOT NULL, ";
  $sql = $sql . "name varchar(10) NOT NULL, ";
  $sql = $sql . "pw1 varchar (50) , ";
  $sql = $sql . "pw2 varchar (50) , ";
  $sql = $sql . "p2 int , ";
  $sql = $sql . "p3 int, ";
  $sql = $sql . "email varchar (50), ";
  $sql = $sql . "Primary Key (id)) ";
  $sql = $sql . "DEFAULT CHARACTER SET utf8";
  $result = mysqli_query($connect, $sql);
}

$user_id = $_POST["id"];
$user_name = $_POST["name"];
$user_pw1 = $_POST["pw1"];
$user_pw2 = $_POST["pw2"];
$user_p2 = $_POST["p2"];
$user_p3 = $_POST["p3"];
$user_email = $_POST["email"];

$sql = "INSERT INTO guest VALUES";
$sql =
  $sql .
  "('$user_id', '$user_name', '$user_pw1', '$user_pw2', '$user_p2', '$user_p3', '$user_email') ";
mysqli_query($connect, $sql);

mysqli_query($connect, "set session character_set_connection=utf8;");
mysqli_query($connect, "set session character_set_results=utf8;");
mysqli_query($connect, "set session character_set_client=utf8;");

$sql = "select *from guest"; // 테이블 검색 질의
$result = mysqli_query($connect, $sql); // 질의 수행
$count = mysqli_num_fields($result); // 필드의 개수 구하기

echo "<B> ● 테이블 이름 : guest </B><br><br>";
?>

<table width='1200' border='2' bordercolor='black' cellpadding='10'>
    <tr>
        <td bgcolor='#FFFF00' align='center'><B> 아이디 </B></td>
        <td bgcolor='#FFFF00' align='center'><B> 성명 </B></td>
        <td bgcolor='#FFFF00' align='center'><B> 비밀번호 </B></td>
        <td bgcolor='#FFFF00' align='center'><B> 비밀번호 확인 </B></td>
        <td bgcolor='#FFFF00' align='center'><B> 전화번호 </B></td>
        <!-- <td bgcolor='#FFFF00' align='center'><B> 전화번호 </B></td> -->
        <td bgcolor='#FFFF00' align='center'><B> 이메일 </B></td>
    </tr>

    <?php while ($rows = mysqli_fetch_row($result)) {
      // 레코드의 개수만큼 반복
      echo "<tr>";
      for (
        $a = 0;
        $a < $count;
        $a++ // 필드의 수만큼 반복
      ) {
        if ($a == 4) {
          echo "<td> {$_POST["p1"]} - {$_POST["p2"]} - {$_POST["p3"]}</td>";
          $a = 6;
        }

        echo "<td> $rows[$a] </td>";
      }
      echo "</tr>";
    } ?>

</table><br>

<?php
$row_count = mysqli_num_rows($result); // 레코드 개수 구하기
echo "● 전체 레코드의 수 : <B>[ {$row_count} 개 ] </B>";
mysqli_close($connect);
echo " <hr> >> mysql 접속이 종료되었습니다  !!! ";


?>