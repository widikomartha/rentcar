<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Request::path() == 'admin/index' ? 'active' : '' }}">
                <a href="{{route('dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::path() == 'admin/cars' ? 'active' : '' }}">
                <a href="{{route('cars') }}">
                    <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i></span>
                    <span class="pcoded-mtext">Inventory</span>
                </a>
            </li>
            <li class="">
                <a href="navbar-light.htm">
                    <span class="pcoded-micon"><i class="fa fa-list-alt"></i></span>
                    <span class="pcoded-mtext">Reservation</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">User</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-credit-card"></i></span>
                    <span class="pcoded-mtext">Payments</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                    <span class="pcoded-mtext">Report</span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel">Other</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-pagelines"></i></span>
                    <span class="pcoded-mtext">Pages</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Home</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Car</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="sample-page.htm">
                    <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                    <span class="pcoded-mtext">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>