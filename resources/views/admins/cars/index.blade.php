@extends('layouts.admins')

@section('title', 'Cars')

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8"><i class="fa fa-car fa-2x"> </i>
                            <div class="page-header-title margin-left-10">
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
                        <div class="card-block">

                            <div class="pull-right margin-bottom-10">
                                <div class="animation-model">
                                    <button type="button" class="btn btn-grd-info btn-round margin waves-effect md-trigger" data-modal="modal-5"><i class="fa fa-car"></i> Add Car</button>
                                    
                                    <div class="md-modal md-effect-5" id="modal-5">
                                        <div class="md-content">
                                            <h3>Add Car</h3>
                                            <div>
                                                <form method="POST" action="/admin/cars" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Tipe Mobil</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control form-control-round" name="tipe" placeholder="Masukkan Tipe Mobil" value=>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Merek Mobil</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control form-control-round" name="merek" placeholder="Masukkan Merek Mobil">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Plate Mobil</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control form-control-round" name="plate" placeholder="Masukkan Plate Mobil">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Tahun Pembuatan</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control form-control-round" name="tahun" placeholder="Masukkan Tahun Pembuatan">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Harga Sewa</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control form-control-round" type="text" id="rupiah" name="harga" data-a-sign="Rp " data-a-pad="false" placeholder="Masukkan Harga Sewa per Hari">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Upload Foto</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" class="form-control" name="foto">
                                                        </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary md-close" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary mobtn">Save changes</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-overlay"></div>
                                </div>
                                
                            </div>
                            

                                <div class="dt-responsive table-responsive">
                                    <table id="basic-col-reorder" class="table table-striped table-bordered nowrap text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Tipe</th>
                                                <th>Plate</th>
                                                <th>Tahun</th>
                                                <th>Harga/Hari</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($cars as $data)
                                            <tr>
                                                <td class="align-middle">{{ $loop->iteration}}</td>
                                                <td class="align-middle"><img src="{{ asset('image/'.$data->foto)  }}" height="100px"/></td>
                                                <td class="align-middle">{{ $data -> tipe }}</td>
                                                <td class="align-middle">{{ $data -> plate }}</td>
                                                <td class="align-middle">{{ $data -> tahun }}</td>
                                                <td class="align-middle">{{ $data -> harga }}</td>
                                                <td class="align-middle">
                                                    <i class="feather icon-eye fa-lg" data-toggle="tooltip" data-placement="left" title="View Detail"> </i><br>
                                                    <a href="cars/{{ $data->id }}/edit" >
                                                        <i class="feather icon-edit fa-lg" data-toggle="tooltip" data-placement="left" title="Edit"> </i><br>
                                                    </a>
                                                    <form action="cars/{{$data->id }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Apakah kamu yakin ingin menghapus mobil {{ $data->tipe }}');" style="border: none; background: none;">
                                                            <i class="feather icon-trash-2 fa-lg" data-toggle="tooltip" data-placement="left" title="Delete"> </i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Tipe</th>
                                                <th>Plate</th>
                                                <th>Tahun</th>
                                                <th>Harga/Hari</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

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

@section('script')

<script type="text/javascript">
    
    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, "Rp ");
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "Rp " + rupiah : "";
    }
</script>


@endsection
