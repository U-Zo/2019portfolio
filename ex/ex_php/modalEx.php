<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>My modal</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            left: 100px;
            top: 100px;
            width: 70%;
            background-color: rgba(0, 191, 255, 0.7);
        }

        .modal-body {
            background: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #aaaaaa;
            width: 30%;
        }

        .close-btn {
            color: white;
            background: #e27f34;
            float: right;
            font-size: 30px;
            font-weight: bolder;
            border: none;
            width: 100px;
            height: 50px;
        }

        .close-btn:hover, .close-btn:focus {
            border: 2px solid white;
            text-decoration: none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        /*
        window.onload = function () {
            var modal = document.getElementById("myModal");
            var openBtn = document.getElementById("md-btn");
            var closeBtn = document.getElementById("close-btn");

            openBtn.onclick = function () {
                modal.style.display = "block";
            };

            closeBtn.onclick = function () {
                modal.style.display = "";
            };

            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "";
                }
            }
        };
        */

        $(document).ready(function () {
            $("#md-btn").click(function () {
                $(".modal").css("display", "block");
            });
            $("#close-btn").click(function () {
                $(".modal").css("display", "");
            });
            $(window).click(function (event) {
                if ($(event.target).is("#myModal"))
                    $(".modal").css("display", "");
            });
        });
    </script>
</head>
<body>
<button id="md-btn">Modal open</button>
<div id="myModal" class="modal">
    <div class="modal-body">
        <p>This is modal</p>
    </div>
    <div>
        <button id="close-btn" class="close-btn">Close</button>
    </div>
</div>
</body>
</html>