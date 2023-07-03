<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Http::get("localhost:3000/transaction")->json()['result'];

        return view('home', ['transactions' => $transactions]);

    }
}