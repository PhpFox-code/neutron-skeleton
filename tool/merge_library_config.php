<?php

include __DIR__ . '/../config/global.constants.php';

$libraryDir = PHPFOX_DIR . '/vendor/codelego/';

$autoloader = include PHPFOX_DIR . '/vendor/autoload.php';

$autoloader->addPsr4('Phpfox\\Auth\\', PHPFOX_DIR . '/library/phpfox-auth/src');
$autoloader->addPsr4('Phpfox\\Form\\', PHPFOX_DIR . '/library/phpfox-form/src');

$directoryIterator
    = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($libraryDir,
    RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST,
    RecursiveIteratorIterator::CATCH_GET_CHILD // Ignore "Permission denied"
);

$paths = [];
$merged = [];

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
        $merged [$name] = array_merge($merged[$name], $data[$name]);
    }
}

$filename = PHPFOX_DIR . '/config/library.config.php';

file_put_contents($filename, '<?php return ' . var_export($merged, true) . ';');

chmod($filename, 0777);


echo "Done", PHP_EOL;