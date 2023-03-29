<?php
    /* function fnc_subt($int_a, $int_b)
    {
        return $int_a - $int_b;
    }

    function fnc_div($int_a, $int_b)
    {
        return $int_a / $int_b;
    }

    function fnc_mul($int_a, $int_b)
    {
        return $int_a * $int_b;
    }
    
    $result_subt = fnc_subt(5, 9);
    $result_div = fnc_div(5, 9);
    $result_mul = fnc_mul(5, 9);
    
    echo $result_subt."\n".$result_div."\n".$result_mul;

    function fnc_args_subt()
{
    $args = func_get_args();
    $subt = 0;

    foreach ( $args as $val) {
        if ( $args[0] === $val )
        {
            $subt = $val;
        }
        else
        {
            $subt -= $val;
        }
    }
return $subt;
}

function fnc_args_mul()
{
    $args = func_get_args();
    $mul = 1;

    foreach ( $args as $val) {
        $mul *= $val;
    }
return $mul;
}

function fnc_args_div()
{
    $args = func_get_args();
    $div = 1;

    foreach ( $args as $val) {
        if ( $args[0] === $val )
        {
            $subt = $val;
        }
        else
        {
            $subt /= $val;
        }
    }
return $div;
}

echo fnc_args_subt(10,2,5)."\n";
echo fnc_args_mul(10,2,5)."\n";
echo fnc_args_div(10,2,5)."\n"; */

include("06_1_ex2_variable.php");

echo $global_int_a;

?>