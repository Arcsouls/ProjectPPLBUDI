<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


      <!-- Page Title -->
      <title>Laporan Akhir</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="b/images/bksda.png" type="image/x-icon">

      <!-- CSS Files -->
      <link rel="stylesheet" href="b/assets/css/font-awesome-4.7.0.min.css">
      <link rel="stylesheet" href="b/assets/fonts/flat-icon/flaticon.css">
      <link rel="stylesheet" href="b/assets/css/bootstrap-4.1.3.min.css">
      <link rel="stylesheet" href="b/assets/css/styleBeranda.css">
      <link rel="stylesheet" href="b/assets/css/styleFooter.css">
      <link rel="stylesheet" href="b/assets/css/layout.css">
</head>
<body>

    <!-- Header Area Starts -->
    <header class="header-area single-page">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a href="index.html" style="font-family: Impact ; color: #ff9902; font-size: 30px; font-weight: 900">SIMAKSI</a>
                        </div>
                    </div>
                    <div class="col-lg-10">

                        <div class="main-menu main-menu-light">
                            <ul>
                                <li class="active"><a href="{{url('home')}}">Beranda</a></li>
                                <li><a href="{{url('izin')}}">Perijinan</a></li>
                                <li><a href="perijinanku">Perijinanku</a></li>
                                <li><a href="contact-us.html">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2 style="text-align: center; color: white;">Laporan Akhir</h2>
                        <p style="text-align: center; color: white; padding-bottom: 100px;">Di dalam halaman ini anda dapat mengupload data laporan akhir dari studi yang bekerjasama dengan BKSDA.</p>
                        @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
          {{ $error }} <br/>
          @endforeach
        </div>
        @endif

        <form action="{{url('/laporanakhir/proses')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <b>Upload File</b><br/>
            <input type="file" name="file">
          </div>

          <div class="form-group">
            <b>Keterangan</b>
            <textarea class="form-control" name="keterangan"></textarea>
          </div>

          <input type="submit" value="Upload" class="btn btn-primary">
        </form>

        <form style="padding-top: 200px;">
          <h4 style="color: white; text-align: center; padding-bottom: 20px;">Data Laporan Akhir</h4>
        <table class="table table-bordered table-striped" style="color: white; border: solid;">
          <thead>
            <tr>
              <th width="1%">File</th>
              <th>Keterangan</th>
              <th width="1%">OPSI</th>
            </tr>
          </thead>
          <tbody>
            @foreach($laporanakhir as $g)
            <tr>
              <td>
                <embed src="{{ asset('/Laporan Akhir/'.$g->file) }}" type="application/pdf" width="300" height="300" />
              </td>
              <td>{{$g->keterangan}}</td>
              <td><a class="btn btn-danger" href="{{url('/laporanakhir/hapus/'.$g->id)}}">HAPUS</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

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
