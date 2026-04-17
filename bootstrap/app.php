<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

/*
|--------------------------------------------------------------------------
| FIX PER VERCEL (STORAGE IN /TMP)
|--------------------------------------------------------------------------
*/
if (isset($_SERVER['VERCEL_URL'])) {
    $storagePath = '/tmp/storage';
    
    // Creiamo le cartelle se non esistono (fondamentale per evitare errori 500)
    $neededPaths = [
        $storagePath . '/framework/views',
        $storagePath . '/framework/cache',
        $storagePath . '/framework/sessions',
        $storagePath . '/bootstrap/cache',
    ];

    foreach ($neededPaths as $path) {
        if (!is_dir($path)) {
            @mkdir($path, 0755, true);
        }
    }

    // Sovrascriviamo le variabili d'ambiente per forzare Laravel a usare /tmp
    putenv("APP_STORAGE=$storagePath");
    putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");
    putenv("BOOTSTRAP_CACHE_PATH=$storagePath/bootstrap/cache");
}

/*
|--------------------------------------------------------------------------
| CONFIGURAZIONE APPLICAZIONE
|--------------------------------------------------------------------------
*/
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();