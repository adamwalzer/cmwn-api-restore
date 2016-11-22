<?php

namespace Restore\Service;

use Zend\Db\Adapter\Adapter;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class RestoreDbServiceFactory
 * @package Restore\Service
 */
class RestoreDbServiceFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $adapter = $serviceLocator->get(Adapter::class);
        $realService = new RestoreDbService($adapter);
        return $realService;
    }
}
