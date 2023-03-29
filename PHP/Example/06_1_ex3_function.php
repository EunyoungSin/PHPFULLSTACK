<?php

//void 함수
function sum($n1, $n2) {
    echo $n1 + $n2 . "\n";
    return;
}

//return 함수
function sum2($n1, $n2) {
    return $n1 + $n2;
}

sum(1,2);
sum(2,4);
$result = sum2(3,6);
echo $result . "\n";
sum($result, $result);

?>  