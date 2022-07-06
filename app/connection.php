<?php

declare(strict_types=1);

use DI\Container;

return function (Container $container) {
    $container->set('connection', function() use ($container) {
        $connection = $container->get('settings')['connection'];
        $host = $connection['host'];
        $dbname = $connection['dbname'];
        $dbuser = $connection['dbuser'];
        $dbpass = $connection['dbpass'];
        try {
            print 'a';
            $connection = new PDO("mysql:host={$host};dbname={$dbname}", $dbuser, $dbpass);
            print 'b';
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connection;
    });
};