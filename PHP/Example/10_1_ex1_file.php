<?php

// 파일을 여는 방법 : fopen( 파일위치, 파일여는방식 )
/* $f_food = fopen ( "./sam/food.txt", "r" ); //r : 읽기전용

var_dump($f_food);

print fgets($f_food);

while ( $line = fgets($f_food) )
{
    echo $line;
}

fclose($f_food); */

/* $f_food = fopen ( "./sam/food.txt", "a" );
fputs($f_food, "돈까스");
fclose($f_food); */

$f_food2 = file("./sam/food2.txt");
$print_food = "";

foreach ($f_food2 as $val)
{
    if( trim($val) === "국밥" )
    {
        $print_food .= $val."스테이크\n";
    }
    else {
        $print_food .= $val;
    }
}

print $print_food;

$f_food2 = fopen("./sam/food2.txt", "w");
fputs ($f_food2, $print_food);
fclose ($f_food2);



?>