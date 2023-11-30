<?php

use App\Controller\LoggerController;

require_once dirname(__DIR__).'/vendor/autoload.php';
$config = require_once __DIR__."/../config.php";

$loggerController = new LoggerController($config);

$loggerController->log();
$loggerController->logTo('email');
$loggerController->logToAll();