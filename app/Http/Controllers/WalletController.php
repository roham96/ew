<?php

namespace App\Http\Controllers;

use App\Http\Resources\WalletResource;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $user=auth()->user();
        return WalletResource::collection($user->wallets);
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $wallet = auth()->user()->createWallet([
            'name' => 'New Wallet1',
            'slug' => 'my-wallet1',
            'meta' => ['currency' => 'IRR'],
        ]);
        return new WalletResource($wallet);
    }

    public function transactions($w)
    {
        return auth()->user()->wa;
    }
}
