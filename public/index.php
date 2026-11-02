<?php

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

define('ROOT_PATH', dirname(__DIR__));

if (is_file(ROOT_PATH . '/.env')) {
    Dotenv::createUnsafeImmutable(ROOT_PATH)->load();
}

require ROOT_PATH . '/app/config/database.php';

$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
define('BASE_URL', $basePath);

(new Router())->dispatch(); 