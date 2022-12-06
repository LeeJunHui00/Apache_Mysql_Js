<?php
$input = "B";
echo "봄, 여름, 가을, 겨울 switch 문으로 출력하기<br>";
echo "-----------------------------------------<br>";
echo "입력된 알파벳 ..... [ $input ]<br>";
echo "-----------------------------------------<br>";

switch ($input) {
    case "A":
        echo "제일 좋아하는 계절은 \"봄\" 입니다<br>";
        break;
    case "B":
        echo "제일 좋아하는 계절은 \"여름\" 입니다<br>";
        break;
    case "C":
        echo "제일 좋아하는 계절은 \"가을\" 입니다<br>";
        break;
    case "D":
        echo "제일 좋아하는 계절은 \"겨울\" 입니다<br>";
        break;
}

?>