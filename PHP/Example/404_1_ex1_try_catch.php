<?php

include_once("./12_2_ex2_fnc_db_conn.php");

// try-catch문
try
{
    //code...
}
catch( Exception $e)
{
    //에러가 발생 했을 때 실행되는 소스코드를 작성
}
finally
{
    //정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
}

try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql = " SELECT * FROM employees WHERE emp_no = 1000001 ";
    $stmt = $obj_conn->query( $sql );
    $result = $stmt->fetchAll();

    if ( count ( $result ) === 0 )
    {
        //throw Exception : 에러를 강제로 일으키는 구문
        throw new Exception("쿼리 결과 0건");
    }

    var_dump( $result );
    echo "Try\n";
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
    echo "Finally\n";
    $obj_conn = null;
}

echo "종료";

?>