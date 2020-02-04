<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public  function booking($id)
    {
        $cars= DB::table('cars')
        ->where('id',$id)->get();

        return view('pages.booking',['cars'=>$cars]);
    }
}
