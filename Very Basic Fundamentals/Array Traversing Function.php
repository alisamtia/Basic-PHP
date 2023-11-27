<?php

$food=array('orange',"banana","apple","grapes");

echo "<b>Current: </b>".current($food)."<br>";
echo "<b>Key: </b>".key($food)."<br>";

next($food);
echo "<b>Current: </b>".current($food)."<br>";
next($food);
echo "<b>Current: </b>".current($food)."<br>";
prev($food);
echo "<b>Previous: </b>".current($food)."<br>";
end($food);
echo "<b>End: </b>".current($food)."<br>";
echo "<b>Key of End: </b>".key($food)."<br>";

reset($food);
echo "<b>After Reset: </b>".current($food)."<br>";
 ?>
