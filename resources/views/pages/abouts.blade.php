@extends('layouts.pages')

@section('title', 'About Us')

@section('content')

<div class="main">
    <div class="container">
      <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">About Us</li>
      </ul>
      
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Tentang Kami</h1>
                <div class="goods-page">
                    <div class="goods-data clearfix">
                        <h2>Perasaan luar biasa itu – saat Anda menyalakan mesin dan petualangan Anda dimulai…</h2>
                        <p class="text-justify"> Di DoCar, semua yang kami lakukan adalah tentang menyediakan kebebasan untuk menemukan lebih banyak kepada Anda. 
                            Kami akan mengerahkan segala upaya untuk menemukan mobil sewa yang tepat untuk Anda, dan menyediakan pengalaman bebas repot yang mulus kepada Anda sejak awal hingga akhir. 
                            Di sini Anda dapat menemukan selengkapnya tentang kami.
                        </p>
                        <p class="text-justify margin-bottom-40"> Kami ingin menjadikan penyewaan mobil sesederhana dan sepribadi mengendarai mobil Anda sendiri.
                            Menyewa mobil memberi Anda kebebasan, dan kami akan membantu Anda menemukan mobil yang tepat dengan harga yang bagus. 
                            Tetapi bagi kami ini lebih dari itu. Kami hadir untuk membuat penyewaan mobil jauh lebih mudah.
                        </p>
                        <h2>Cara kerja kami</h2>
                        <p class="text-justify margin-bottom-20"> Memastikan bahwa Anda mendapatkan pengalaman mengesankan setiap kali Anda menyewa mobil membuat kami bahagia.
                            Kami adalah broker, jadi kami mengatur penyewaan mobil atas nama Anda. Kami menggunakan daya beli kami yang luar biasa untuk menyediakan tawaran yang bagus untuk Anda. 
                            Tetapi kami bukan sekadar situs perbandingan karena kami selalu menyertai setiap langkah Anda.
                        </p>
                        <div class="row margin-bottom-20">
                            <div class="col-1 text-right text-orange"><i class="fa fa-search fa-3x" aria-hidden="true"></i></div>
                                <div class="col">
                                    <h3>Cari</h3> 
                                    <span class="text-justify">Anda mencari mobil yang Anda inginkan di situs atau aplikasi kami </span>
                                </div>
                        </div>
                        <div class="row margin-bottom-20">
                            <div class="col-1 text-right text-orange"><i class="fa fa-car fa-3x" aria-hidden="true"></i></div>
                                <div class="col">
                                    <h3>Bandingkan</h3> 
                                    <span class="text-justify">Kami memperlihatkan penawaran dan ulasan yang Anda butuhkan untuk membantu Anda memilih </span>
                                </div>
                        </div>
                        <div class="row margin-bottom-20">
                            <div class="col-1 text-right text-orange"><i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i></div>
                                <div class="col">
                                    <h3>Pesan</h3> 
                                    <span class="text-justify">Pilih mobil yang Anda inginkan, tambahkan ekstra yang Anda sukai – seperti Perlindungan Penuh (tanggungan ekstra kami), atau kursi mobil – dan pesan </span>
                                </div>
                        </div>
                        <div class="row margin-bottom-20">
                            <div class="col-1 text-right text-orange"><i class="fa fa-user fa-3x" aria-hidden="true"></i></div>
                                <div class="col">
                                    <h3>Anda sudah siap</h3> 
                                    <span class="text-justify">Kami mengonfirmasikan pemesanan Anda kepada perusahaan penyewaan mobil yang Anda pilih, dan mengonfirmasikannya kembali kepada Anda </span>
                                </div>
                        </div>
                        <div class="row margin-bottom-20">
                            <div class="col-1 text-right text-orange"><i class="fa fa-key fa-3x" aria-hidden="true"></i></div>
                                <div class="col">
                                    <h3>Jemput mobil Anda</h3> 
                                    <span class="text-justify">Bawalah voucer (dalam bentuk kertas atau di aplikasi Anda), kartu kredit, SIM, dan paspor Anda untuk menjemput mobil Anda</span>
                                </div>
                        </div>
                        <div class="row margin-bottom-20">
                            <div class="col-1 text-right text-orange"><i class="fa fa-star-o fa-3x" aria-hidden="true"></i></div>
                                <div class="col">
                                    <h3>Nikmatilah perjalanan yang fantastis</h3> 
                                    <span class="text-justify">Berkendaralah dan mulai petualangan Anda… </span>
                                </div>
                        </div>
                        <div class="row margin-bottom-20">
                            <div class="col-1 text-right text-orange"><i class="fa fa-heart-o fa-3x" aria-hidden="true"></i></div>
                                <div class="col">
                                    <h3>Manfaatkanlah dukungan kami</h3> 
                                    <span class="text-justify">Dukungan kami tersedia 24 jam setiap hari untuk Anda – sebelum, selama, dan sesudah perjalanan Anda </span>
                                </div>
                        </div>
                    </div>
                </div>
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
