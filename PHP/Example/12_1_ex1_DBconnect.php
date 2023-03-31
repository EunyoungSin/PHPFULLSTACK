<?php

// DB 연결
$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );

$result_query = mysqli_query( $dbc, "SELECT emp_no, first_name FROM employees;");

//$result_row = mysqli_fetch_row( $result_query );
// var_dump($result_row);

while ($result_row = mysqli_fetch_row($result_query))
{
    print_r($result_row);
}

mysqli_close($dbc);

?>