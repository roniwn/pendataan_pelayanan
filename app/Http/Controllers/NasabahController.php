<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nasabah;

class NasabahController extends Controller
{
    public function __construct() 
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$data=nasabah::all();
    	return $data;
    }
}
 

