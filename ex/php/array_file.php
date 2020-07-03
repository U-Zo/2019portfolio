<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>array file</title>
</head>
<body>
<?php
$array = file("somefile.txt");

foreach ($array as $line_num => $line) {
    echo "#{$line_num} : $line <br>\n";
}
?>
</body>
</html>