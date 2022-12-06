<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>

<h2> 
"웹 개발 용역사무소" 조 편성 데이터
</h2>

<?php
$name_1 = "이준희";
$name_2 = "신지훈";
$name_3 = "김대규";
$name_4 = "김근모";
$class_1 = "20193198";
$class_2 = "20183195";
$class_3 = "20183338";
$class_4 = "20213057";
$call_1 = "010-3816-1832";
$call_2 = "010-7479-8249";
$call_3 = "010-3138-6625";
$call_4 = "010-9461-8236";
$email_1 = "ljh2832@naver.com";
$email_2 = "sjh1803@naver.com";
$email_3 = "we1526@naver.com";
$email_4 = "kkumo02@naver.com";

echo "<table>
<tr>
<td>이름</td>
<td>학번</td>
<td>전화번호</td>
<td>이메일</td>
</tr>
<tr>
<td>$name_1</td>
<td>$class_1</td>
<td>$call_1</td>
<td>$email_1</td>
</tr>
<tr>
<td>$name_2</td>
<td>$class_2</td>
<td>$call_2</td>
<td>$email_2</td> 
</tr>
<tr>
<td>$name_3</td>
<td>$class_3</td>
<td>$call_3</td>
<td>$email_3</td>
</tr>
<tr>
<td>$name_4</td>
<td>$class_4</td>
<td>$call_4</td>
<td>$email_4</td> 
</tr>
</table>
";
?>

</body>
</html>
