<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['name' => 'Apptimus tech',
        'tag'=>'We are hiring internship trainee for SE']);
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    public function about()
    {
        return view('pages.about');
    }
    public function team()
    {
        return view('pages.team');
    }
}
