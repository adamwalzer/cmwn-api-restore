<?php

namespace Restore\Controller;

use Restore\Service\RestoreDbServiceInterface;
use Zend\Mvc\Controller\AbstractConsoleController as ConsoleController;

class RestoreDbController extends ConsoleController
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

    public function restoreAction()
    {
        $this->restoreService->runDbStateRestorer();
    }
}
