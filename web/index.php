<?php

require_once __DIR__ . '/../vendor/autoload.php';

$io = new MessageBufferIO();
$installer = new Installer($io, __DIR__ . '/..');
$installer->run();

echo '<h1>Output</h1>' . implode('</br>', $io->getMessages());
