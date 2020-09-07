<html>
    <head>
        <?php $this->load->view('_partials/head.php') ?>
		<style type="text/css">
			body {
			margin-top: -24px;
			}
		</style>
         
    </head>
	<body>
		<?php $this->load->view('_partials/navbar.php') ?>

		<div id="wrapper">

			<?php $this->load->view('_partials/sidebar.php') ?>

		    <div id="content-wrapper">
		    	<div id="container-fluid">
					<h1>Konversi KL ke ml </h1>
					<br>
					<p>Konversi ke satuan yang lebih rendah satu tingkat, dikali 10.</p>
					<p>Berikut kalkulator perhitunganya :</p>
					<ul>
					    <?php echo form_open('kelompok2/Kl'); ?>
					     L = <?php echo form_input('v1',$v1); ?> <br>
					  <p><?php echo validation_errors(); ?>  </p>
					    <?php echo form_submit('submit','Hitung'); ?>
					    <?php echo form_close(); ?>
					    ml = <?php echo $hasil; ?>
					</ul>
					<p> Page endered in {elapsed_time} second </p>
				</div>
			</div>
		</div>
		<?php $this->load->view('_partials/js.php') ?>
	</body>
</html>
