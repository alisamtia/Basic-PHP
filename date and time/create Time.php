<?php
echo "Hour is " . date("h")."<br>";
echo "Hour is " . date("H")."<br>";
echo "Hour is " . date("g")."<br>";
echo "Hour is " . date("G")."<br>";
echo "Minute is " . date("i")."<br>";
echo "Second is " . date("s")."<br>";
echo "Greater Case is " . date("A")."<br>";
echo "Lower case is " . date("a")."<br>";
echo "Time is " . date("h:i:sa")."<br>";
echo "Date & Time is " . date("d-m-y h:i:sa")."<br><br><br>";

date_default_timezone_set("Asia/Karachi");
echo "Pakistan Date & Time is " . date("d-m-y h:i:sa")."<br>";
 ?>
