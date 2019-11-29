<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>SIMAKSI</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="b/images/bksda.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="b/assets/css/font-awesome-4.7.0.min.css">
      <link rel="stylesheet" href="b/assets/fonts/flat-icon/flaticon.css">
      <link rel="stylesheet" href="b/assets/css/bootstrap-4.1.3.min.css">
      <link rel="stylesheet" href="b/assets/css/styleBeranda.css">
      <link rel="stylesheet" href="b/assets/css/styleFooter.css">
      <link rel="stylesheet" href="b/assets/css/layout.css">

    <!--  <style>
        body{
            background-image:url(assets/images/joanna-kosinska-478198-unsplash.jpg);
            background-size:cover;
            background-attachment: fixed;
        }
    </style>-->
</head>
<body>

    <!-- Header-->

    <header class="header-area main-header" style="background-color:rgb(248, 248, 248); padding:
    -20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html" style="font-family: Impact ; color: #ff9902; font-size: 30px; font-weight: 900">SIMAKSI</a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="{{url('izin')}}">Perijinan</a></li>
                            <li><a href="{{url('perijinanku')}}">Perijinanku</a></li>
                            <li><a href="{{url('upload')}}">Artikel</a></li>
                            <li><a href="{{url('laporanakhir')}}">Laporan Akhir</a></li>
                            <li><a href="contact-us.html">Hubungi Kami</a></li>
                            <li>
                                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </div>
                                @extends('layouts.app')
                                @section('content')
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                @endsection
                            </li>
                        @endguest
                    </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header-->

    <!-- Banner Area Starts -->
    <section class="banner-area" style="width:100%" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="banner-bg" style="width:100%" ></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-text">
                        <h1>find convenience with <span>forest observation permit</span> with SIMAKSI</h1>
                        <p class="py-3"></p>
                        <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Search Area Starts -->
 <!--    <div class="search-area" >
        <div class="search-bg" >
            <div class="container" >
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" class="d-md-flex justify-content-between" style="border-radius: 10px">
                            <select style="border-radius: 10px">
                                <option value="1">Semua Kategori</option>
                                <option value="2">Flora dan Fauna</option>
                                <option value="3">Ekosistem Hutan</option>
                            </select>
                            <select style="border-radius: 10px" >
                                <option value="1">Pilih Wilayah</option>
                                <option value="2">Jember</option>
                                <option value="3">Bondowoso</option>
                                <option value="4">Solo</option>
                                <option value="5">Bali</option>
                            </select>
                            <input type="text" placeholder="Artikel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" required>
                            <button type="submit" class="template-btn">find</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Search Area End -->


    <!-- Category Area Starts -->
    <section style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2><b  style="color: black;">Artikel Terkait BKSDA Jember</b></h2>

            <div class="row">
                @foreach($gambar as $g)
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <embed src="{{ asset('/data_file/'.$g->file) }}#toolbar=0&navpanes=0&scrollbar=0&" type="application/pdf" style="width: 200px; height: 282px" alt="category"/>
                        <h4><a href="{{ asset('/data_file/'.$g->file) }}"><b  style="color: black;">{{$g->keterangan}}</b></a></h4>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <embed src="{{ asset('/data_file/'.$g->file) }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" style="width: 200px; height: 282px" alt="category"/>
                        <h4><a href="{{ asset('/data_file/'.$g->file) }}"><b  style="color: black;">{{$g->keterangan}}</b></a></h4>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/ac.png" style="width: 100px; height: 100px" alt="category">
                        <h4>Artikel 3</h4>
                        <h5></h5>
                    </div>
                </div> -->
               @endforeach
            </div>
        </div>
    </section>

      <!-- footer -->
      <div class="bottom">
        <div class="wadah">
            <div class="menu">
                <nav class="menu-utama float-right">
                    <ul>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </nav>
                <span class="clear"></span>
            </div>
        </div>
    </div>
    <!-- footer -->

</body>
</html>
