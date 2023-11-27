<?php

$str="Hello <b>world</b>, Hello <i>Earth</i><br>";


echo strip_tags($str,"<br>");// Write in this str to allow any tags




// Not a securtity function but helpfull to break a string
echo wordwrap($str,4,"<br>",TRUE);


 ?>
