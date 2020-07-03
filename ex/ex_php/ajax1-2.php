<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>jQuery ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $("#target").load("testfile.php");
            });
        });
    </script>
</head>
<body>
<h2>jQuery AJAX</h2>
<p>단순히 파일을 불러오는 것이라면 jQuery의 load()함수를 사용해서 간단히 불러올 수 있다.</p>
<hr>
<div id="target" style="width: 500px; height: 200px; border: 1px solid black; padding: 10px;"></div>
<button>Get data</button>
</body>
</html>