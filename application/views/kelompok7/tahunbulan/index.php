<!DOCTYPE html>
<html>
<head>
  <title><?= $judul; ?></title>
  <?php $this->load->view('_partials/head.php') ?>
</head>
<body>

  <?php $this->load->view('_partials/navbar.php') ?>

  <div id="wrapper">

    <?php $this->load->view('_partials/sidebar.php') ?>

      <div id="content-wrapper">
        <div id="container-fluid">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <div class="box box-info">
              <h1 class="box-title">Roby Sirojul Abrory (1634010040) - Tahun ke Bulan</h1>

            <h2>Tahun ke Bulan</h2>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?= 'tahunbulan'; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="tahun" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun" placeholder="Tahun" name="tahun" value="<?= $tahun; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="hasil" class="col-sm-2 control-label">Hasil (Bulan) :</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="hasil" name="hasil" value="<?= $bulan; ?>" readonly>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" name="hasil">Hitung</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

        </section>
    <!-- /.content -->
      </div>
    </div>
  </div>
<?php $this->load->view('_partials/js.php') ?>
</body>
</html>