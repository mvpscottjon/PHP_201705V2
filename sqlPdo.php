<?php

$host = '127.0.0.1';
$db = 'iii';
$username = 'root';
$passwd = 'root';
$driver = 'mysql';
$charset = 'utf8';

$dsn = "{$driver}:host={$host};dbname={$db};charset={$charset}";

$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH];

