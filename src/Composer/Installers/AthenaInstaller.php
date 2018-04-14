<?php
namespace Composer\Installers;

/**
 *
 * Installer for Athena plugins
 *
 * Athena CPI Group
 *
 * Class AthenaInstaller
 * @package Composer\Installers
 */
class AthenaInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'  => 'plugins/{$name}/',
    );
}
