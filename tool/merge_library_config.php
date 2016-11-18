<?php

include __DIR__ . '/../config/constants.global.php';

$dirs = [
    PHPFOX_DIR . '/vendor/codelego/',
    PHPFOX_DIR . '/package',
];
$autoloader = include PHPFOX_DIR . '/vendor/autoload.php';
$paths = [];
$merged = [];

foreach ($dirs as $libraryDir) {
    $directoryIterator
        = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($libraryDir,
        RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST,
        RecursiveIteratorIterator::CATCH_GET_CHILD // Ignore "Permission denied"
    );

    foreach ($directoryIterator as $path => $entry) {
        if ($entry->isDir()) {
            continue;
        }

        $path = $entry->getPath() . '/' . $entry->getFilename();

        if (!strpos($path, 'config/module.config.php')) {
            continue;
        }
        $paths[] = $path;
    }

}

foreach ($paths as $path) {
    if (!file_exists($path)) {
        continue;
    }
    $data = include $path;

    if (!is_array($data)) {
        continue;
    }
    foreach ($data as $name => $array) {
        if (!isset($merged[$name])) {
            $merged[$name] = [];
        }
        $merged [$name] = array_merge_recursive($merged[$name], $data[$name]);
    }
}


$filename = PHPFOX_DIR . '/config/library.config.php';

file_put_contents($filename, '<?php return ' . var_export($merged, true) . ';');

chmod($filename, 0777);


echo "Done", PHP_EOL;