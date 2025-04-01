<?php

use Phalcon\Config\Config;

/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new Config([
    'database' => [
        'adapter'  => 'Sqlite',
        'dbname'   => APP_PATH . '/database/phalcon.sqlite',
    ],
//    'database' => [
//        'adapter'  => $_ENV['DB_ADAPTER'] ?? 'Mysql',
//        'host'     => $_ENV['DB_HOST'] ?? 'localhost',
//        'username' => $_ENV['DB_USERNAME'] ?? 'phalcon',
//        'password' => $_ENV['DB_PASSWORD'] ?? 'secret',
//        'dbname'   => $_ENV['DB_DBNAME'] ?? 'phalcon',
//        'charset'  => $_ENV['DB_CHARSET'] ?? 'utf8',
//        'options' => [
//            PDO::ATTR_EMULATE_PREPARES => true
//        ]
//    ],
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'baseUri'        => '/',
    ]
]);
