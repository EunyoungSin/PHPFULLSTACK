<?php

//1. Post Method로 사용자가 입력한 데이터를 HTTP Request 합니다.
//2. 입력한 데이터의 상세 내역은 아래와 같습니다.
//  2-1. key : id, pw, name, birth_date
//3. 유저가 입력하지 않은 데이터도 함께 전송
//  3-1. key : h_page,  val : h1
//4. echo를 이용해서 각각의 데이터를 출력해주세요.

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
    <!-- form Tag로 request -->
    <form method="post" action="20_2_tng1_httppost.php">
        <input type="text" name="id" value="id">
        <input type="password" name="pw" value="pw">
        <input type="text" name="name" value="name">
        <input type="date" name="birth_date" value="birth_date">
        <input type="hidden" name="h_page" value="h1">
        <button type="submit">Submit</button>
    </form>
</body>
</html>