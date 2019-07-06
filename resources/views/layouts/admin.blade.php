<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Bookx'))</title>

@stack('styles')

<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->

    <!-- Custom fonts for this template-->
<!--link href="{{asset('static/admin/css/all.min.css')}}" rel="stylesheet" type="text/css"-->
    <script defer src="{{asset('fa/js/all.js')}}"></script>
    <link href="{{asset('fa/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('fa/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('fa/css/solid.css')}}" rel="stylesheet">

    <!-- Page level plugin CSS-->
    <link href="{{asset('static/admin/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('static/admin/css/sb-admin.css')}}" rel="stylesheet">


</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </a>

    <a class="navbar-brand mr-1 pl-3" href="">Admin Panel</a>

    <div style="position: absolute; right: 2rem;">
        <a class="navbar-brand mr-1 pl-3" href="">Return to Main Website</a>
    </div>


</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-chart-area"></i>
                <span>Charts</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-table"></i>
                <span>Tables</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Primary Tables:</h6>
                <a class="dropdown-item" href="">Books</a>
                <a class="dropdown-item" href="">Authors</a>
                <a class="dropdown-item" href="">Recommenders</a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-bookmark"></i>
                <span>Add Recommendation</span></a>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            {{--<ol class="breadcrumb">--}}
            {{--<li class="breadcrumb-item">--}}
            {{--<a href="#">Dashboard</a>--}}
            {{--</li>--}}
            {{--<li class="breadcrumb-item active">Overview</li>--}}
            {{--</ol>--}}

            @yield('content')


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Bookx 2019</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('static/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('static/admin/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('static/admin/js/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{asset('static/admin/js/Chart.min.js')}}"></script>
<script src="{{asset('static/admin/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('static/admin/js/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('static/admin/js/sb-admin.min.js')}}"></script>

<!-- Demo scripts for this page-->
<script src="{{asset('static/admin/js/datatables-demo.js')}}"></script>
<script src="{{asset('static/admin/js/chart-area-demo.js')}}"></script>

@stack('scripts')

</body>

</html>
