<?php
namespace App\Business;

use App\Models\Device;
use App\Repositories\PurchaseRepository;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        $data['user_id'] = $user->id;
        $device = Device::where('user_id',$user->id)->first();
        $data['device_id'] = $device->id;
        $data['status'] = true;
        $purchase = $this->purchaseRepository->create($data);
        return $purchase;
    }
}
