<?php
    //1.산술연산자
    //echo "더하기 : 1+1=", 1 + 1;
    //echo "\n빼기 : 1-1=", 1 - 1;
    //echo "\n곱하기 : 2*3=", 2 * 3;
    //echo "\n나누기 : 10/2=", 10 / 2;
    //echo "\n나머지 : 9%7=", 9 % 7;

    //echo "\n", 10 - 5 * 8;

    //2.증가/감소 연산자
    //$num1 = 1;
    //$num2 = 1;

    //echo ++$num1, "\n";
    //echo $num1, "\n", "\n";

    //echo $num1++, "\n";
    //echo $num1;

    //3.산술 대입 연산자
    //$num1 = 1;
    //$num1 = $num1 + 1;
    //$num2 = 1;
    //$num2 += 1;

    // 산술 연산자를 이용해서 계산해주세요.
    $tng_num = 10;
    echo "$tng_num + 10 = ", $tng_num + $tng_num, "\n";
    echo "$tng_num / 5 = ", $tng_num/5, "\n";
    echo "$tng_num - 4 = ", $tng_num-4, "\n";
    echo "$tng_num % 7 = ", $tng_num%7, "\n";
    echo "$tng_num * 3 = ", $tng_num*3;

    echo "\n";
    // 산술 대입 연산자를 이용해서 계산해주세요.
    $tng_num = 10;

    echo "\n", "$tng_num += 10 = ", $tng_num+=10, "\n"; //$tng_num = $tng_num + 10
    // $tng_num = $tng_num += 10한 값(20)이 됨.
    echo "$tng_num /= 5 = ", $tng_num/=5, "\n";
    echo "$tng_num -= 4 = ", $tng_num-=4, "\n";
    echo "$tng_num %= 7 = ", $tng_num%=7, "\n";
    echo "$tng_num *= 3 = ", $tng_num*=3;

    //4.비교 연산자
$t1 = 1;
$t2 = '1';

    var_dump(1 > 2);
    var_dump(1 < 2);
    var_dump(1 >= 1);
    var_dump(1 <= 1);
    var_dump(1 == '1');
    var_dump(1 === '1');
    var_dump($t1 != $t2);
    var_dump($t1 !== $t2);


    //5. 논리 연산자
    // and 논리 연산자
    //var_dump( 1 == 1 && 2 == 2 );

    //// or 논리 연산자
    //var_dump( 1 == 1 || 2 == 2 );

    // NOT 논리 연산자
    //var_dump( !(1 == 1) );


?>