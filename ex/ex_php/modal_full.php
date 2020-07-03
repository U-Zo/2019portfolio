<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Modal Full</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).click(function (event) {
                if ($(event.target).is(".modal")) {
                    $("div.modal").removeData();
                    $(".trailer").html("");
                }
            });

            $("#popbutton").click(function () {
                $("div.modal").removeData();
                $("div.modal").modal({remote: "modal_login_sub_2.php"});
            });
            $("#popbutton2").click(function () {
                $("div.modal").removeData();
                $("div.modal").modal({remote: "basic_movie.php"});
            });
        });
    </script>
</head>
<body>
<div class="container">
    <div>
        <h1>ajax + jquery + modal 혼합 사용</h1>
        <button class="btn btn-default" id="popbutton">Open Modal</button>
        <button class="btn btn-default" id="popbutton2">Open movie</button>
    </div>
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
</div>
</body>
</html>