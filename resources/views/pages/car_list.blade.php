@extends('layouts.pages')

@section('title', 'Car List')

@section('content')

<div class="main">
    <div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Car List</li>
    </ul>
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
        <!-- BEGIN SIDEBAR -->
        <div class="sidebar col-md-3 col-sm-5">
            <div class="sidebar-filter margin-bottom-25">
                <h2 class="text-warning">Filter Pencarian</h2>

                <h3>Kisaran Harga</h3>
                <div class="margin-bottom-10" id="slider-range"></div>
                <div class="row">
                    <input class="col-md-6 text-center" disabled type="text" id="minPrice" style="border:0; color:#f6931f; font-weight:bold;">
                    <input class="col-md-6 text-center" disabled type="text" id="maxPrice" style="border:0; color:#f6931f; font-weight:bold;">
                </div>
                
            </div>

            <div class="sidebar-products clearfix">
                <h2>Bestsellers</h2>
                <?php 
                    for ($i = 1; $i <= 10; $i++):
                ?>
                <div class="item">
                <a href="shop-item.html"><img src="{{asset('assets/pages-template/pages/img/products/avanza.jpg')}}" alt="Some Shoes in Animal with Cut Out"></a>
                <h3><a href="shop-item.html">Toyota Avanza</a></h3>
                <div class="price">$31.00</div>
                </div>
                <?php
                    endfor;
                ?>
            </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="col-md-9 col-sm-7">
       
        <div class="row list-view-sorting clearfix">
            <div class="col-md-12">
                <div class="col-md-5">
                    <form action="#">
                    <div class="input-group">
                        <input type="text" placeholder="Search again" class="form-control">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                    </form>
                </div>
                <div class="pull-right">
                    <label class="control-label">Show:</label>
                    <select class="form-control input-sm">
                    <option value="#?limit=24" selected="selected">24</option>
                    <option value="#?limit=25">25</option>
                    <option value="#?limit=50">50</option>
                    <option value="#?limit=75">75</option>
                    <option value="#?limit=100">100</option>
                    </select>
                </div>
                <div class="pull-right">
                    <label class="control-label">Sort&nbsp;By:</label>
                    <select class="form-control input-sm">
                    <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                    <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                    <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                    <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                    <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                    <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                    <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                    <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                    <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                    </select>
                </div>
                
            </div>
        </div>
        <!-- BEGIN PRODUCT LIST -->
        <div class="row product-list">
        <?php 
            for ($i = 1; $i <= 15; $i++):
        ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
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
        <!-- END PRODUCT LIST -->
        <!-- BEGIN PAGINATOR -->
        <div class="row">
            <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
            <div class="col-md-8 col-sm-8">
            <ul class="pagination pull-right">
                <li><a href="javascript:;">&laquo;</a></li>
                <li><a href="javascript:;">1</a></li>
                <li><span>2</span></li>
                <li><a href="javascript:;">3</a></li>
                <li><a href="javascript:;">4</a></li>
                <li><a href="javascript:;">5</a></li>
                <li><a href="javascript:;">&raquo;</a></li>
            </ul>
            </div>
        </div>
        <!-- END PAGINATOR -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
    </div>
</div>
    
@endsection

@section('script')

<script type="text/javascript">
    $(function () {
        /*$( "#slider-range" ).slider({
            range:true,
            min: 200000,
            max: 900000,
            values: [ 20000, 500000 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "Rp " + ui.values[ 0 ] + " - Rp " + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "Rp " + $( "#slider-range" ).slider( "values", 0 ) +
            " - Rp " + $( "#slider-range" ).slider( "values", 1 ) );
            
            $('.money').simpleMoneyFormat();*/
        
            $("#slider-range").slider({
                range: true,
                min: 200000,
                max: 900000,
                step: 50000,
                values: [20000, 900000],
                slide: function (event, ui) {
                    $("#minPrice").val("Rp " + addCommas(ui.values[0].toString()));
                    $("#maxPrice").val("Rp " + addCommas(ui.values[1]));
                }
            });

            $("#minPrice").val("Rp " + addCommas($("#slider-range").slider("values", 0)));
            $("#maxPrice").val("Rp " + addCommas($("#slider-range").slider("values", 1)));

            function addCommas(nStr)
            {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + '.' + '$2');
                }
                return x1 + x2;
            }

    });
</script>


@endsection
