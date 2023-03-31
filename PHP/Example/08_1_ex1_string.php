<?php
/* $str_1 = "aaa";
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

$str_abcd = "abcd";
echo strrev($str_abcd);

$str_1 = "가나다라마";
echo mb_substr($str_1, 2), "\n";
echo mb_substr($str_1, 2, 1), "\n";
echo mb_substr($str_1, 3, 2), "\n";
echo mb_substr($str_1, -1), "\n"; // 스타트 파라미터가 음수이면 오른쪽부터 자릅니다. 

$str_tng = "안녕하세요. PHP입니다.";
echo mb_substr($str_tng, 7), "\n";
echo mb_substr($str_tng, 3, 5);

$str_trim = "   abcd      ";
echo trim($str_trim);

$str_len = "가나다라";
echo mb_strlen($str_len);

문자열 포맷에 따라 출력하는 함수
printf("안녕하세요. %s입니다.", "PHP");

define("WELCOME", "안녕하세요. %s님.");
printf(WELCOME, "홍길동");

$system = "시스템";
$login = "로그인";
$access = "접속";

define("ERROR_MSG", "ERROR(%d) : %s ERROR가 발생했습니다.");
printf(ERROR_MSG, 1, $system);
echo "\n";
printf(ERROR_MSG, 2, $login);
echo "\n";
printf(ERROR_MSG, 3, $access);
echo "\n"; */

$str_sscanf = "가나다라 50 abcd";
sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";

echo str_repeat("가", 3);

$str_exp1 = "홍길동, 27세, 남자, 의적, 조선";
$arr_exp1 = explode(",", $str_exp1);
print_r($arr_exp1);

$str_imp1 = implode("123", $arr_exp1);
echo $str_imp1;


?>