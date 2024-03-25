<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Smkbm3");
$log->pushHandler(new StreamHandler('Aplication.log', Logger::INFO));

$log->info('Hello World');
$log->info('Selamat Belajar Composer');

