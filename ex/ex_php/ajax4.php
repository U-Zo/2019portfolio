<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<h2>jQuery AJAX를 이용해 세계 각 지역의 시간 출력</h2>
<form style="display: inline;">
    <select name="timezone">
        <option value="Asia/Seoul">대한민국 서울</option>
        <option value="America/New_York">미국 뉴욕</option>
        <option value="America/Los_Angeles">미국 LA</option>
        <option value="Europe/London">영국 런던</option>
        <option value="Europe/Istanbul">터키 이스탄불</option>
    </select>
    <select name="format">
        <option value="Y-m-d H:i:s">년-월-일 시:분:초</option>
        <option value="Y-m-d">년-월-일</option>
    </select>
</form>
<button id="whattime" style="display: inline;">현재 시간 표시하기</button>
<hr>
<div id="time">00:00:00</div>
<script>
    $("#whattime").click(function worldTime() {
        $.ajax({
            url: "time3.php",
            type: "post",
            data: $("form").serialize(),
            success: function (data) {
                $("#time").text(data);
            }
        });
        setTimeout(worldTime, 500);
    });
</script>
</body>
</html>