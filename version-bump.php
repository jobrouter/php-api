<?php

[$filename, $newVersion] = $argv;

if (preg_match('/^\d+\.\d+\.\d+-(beta\.\d+|hotfix\.\d+|stable)$/', $newVersion) !== 1) {
    echo "Given version $newVersion does not match expected pattern." . PHP_EOL;
    exit(-1);
}

$file = file_get_contents(__DIR__ . '/composer.json');
$json = json_decode($file, true);

$json['version'] = $newVersion;

file_put_contents(__DIR__ . '/composer.json', json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

