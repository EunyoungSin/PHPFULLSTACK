<?php
$hello = "Hello";
$happy = "Happy";
$hello_1 = "I am always Hello.";

// $hello_2 = str_replace( $hello, $happy, $hello_1);
// echo $hello_2;

// $hello_3 = explode($hello, $hello_1);

// $happy_1 = implode($happy, $hello_3);
// echo $happy_1;

function my_str_replace ($h1, $rep_hello, $rep_happy)
{
    $hello_4 = explode($rep_hello, $h1);
    $result_str = implode($rep_happy, $hello_4);
    return $result_str;
}

echo my_str_replace ($hello_1, $hello, $happy);

?>