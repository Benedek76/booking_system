<?php

declare(strict_types=1);

// Dependency injection
use DI\Container;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();

$settings = require __DIR__ . '/../app/settings.php';
$settings($container);

$logger = require __DIR__ . '/../app/logger.php';
$logger($container);

// Set Container on app
AppFactory::setContainer($container);

// Create App
$app = AppFactory::create();

$views = require __DIR__ . '/../app/views.php';
$views($app);

$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

// Add Route Definitions
$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

// Run app
$app->run();