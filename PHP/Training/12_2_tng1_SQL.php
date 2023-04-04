<?php
// v001 emp_no
// v002 where do

include_once("../Example/12_2_ex2_fnc_db_conn.php");

my_db_conn( $obj_conn );

// 1.
/* $sql =
    " SELECT "
    ." AVG( salary ) AS avg "
    ." FROM "
    ."  salaries "
    ." WHERE "
    ." to_date >= NOW() ";

$stmt = $obj_conn->query( $sql );
$result = $stmt->fetchAll();

foreach ($result as $val) {
    echo "전체 월급의 평균 : ".$val['avg'];
}

var_dump( $result );

$obj_conn = null; */

// 2.
/* $sql =
    " INSERT INTO employees( "
    ."   emp_no"
    ."  ,birth_date "
    ."  ,first_name "
    ."  ,last_name "
    ."  ,gender "
    ."  ,hire_date "
    ." ) "
    ." VALUES( "
    ."  :emp_no "
    ."  ,:birth_date "
    ."  ,:first_name "
    ."  ,:last_name "
    ."  ,:gender "
    ."  ,:hire_date "
    ." ) ";

$arr_prepare = 
array(
    ":emp_no" => 500000
    ,":birth_date" => "1993-08-03"
    ,":first_name" => "Eunyoung"
    ,":last_name" => "Sin"
    ,":gender" => "F"
    ,":hire_date" => DATE("Y-m-d")
);

$stmt = $obj_conn->prepare( $sql );
$result = $stmt->execute( $arr_prepare );
$obj_conn->commit();

$obj_conn = null; */

// 3.
$sql =
    " UPDATE "
    ." employees "
    ." SET "
    ."  first_name = :first_name "
    ."  ,last_name = :last_name "
    ." WHERE "
    ." emp_no = 499999 ";

$arr_prepare = 
array(
    ":first_name" => "길동"
    ,":last_name" => "홍"
);

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$obj_conn->commit();

$obj_conn = null;

// 4.
/* $sql =
    " DELETE "
    ." FROM "
    ." employees "
    ." WHERE "
    ." emp_no = :emp_no "; // v001 del
    ." hire_date <= now() " // v002 add

$arr_prepare = 
array(
    ":emp_no" => 500000
);    

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$obj_conn->commit();

$obj_conn = null; */
?>