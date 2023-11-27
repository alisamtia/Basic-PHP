<?php
use core\session;
view('login.view.php',["error"=>session::get("error")]);