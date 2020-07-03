<?php
$db = new mysqli("localhost", "root", "root", "report");
$db->query("set session character_set_connection=utf8");
$db->query("set session character_set_results=utf8;");
$db->query("set session character_set_client=utf8;");
if ($db->connect_error) {
    die("Database error");
}