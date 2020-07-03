<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Check all</title>
    <script>
        var fr = document.getElementById("fr");

        function allCheck() {
            if (fr.ack.checked == true)
                for (var i = 0; i < fr.check.length; i++)
                    fr.check[i].checked = true;
            else
                for (var i = 0; i < fr.check.length; i++)
                    fr.check[i].checked = false;
        }
    </script>
</head>
<body>
<fieldset>
    <legend>취미</legend>
    <form id="fr">
        전체 선택<input type="checkbox" name="ack" onclick="allCheck()"><br>
        <input name="check" type="checkbox">축구
        <input name="check" type="checkbox">야구
        <input name="check" type="checkbox">농구
    </form>
</fieldset>
</body>
</html>