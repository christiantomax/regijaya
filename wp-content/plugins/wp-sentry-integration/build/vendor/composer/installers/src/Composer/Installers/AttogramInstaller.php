<?php

namespace WPSentry\ScopedVendor\Composer\Installers;

class AttogramInstaller extends \WPSentry\ScopedVendor\Composer\Installers\BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array('module' => 'modules/{$name}/');
}
