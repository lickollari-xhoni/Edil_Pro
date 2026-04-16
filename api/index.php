<?php

// Crea le cartelle temporanee per Laravel su Vercel
mkdir('/tmp/storage/framework/views', 0755, true);
mkdir('/tmp/storage/framework/cache', 0755, true);
mkdir('/tmp/storage/framework/sessions', 0755, true);
mkdir('/tmp/bootstrap/cache', 0755, true);

// Forza Laravel a usare la cartella /tmp
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('CACHE_DIRECTORY=/tmp/storage/framework/cache');
putenv('SESSION_DRIVER=cookie'); // Le sessioni su file non funzionano bene su Vercel

require __DIR__ . '/../public/index.php';