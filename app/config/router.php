<?php

$router = $di->getRouter();

// Define your routes here
$router->add("/user",
    [
        "controller" => "user",
        "action" => "index",
    ]
);

$router->add(
    "/user/show/{id:[0-9]+}",
    [
        "controller" => "user",
        "action"     => "show",
    ]
);

$router->handle($_SERVER['REQUEST_URI']);
