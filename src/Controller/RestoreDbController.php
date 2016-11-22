<?php

namespace Restore\Controller;

use Restore\Service\RestoreDbServiceInterface;
use ZF\ApiProblem\ApiProblem;
use Zend\Mvc\Controller\AbstractActionController as ActionController;

/**
 * Class RestoreDbController
 * @package Restore\Controller
 */
class RestoreDbController extends ActionController
{
    /**
     * @var RestoreDbServiceInterface
     */
    protected $restoreService;

    /**
     * RestoreDbController constructor.
     * @param RestoreDbServiceInterface $restoreService
     */
    public function __construct(RestoreDbServiceInterface $restoreService)
    {
        $this->restoreService = $restoreService;
    }

    /**
     * @return ApiProblem
     */
    public function restoreAction()
    {
        $this->restoreService->runDbStateRestorer();

        return new ApiProblem(200, 'Database restored');
    }
}
