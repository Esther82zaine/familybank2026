<?php
require_once dirname(dirname(__DIR__)) . '/config/database.php';

$database = appDatabaseConfig();
$mysqli = new mysqli(
    $database['host'],
    $database['user'],
    $database['password'],
    $database['name']
);
