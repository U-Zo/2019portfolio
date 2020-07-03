<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php
function test1() {
    static $a = 1;
    echo "test1의 $a <br>";
    $a++;
}

function test2() {
    $a = 1;
    echo "test2의 $a <br>";
    $a++;
}

for ($i = 1; $i <= 10; $i++) {
    echo "$i <br>";
    test1();
    test2();
}
?>
</body>
</html>