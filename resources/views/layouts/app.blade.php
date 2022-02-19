<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('pageTitle')</title>
    <link rel="apple-touch-icon" href="{{asset('assets')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/extensions/dragula.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/pages/widgets.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/pages/dashboard-analytics.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/assets/css/style.css">
    <!-- END: Custom CSS-->
    @yield('css')
    @yield('stylesheet')
    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
@php
    use Illuminate\Support\Facades\Auth;
    $userRole = Auth::user()->role;
@endphp
<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset('assets')}}/html/ltr/vertical-menu-boxicons-template/index.html">
                        <div class="brand-logo">
                            <img src="{{asset('assets')}}/image/logo.png" alt="img placeholder" height="50" width="50">
                        </div>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
                
                <li class=" navigation-header text-truncate"><span data-i18n="Apps">Pelanggan</span>
                </li>
                <li class="@yield('navBarPelanggan') nav-item"><a href="{{route('admin.pelanggan.index')}}"><i class="bx bxs-group"></i><span class="menu-title text-truncate" data-i18n="List">List Pelanggan</span></a>
                </li>
                @if($userRole == 1)
                <li class="@yield('navBarTambahPelanggan') nav-item"><a href="{{route('admin.pelanggan.create')}}"><i class="bx bxs-user-plus"></i><span class="menu-title text-truncate" data-i18n="Tambah">Tambah Pelanggan</span></a>
                </li>
                @endif
                <li class="nav-item"><a href="{{route('logout')}}"><i class="bx bx-log-out"></i><span class="menu-title text-truncate" data-i18n="LogOut">Log Out</span></a>
                </li>


            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    @yield('content')
    <!-- BEGIN: Footer-->
    <!-- <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; Indihome</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="#" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer> -->
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets')}}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{asset('assets')}}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="{{asset('assets')}}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="{{asset('assets')}}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets')}}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{asset('assets')}}/app-assets/vendors/js/extensions/dragula.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets')}}/app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('assets')}}/app-assets/js/core/app.js"></script>
    <script src="{{asset('assets')}}/app-assets/js/scripts/components.js"></script>
    <script src="{{asset('assets')}}/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets')}}/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->
    @yield('js')

</body>
<!-- END: Body-->

</html>