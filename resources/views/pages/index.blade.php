@extends('layouts.pages')

@section('title', 'Home')

@section('content')

<!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-20">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-four active">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                                <span class="color-red-v2">Sewa Mobil</span></h2><br/> 
                                <h2 style="font-size:40px; color:#fff;" data-animation="animated fadeInUp">Tanpa Ribet <br></h2>
                                <h2 style="font-size:40px; color:#fff; margin-left:50px;" data-animation="animated fadeInUp">Tanpa Ribut <br></h2>
                                <h2 style="font-size:40px; color:#fff; margin-left:100px;" data-animation="animated fadeInUp">Dapat Rabat <br></h2>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                                Unlimted
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                Layout Options
                            </p>
                            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                                Fully Responsive
                            </p>
                            <a class="carousel-btn" href="#" data-animation="animated fadeInUp">See More Details</a>
                        </div>
                        <img class="carousel-position-five animate-delay hidden-sm hidden-xs" src="{{asset('assets/pages-template/pages/img/shop-slider/slide2/price.png')}}" alt="Price" data-animation="animated zoomIn">
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-six">
                    <div class="center-block container">
                        <div class="center-block carousel-position-four text-center">
                            <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                                Full Admin &amp; Frontend
                            </span>
                            <p class="carousel-subtitle-v4" data-animation="animated fadeInDown">
                                eCommerce UI
                            </p>
                            <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
                                Is Ready For Your Project
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div class="item carousel-item-seven">
                   <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                    The most <br/>
                                    wanted bijouterie
                                </h2>
                                <a class="carousel-btn" href="#" data-animation="animated fadeInUp">But It Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-4">
          </div>
          <div class="col-md-4" >
            <div class="tab-content" style="border: 2px solid #296a94; border-radius:9px;">
              <h2>Cari Penyewaan Mobil</h2>
              <p>Tanggal Peminjaman :</p>
              <div class="form-group">
                  <div class='input-group date' id='datetimepicker6'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
              </div>

              <p>Tanggal Pengembalian :</p>
              <div class="form-group">
                  <div class='input-group date' id='datetimepicker7'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
              </div>


              <div class="text-center margin-top-10">
                <a href="#" ><button type="button" class="btn btn-primary">Cari <i class="fa fa-search search-btn"></i></button></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          </div>
          <!-- END CONTENT -->
        </div>

          <!-- BEGIN CONTENT -->
        <div class="text-center row margin-bottom-40">
          <div class="col-md">
            <h1>Mengapa Sewa Mobil melalui <b class="text-orange">DoCar Bali</b></h1>
          </div>
        </div>

        <div class="row margin-bottom-40">
          <div class="col-md-3 text-center">
              <h3>Mudah & <b class="text-orange">Fleksibel</b></h3>
              Anda hanya butuh 3 tahap untuk dapat menyewa mobil serta dapat melakukannya di mana saja dan kapan saja dengan bantuan aplikasi DOcar.
            </div>
            <div class="col-md-3 text-center">
              <h3>Harga <b class="text-orange">Termurah</b></h3>
              DOcar membantu Anda menentukan pilihan mobil berbiaya sewa termurah dari berbagai partner rental mobil kami melalui sistem pencarian DOcar.
            </div>
            <div class="col-md-3 text-center">
              <h3>Banyak <b class="text-orange">Varian</b></h3>
              Sistem DOcar memberikan kuasa penuh kepada Anda untuk memilih mobil dari berbagai tipe dan merek sehingga dapat memenuhi kebutuhan sewa mobil Anda.
            </div>
            <div class="col-md-3 text-center">
              <h3>Sesuai <b class="text-orange">Pilihan</b></h3>
              Docar menjamin Anda mendapatkan mobil sesuai pilihan Anda dengan memberikan informasi terinci mengenai mobil yang akan Anda pesan.
            </div>
        </div>
            
          <!-- END CONTENT -->

        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>Most Popular Products</h2>
            
            <div class="row product-list">
            <?php 
                for ($i = 1; $i <= 4; $i++):
            ?>
                <div class="col-md-3">
                    <div class="product-item">
                      <div class="pi-img-wrapper">
                        <img src="{{asset('assets/pages-template/pages/img/products/avanza.jpg')}}" class="img-responsive" alt="Berry Lace Dress">
                        <div>
                            <a href="{{asset('assets/pages-template/pages/img/products/avanza.jpg')}}" class="btn btn-default fancybox-button">Zoom</a>
                            <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                        </div>
                      </div>
                      <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                      <div class="pi-price">$29.00</div>
                      <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                    </div>
                </div>
            <?php
                endfor;
            ?>
              
            </div>  
            
            <div class="text-center">
              <a href="#" ><button type="button" class="btn btn-primary">See More Details</button></a>
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        
        <!-- END SIDEBAR & CONTENT -->

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

    

<!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="{{asset('assets/pages-template/pages/img/products/model7.jpg')}}" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="{{asset('assets/pages-template/pages/img/products/model3.jpg')}}"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="{{asset('assets/pages-template/pages/img/products/model4.jpg')}}"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="{{asset('assets/pages-template/pages/img/products/model5.jpg')}}"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h2>Cool green dress with red bell</h2>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>47.00</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat 
                    Nostrud duis molestie at dolore.</p>
                  </div>
                  <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>
    <!-- END fast view of a product -->
    
@endsection

@section('script')

<script type="text/javascript">

    $(function () {
        $('#datetimepicker6').datetimepicker({
            locale:'id',  
            format: 'dddd, DD MMMM YYYY',
            
        });
        $('#datetimepicker7').datetimepicker({
            locale:'id',
            format: 'dddd, DD MMMM YYYY',
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
@endsection
