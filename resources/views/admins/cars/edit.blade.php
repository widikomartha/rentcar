@extends('layouts.admins')

@section('title', 'Edit Cars')

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8"><i class="fa fa-wrench fa-2x margin-right-10"> </i>
                            <div class="page-header-title">
                                <h4> @yield('title')</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <div class="page-body">
                    <!-- Basic column reorder table start -->
                    <div class="card">
                        <!-- Nav tabs -->
                        <div class="card-block col-6">
                            <form method="POST" action="/admin/cars/{{$car->id}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tipe Mobil</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-round" name="tipe" placeholder="Masukkan Tipe Mobil" value="{{ $car->tipe}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Merek Mobil</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-round" name="merek" placeholder="Masukkan Merek Mobil" value="{{ $car->merek}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Plate Mobil</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-round" name="plate" placeholder="Masukkan Plate Mobil" value="{{ $car->plate}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tahun Pembuatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-round" name="tahun" placeholder="Masukkan Tahun Pembuatan" value="{{ $car->tahun}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Harga Sewa</label>
                                    <div class="col-sm-8">
                                        <input class="form-control form-control-roundr" type="text" id="harga" name="harga" placeholder="Masukkan Harga Sewa per Hari" value="{{ $car->harga}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Upload Foto</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="foto">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a  href="/admin/cars" class="btn btn-grd-inverse btn-round">Close</a>
                                    <button type="submit" class="btn btn-grd-info btn-round"> Save Changes</button>
                                </div>
                            </form>
                        </div>
                            
                    </div>
                    <!-- Basic column reorder table end -->
                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>



@endsection
