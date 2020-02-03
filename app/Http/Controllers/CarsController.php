<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Car::all();
        return view('admins.cars.index', compact('car'), ['cars' => $car]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.cars.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Disini proses mendapatkan judul dan memindahkan letak foto ke folder image
        $image        = $request->file('foto');
        $image_name   = $image->getClientOriginalName();
        $request->file('foto')->move("image/", $image_name);

        $this->validate($request,[
            'tipe' => 'required',
            'merek' => 'required',
            'plate' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
        ]);
        
        Car::create([
            'tipe' => $request->tipe,
            'merek' => $request->merek,
            'plate' => $request->plate,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'foto' => $image_name,
            ]); 

        return redirect('/admin/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('admins.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        Car::where('id', $car->id)
            ->update([
                'tipe' => $request->tipe,
                'merek' => $request->merek,
                'plate' => $request->plate,
                'tahun' => $request->tahun,
                'harga' => $request->harga,
                
            ]);

            $update = Car::where('id', $car->id)->first();
            if ($request->file('foto') == "")
            {
                $update->foto = $update->foto;
            } 
            else
            {
                $image       = $request->file('foto');
                $image_name   = $image->getClientOriginalName();
                $request->file('foto')->move("image/", $image_name);
                
                $update->foto = $image_name;
            }

        return redirect('/admin/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        Car::destroy($car->id);
        return redirect('/admin/cars');
        //return $car;
    }
}
