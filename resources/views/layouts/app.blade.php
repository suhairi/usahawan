<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem e-Usahawan</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('fonts/Lato-Medium.ttf') }}" >

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdown-submenu.css') }}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- JavaScripts -->
    <script src="{{ asset('js/clienthint.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        body {
            background-image: url("{{ asset('images/background.jpg') }}"); 
        }

        /* For devices 400px and larger: */
        @media only screen and (min-device-width: 400px) {
            body { 
                background-image: url("{{ asset('images/background.jpg') }}"); 
                background-size: cover;
            }
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    e-Usahawan
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                @if (Auth::guest())
                    <li><a href="{{ url('/home') }}">Home</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Daftar<span class="caret"></span>
                        </a>
                        @if(Auth::user()->role == 'root' || Auth::user()->role == 'clerk')
                            <ul class="dropdown-menu" role="menu">  
                                <li><a href="{{ url('daftar/daftarPengusaha') }}">Daftar Usahawan</a></li>
                                <li><a href="{{ url('daftar/daftarKad') }}">Daftar Kad</a></li>
                            </ul>
                        @endif 
                    </li>
                    <li><a href="{{ url('/semakKad') }}">Semak Kad</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Laporan<span class="caret"></span>
                        </a>
                        @if(Auth::user()->role == 'root' || Auth::user()->role == 'clerk')
                            <ul class="dropdown-menu" role="menu">  
                                <li><a href="{{ url('laporan/senaraiUsahawan') }}">Senarai Usahawan</a></li>
                                <li><a href="{{ url('laporan/umum') }}">Laporan Umum</a></li>
                                <li><a href="{{ url('laporan/prestasi') }}">Laporan Prestasi</a></li>
                                <!-- <li><a href="#">Ringkasan Prestasi Jualan</a></li> -->
                            </ul>
                        @endif 
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Perkhidmatan<span class="caret"></span>
                        </a>
                        @if(Auth::user()->role == 'root' || Auth::user()->role == 'clerk')
                            <ul class="dropdown-menu multilevel" role="menu">  
                                <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Permohonan Bantuan<span class=""></span>
                                    </a>
                                    @if(Auth::user()->role == 'root' || Auth::user()->role == 'clerk')
                                        <ul class="dropdown-menu" role="menu">  
                                            <li><a href="#">Caw. IAT</a></li>
                                            <li><a href="#">Caw. Bukan Padi</a></li>
                                            <li><a href="#">Cawangan Pemasaran</a></li>
                                        </ul>
                                    @endif 
                                </li>
                                <li><a href="{{ url('/perkhidmatan/penjual') }}">Penjual</a></li>
                                <li><a href="{{ url('/perkhidmatan/pembeli') }}">Pembeli</a></li>
                            </ul>
                        @endif 
                    </li>
                    <li><a href="{{ url('/carian') }}">Carian</a></li>
                @endif
                     
                </ul>
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Log Masuk</a></li>
                        <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            
                            

                            <ul class="dropdown-menu" role="menu">                            
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(Session::has('error'))
                    <div class="alert alert-warning">{{ Session::get('error') }}</div>                    
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>                    
                @endif

                @yield('content')
                
            </div>
        </div>
    </div>

    

    
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
</body>
</html>
