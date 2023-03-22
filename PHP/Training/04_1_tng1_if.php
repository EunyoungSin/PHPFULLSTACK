<?php
$num = 100;
$your = "당신의 점수는 ";
$is = "점 입니다.";
$g_a_plus = "<A+>";
$g_a = "<A>";
$g_b = "<B>";
$g_c = "<C>";
$g_d = "<D>";
$g_f = "<F>";
$g_else = "잘못된 값을 입력 했습니다.";

if( 0 > $num || $num > 100 )
{ 
    echo $g_else;
}
else
{
    if ( $num == 100 )
    {
        $grade = $g_a_plus;
    }
    else if( $num >= 90 )
    {
        $grade = $g_a;
    }
    else if( $num >= 80 )
    {
        $grade = $g_b;
    }
    else if( $num >= 70 )
    {
        $grade = $g_c;
    }
    else if( $num >= 60 )
    {
        $grade = $g_d;
    }
    else
    {
        $grade = $g_f;
    }
echo $your.$num.$is.$grade;
}


?>