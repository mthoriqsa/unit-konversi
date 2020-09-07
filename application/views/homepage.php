<!DOCTYPE html>
<html lang="en">

<head>

  <style type="text/css">
    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
      background-image: url('image/neko.jpg');
      background-color: #fff;
      background-position: top;
      background-attachment: fixed;
      margin: 40px;
      font: 13px/20px normal Helvetica, Arial, sans-serif;
      color: white;
    }
    #container {
      <!-- margin: 15px; -->
      border: 1.5px solid #D0D0D0;
      box-shadow: 0 0 8px #D0D0D0;
      background-color: #fff;
    }
    #body {
      margin: 0 15px 0 15px;

    }
    h1 {
      <!-- background-color: transparent; -->
      <!-- border-bottom: 1px solid #D0D0D0; -->
      margin: 0 0 14px 0;
      padding: 0 0 0 0;
    }
    h3 {
      color: #444;
      <!-- background-color: transparent; -->
      <!-- border-bottom: 1px solid #D0D0D0; -->
      font-size: 19px;
      font-weight: normal;
      margin: 0 0 14px 0;
      padding: 10px 0 0 0;
    }
    h5 {
      color: #444;
      <!-- background-color: transparent; -->
      <!-- border-bottom: 1px solid #D0D0D0; -->
      font-size: 19px;
      font-weight: normal;
      margin: 0 0 14px 0;
      padding: 0 0 10px 0;
    }
  </style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KONVERSI</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('css/heroic-features.css') ?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: linear-gradient(to top, #3399ff 0%, #0000cc 100%);">
    <div class="container">
      <a class="navbar-brand" href="#">KONVERSI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" style="background-color: transparent;">

    <!-- Jumbotron Header -->
    <div id="container" style="margin: 20px">
    
      <h3 class="text-center text-uppercase">Selamat datang di Aplikasi</h3>
      <h1 class="display-3 text-center font-weight-bolder">KONVERSI UNIT</h1>
      <div id="body">
      <h5 class="text-center font-weight-normal text-capitalize">Konversi berbagai unit atau ukuran seperti berat, tinggi, data, suhu, dan lain-lain.</h5 >
      <!-- <p class="lead text-center card-footer bg-dark" style="color: white">Dibuat oleh : Kelompok 8</p> -->
    </div></div>

    <!-- Page Features -->
    <div class="row text-center">

      <div id="container" style="margin: 10px 10px 10px 30px">        
          <div class="card-body">
            <h4 class="card-title">Mix</h4>
            <p class="card-text">Pixel - CM</p>
            <p class="card-text">Volume - Liter</p>
            <p class="card-text">Byte - Exabyte</p>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 10px 40px">
          <div class="card-body">
            <h4 class="card-title">Kubik</h4>
            <a href="<?php echo base_url().'kelompok2/Cl'?>">Centiliter</a></br>
            <a href="<?php echo base_url().'kelompok2/Dl'?>">Desiliter</a></br>
            <a href="<?php echo base_url().'kelompok2/Kl'?>">Kiloliter</a></br>
            <a href="<?php echo base_url().'kelompok2/Ml'?>">Mililiter</a>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 10px 40px">
          <div class="card-body">
            <h4 class="card-title">Kecepatan</h4>
            <a href="<?php echo base_url().'kelompok3/Mbkb'?>">Kecepatan</a>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 10px 40px">
          <div class="card-body">
            <h4 class="card-title">Suhu</h4>
            <a href="<?php echo base_url().'kelompok4/hitung1'?>">Suhu</a>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 10px 40px">
          <div class="card-body">
            <h4 class="card-title">Waktu</h4>
            <a href="<?php echo base_url().'kelompok5/jamdetik'?>">Jam - Detik</a></br>
            <a href="<?php echo base_url().'kelompok5/jamhari'?>">Jam - Hari</a></br>
            <a href="<?php echo base_url().'kelompok5/jammenit'?>">Jam - Menit</a></br>
            <a href="<?php echo base_url().'kelompok5/menitdetik'?>">Menit - Detik</a></br>
            <a href="<?php echo base_url().'kelompok5/Menittoday'?>">Menit - Hari</a>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 20px 30px">
          <div class="card-body">
            <h4 class="card-title">Berat</h4>
            <p class="card-text">Gram - KG</p>
            <p class="card-text">Gram - Kwintal</p>
            <p class="card-text">Gram - Ton</p>
            <p class="card-text">Gram - Pon</p>
            <p class="card-text">Gram - Ons</p>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 20px 30px">
          <div class="card-body">
            <h4 class="card-title">Tanggal</h4>
            <a href="<?php echo base_url().'kelompok7/Abadtahun'?>">Abad - Tahun</a></br>
            <a href="<?php echo base_url().'kelompok7/Bulanhari'?>">Bulan - Hari</a></br>
            <a href="<?php echo base_url().'kelompok7/Tahunbulan'?>">Tahun - Bulan</a></br>
            <a href="<?php echo base_url().'kelompok7/Tahunhari'?>">Tahun - Hari</a>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 20px 30px">
          <div class="card-body">
            <h4 class="card-title">Data</h4>
            <a href="<?php echo base_url().'kelompok8/Mbkb'?>">Megabyte - Kilobyte</a></br>
            <a href="<?php echo base_url().'kelompok8/Mbgb'?>">Megabyte - Gigabyte</a></br>
            <a href="<?php echo base_url().'kelompok8/Gbtb'?>">Gigabyte - Terabyte</a></br>
            <a href="<?php echo base_url().'kelompok8/Gbkb'?>">Gigabyte - Kilobyte</a></br>
            <a href="<?php echo base_url().'kelompok8/Tbpb'?>">Terabyte - Petabyte</a>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 20px 30px">
          <div class="card-body">
            <h4 class="card-title">Trigonometri</h4>
            <a href="<?php echo base_url().'kelompok9/cos'?>">Cosinus</a></br>
            <a href="<?php echo base_url().'kelompok9/konversitrigonometri'?>">Sinus</a></br>
            <a href="<?php echo base_url().'kelompok9/tan'?>">Tangen</a></br>
            <a href="<?php echo base_url().'kelompok9/acos'?>">Arc Cosinus</a>
            <a href=""></a>
          </div>
      </div>

      <div id="container" style="margin: 10px 10px 20px 30px">
          <div class="card-body">
            <h4 class="card-title">Jarak</h4>
            <a href="<?php echo base_url().'kelompok10/konversi_k10'?>">Jarak</a>
          </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-primary" style="background: linear-gradient(to top, #0000cc 0%, #3399ff 100%);">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Kelompok 8</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
