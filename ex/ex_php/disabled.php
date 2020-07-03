<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>활성/비활성</title>
    <script>
        function able() {
            var checkBox = document.getElementById("checkBox");
            var button = document.getElementById("button");

            checkBox.checked ? button.disabled = false : "disabled";
        }
    </script>
</head>
<body>
<h2>활성/비활성 구현하기</h2>
<input type="checkbox" id="checkBox" onclick="able()">파일 올리기
<input type="file" id="button" disabled="disabled">
</body>
</html>