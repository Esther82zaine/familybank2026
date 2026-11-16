<?php

function appDatabaseConfig()
{
    static $config;

    if ($config !== null) {
        return $config;
    }

    $config = [
        'host' => 'localhost',
        'name' => 'internetbanking',
        'user' => 'root',
        'password' => '',
    ];

    $localConfigPath = __DIR__ . '/database.local.php';
    if (is_file($localConfigPath)) {
        $localConfig = require $localConfigPath;
        if (!is_array($localConfig)) {
            throw new RuntimeException('The local database configuration must return an array.');
        }

        $config = array_merge($config, $localConfig);
    }

    foreach (['host', 'name', 'user', 'password'] as $key) {
        if (!array_key_exists($key, $config) || !is_string($config[$key])) {
            throw new RuntimeException('Invalid database configuration: ' . $key);
        }
    }

    return $config;
}
