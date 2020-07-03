<?php
$db = new mysqli("localhost", "root", "root", "db_wpos");
if ($db->connect_error) {
    die("Database error");
}