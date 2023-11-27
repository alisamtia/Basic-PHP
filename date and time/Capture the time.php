<?php
echo "Time & Date: ".date("d-m-Y")."<br><br>";

echo date("d-m-Y h:i:sa",mktime(0,0,0,10,15,2003))."<br><br>";

echo date("d-m-Y h:i:sa",gmmktime(0,0,0,10,15,2003))."<br><br>";


 ?>
