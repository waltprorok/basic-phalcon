<?php

use Phalcon\Di\Di;
use Phalcon\Di\FactoryDefault;

define("APP_PATH", dirname(__DIR__) . "/app");

require dirname(__DIR__) . '/vendor/autoload.php';

$di = new FactoryDefault();
Di::setDefault($di);
