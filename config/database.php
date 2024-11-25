<?php

return [
    'pulse' => [
        'driver' => env('PULSE_DB_DRIVER', 'mariadb'),
        'url' => env('PULSE_DB_URL'),
        'host' => env('PULSE_DB_HOST', '127.0.0.1'),
        'port' => env('PULSE_DB_PORT', '3306'),
        'database' => env('PULSE_DB_DATABASE', 'pulse'),
        'username' => env('PULSE_DB_USERNAME', 'root'),
        'password' => env('PULSE_DB_PASSWORD', ''),
        'unix_socket' => env('PULSE_DB_SOCKET', ''),
        'charset' => env('PULSE_DB_CHARSET', 'utf8mb4'),
        'collation' => env('PULSE_DB_COLLATION', 'utf8mb4_unicode_ci'),
        'prefix' => env('PULSE_DB_PREFIX', \Illuminate\Support\Str::snake(config('app.name').'_')),
        'prefix_indexes' => false,
        'strict' => true,
        'engine' => null,
        'options' => extension_loaded('pdo_mysql') ? array_filter([
            PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        ]) : [],
    ],
];
