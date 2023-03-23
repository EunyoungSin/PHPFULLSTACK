<?php
//0 바위, 1 가위, 2 보

$user_num =(int)$_POST['pl_ans'];

$pc_num = rand(0, 2);
$user0 = "나 : 바위 ";
$pc0 = "PC : 바위 ";
$user1 = "나 : 가위 ";
$pc1 = "PC : 가위 ";
$user2 = "나 : 보 ";
$pc2 = "PC : 보 ";
$win = "YOU WIN!";
$lose = "PC WIN!";
$draw = "DRAW!";
$result = "";

if ($user_num == 0) { if ($pc_num == 0) {
        $pcr = $pc0.$draw;
    }
    else if ( $pc_num == 1 ) {
        $pcr = $pc1.$win;
    }
    else if ( $pc_num == 2 ) {
        $pcr = $pc2.$win;
    }
    $result = $user0.$pcr;
}

else if ($user_num == 1) { if ($pc_num == 0) {
        $pcr = $pc0.$lose;
    }
    else if ( $pc_num == 1 ) {
        $pcr = $pc1.$draw;
    }
    else if ( $pc_num == 2 ) {
        $pcr = $pc2.$win;
    }
    $result = $user1.$pcr;
}

else if ($user_num == 2) { if ($pc_num == 0) {
        $pcr = $pc0.$win;
    }
    else if ( $pc_num == 1 ) {
        $pcr = $pc1.$lose;
    }
    else if ( $pc_num == 2 ) {
        $pcr = $pc2.$draw;
    }
    $result = $user2.$pcr;
}

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
<form action="action.jsp" method="post">
    <label for="pl_ans">
    <input type="number" id="pl_ans" name="pl_ans">
    <input type="submit">

    <?= $result ?>
</form>
</body>
</html>