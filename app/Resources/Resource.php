<?php

namespace App\Resources;

class Resource extends \Illuminate\Http\Resources\Json\JsonResource
{
    public function __construct($resource)
    {
        parent::__construct($resource);

        // remove wrap, default 'data'
        $this->wrap('');
    }
}
