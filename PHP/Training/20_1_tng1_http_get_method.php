<?php

//1. Get Method로 사용자가 입력한 데이터를 HTTP Request 합니다.
//2. 입력한 데이터의 상세 내역은 아래와 같습니다.
//  2-1. key : id, pw, name, birth_date
//3. echo를 이용해서 각각의 데이터를 출력해주세요.

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="get" action="20_1_tng1_httpget.php"> -->
    <form method="get" action="20_1_tng1_http_get_method.php">
        <input type="text" name="id" value="id">
        <input type="password" name="pw" value="pw">
        <input type="text" name="name" value="name">
        <input type="date" name="birth_date" value="birth_date">
        <button type="submit">Submit</button>
    </form>
    <br>
    <a href=http://localhost/20_1_tng1_httpget.php?id=1&pw=1&name=1&birth_date=1>A태그</a>
    <br>
    <br>
</body>
</html>

<?php
$array_get = $_GET;

$array = array("id"=>"아이디", "pw"=>"비밀번호", "name"=>"이름", "birth_date"=>"생일");

foreach($array_get as $key=>$value)
{
echo $array[$key]." : ".$value."</br>";
}

?>