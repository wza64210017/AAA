<?php

namespace Account\Controller;

use Account\Services\AccountService;

class AccountController
{
    protected $service;
    public function __construct(AccountService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $this->service->accountEcho();
    }
}
