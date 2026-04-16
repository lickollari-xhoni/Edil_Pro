<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. IL MAINTENANCE MODE PUOI LASCIARLO COMMENTATO (OPZIONALE)
// if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
//     require $maintenance;
// }

// 2. QUESTO DEVE ESSERE ATTIVO (NON COMMENTARE!)
require __DIR__.'/../vendor/autoload.php';

// 3. ANCHE QUESTO DEVE ESSERE ATTIVO (NON COMMENTARE!)
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// 4. QUESTO GESTISCE LA RICHIESTA
$app->handleRequest(Request::capture());