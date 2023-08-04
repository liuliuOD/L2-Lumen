<?php

namespace App\Repositories;

abstract class Repository
{
    protected $model;

    public function first()
    {
        return $this->model->first();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function get()
    {
        return $this->model->all();
    }
}
