<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>js ajax</title>
    <style>
        #time {
            padding: 10px;
            font-size: 3rem;
            text-align: center;
            border: 1px dotted #787878;
        }
    </style>
</head>
<body>
<h2>js ajax를 이용해 현재 시간을 표시</h2>
<button id="whattime">현재 시간 표시하기</button>
<hr>
<div id="time">00:00:00</div>
<script>
    document.querySelector("#whattime").addEventListener("click", function time (event) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "time2.php");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200)
                document.querySelector("#time").innerHTML = xhr.responseText;
        };

        setTimeout(time, 500);

        xhr.send();
    });
</script>
</body>
</html>