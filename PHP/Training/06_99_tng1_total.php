<?php
/* $arr_base = array(1,2,3,4,6);

function my_len ($array)
{
    $result = 0;

    foreach ( $array as $val )
    {
        $result++;
    }
    return $result;
}

echo my_len($arr_base);

$in_num = 6;
for( $for1 = 1; $for1 <= $in_num; $for1++ )
{
    for ( $for2 = 0; $for2 < $for1; $for2++ )
    {
        echo "*";
    }
    echo "\n";
} */

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

function print_star_rect ($in_num)
{
    for( $j = 0; $j < $in_num; $j++ )
    {
        for ( $i = 0; $i < $in_num; $i++ )
        {
            echo "*";
        }
        echo "\n";
    }
}

$in_num = 5;

echo print_stars($in_num);
echo print_star_rect($in_num);

?>