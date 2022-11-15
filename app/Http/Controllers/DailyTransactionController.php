<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class DailyTransactionController extends Controller
{
    public function index()
    {
        $data = Transaksi::All();
        return view('daily-transaction.index', compact('data'));
    }
}
