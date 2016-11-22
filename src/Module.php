<?php

namespace Restore;

/**
 * Class Module
 * @package Restore
 */
class Module
{
    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
