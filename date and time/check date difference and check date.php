<?php

echo checkdate(2,15,2001)."<br>";
// Check date difference
$date1=date_create("2013-03-15");
$date2=date_create("2013-03-18");

$diff=date_diff($date1,$date2);

echo $diff->days;

echo "<pre>";
print_r($diff);
echo "</pre>";

 ?>
