<?php
    $food = array("딸기", "사과", "포도", "레몬", "귤", "자두");

    //echo $food[1];

    //$rand_num = rand(0,5);
    //echo $food[$rand_num];

    $arr_food = array("샐러드" => "양상추", "도너츠" => "밀가루", "파전" => "파", "커피" => "원두");
    echo $arr_food["샐러드"];

    $arr_ass_del = array("된장찌개" => "파"
                    , "볶음밥" => "양파"
                    , "김치" => "마늘"
                    , "비빔밥" => "참기름");
echo $arr_ass_del["비빔밥"];

unset($arr_ass_del["김치"]);
var_dump($arr_ass_del); ff
?>
