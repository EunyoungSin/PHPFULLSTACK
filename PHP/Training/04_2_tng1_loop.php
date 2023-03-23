<?php
$num_a = 5;
$star = "*";

/* for ( $i=1; $i<=$num_a; $i++ ) {
    for ( $num_b=1; $num_b<=$i; $num_b++ ) {
        echo $star;
    }
    echo "\n";
}
*/
for ( $i=$num_a; $i>=0; $i-- ) {
    for ( $num_b=1; $num_b<=$i; $num_b++ ) {
        echo $star;
    }
    echo "\n";
}

?>