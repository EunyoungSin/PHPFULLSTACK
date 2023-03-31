<?php

$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );

/* $result_query = mysqli_query( $dbc, "SELECT emp_no, concat(last_name, ' ', first_name) as full_name, gender, birth_date FROM employees WHERE emp_no <= 10005;");

while ($result_row = mysqli_fetch_assoc($result_query))
{
    echo $result_row["emp_no"]." ".$result_row["full_name"]." ".$result_row["gender"]." ".$result_row["birth_date"]."\n";
} */

$sql = 
    "
    select
        emp_no
        ,concat(last_name, ' ', first_name) full_name
        ,gender
        ,birth_date
        from
            employees
        where
            emp_no <= 10005;
    ";
$result_query = mysqli_query($dbc, $sql);

// 플래그를 이용하는 방법

$flg_cnt = false;
while ($tmp_row = mysqli_fetch_assoc($result_query))
{
    echo implode(" ", $tmp_row), "\n";
    $flg_cnt = true;
}
if ( !$flg_cnt)
{
    echo "데이터가 0건 입니다.";
}

// mysqli_num_rows() 를 이용해서 레코드 수를 체크 하는 방법
if ( mysqli_num_rows( $result_query ) === 0)
{
    echo "데이터가 0건 입니다.";
}
else
{
    while ($tmp_row = mysqli_fetch_assoc($result_query))
    {
        echo implode(" ", $tmp_row), "\n";
    }
}

mysqli_close($dbc);

?>