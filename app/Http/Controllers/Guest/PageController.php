<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Comics;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
}
