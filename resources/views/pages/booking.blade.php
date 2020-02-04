@extends('layouts.pages')

@section('title', 'Pesanan')

@section('content')

<div class="main">
    <div class="container">
      <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Pesanan</li>
      </ul>
      
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h2>Rincian Peminjaman Mobil</h2>
                <!-- BEGIN CHECKOUT PAGE -->
                <form onsubmit="return submitForm();">
                    <div class="panel-group checkout-page accordion scrollable" id="checkout-page">
        
                        <!-- BEGIN PAYMENT ADDRESS -->
                        <div id="payment-address" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                            <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-address-content" class="accordion-toggle">
                                Step 1: Account &amp; Billing Details
                            </a>
                            </h2>
                        </div>
                        <div id="payment-address-content" class="panel-collapse collapse in">
                            <div class="panel-body row">
                            <div class="col-md-6 col-sm-6">
                                <h3>Your Personal Details</h3>
                                <div class="form-group">
                                <label for="firstname">Nama <span class="require">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{Auth::user()->name}}">
                                </div>
                                <div class="form-group">
                                <label for="email">E-Mail <span class="require">*</span></label>
                                <input type="text" name="email" id="email" class="form-control" value="{{Auth::user()->email}}">
                                </div>
                                <div class="form-group">
                                <label for="telephone">Telephone <span class="require">*</span></label>
                                <input type="text" name="tlp" id="tlp" class="form-control">
                                </div>
                                <p>Tanggal Peminjaman :</p>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker6'>
                                        <input type='text' class="form-control" name="tgl_sewa" id="tgl_sewa"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>

                                <p>Tanggal Pengembalian :</p>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker7'>
                                        <input type='text' class="form-control" name="tgl_kembali" id="tgl_kembali"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
        
                            </div>

                            <hr>
                            <div class="col-md-12">                      
                                
                                <button class="btn btn-primary  pull-right" type="submit" data-toggle="collapse" data-parent="#checkout-page" data-target="#payment-method-content" id="button-payment-address">Continue</button>
                                                    
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- END PAYMENT ADDRESS -->
        
                        <!-- BEGIN PAYMENT METHOD -->
                        <div id="payment-method" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                            <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-method-content" class="accordion-toggle">
                                Step 2: Payment Method
                            </a>
                            </h2>
                        </div>
                        <div id="payment-method-content" class="panel-collapse collapse">
                            <div class="panel-body row">
                            <div class="col-md-12">
                                <p>Please select the preferred payment method to use on this order.</p>
                                <div class="radio-list">
                                <label>
                                    <input type="radio" name="CashOnDelivery" value="CashOnDelivery"> Transfer Bank
                                </label>
                                <label>
                                    <input type="radio" name="CashOnDelivery" value="CashOnDelivery"> Cash On Delivery
                                </label>
                                </div>
                                <div class="form-group">
                                <label for="delivery-payment-method">Add Comments About Your Order</label>
                                <textarea id="delivery-payment-method" rows="8" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary  pull-right" type="submit" id="button-payment-method" data-toggle="collapse" data-parent="#checkout-page" data-target="#confirm-content">Continue</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- END PAYMENT METHOD -->
        
                        <!-- BEGIN CONFIRM -->
                        <div id="confirm" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                            <a data-toggle="collapse" data-parent="#checkout-page" href="#confirm-content" class="accordion-toggle">
                                Step 3: Confirm Order
                            </a>
                            </h2>
                        </div>
                        @foreach ($cars as $data)
                    <input type="hidden" id="total" name="total" value="{{$data->harga}}">
                        <input type="hidden" id="id_cars" name="id_cars" value="{{$data->id}}">
                        <div id="confirm-content" class="panel-collapse collapse">
                            <div class="panel-body row">
                            <div class="col-md-12 clearfix">
                                <div class="table-wrapper-responsive">
                                <table class="text-center">
                                <tr>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Tipe</th>
                                    <th class="text-center">Merek</th>
                                    <th class="text-center">Plate</th>
                                    <th class="text-center">Hari</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Total</th>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('image/'.$data->foto)  }}" height="100px"/></td>
                                    <td>{{ $data -> tipe }}</td>
                                    <td>{{ $data -> merek }}</td>
                                    <td>{{ $data -> plate }}</td>
                                    <td>-</td>
                                    <td><strong><span>Rp </span>{{$data->harga}}</strong></td>
                                    <td><strong><span>Rp </span>{{$data->harga}}</strong></td>
                                </tr>
                                </table>
                                </div>
                                <div class="clearfix"></div>
                                <button class="btn btn-primary pull-right" type="submit" id="button-confirm">Confirm Order</button>
                                <button type="button" class="btn btn-default pull-right margin-right-20">Cancel</button>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                        <!-- END CONFIRM -->
                    </div>
                </form>
                <!-- END CHECKOUT PAGE -->
            
            </div>
            <!-- END CONTENT -->
        </div>
        
    </div>

    <!-- BEGIN BRANDS -->
    <div class="brands">
        <div class="container">
              <div class="owl-carousel6-brands">
                <img class="brand-lists" src="{{asset('assets/pages-template/pages/img/brands/toyota.png')}}"title="toyota">
                <img class="brand-lists" src="{{asset('assets/pages-template/pages/img/brands/honda.png')}}"title="honda">
                <img class="brand-lists" src="{{asset('assets/pages-template/pages/img/brands/daihatsu.png')}}"title="daihatsu">
                <img class="brand-lists" src="{{asset('assets/pages-template/pages/img/brands/mazda.png')}}"title="mazda">
                <img class="brand-lists" src="{{asset('assets/pages-template/pages/img/brands/hyundai.png')}}"title="hyundai">
                <img class="brand-lists" src="{{asset('assets/pages-template/pages/img/brands/suzuki.png')}}"title="suzuki">
                
              </div>
          </div>
      </div>
      <!-- END BRANDS -->
</div>

@endsection

@section('script')

<script type="text/javascript">

    $(function () {
        $('#datetimepicker6').datetimepicker({
            locale:'id',  
            // format: 'dddd, DD MMMM YYYY',
            format: 'YYYY-MM-DD',
            
        });
        $('#datetimepicker7').datetimepicker({
            locale:'id',
            format: 'YYYY-MM-DD',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);

        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });

        
    });
</script>


<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
<script>
function submitForm() {
// Kirim request ajax
$.post("{{ route('booking.store') }}",
{
    _method: 'POST',
    _token: '{{ csrf_token() }}',
    id_cars: $('input#id_cars').val(),
    tlp: $('input#tlp').val(),
    tgl_sewa: $('input#tgl_sewa').val(),
    tgl_kembali: $('input#tgl_kembali').val(),
    total: $('input#total').val(),
    
},
function (data, status) {
    snap.pay(data.snap_token, {
        // Optional
        onSuccess: function (result) {
            location.reload();
        },
        // Optional
        onPending: function (result) {
            location.reload();
        },
        // Optional
        onError: function (result) {
            location.reload();
        }
    });
});
return false;
}
</script>
@endsection
