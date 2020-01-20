<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    //HOME

    public  function index()
    {
        return view('pages.index');
    }
    
    //CAR LIST

    public  function car_list()
    {
        return view('pages.car_list');
    }

    //ABOUTS US

    public  function abouts()
    {
        return view('pages.abouts');
    }
}
