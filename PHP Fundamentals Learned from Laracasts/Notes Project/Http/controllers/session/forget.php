<?php
use core\session;
view('forget.view.php',["error"=>session::get("error")]);