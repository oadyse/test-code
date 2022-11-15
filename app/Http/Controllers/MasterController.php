<?php

namespace App\Http\Controllers;

use App\Models\DataTarget;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $data = DataTarget::All();
        return view('master-data.index', compact('data'));
    }
}
