<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrxController extends Controller
{
    public function index()
    {
        $user=auth()->user();
        $user->balance;

        return $user->wallet;
    }
}
