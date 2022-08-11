<?php
namespace App\Business;

use App\Repositories\PurchaseRepository;
use Illuminate\Support\Facades\Hash;

class PurchaseManager
{
    protected $purchaseRepository;

    public function __construct(PurchaseRepository $purchaseRepository)
    {
        $this->purchaseRepository = $purchaseRepository;
    }

    public function create(array $data)
    {
        $purchase = $this->purchaseRepository->create($data);
        return $purchase;
    }
}
