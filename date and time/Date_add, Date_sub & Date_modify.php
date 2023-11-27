<?php

$date=date_create("2015-05-15");
date_modify($date,"-10 days"); // to substract
date_modify($date,"70 days"); // to Add

echo date_format($date,"d-m-Y");
 ?>
