<?php
$date2 = new DateTime;
$date2 -> setTimezone(new DateTimeZone("asia/seoul"));
echo $date2 -> format("H:i:s");