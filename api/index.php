<?php

// 1. Configurazione percorsi temporanei
$baseTmp = '/tmp/laravel';
$paths = [
    $baseTmp . '/storage/framework/views',
    $baseTmp . '/storage/framework/cache',
    $baseTmp . '/storage/framework/sessions',
    $baseTmp . '/bootstrap/cache',
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        @mkdir($path, 0755, true);
    }
}

// 2. Forziamo Laravel a usare /tmp per tutto ciò che è scrittura
putenv("APP_STORAGE=$baseTmp/storage");
putenv("VIEW_COMPILED_PATH=$baseTmp/storage/framework/views");
putenv("BOOTSTRAP_CACHE_PATH=$baseTmp/bootstrap/cache");
putenv("LOG_CHANNEL=stderr");
putenv("SESSION_DRIVER=cookie");

// 3. Carichiamo il file public/index.php originale
require __DIR__ . '/../public/index.php';