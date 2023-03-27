<?php
    $num = 10;
    $num = 11;

    $week = array("sun", "mon", "tue", "wed");
    // print $week[0];

    $mon = "mon";
    $sun = "sun";
    $tue = "tue";
    $wed = "wed";
    $week2 = array($week[1], $week[3], $week[0], $week[2]);
    echo $week2[0];

    // $arr_mult_type = array("aaa", 1, 3.14, 'a');
    // var_dump($arr_mult_type);

    //$arr_ass = array("key1" => "val1", "key2" => "val2");
    //echo $arr_ass["key2"];

    $arr_temp = array(
                    array(1,2,3,4)
                    , array(5,6,7,8)
                    , array(
                            array(9,10,11)
                    )
                );

    //echo $arr_temp[2][0][1];

    /* $arr_temp_3 = $arr_temp[2];
    $arr_temp_3_c = array(
                        array(9,10,11)
                        );
    var_dump($arr_temp_3_c);

    $arr_temp_3 = $arr_temp[2][0];
    $arr_temp_3_c = array(9,10,11);
    var_dump($arr_temp_3_c);

    $arr_week = array("sun", "mon", "delete", "tue", "wed");
    unset($arr_week[2]);
    print_r($arr_week);

    $arr_diff_1 = array("a", "b", "c");
    $arr_diff_2 = array("a", "b", "d");
    $arr_diff = array_diff($arr_diff_1, $arr_diff_2);
    print_r($arr_diff);

    $arr_arsort = array("b", "a", "d", "c");
    $arr_arsort_result = asort($arr_arsort);
    arsort($arr_arsort);
    print_r($arr_arsort); 

    $arr_ksort = array("key1" => "val1"
                    , "key3" => "val3"
                    , "key4" => "val4"
                    , "key2" => "val2"
                );
    ksort($arr_ksort);
    print_r($arr_ksort); */

    // array의 사이즈를 반환하는 함수 : count();
    // echo count($arr_ksort);

    $arr1 = array("a" => "1"
                , "b" => "2"
                , "c" => "3"
                , "d" => "4"
            );
foreach( $arr1 as $key => $val )
{
    echo $key." : ".$val."\n";
}

foreach( $arr1 as $val )
{
    echo $val."\n";
}


?>