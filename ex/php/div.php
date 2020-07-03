<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php
$besu = 5;
$num = 15;

if ($num % $besu == 0) {
    echo "$num 은(는) $besu 의 배수다.";
} else {
    echo "$num 은(는) $besu 의 배수가 아니다.";
}
?>

<br>

<?php
$besu1 = 5;
$num1 = 15;

if ($num1 % $besu1 == 0) {
    ?>
    <?= $num1 ?>은(는) <?= $besu1 ?>의 배수다.
    <?
} else {
    ?>
    <?= $num1 ?>은(는) <?= $besu1 ?>의 배수가 아니다.
    <?
}
?>
</body>
</html>