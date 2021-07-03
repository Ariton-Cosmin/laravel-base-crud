<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('homepage');
    }
    
}
