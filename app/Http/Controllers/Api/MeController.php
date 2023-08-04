<?php

namespace App\Http\Controllers\Api;

use App\Resources\MeResource;
use App\Services\AccountService;

class MeController
{
    protected $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function show()
    {
        return new MeResource($this->accountService->findMe());
    }
}
