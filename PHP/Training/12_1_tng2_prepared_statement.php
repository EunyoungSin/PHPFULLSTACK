<?php
$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );

$i1 = "9999-01-01";
$i2 = 50000;
$i3 = 5;

$stmt = $dbc->stmt_init(); // statement를 셋팅
$stmt->prepare( "SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?"); // DB 질의 할 쿼리를 작성
$stmt->bind_param("sii", $i1, $i2, $i3); // Prepare 셋팅
$stmt->execute();// DB에 쿼리 질의 실행
$stmt->bind_result( $col1, $col2 ); 

while( $stmt->fetch())
{
	echo "emp_no : $col1 salary : $col2\n";
}

$stmt->close();

mysqli_close($dbc);

?>