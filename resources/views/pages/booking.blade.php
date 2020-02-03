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
                    <div id="payment-address-content" class="panel-collapse collapse">
                        <div class="panel-body row">
                        <div class="col-md-6 col-sm-6">
                            <h3>Your Personal Details</h3>
                            <div class="form-group">
                            <label for="firstname">Nama <span class="require">*</span></label>
                            <input type="text" id="firstname" class="form-control" value="{{Auth::user()->name}}">
                            </div>
                            <div class="form-group">
                            <label for="email">E-Mail <span class="require">*</span></label>
                            <input type="text" id="email" class="form-control" value="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group">
                            <label for="telephone">Telephone <span class="require">*</span></label>
                            <input type="text" id="telephone" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="telephone">Telephone <span class="require">*</span></label>
                            <input type="date" id="telephone" class="form-control">
                            </div>
    
                        </div>

                        <hr>
                        <div class="col-md-12">                      
                            
                            <button class="btn btn-primary  pull-right" type="submit" data-toggle="collapse" data-parent="#checkout-page" data-target="#shipping-address-content" id="button-payment-address">Continue</button>
                            <div class="checkbox pull-right">
                            <label>
                                <input type="checkbox"> I have read and agree to the <a title="Privacy Policy" href="javascript:;">Privacy Policy</a> &nbsp;&nbsp;&nbsp; 
                            </label>
                            </div>                        
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
                                <input type="radio" name="CashOnDelivery" value="CashOnDelivery"> Cash On Delivery
                            </label>
                            </div>
                            <div class="form-group">
                            <label for="delivery-payment-method">Add Comments About Your Order</label>
                            <textarea id="delivery-payment-method" rows="8" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary  pull-right" type="submit" id="button-payment-method" data-toggle="collapse" data-parent="#checkout-page" data-target="#confirm-content">Continue</button>
                            <div class="checkbox pull-right">
                            <label>
                                <input type="checkbox"> I have read and agree to the <a title="Terms & Conditions" href="javascript:;">Terms & Conditions </a> &nbsp;&nbsp;&nbsp; 
                            </label>
                            </div>  
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
                    <div id="confirm-content" class="panel-collapse collapse">
                        <div class="panel-body row">
                        <div class="col-md-12 clearfix">
                            <div class="table-wrapper-responsive">
                            <table>
                            <tr>
                                <th class="checkout-image">Image</th>
                                <th class="checkout-description">Tipe</th>
                                <th class="checkout-model">Merek</th>
                                <th class="checkout-quantity">Plate</th>
                                <th class="checkout-price">Harga</th>
                            </tr>
                            <tr>
                                <td class="checkout-image">
                                <a href="javascript:;"><img src="{{ asset('image/yaris.jpg')  }}" width="250px" height="100px"/></a>
                                </td>
                                <td class="checkout-description">Yaris
                                </td>
                                <td class="checkout-model">Toyota</td>
                                <td class="checkout-quantity">DK 4773 KU</td>
                                <td class="checkout-price"><strong><span>Rp </span>350.000</strong></td>
                            </tr>
                            </table>
                            </div>
                            <div class="clearfix"></div>
                            <button class="btn btn-primary pull-right" type="submit" id="button-confirm">Confirm Order</button>
                            <button type="button" class="btn btn-default pull-right margin-right-20">Cancel</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- END CONFIRM -->
                </div>
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

@endsection