<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>JSON</title>
</head>
<body>
<h4>학생 명단</h4>
<p style="background-color: yellow">
    이름: <span id="name"></span>&nbsp
    나이: <span id="age"></span>
</p>
<script>
    var s = '[' +
            '{ "name" : "Hong", "age" : "21" },' +
            '{ "name" : "Kim", "age" : "28" },' +
            '{ "name" : "Lee", "age" : "25" },' +
            '{ "name" : "Park", "age" : "32"}]';

    var students = eval("(" + s + ")");

    students[1].name = "Lee";
    document.getElementById("name").innerHTML = students[1].name;
    document.getElementById("age").innerHTML = students[1].age;
</script>
</body>
</html>