<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/names">names</a>
    <br>
    <br>
    <a href="{{url('/names');}}">names</a>
    <br>
    <br>
    {{-- 제일 권장되는 방법 --}}
    <!-- 권장 -->
    <a href="{{route('names.index');}}">names</a>
</body>
</html>