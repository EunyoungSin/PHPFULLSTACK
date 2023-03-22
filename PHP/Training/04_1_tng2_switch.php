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

switch ($num) {
    case 0 > $num || $num > 100:
        echo $g_else;
        break;
    default:
        switch ($num) {
            case 100:
                $grade = $g_a_plus;
                break;
            case 90:
                $grade = $g_a;
                break;
            case 80:
                $grade = $g_b;
                break;
            case 70:
                $grade = $g_c;
                break;
            case 60:
                $grade = $g_d;
                break;
            case 59:
                $grade = $g_f;
                break;
            }
        echo $your.$num.$is.$grade;
}

?>