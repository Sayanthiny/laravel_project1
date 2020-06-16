<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['name' => 'Apptimus tech',
        'tag'=>'We are learning larawel in tamil']);
    }
    
}
