<?php
include("db.php");
session_start();
$table_no = $_POST["table_no"] + 1;
$item_name = $_POST["item_name"];
$sql = "select * from tbl_item where item_name = '$item_name'";
$rs = $db->query($sql);
$row = $rs->fetch_array();

if (!isset($_SESSION[$table_no . '' . $item_name])) {
    $_SESSION[$table_no . '' . $item_name] = $table_no . '' . $item_name;
    $sql = "create table table_" . $table_no . "()";
}
?>
<tr>
    <td><?= $row["item_name"] ?></td>
    <td><?= $row["item_price"] ?></td>
    <td id="<?= $item_name ?>">1</td>
</tr>