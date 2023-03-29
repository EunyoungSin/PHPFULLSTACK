<?php

// min, max, floor, round, ceil, rand
echo floor(4.9), "\n";
echo round(4.5), "\n";
echo ceil(4.1), "\n";
echo min( array(3,4,6,1,3) ), "\n";
echo max( array(3,4,6,1,3) ), "\n";
echo rand(0, 2), "\n";

//날짜함수
echo date('Y-m-d H:i:s'), "\n";
echo date('y-m-d H:i:s'), "\n";
echo date('y-M-d H:i:s'), "\n";

echo mt_rand(0,3);

// 상수 선언(명명규칙 : 상수명은 꼭 대문자로 작성한다.)
define("INT_ONE", 1);

echo INT_ONE;
?>