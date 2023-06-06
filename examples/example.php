<?php
require_once __DIR__ . '/../vendor/autoload.php';
// use Nichin79\DotEnv\DotEnv;

(new Nichin79\DotEnv\DotEnv(__DIR__ . '/../.env'))->load();
$config = [
  'dsn' => $_ENV['DB_DSN'],
  'user' => $_ENV['DB_USER'],
  'pass' => $_ENV['DB_PASS'],
];

var_dump($config);
var_dump($_ENV);
var_dump($_SERVER);