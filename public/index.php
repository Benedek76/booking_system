<?php

declare(strict_types=1);

// Dependency injection
use DI\Container;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();

$settings = require __DIR__ . '/../app/settings.php';
$settings($container);

$connection = require __DIR__ . '/../app/connection.php';
$connection($container);

//phpinfo();

/*
//query sectiom
$table = "{$container->get('settings')['connection']['dbname']}.users";
$columns = "ID INTEGER (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, Name VARCHAR (55) NOT NULL, Email VARCHAR (55) NOT NULL";
//echo 'teszt5 <br />';

$container->get('connection')->exec("CREATE TABLE IF NOT EXISTS {$table} ({$columns})");

$sql = "INSERT INTO users (name, email) VALUES ('Benedek', 'benedek@email.com')";

if ($container->get('connection')->exec($sql) === true) {
    echo "insert ok";
} else {
    echo "ERROR: {$sql} - {$container->get('connection')->error}";
}
*/

$logger = require __DIR__ . '/../app/logger.php';
$logger($container);

// Set Container on app
AppFactory::setContainer($container);

// Create App
$app = AppFactory::create();

$views = require __DIR__ . '/../app/views.php';
$views($app);

/*
$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);
*/

// Add Route Definitions
$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

// Run app
$app->run();