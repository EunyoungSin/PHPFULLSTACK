<?php
$str_1 = "aaa";
$str_2 = "bbb";
$str_sum = $str_1.$str_2.$str_1;

echo $str_sum, "\n";

$str_en = "abcd efgh";

echo strtolower($str_en), "\n";
echo strtoupper($str_en), "\n";
echo ucfirst($str_en), "\n";
echo ucwords($str_en), "\n";

$url = "https://www.google.com/search?q=block&bih=963&biw=1920";

$arr_url = parse_url($url);
// var_dump($arr_url);

parse_str($arr_url["query"], $arr_parse);

var_dump($arr_parse);
?>