<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        date_default_timezone_set('Asia/Calcutta');
        $hour = date('G');
        $hour=14;
        return view('pages.home',
         ['name' => 'Apptimus tech',
            'tag'=>'We are hiring internship trainee for SE',
            'hour'=>$hour
           
         ]
        );
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
        return view('pages.team',
        ['totalTeam'=>30]
    );
    }
}
