<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     title="MeResource",
 *     description="MeResource",
 *     type="object",
 * )
 */
class MeResource
{
    /**
     * @OA\Property(
     *     description="user ID",
     *     example=1,
     * )
     *
     * @var int
     */
    public $id;

    /**
     * @OA\Property(
     *     description="username",
     *     example="liuliu (l2)",
     * )
     *
     * @var string
     */
    public $username;

    /**
     * @OA\Property(
     *     description="user email",
     *     example="liuliugit@gmail.com",
     * )
     *
     * @var string
     */
    public $email;
}
