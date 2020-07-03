<?php
require_once("dbconfig.php");
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
            List
        </div>
        <div class="page-func">
            <div class="main-button">
                <a class="posting" href="write.html" style="text-decoration: none; color: black">
                    <div class="button">
                        Post
                    </div>
                </a>
            </div>
            <table class="tableList">
                <tr>
                    <th class="no">#</th>
                    <th class="title">Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Views</th>
                </tr>
                <?php
                $result = $db->query("select * from tbl_notice order by id desc");
                while ($row = $result->fetch_assoc()) {
                    $datetime = explode(' ', $row['date']);
                    $date = $datetime[0];
                    $time = $datetime[1];
                    if ($date == Date('Y-m-d'))
                        $row['date'] = $time;
                    else
                        $row['date'] = $date;
                    ?>
                    <tr>
                        <td><? echo htmlspecialchars($row['id']); ?></td>
                        <td>
                            <a href="view.php?id=<?=$row['id']?>">
                                <? echo htmlspecialchars($row['title']); ?>
                            </a>
                        </td>
                        <td><? echo htmlspecialchars($row['name']); ?></td>
                        <td><? echo htmlspecialchars($row['date']); ?></td>
                        <td><? echo htmlspecialchars($row['view']); ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</section>
</body>
</html>