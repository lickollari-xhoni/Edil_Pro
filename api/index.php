<?php

// Funzione helper per creare cartelle solo se mancano
function create_dir($path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// Crea le cartelle temporanee in /tmp solo se non esistono
create_dir('/tmp/storage/framework/views');
create_dir('/tmp/storage/framework/cache');
create_dir('/tmp/storage/framework/sessions');
create_dir('/tmp/bootstrap/cache');

// Forza Laravel a usare la cartella /tmp
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('CACHE_DIRECTORY=/tmp/storage/framework/cache');
putenv('SESSION_DRIVER=cookie'); 

require __DIR__ . '/../public/index.php';