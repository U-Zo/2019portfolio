<?php
include "dbconfig.php";
$name = $_POST["name"];
$pass = $_POST["pass"];
$title = $_POST["title"];
$comment = $_POST["comment"];
$comment = addslashes($comment);

$sql = "insert into tbl_notice(name, pass, title, comment, date, view) values('$name', '$pass', '$title', '$comment', now(), 0)";
$rs = $db->query($sql);
?>
<script>
    alert("Save Success");
    location.href="index.php";
</script>