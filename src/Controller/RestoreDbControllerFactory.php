<?php

namespace Restore\Controller;

use Restore\Service\RestoreDbServiceInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class RestoreDbControllerFactory
 * @package Restore\Controller
 */
class RestoreDbControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $serviceLocator = $serviceLocator instanceof ServiceLocatorAwareInterface
            ? $serviceLocator->getServiceLocator()
            : $serviceLocator;

        $service = $serviceLocator->get(RestoreDbServiceInterface::class);
        return new RestoreDbController($service);
    }
}
