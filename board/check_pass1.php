<?php
include "dbconfig.php";
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>U-Zo Board</title>
    <link rel="stylesheet" type="text/css" href="css/uzo_board.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="logo">
        <a href="index.php">Kim Woojo</a>
    </div>
    <div class="total">

    </div>
</header>
<section style="height: 150px;">
    <div class="display">
        <div class="page-title">
            Check Password
        </div>
        <div class="page-func">
            <div class="checkPass">
                <form action="edit.php?id=<?= $id ?>" method="post">
                    <input class="pass" type="password" name="pass" placeholder="Password">
                    <div style="display: flex">
                        <input class="button" type="submit" value="Submit">
                        <input class="button" type="button" value="Cancel" onclick="history.back();">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>