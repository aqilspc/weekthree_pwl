<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth'); // auth login dead
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =
        [
            'title'=>'ITC | Homepage',
            'slug'=>'ITC',
            'server'=>'Our Products',
            'app'=>'Our Program',
            'web'=>'Our News',
            'network'=>'About Us',
            'contact'=>'Contact Us'
        ];
        return view('welcome',$data);
    }
}
