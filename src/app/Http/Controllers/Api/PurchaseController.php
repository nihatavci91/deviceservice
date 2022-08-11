<?php

namespace App\Http\Controllers\Api;

use App\Business\PurchaseManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PurchaseController extends Controller
{
    public function store(Request $request,PurchaseManager $purchaseManager)
    {
        $validated = $request->validate([
           'uid' => 'string|required',
            'receipt' => 'string|required'
        ]);

        $data = $purchaseManager->create($validated);

        return response_success($data);
    }
}
