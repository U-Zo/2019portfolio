<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>htmlspecialchars</title>
</head>
<body>
<?php
$array = file("http://www.naver.com/");

foreach ($array as $line_num => $line) {
    echo htmlspecialchars($line) . "<br>\n";
}
?>
</body>
</html>