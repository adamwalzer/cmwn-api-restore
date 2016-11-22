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
        $config = $serviceLocator->get('config');
        $testData = isset($config['test-data']) ? $config['test-data'] : [];
        $adapter = $serviceLocator->get(Adapter::class);
        $realService = new RestoreDbService($adapter, $testData);
        return $realService;
    }
}
