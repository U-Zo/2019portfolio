<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>basename.php</title>
</head>
<body>
<h2>basename</h2>
<?php
$path = "/_portfolio/index.html";
echo basename ($path) . "<br>";
echo basename ($path, ".html");
?>
</body>
</html>