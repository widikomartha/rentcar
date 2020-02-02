    <div class="header">
      <div class="container">
        <a class="site-logo" href="shop-index.html"><img src="{{asset('assets/pages-template/corporate/img/logos/docar logo.png')}}" style="width:150px" alt="DOCAR"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
            @guest
              <a href="javascript:void(0);" class="top-cart-info-count">My Account </a>
              <a href="{{route('signin') }}" class="top-cart-info-value"> <i class="feather icon-log-in"></i> Login</a>
            @else
              <a href="javascript:void(0);" class="top-cart-info-count">{{ Auth::user()->name }} </a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="feather icon-log-out"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            @endguest
          </div>     
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li class="{{ Request::path() == 'index' ? 'active' : '' }}"><a href="{{route('home') }}">Home</a></li>
            <li class="{{ Request::path() == 'car_list' ? 'active' : '' }}"><a href="{{route('car_list') }}">Car List</a></li>
            <li><a href="javascript:;">Tour Packages</a></li>
            <li><a href="javascript:;">Contact Us</a></li>
            <li class="{{ Request::path() == 'abouts' ? 'active' : '' }}"><a href="{{route('abouts') }}">About Us</a></li>
            

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>