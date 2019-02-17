<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resquest; 

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
