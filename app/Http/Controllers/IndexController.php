<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nikah;
use App\Models\Ibadah;

class IndexController extends Controller
{
    
    public function index()
    {
    // $data=Nikah::all();
    // $ibadah=Ibadah::all();
    return view('index');
    // ->with([
        // 'data' => $data
        // 'ibadah' => $ibadah
    // ]);
    }
}
