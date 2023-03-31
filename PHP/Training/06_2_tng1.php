<?php

$temp = range(1,45);
shuffle($temp);
$data = array_slice($temp,0,6);
print_r($data);

?>