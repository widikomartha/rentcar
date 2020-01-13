@extends('layouts.admins')

@section('title', 'Dashboard')

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
                    <div class="row">
                        <!-- task, page, download counter  start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">$30200</h4>
                                            <h6 class="text-white m-b-0">All Earnings</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-1" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-green update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">290+</h4>
                                            <h6 class="text-white m-b-0">Page Views</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-2" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">145</h4>
                                            <h6 class="text-white m-b-0">Task Completed</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-3" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-lite-green update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">500</h4>
                                            <h6 class="text-white m-b-0">Downloads</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-4" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <!-- task, page, download counter  end -->

                        <!-- wather user -->
                        <div class="col-xl-6 col-md-12">
                            <div class="card latest-update-card">
                                <div class="card-header">
                                    <h5>Latest Updates</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-trash close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="latest-update-box">
                                        <div class="row p-b-15">
                                            <div class="col-auto text-right update-meta">
                                                <p class="text-muted m-b-0 d-inline">4 hrs ago</p>
                                                <i class="feather icon-briefcase bg-simple-c-pink update-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6>+ 5 New Products were added!</h6>
                                                <p class="text-muted m-b-0">Congratulations!</p>
                                            </div>
                                        </div>
                                        <div class="row p-b-15">
                                            <div class="col-auto text-right update-meta">
                                                <p class="text-muted m-b-0 d-inline">1 day ago</p>
                                                <i class="feather icon-check bg-simple-c-yellow  update-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6>Database backup completed!</h6>
                                                <p class="text-muted m-b-0">Download the <span class="text-c-blue">latest backup</span>.</p>
                                            </div>
                                        </div>
                                        <div class="row p-b-0">
                                            <div class="col-auto text-right update-meta">
                                                <p class="text-muted m-b-0 d-inline">2 day ago</p>
                                                <i class="feather icon-facebook bg-simple-c-green update-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6>+1 Friend Requests</h6>
                                                <p class="text-muted m-b-10">This is great, keep it up!</p>
                                                <div class="table-responsive">
                                                    <table class="table table-hover m-b-0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-none">
                                                                    <a href="#!" class="align-middle">
                                                                    <img src="{{asset('assets/admin-template/images\avatar-2.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h6>Jeny William</h6>
                                                                        <p class="text-muted m-b-0">Graphic Designer</p>
                                                                    </div>
                                                                </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25">
                                                <img src="{{asset('assets/admin-template/images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                            </div>
                                            <h6 class="f-w-600">Jeny William</h6>
                                            <p>Web Designer</p>
                                            <i class="feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Email</p>
                                                    <h6 class="text-muted f-w-400"><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="3a505f54437a5d575b535614595557">[email&#160;protected]</a></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Phone</p>
                                                    <h6 class="text-muted f-w-400">0023-333-526136</h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Recent</p>
                                                    <h6 class="text-muted f-w-400">Guruable Admin</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Most Viewed</p>
                                                    <h6 class="text-muted f-w-400">Able Pro Admin</h6>
                                                </div>
                                            </div>
                                            <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- wather user -->

                        <!-- social download  start -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card social-card bg-simple-c-blue">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">Mail</h6>
                                            <p>231.2w downloads</p>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card social-card bg-simple-c-pink">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">twitter</h6>
                                            <p>231.2w downloads</p>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card social-card bg-simple-c-green">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">Instagram</h6>
                                            <p>231.2w downloads</p>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <!-- social download  end -->

                    </div>
                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>

@endsection
