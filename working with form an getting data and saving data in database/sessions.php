<?php

session_start();
$_SESSION["favcolor"]="orange";

echo "session Variable is set : ".$_SESSION["favcolor"]."<br>";
session_unset();
session_destroy();
echo "All the sessions of this machine are destroyed";
 ?>
