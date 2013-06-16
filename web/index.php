<?php

require_once __DIR__ . '/../vendor/autoload.php';

$io = new MessageBufferIO();
$installer = new Installer($io, __DIR__ . '/..');
/*
//$originalConfig = $composer->getConfig();
//$originalVendorDir = $composer->getConfig()->get('vendor-dir');
$composer->getConfig()->merge(array('config' => array('vendor-dir' => 'foo')));

var_dump($composer->getConfig()->get('vendor-dir'));
$installer = Installer::create($io, $composer);

$origDir = __DIR__;
chdir(__DIR__.'/boum');
$installer->setUpdate(true);
$installer->run();
chdir($origDir);*/
$installer->run();
echo '<h1>Output</h1>' . implode('</br>', $io->getMessages());

/*
require_once __DIR__ . '/../src/MessageBufferIO.php';

$embeddedComposerBuilder = new EmbeddedComposerBuilder($loader, __DIR__ . '/../plugin');
$embeddedComposer = $embeddedComposerBuilder
    ->setComposerFilename('plugin.json')
    ->setVendorDirectory('plugin')
    ->build();
$embeddedComposer->processAdditionalAutoloads();
$io = new MessageBufferIO();
$composer = $embeddedComposer->createComposer($io);

$package1 = $embeddedComposer->findPackage('stefk/forum-bundle');
$package2 = $embeddedComposer->findPackage('composer/composer');

echo '<h1>Package forum</h1>' . (is_null($package1) ? 'not found' : $package2->getName());
echo '<h1>Package composer</h1>' . $package2->getName();

$installer = $embeddedComposer->createInstaller($io);

echo '<h1>Ext repo</h1>';
foreach ($embeddedComposer->getExternalRepository()->getPackages() as $package) {
    echo "<li>{$package->getName()}";
}
echo '<h1>Int repo</h1>';
foreach ($embeddedComposer->getInternalRepository()->getPackages() as $package) {
    echo "<li>{$package->getName()}";
}


$installer->setUpdate(true);
$installer->run();

echo '<h1>Output</h1>' . implode('</br>', $io->getMessages());

*/