<?php

namespace App\Resources;

class MeResource extends Resource
{
    public function toArray($request)
    {
        return [
            "id"       => intval($this->id),
            "username" => strval($this->username),
            "email"    => strval($this->email),
        ];
    }
}
