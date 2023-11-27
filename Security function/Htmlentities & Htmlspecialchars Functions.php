<?php
$str="A 'quote' is <b>bold</b>";

echo $str."<br><br>";


// echo htmlentities($str,ENT_QUOTES);
echo htmlspecialchars($str,ENT_QUOTES);
//ENT_QUOTES write to also encode the single quote
//ENT_NOQUOTES write to not encode double quote and single quote






 ?>
