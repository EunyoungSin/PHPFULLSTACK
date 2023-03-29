<?php
//버블정렬

$arr = array(5, 10, 7, 3, 1);

for ( $i = 0; $i < count($arr); $i++ )
{
    echo $i." > ".$arr[$i]."\n";
}

$cnt = count($arr);

for ( $i = 0; $i < $cnt; $i++ )
{
    for ( $j = $i; $j < $cnt; $j++ )
    { 
        if ( $arr[$i] > $arr[$j] )
        {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            
        }
    }
}
print_r($arr);


/* $arr = array(5, 10, 7, 3, 1);

function my_max($array)
{
    $max = $array[0];
    $cnt = count($array);
    for ( $i = 1; $i < $cnt; $i++ )
    {
        if ( $array[$i] > $max )
        {
            $max = $array[$i];
        }
    }
    echo $max;
}

my_max($arr);

function my_min($array)
{
    $min = $array[0];
    $cnt = count($array);
    for ( $i = 1; $i < $cnt; $i++ )
    {
        if ( $array[$i] < $min )
        {
            $min = $array[$i];
        }
    }
    echo $min;
}

my_min($arr); */



?>