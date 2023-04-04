<?php

//
$sql1 = " SELECT * FROM department ";
$sql2 = " SELECT * FROM dept_manager ";

include_once("../Example/12_2_ex2_fnc_db_conn.php");

try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    // $stmt = $obj_conn->query( $sql1 );
    $stmt2 = $obj_conn->query( $sql2 );
    // $result = $stmt->fetchAll();
    $result2 = $stmt2->fetchAll();

    if ( count ( $result2 ) === null )
    {
        //throw Exception : 에러를 강제로 일으키는 구문
        throw new Exception("쿼리 결과 0건");
    }

    echo "정상종료\n";
}
catch ( Exception $e )
{
    echo "----에러 발생----\n";
    if ( $e->getMessage() === "쿼리 결과 0건" )
    {
        echo "데이터 0건";
    }
    else
    {
        echo $e->getMessage();
    }
    echo "\n----에러 발생----\n";
}
finally{
    $obj_conn = null;
}

/* try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql2 = " SELECT * FROM dept_manager ";
    $stmt = $obj_conn->query( $sql2 );
    $result = $stmt->fetchAll();

    if ( count ( $result ) === 0 )
    {
        //throw Exception : 에러를 강제로 일으키는 구문
        throw new Exception("쿼리 결과 0건");
    }

    var_dump( $result );
    echo "Try\n정상종료\n";
}
catch ( Exception $e )
{
    echo "----에러 발생----\n";
    if ( $e->getMessage() === "E99" )
    {
        echo "데이터 0건";
    }
    else
    {
        echo $e->getMessage();
    }
    echo "\n----에러 발생----\n";
}
finally{
    echo "End\n";
    $obj_conn = null;
}; */

?>