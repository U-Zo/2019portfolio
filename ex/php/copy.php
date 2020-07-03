<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>copy</title>
</head>
<body>
<?php
$file = "test.php";

if (copy($file, $file . ".bak")) {
    echo "$file 을 복사하였습니다.<br>\n";
} else {
    echo "$file 을 복사하는데 실패했습니다.<br>\n";
}
?>
</body>
</html>