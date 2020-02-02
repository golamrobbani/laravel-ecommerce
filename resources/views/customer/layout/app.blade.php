<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>@hasSection('contentheader_title')@yield('contentheader_title')@endif</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- morris css -->

    <link href="{{ asset('customer/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('customer/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('customer/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
    <!-- Begin page -->
    <div id="wrapper" class="enlarged">

        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <div class="topbar">
                    <div class="topbar-left d-none d-lg-block">
                        <div class="text-center">
                            <a href="{{URL::to('/')}}" class="logo"> <img src="{{URL::to('/')}}/storage/{{$shop->shop_logo}}" height="40" alt="logo"> </a>
                        </div>
                    </div>
                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">

                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="{{URL::to('/')}}/storage/{{$user->avatar}}" alt="user" class="rounded-circle"> <span class="d-none d-md-inline-block ml-1">{{$user->name}} <i class="mdi mdi-chevron-down"></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">

                                    <a class="dropdown-item" href="/myaccount/profile"><i class="dripicons-user text-muted"></i> Profile</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted"></i> Logout</a></div>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                            </li>
                        </ul>
                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">

                            <li class="list-inline-item notification-list d-none d-sm-inline-block"><a href="/myaccount/order-history" class="nav-link waves-effect">ORDERS HISTORY</a></li>

                            <li class="list-inline-item notification-list d-none d-sm-inline-block"><a href="/myaccount/order-pending" class="nav-link waves-effect">PENDING ORDERS</a></li>

                        </ul>
                    </nav>
                </div>
                <!-- Top Bar End -->

    {{ csrf_field() }}



    <!-- Your Page Content Here -->
    @yield('main-content')




            <!-- content -->
            <footer class="footer">© 2019 <span class="d-none d-md-inline-block">Design & Development by Dewanict</span></footer>
        </div>
        <!-- End Right content here -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{ asset('customer/js/jquery.min.js') }}"></script>
    <script src="{{ asset('customer/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('customer/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('customer/js/detect.js') }}"></script>
    <script src="{{ asset('customer/js/fastclick.js') }}"></script>
    <script src="{{ asset('customer/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('customer/js/jquery.blockUI.js') }} "></script>
    <script src="{{ asset('customer/js/waves.js') }}assets/js/waves.js"></script>
    <script src="{{ asset('customer/js/jquery.nicescroll.js') }} "></script>
    <script src="{{ asset('customer/js/jquery.scrollTo.min.js') }}"></script>
    <!--Morris Chart-->
    <script src="https://themesdesign.in/zinzer_1/plugins/morris/morris.min.js"></script>
    <script src="https://themesdesign.in/zinzer_1/plugins/raphael/raphael.min.js"></script>
    <!-- dashboard js -->
    <script src="{{ asset('customer/pages/dashboard.int.js') }} "></script>
    <!-- App js -->
    <script src="{{ asset('customer/js/app.js') }} "></script>
</body>

</html>
