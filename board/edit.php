<?php
require_once "dbconfig.php";
$id = $_GET['id'];
$pass = $_POST['pass'];
$rs = $db->query("select id, name, title, comment, pass from tbl_notice where id = $id");
$row = $rs->fetch_array();

if ($pass != $row["pass"]) { ?>
    <script>
        alert("Invalid password");
        history.back();
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>U-Zo Board</title>
    <link rel="stylesheet" type="text/css" href="css/uzo_board.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#form").validate({
                rules: {
                    name: "required",
                    title: "required",
                    comment: "required"
                }
            });
        });
    </script>
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
            Edit
        </div>
        <div class="page-func">
            <form id="form" action="update.php?id=<?= $id ?>" method="post">
                <table class="tableWrite" style="text-align: left">
                    <tr>
                        <td class="left">Name</td>
                        <td class="right">
                            <input type="text" name="name" value="<?= $row['name'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Title</td>
                        <td class="right">
                            <input type="text" name="title" value="<?= $row['title'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="left">Comment</td>
                        <td class="right">
                            <textarea name="comment"><?= $row['comment'] ?></textarea>
                        </td>
                    </tr>
                </table>
                <div style="padding-top: 10px; text-align: center; display: flex; justify-content: center">
                    <input class="button" type="submit" value="Save">
                    <input class="button" type="reset" value="Reset">
                    <input class="button" type="button" value="Cancel" onclick="history.back()">
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>