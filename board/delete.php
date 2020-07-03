<?php
require_once "dbconfig.php";
$id = $_GET['id'];
$pass = $_POST['pass'];
$rs = $db->query("select pass from tbl_notice where id = $id");
$row = $rs->fetch_array();
if ($pass != $row["pass"]) { ?>
    <script>
        alert("Invalid password");
        history.back();
    </script>
    <?php
}
else {
    $db->query("delete from tbl_notice where id = $id");
    ?>
    <script>
        alert("Delete complete");
        location.href = "index.php";
    </script>
    <?php
}