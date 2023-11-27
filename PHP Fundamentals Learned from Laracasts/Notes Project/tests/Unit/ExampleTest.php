<?php

use core\container;

test('It can resolve a container', function () {
    $container=new container();
    $container->bind('foo',fn()=>"foo");

    $result=$container->resolve("foo");
    expect($result)->toEqual("foo");
});
