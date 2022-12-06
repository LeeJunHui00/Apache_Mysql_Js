<?php

for ($dan = 9; $dan >= 2; $dan--) {
    for ($count = 9; $count >= 1; $count--) {
        $result = $dan * $count;
        echo "{$dan}x{$count} = {$result} &nbsp";
    }
    echo "<br>";
}

?>