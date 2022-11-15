<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyTransactionController extends Controller
{
    public function index()
    {
        return view('daily-transaction.index');
    }
}
