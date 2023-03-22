<?php

    //print "안녕하세요.\n";
    //print ("안녕하세요. 괄호입니다.\n");

    //echo "안녕하세요. 에코입니다.\n";

    //var_dump( print "안녕하세요.");

    //$test_num = '변수변수';

    //echo $test_num;

    $t1 = 0;
    $t2 = $t1 + 1;
    $t3 = $t1 + $t2;

    echo $t1, " ", $t2, " ", $t3;

$tang = "탕수육";
$zza = "짜장면";
$zzam = "짬뽕";
$blank = " ";
$line = "\n";
$price_8000 = "8,000";
$price_6000 = "6,000";

echo "점심메뉴\n";
echo $tang.$blank.$price_8000.$line;
echo $zza.$blank.$price_6000.$line;
echo $zzam.$blank.$price_6000;
?>