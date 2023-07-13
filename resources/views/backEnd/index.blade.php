<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/ELEGAN_PNG.png') }}">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('../theme/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../theme/dist/assets/modules/fontawesome/css/all.min.css')}}">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('../theme/dist/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('../theme/dist/assets/css/components.css')}}">
    <!-- Start GA -->
    <script async src="{{asset('https://www.googletagmanager.com/gtag/js?id=UA-94034622-3')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
    <!-- /END GA -->
    <style>
        .sideactive{
            background-color: rgb(238, 238, 238);
            color: white;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        
                    </ul>
                   
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('../theme/dist/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="{{route('logoutadmin')}}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand py-3" style="height: max-content;">
                        <a href="#"><img src="{{asset('../img/ELEGAN_PNG.png')}}" width="100px" alt=""></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">EFS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'dashboard' ? 'sideactive' : null }}" href="{{ url('dashboard' )}}"><i class="fas fa-fire"></i>
                            <span>Dashboard</span></a>
                        </li> 
                        <li class="menu-header">Menu</li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'kategoriBarang' ? 'sideactive' : null }}" href="{{ url('kategoriBarang' )}}"><i class="fas fa-th"></i>
                            <span>Kategori Barang</span></a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'barang' ? 'sideactive' : null }}" href="{{ url('barang' )}}"><i class="far fa-file-alt"></i>
                            <span>List Barang</span></a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'admartikel' ? 'sideactive' : null }}" href="{{ url('admartikel' )}}"><i class="far fa-file-alt"></i>
                            <span>Artikel</span></a>
                        </li>
                        <li>
                            <a class="nav-link {{ Request::segment(1) === 'banner' ? 'sideactive' : null }}" href="{{ url('banner' )}}"><i class="far fa-file-alt"></i>
                            <span>Banner Home</span></a>
                        </li>
                       
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    {{-- <div class="section-header"> --}}
                        @yield('mainContent')
                    {{-- </div> --}}

                    {{-- <div class="section-body">
                    </div> --}}
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright Elegant Fashion <div class="bullet"></div> Design By <a href="/home" target="_blank">Elegant Fashion</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('../theme/dist/assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/popper.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js') }}" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js') }}" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('../theme/dist/assets/js/scripts.js')}}"></script>
    <script src="{{asset('../theme/dist/assets/js/custom.js')}}"></script>
</body>

</html>
