<?php

namespace App\Repositories;

use App\Models\Purchase;

class PurchaseRepository
{
    protected $model;

    public function __construct(Purchase $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
