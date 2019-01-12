<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alat Dokter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="{{asset ('https:/admin//www.amcharts.com/lib/3/plugins/export/export.css') }}" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset ('assets/admin/css/typography.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/default-css.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/styles.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/admin/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstra4.min.css')}}">
  @section('css')

  @show

    <!-- modernizr css -->
    <script src="{{asset ('assets/admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('partial.sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
            <!-- header area start -->
            @include('partial.header')
            <!-- header area end -->
            <!-- page title area start -->
            <!-- page title area end -->
            @yield('content')
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        @include('partial.footer')
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{asset ('assets/admin/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset ('assets/admin/js/popper.min.js') }}"></script>
    <script src="{{asset ('assets/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('assets/admin/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset ('assets/admin/js/metisMenu.min.js') }}"></script>
    <script src="{{asset ('assets/admin/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{asset ('assets/admin/js/jquery.slicknav.min.js') }}"></script>

    <!-- start chart js -->
    <script src="{{asset ('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js') }}"></script>
    <!-- start highcharts js -->
    <script src="{{asset ('https://code.highcharts.com/highcharts.js') }}"></script>
    <!-- start zingchart js -->
    <script src="{{asset ('https://cdn.zingchart.com/zingchart.min.js') }}"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{asset ('assets/admin/js/line-chart.js') }}"></script>
    <!-- all pie chart -->
    <script src="{{asset ('assets/admin/js/pie-chart.js') }}"></script>
    <!-- others plugins -->
    <script src="{{asset ('assets/admin/js/plugins.js') }}"></script>
    <script src="{{asset ('assets/admin/js/scripts.js') }}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
@section('js')

@show
</body>

</html>
