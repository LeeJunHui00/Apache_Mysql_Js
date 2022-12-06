<?php
echo "반환값과 인자 세 개를 갖는 함수<br>";
echo "-----------------------------<br>";

function add($a, $b, $c)
{
    echo "덧셈 연산을 하는 add(\$a,\$b,\$c) 함수 호출<br>";
    echo "$a+$b+$c =";
    return $a + $b + $c;
}
$result = add(8, 6, 5);
echo "{$result}<br>";

function mul($a, $b, $c)
{
    echo "곱셈 연산을 하는 mul(\$a,\$b,\$c) 함수 호출<br>";
    echo "{$a}*{$b}*{$c} = ";
    return $a * $b * $c;
}
$result = mul(8, 8, 8);
echo "{$result}<br>";

function sub($a, $b, $c)
{
    echo "뺄셈 연산을 하는 sub(\$a,\$b,\$c) 함수 호출<br>";
    echo "{$a}-{$b}-{$c} = ";
    return $a - $b - $c;
}
$result = sub(100, 10, 5);
echo "{$result}<br>";

function div($a, $b, $c)
{
    echo "나눗셈 연산을 하는 div(\$a,\$b,\$c) 함수 호출<br>";
    echo "{$a}/{$b}/{$c} = ";
    return $a / $b / $c;
}
$result = div(80, 5, 3);
echo "{$result}<br>";

?>