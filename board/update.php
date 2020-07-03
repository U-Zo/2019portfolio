<?php
include "dbconfig.php";
$id = $_GET['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$comment = $_POST['comment'];
$comment = addslashes($comment);
$db->query("update tbl_notice set name = '$name', title = '$title', comment = '$comment' where id = $id");
echo "<script> alert('Corrected'); location.href='view.php?id=$id'; </script>";