<?php

namespace Restore\Service;

/**
 * Interface RestoreDbServiceInterface
 * @package Restore\Service
 */
interface RestoreDbServiceInterface
{
    /**
     * Runs the seeder to update the database with default values
     * @return bool
     */
    public function runDbStateRestorer();
}
