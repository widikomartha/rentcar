<?php

namespace App\Http\Controllers;

use App\Car;
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
        $car = Car::all();
        return view('pages.car_list', compact('car'), ['cars' => $car]);
    }

    //ABOUTS US

    public  function abouts()
    {
        return view('pages.abouts');
    }

    public  function booking()
    {
        return view('pages.booking');
    }
}
