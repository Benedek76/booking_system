<?php
//die('a');
return
    [
        'paths' => [
            'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
            'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
        ],
        'environments' => [
            'default_migration_table' => 'phinxlog',
            'default_environment' => 'development',
            'production' => [
                'adapter' => 'mysql',
                'host' => 'localhost',
                'name' => 'production_db',
                'user' => 'root',
                'pass' => '',
                'port' => '3306',
                'charset' => 'utf8',
            ],
            'development' => [
                'adapter' => 'mysql',
                'host' => 'bs_db_1',
                'name' => 'db',
                'user' => 'root',
                'pass' => 'secret',
                'port' => '3306',
                'charset' => 'utf8',
            ],

            /*'connection' => [
                'host'   => 'bs_db_1',
                'dbname' => 'db',
                'dbuser' => 'root',
                'dbpass' => 'secret',
            ]*/

            'testing' => [
                'adapter' => 'mysql',
                'host' => 'localhost',
                'name' => 'testing_db',
                'user' => 'root',
                'pass' => '',
                'port' => '3306',
                'charset' => 'utf8',
            ]
        ],
        'version_order' => 'creation'
    ];
