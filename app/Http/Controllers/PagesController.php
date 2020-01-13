<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
}
