<?php
require_once("dbconfig.php");
$id = $_GET['id'];
$db->query("update tbl_notice set view = view + 1 where id = $id");
$result = $db->query("select id, name, title, comment, date from tbl_notice where id = $id");
$row = $result->fetch_assoc();
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
<section>
    <div class="display">
        <div class="page-title">
            <? echo htmlspecialchars($row['title']); ?>
        </div>
        <div class="page-func">
            <div class="viewPost">
                <div class="title-wrap">
                    <div class="info">
                        <div class="author">
                            <strong>Author</strong> <? echo htmlspecialchars($row['name']); ?>
                        </div>
                        <div>
                            <strong>Date</strong> <? echo htmlspecialchars($row['date']); ?>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <?
                    echo nl2br($row['comment']);
                    ?>
                </div>
            </div>
        </div>
        <div style="padding-top: 10px; text-align: center; display: flex; justify-content: center">
            <a href="check_pass1.php?id=<?= $id ?>">
                <div class="button">
                    Edit
                </div>
            </a>
            <a href="check_pass2.php?id=<?= $id ?>">
                <div class="button">
                    Delete
                </div>
            </a>
            <a href="index.php">
                <div class="button">
                    List
                </div>
            </a>
        </div>
    </div>
</section>
</body>
</html>