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

    /**
     * @OA\Get(
     *     path="/api/me",
     *     @OA\Response(
     *         response="200",
     *         description="Success",
     *         @OA\JsonContent(
     *             ref="#/components/schemas/MeResource",
     *         ),
     *     ),
     * )
     */
    public function show()
    {
        return new MeResource($this->accountService->findMe());
    }
}
