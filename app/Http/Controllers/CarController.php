<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Car::all();
        return view('admins.cars.index', ['cars' => $car]);
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
        // $car = new Car;
        // $car->tipe =$request->tipe;
        // $car->merek =$request->merek;
        // $car->plate =$request->plate;
        // $car->tahun =$request->tahun;
        // $car->harga =$request->harga;
        // $car->file =$request->file;

        // $car->save();

        $image = $request->file('foto');
        $image_name = str_replace(' ','',$request->foto).''.time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/admin-template/images/cars'.$image_name);

        $this->validate($request,[
            'tipe' => 'required',
            'merek' => 'required',
            'plate' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
            'foto'  =>'required',
        ]);
        
        Car::create([
            'tipe' => $request->tipe,
            'merek' => $request->merek,
            'plate' => $request->plate,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'foto' => $image_name,
            ]); 

        // $this->validate($request,[
        //     'id'=>'required',
        //     'tipe' => 'required',
        //     'merek' => 'required',
        //     'plate' => 'required',
        //     'tahun' => 'required',
        //     'harga' => 'required',
        //     'foto'  =>'required | mimes:jpeg,jpg,png | image',
        // ]);

        // $image = $request->file('foto');
        // $image_name = str_replace(' ','',$request->judul).''.time() . '.' . $image->getClientOriginalExtension();
        // $destinationPath = public_path('/assets/admin-template/images/cars');     


        // DB::table('cars')->insert([
            
        //     'tipe' => $request->tipe,
        //     'merek' => $request->merek,
        //     'plate' => $request->plete,
        //     'tahun' => $request->tahun,
        //     'harga' => $request->harga,
        //     'foto' => $new_name,
        // ]);
        // alihkan halaman ke halaman pegawai

        // $this->validate($request,[
        //     'tipe' => 'required',
        //     'merek' => 'required',
        //     'plate' => 'required',
        //     'tahun' => 'required',
        //     'harga' => 'required',
        //     'foto'  =>'required | mimes:jpeg,jpg,png | image',
        // ]);
    
        //     $foto = $request->file('foto');
    
        //     $new_name = rand() . '.' . $foto->getClientOriginalExtension();
        //     $foto->move(public_path('fotos'), $new_name);
        //     $form_data = array(
        //         'tipe' => $request->tipe,
        //         'merek' => $request->merek,
        //         'plate' => $request->plate,
        //         'tahun' => $request->tahun,
        //         'harga' => $request->harga,
        //         'foto' => $new_name,
        //     );
    
        //     Car::create($form_data);

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
