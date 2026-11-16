<?php
require_once dirname(dirname(__DIR__)) . '/config/database.php';

$database = appDatabaseConfig();
$DB_con = new PDO(
    "mysql:host={$database['host']};dbname={$database['name']};charset=utf8mb4",
    $database['user'],
    $database['password'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
