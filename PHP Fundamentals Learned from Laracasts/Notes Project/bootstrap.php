<?php

use core\App;
use core\Container;
use core\Database;

$container = new Container();

$container->bind('core\Database', function () {
    $config = require base_url('config.php');

    return new Database($config);
});

App::setContainer($container);