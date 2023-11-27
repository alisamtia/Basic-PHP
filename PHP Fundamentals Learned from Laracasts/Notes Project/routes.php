<?php
$router->get("/","index.php");
$router->get("/about","about.php");
$router->get("/contact","contact.php");
$router->get("/register","registration/register.php")->only("guest");
$router->get("/register","login/login.php")->only("guest");
$router->post("/register","registration/store.php");
$router->get("/login","session/login.php")->only("guest");
$router->post("/login","session/store.php")->only("guest");
$router->get("/forget","session/forget.php")->only("guest");
$router->post("/forget","session/forget-pass.php")->only("guest");
$router->post("/forget-code","session/forget-code.php")->only("guest");
$router->post("/forget-pass-change","session/forget-pass-change.php")->only("guest");
$router->delete("/logout","session/logout.php")->only("auth");


$router->get("/notes","notes/index.php")->only("auth");
$router->get("/note/create","notes/create.php")->only("auth");
$router->post("/note/create","notes/store.php")->only("auth");

$router->delete("/note","notes/destroy.php")->only("auth");
$router->get("/note","notes/show.php")->only("auth");
$router->patch("/note/edit","notes/edit.php")->only("auth");
$router->post("/note/edit","notes/edit.php")->only("auth");
$router->post("/note/update","notes/update.php")->only("auth");