<?php

use Composer\Factory;
use Composer\Installer as BaseInstaller;

class Installer
{
    private $io;
    private $baseDir;

    public function __construct(MessageBufferIO $io, $baseDir)
    {
        $this->io = $io;
        $this->baseDir = $baseDir;
    }

    public function run()
    {
        // All the file paths used by composer are based on the current
        // working directory : it needs to be set to the composer.json
        // directory to avoid any unexpected behaviour.
        $originalDir = getcwd();
        chdir($this->baseDir);
        $composer = Factory::create($this->io, $this->baseDir . '/composer.json');
        $installer = BaseInstaller::create($this->io, $composer);
        $installer->setUpdate(true);
        $installer->run();
        chdir($originalDir);
    }
}