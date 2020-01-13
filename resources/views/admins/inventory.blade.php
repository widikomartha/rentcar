@extends('layouts.admins')

@section('title', 'Inventory')

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8"><i class="feather icon-home fa-2x"> </i>
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
                        <div class="card-block">

                            <div class="pull-right margin-bottom-10">
                                <div class="animation-model">
                                    <button type="button" class="btn btn-grd-info btn-round margin waves-effect md-trigger" data-modal="modal-5"><i class="fa fa-car"></i> Add Car</button>
                                    
                                    <div class="md-modal md-effect-5" id="modal-5">
                                        <div class="md-content">
                                            <h3>Add Car</h3>
                                            <div>
                                                <form>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Normal Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-ui-volume"></i></span>
                                                                <input type="text" class="form-control" placeholder="Normal Text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Bold Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-queen"></i></span>
                                                                <input type="text" class="form-control form-control-bold" placeholder=".form-control-bold">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Capitalize Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-presentation"></i></span>
                                                                <input type="text" class="form-control form-control-capitalize" placeholder=".form-control-capitalize">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Uppercase Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-wifi"></i></span>
                                                                <input type="text" class="form-control form-control-uppercase" placeholder=".form-control-uppercase">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Lowercase Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-shield"></i></span>
                                                                <input type="text" class="form-control form-control-lowercase" placeholder=".form-control-lowercase">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Varient Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-ui-volume"></i></span>
                                                                <input type="text" class="form-control form-control-variant" placeholder=".form-control-variant">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Left-Align Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-presentation"></i></span>
                                                                <input type="text" class="form-control form-control-left" placeholder=".form-control-left">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Center-Align Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-queen"></i></span>
                                                                <input type="text" class="form-control form-control-center" placeholder=".form-control-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">Right-Align Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-shield"></i></span>
                                                                <input type="text" class="form-control form-control-right" placeholder=".form-control-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-4 col-lg-2 col-form-label">RTL Text</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="icofont icofont-ui-volume"></i></span>
                                                                <input type="text" class="form-control form-control-rtl" placeholder=".form-control-rtl">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <button type="button" class="btn btn-primary waves-effect md-close">Close</button>
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
                                                <th>Model</th>
                                                <th>Licensi Plate</th>
                                                <th>Stock</th>
                                                <th>Price/day</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            for ($i = 1; $i <= 15; $i++):
                                        ?>
                                            <tr>
                                                <td class="align-middle">1</td>
                                                <td class="align-middle"><img style="width:200px" src="{{asset('assets/admin-template/images\mobil.png')}}" alt="MOBIL"></td>
                                                <td class="align-middle">Ferari Enzo</td>
                                                <td class="align-middle">DK 1305 KU</td>
                                                <td class="align-middle">150</td>
                                                <td class="align-middle">Rp 500.000</td>
                                                <td class="align-middle"><label class="label label-success">available</label></td>
                                                <td class="align-middle">
                                                    <i class="feather icon-eye fa-lg" data-toggle="tooltip" data-placement="left" title="View Detail"> </i><br>
                                                    <i class="feather icon-edit fa-lg" data-toggle="tooltip" data-placement="left" title="Edit"> </i><br>
                                                    <i class="feather icon-trash-2 fa-lg" data-toggle="tooltip" data-placement="left" title="Delete"> </i>
                                                </td>
                                            </tr>
                                            <?php
                                                endfor;
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Model</th>
                                                <th>Licensi Plate</th>
                                                <th>Stock</th>
                                                <th>Price/day</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="dt-responsive table-responsive">
                                    <table id="realtime-reorder" class="table table-striped table-bordered nowrap text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Model</th>
                                                <th>Licensi Plate</th>
                                                <th>Stock</th>
                                                <th>Price/day</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            for ($i = 1; $i <= 15; $i++):
                                        ?>
                                            <tr>
                                                <td class="align-middle">2</td>
                                                <td class="align-middle"><img style="width:200px" src="{{asset('assets/admin-template/images\mobil2.png')}}" alt="MOBIL"></td>
                                                <td class="align-middle">Ferari Enzo</td>
                                                <td class="align-middle">DK 1305 KU</td>
                                                <td class="align-middle">150</td>
                                                <td class="align-middle">Rp 500.000</td>
                                                <td class="align-middle"><label class="label label-success">available</label></td>
                                                <td class="align-middle">
                                                    <i class="feather icon-eye fa-lg" data-toggle="tooltip" data-placement="left" title="View Detail"> </i><br>
                                                    <i class="feather icon-edit fa-lg" data-toggle="tooltip" data-placement="left" title="Edit"> </i><br>
                                                    <i class="feather icon-trash-2 fa-lg" data-toggle="tooltip" data-placement="left" title="Delete"> </i>
                                                </td>
                                            </tr>
                                            <?php
                                                endfor;
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Model</th>
                                                <th>Licensi Plate</th>
                                                <th>Stock</th>
                                                <th>Price/day</th>
                                                <th>Status</th>
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
