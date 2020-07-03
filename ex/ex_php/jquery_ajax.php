<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>jQuery ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $.post("jq_ajax_file.php", {
                    name: "정우성",
                    city: "대한민국, 서울"
                },
                function (data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                });
            });
        });
    </script>
</head>
<body>
<h2>jQuery Ajax HTTP POST</h2>
<button>페이지에 HTTP POST 요청을 보내고 결과 얻기</button>
</body>
</html>