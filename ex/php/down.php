<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$filename = "readfile.txt";

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Description: File Transfer");

// 파일 형식 변경
header("Content-Type: application/octet-stream");

// 파일 크기
header("Content-Length: " . filesize($filename));

// 파일 이름
header("Content-Disposition: attachment; filename=" . basename($filename));

// 파일 출력
@readfile($filename);
?>
</body>
</html>