<?php
$cookie_name="user";
$value="Yahoo Baba";

setcookie($cookie_name,$value,time()+(86400*30),"/","localhost");

if(isset($_COOKIE[$cookie_name])){
  echo $_COOKIE[$cookie_name];
}


 ?>
