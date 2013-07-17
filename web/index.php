<?php

require_once __DIR__ . '/../vendor/autoload.php';

if (!is_writable(__DIR__ . '/../vendor')) {
    die('Vendor directory must be writable');
}

$io = new MessageBufferIO();
$installer = new Installer($io, __DIR__ . '/..');
$installer->run();

echo '<h1>Output</h1>' . implode('</br>', $io->getMessages());
