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
                  <h1 class="box-title">M. Andhik Pratama (1634010022) - Abad ke Tahun</h1>

                <h2>Abad ke Tahun</h2>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?= 'abadtahun'; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="abad" class="col-sm-2 control-label">Abad</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="abad" placeholder="Abad" name="abad" value="<?= $abad; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="hasil" class="col-sm-2 control-label">Hasil (Tahun) :</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="hasil" name="hasil" value="<?= $tahun; ?>" readonly>
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