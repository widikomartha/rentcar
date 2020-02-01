<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //DASHBOARD

    public  function index()
    {
        return view('admins.index');
    }

    //INVENTORY

}
