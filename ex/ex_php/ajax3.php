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
<h2>js ajax를 이용해 세계 시간을 표시</h2>
<select id="timezone">
    <option value="Asia/Seoul">대한민국 서울</option>
    <option value="America/New_York">미국 뉴욕</option>
    <option value="America/Los_Angeles">미국 LA</option>
    <option value="Europe/London">영국 런던</option>
    <option value="Europe/Istanbul">터키 이스탄불</option>
</select>
<select id="format">
    <option value="Y-m-d H:i:s">년-월-일 시:분:초</option>
    <option value="Y-m-d">년-월-일</option>
</select>
<button id="whattime">현재 시간 표시하기</button>
<div id="time">00:00:00</div>
<script>
    document.querySelector("#whattime").addEventListener("click", function worldTime(event) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "time3.php");
        xhr.onreadystatechange = function () {
            document.querySelector("#time").innerHTML = xhr.responseText;
        }
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var data = "";
        data += "timezone=" + document.getElementById("timezone").value;
        data += "&format=" + document.getElementById("format").value;

        setTimeout(worldTime, 500);

        xhr.send(data);
    });
</script>
</body>
</html>