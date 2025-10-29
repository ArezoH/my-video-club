<?php

spl_autoload_register(function (string $class): void {
    $prefix = 'Dwes\\ProjecteVideoclub\\';
    $baseDir = __DIR__ . '/app/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (is_file($file)) {
        include_once $file;
    }
});
