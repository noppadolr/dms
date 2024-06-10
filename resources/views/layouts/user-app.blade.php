<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

    <head>
        <meta charset="utf-8" />

        <title>
            @if(View::hasSection('title'))
                 @yield('title')
            @elseif(isset($title))
                {{ $title ?? 'Page Title' }}
                @else
                Page title
        @endif
        </title>


        {{-- @if(isset($title))
            <title>{{ $title ?? 'Page Title' }}</title>
        @endif --}}

        <title>Starter | Ubold - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

		<!-- Theme Config Js -->
		<script src="{{ asset('admin/assets/js/head.js') }}"></script>

		<!-- Bootstrap css -->
		<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        @stack('styles')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- ========== Menu ========== -->
            <div class="app-menu">  

                <!-- Brand Logo -->
                <div class="logo-box">
                    <!-- Brand Logo Light -->
                    <a href="index.html" class="logo-light">
                        <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
                        <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                    </a>

                    <!-- Brand Logo Dark -->
                    <a href="index.html" class="logo-dark">
                        <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
                        <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                    </a>
                </div>

                <!-- menu-left -->
                @include('layouts.body.sidebar')

            </div>
            <!-- ========== Left menu End ========== -->

            

            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- ========== Topbar Start ========== -->
                @include('layouts.body.header')

                <!-- ========== Topbar End ========== -->

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        {{ $slot }}

                        <!-- end page title -->  
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts.body.footer')

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        
        <!-- Vendor js -->
        <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('jquery-3.7.1.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
        @stack('scripts')

    </body>
</html>