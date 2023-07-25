<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){
       
        $comics = Comic::all();

        $list= config('db-footer.comics');
        $list_2= config('db-footer.info');
        $list_3= config('db-footer.sites');
      
        return view('home', compact('comics', 'list', 'list_2', 'list_3'));
    }
}
