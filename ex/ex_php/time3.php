<?php
$data3 = new DateTime;
$data3 -> setTimezone(new DateTimeZone($_POST["timezone"]));
echo $data3 -> format($_POST["format"]);