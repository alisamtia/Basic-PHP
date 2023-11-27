<?php
const BASE_PATH=__DIR__."/../";
require BASE_PATH."vendor/autoload.php";

session_start();
include BASE_PATH.'/core/functions.php';
require base_url('bootstrap.php');
$router = new \core\Router();
$routes = require base_url('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



if($_SERVER['REQUEST_METHOD']==="POST" && !isset($_POST["note"]) && !isset($_POST["username"])){
    $method=$_POST['__method'];
}
else{
    $method=$_SERVER['REQUEST_METHOD'];
}


$router->route($uri, $method);
?>