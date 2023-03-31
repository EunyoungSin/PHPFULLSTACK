<?php

/* function write($filename) {
    $file = fopen($filename, 'w');
    $lines = '';
    for ($i = 2; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
        $result = $i * $j;
        $lines .= "{$i} x {$j} = {$result}\n";
        }
        // 구구단 사이에 빈 줄 추가
        $lines .= "\n";
    }

    fputs($file, $lines);
    fclose($file);
}

write("./sam/gugudan.txt"); */

$f_gugudan = fopen("../Example/sam/gugudan.txt", "w");

$print_gugudan = "";
for($dan = 2; $dan <=9; $dan++)
{
    $print_gugudan .= $dan."단\n";
    for ($num = 1; $num <=9; $num++)
    {
        $result = $dan." * ".$num." = ".$dan*$num."\n";
        $print_gugudan .= $result;
    }
}
fputs($f_gugudan, $print_gugudan);

fclose($f_gugudan);
?>