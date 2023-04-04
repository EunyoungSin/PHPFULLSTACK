<?php
// 1.while + if가 조합된거
/* $i = 0;
while ( $i <= 4)
{
    if( $i === 1)
    {
        echo "1입니다.";
    }
    else if( $i === 4)
    {
        echo "4입니다.";
    }
    ++$i;
} */

// foreach + if 조합
/* $arr_ass = array ( "a" => 1, "b" => 2, "c" => 3 );
foreach ( $arr_ass as $key => $val )
{
    if ( $key === "c" || $val === 2)
    {
        echo "if";
    }
} */

// $sum = 0;
// for( $i = 2; $i <= 100; $i += 2 )
// {
//     $sum += $i;
// }
// echo $sum;

// for( $i = 1; $i <= 100; $i++ )
// {
//     if( $i % 2 === 0 )
//     {
//         $sum += $i;
//     }
// }

/* $arr_test =
    array (
        "a" => 1
        , "b" => 2
        , "info" => 
            array(
                "info_a" => 3
                , "info_b" => 4
                , "info_arr" => 
                    array(
                        "f_1" => 5
                        ,"f_2" => 7
                    )
            )
    );

echo $arr_test["info"]["info_a"]."\n";
echo $arr_test["info"]["info_arr"]["f_2"]; */

/* $arr_test =
    array (
        1
        ,2
        ,array(
                "info_a" => 3
                , "info_b" => 4
                , "info_arr" => 
                    array(
                        "f_1" => 5
                        ,"f_2" => 7
                    )
            )
    );

echo $arr_test[2]["info_arr"]["f_1"]; */

/* function fnc_sum($param_a, $param_b)
{
    $sum = $param_a + $param_b;
    return $sum;
}

echo fnc_sum(1,2); */

// 가변 파라미터
/* function fnc_sum2( ...$param_numbers )
{
    return array_sum($param_numbers);
}
echo fnc_sum2(3,4,5,6); */

/* function fnc_global()
{
    global $global_i;
    $global_i = 0;
}
$global_i = 5;
fnc_global();

echo $global_i; */

/* function fnc_static()
{
    static $static_i = 0;
    echo $static_i;
    $static_i++;
}

fnc_static();
fnc_static();
fnc_static(); */

/* function fnc_reference( $param_str )
{
    $param_str = "fnc_reference";
}
$str = "aaa";
fnc_reference( $str );
echo $str; */

function print_stars ($in_num)
{
    for ( $j = 1; $j <= $in_num; $j++ )
    {
        for ( $i = 0; $i < $j; $i++ )
        {
            echo "*";
        }
        echo "\n";
    }
}

echo print_stars(5);


?>