<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet("/user", ["controller" => "user", "action" => "index"]);
$router->addGet("/user/show/{id:[0-9]+}", ["controller" => "user", "action" => "show"]);



$router->handle($_SERVER['REQUEST_URI']);
