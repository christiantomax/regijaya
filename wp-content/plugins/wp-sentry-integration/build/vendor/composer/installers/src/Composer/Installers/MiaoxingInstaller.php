<?php

namespace WPSentry\ScopedVendor\Composer\Installers;

class MiaoxingInstaller extends \WPSentry\ScopedVendor\Composer\Installers\BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array('plugin' => 'plugins/{$name}/');
}
