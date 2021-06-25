<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('backend/img/logo/logo.png')}}" rel="icon">
    <title>RuangAdmin - Blank Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
<div id="app">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('includes.sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
            @include('includes.topbar')
            <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    @include('includes.breadcumbs')

                    <router-view></router-view>


                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            @include('includes.footer')
            <!-- Footer -->
        </div>
    </div>
</div>




<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/ruang-admin.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
