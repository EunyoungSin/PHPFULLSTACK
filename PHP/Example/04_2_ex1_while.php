<?php
/* $i = 0;
    while ( $i < 10 )
    {
        echo $i++;
    }

    $i = 1;
    while ( $i < 10)
    {
        echo " 2 * ",$i," = ",2*$i, "\n";
        $i++;
    }

    $dan = 2;
    $num = 1;
    $max_dan = 10;
    while ( $dan <= $max_dan )
    {
        echo $dan, "단\n";
        $num = 1;
        while( $num <= $max_dan )
        {
            $result = $dan." * ".$num." = ".$dan*$num."\n";
            echo $result;
            ++$num;
        }
        ++$dan;
    }

$i = 0;
do{
    echo $i, " do while";
}

while ( $i === 1 );

while ( $i === 1 )
{
    echo $i, " while";
}

for ( $i=2; $i <=9; $i++ )
{
    echo $i, "단\n";
    $i++;
}

*/

for ( $dan=2; $dan <= 9; $dan++ )
{
    echo $dan, "단\n";
    for ( $num = 1; $num <= 9; $num++ )
    {
        $result = $dan." * ".$num." = ".$dan*$num."\n";
        echo $result;
    }
}

?>