<?php

namespace Restore\Delegator;

use Zend\ServiceManager\DelegatorFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class RestoreDbDelegatorFactory
 * @package Restore\Delegator
 */
class RestoreDbDelegatorFactory implements DelegatorFactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createDelegatorWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName, $callback)
    {
        $realService = call_user_func($callback);
        return new RestoreDbDelegator($realService);
    }
}
