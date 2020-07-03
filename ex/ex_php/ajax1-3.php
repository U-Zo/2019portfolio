<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>jQuery ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $.ajax("testfile.php", {
                    success: function (data) {
                        $("#target").append(data);
                    }
                });
            });
        });
    </script>
</head>
<body>
<h2>jQuery AJAX</h2>
<p>jQuery의 $.ajax()로 불러온다.</p>
<div id="target" style="width: 500px; height: 200px; border: 1px solid black; padding: 10px;"></div>
<button>GET DATA</button>
</body>
</html>