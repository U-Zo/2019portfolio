<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title>js ajax</title>
    <script>
        function getFromServer() {
            var xhr;

            if (window.XMLHttpRequest) {
                xhr = new XMLHttpRequest();
            }
            else {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200)
                    document.getElementById("target").innerHTML = xhr.responseText;
            };

            xhr.open("GET", "testfile.php", true);
            xhr.send();
        }
    </script>
</head>
<body>
<h2>javascript AJAX</h2>
<div id="target" style="width: 500px; height: 200px; border: 1px solid black; padding: 10px;"></div>
<button type="button" onclick="getFromServer()">GET DATA</button>
</body>
</html>