<?php

namespace App\Http\Controllers;

use App\Http\Requests\Action\DepositRequest;
use App\Http\Requests\Action\TransferRequest;
use App\Http\Requests\Action\WithdrawRequest;
use App\Models\User;

class ActionController extends Controller
{
    public function balance()
    {
        return response()->json(['data' => ['balance' => auth()->user()->balance]]);
    }
    public function transfers()
    {
        return response()->json(['data' => ['transfers' => auth()->user()->transfers]]);
    }

    public function refreshBalance()
    {
        return auth()->user()->wallet->refreshBalance();

    }
    public function walletTransactions()
    {
        return response()->json(['data' => ['walletTransactions' => auth()->user()->walletTransactions]]);

    }

    public function deposit(DepositRequest $request)
    {
        return response()->json(['data' => ['deposit' => auth()->user()->deposit($request->amount)]]);

    }
    public function withdraw(WithdrawRequest $request)
    {
        return response()->json(['data' => ['withdraw'  => auth()->user()->withdraw($request->amount)]]);
    }
    public function transfer(TransferRequest $request)
    {
        $dest = User::query()->where('mobile', $request->mobile)->first();
        $amount = $request->amount;

        return auth()->user()->transfer(
            $dest,
            $amount
        );
    }

}
