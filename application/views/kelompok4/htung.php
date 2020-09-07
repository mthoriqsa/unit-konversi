<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('_partials/head.php') ?>
</head>
<body style="text-align: center;">

  <?php $this->load->view('_partials/navbar.php') ?>

  <div id="wrapper">

    <?php $this->load->view('_partials/sidebar.php') ?>

      <div id="content-wrapper">
        <div id="container-fluid">
  
          <h1>Konversi Suhu Celcius</h1>
          <form action="<?= 'hitung1/hasil'; ?>" method="post" accept-charset="utf-8">
          <div>Masukkan Suhu (Celcius)</div>
          <input type="text" name="suhu" placeholder="Suhu">
          <br>
          <input type="submit" name="ngitung">
          </form>

          <h1>Konversi Suhu Reamur</h1>
          <form action="<?= 'hitung1/hasil1'; ?>" method="post">
          <div>Masukkan Suhu (Reamur)</div>
          <input type="text" name="suhu" placeholder="Suhu">
          <br>
          <input type="submit" name="ngitung">
          </form>

          <h1>Konversi Suhu Fahrenheit</h1>
          <form action="<?= 'hitung1/hasil2'; ?>" method="post">
          <div>Masukkan Suhu (Fahrenheit)</div>
          <input type="text" name="suhu" placeholder="Suhu">
          <br>
          <input type="submit" name="ngitung">
          </form>

          <h1>Konversi Suhu Kelvin</h1>
          <form action="<?= 'hitung1/hasil3'; ?>" method="post">
          <div>Masukkan Suhu (Kelvin)</div>
          <input type="text" name="suhu" placeholder="Suhu">
          <br>
          <input type="submit" name="ngitung">
          </form>

        </div>
      </div>
    </div>
    <?php $this->load->view('_partials/js.php') ?>
</body>
</html>