<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>jQuery + JSON + ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(function () {
            $("#searchButton").click(function () {
                var flag = $("#resultSelect").val();
                (flag == "Y") ? url = "./list1.json" : url = "./list2.json";
                $.ajax({
                    url: url,
                    dataType: "json",
                    success: function (data) {
                        (data.flag == "Y") ? result = data.data : result = data.data;
                        $("#listLayout").html(data.data);
                    }
                });
            });
        });
    </script>
</head>
<body>
<h2>jQuery + JSON + ajax</h2>
<select id="resultSelect">
    <option value="Y">성공했을 때</option>
    <option value="N">실패했을 때</option>
</select>
<input type="button" id="searchButton" value="조회">
<br>
<div id="listLayout"></div>
</body>
</html>