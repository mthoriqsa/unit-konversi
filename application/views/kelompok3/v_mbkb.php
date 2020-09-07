
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('_partials/head.php') ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar.php') ?>

	<div id="wrapper">

		<?php $this->load->view('_partials/sidebar.php') ?>

	    <div id="content-wrapper">
	    	<div id="container-fluid">

				<!-- Judul -->
				<h1 style="text-align: center;">Kecepatan</h1>
				<p align="center" style="margin-top: -25px;" >=========================================</p>
				<br>
				<!-- form start -->
				<form method="POST" action="<?= 'mbkb'; ?>">
						<table width="366" align="center" border="1">
							<tr>
								<td style="padding: 30px;text-align: center;">
									<input type="number" name="satuan"> m/s
								</td>
							</tr>
							<tr>
								<td colspan="5" align="center"><input type="submit" name="hasil" value="Convert"></td>
							</tr>
							<tr>
								<td style="padding: 10px;text-align: center;"><?php echo (isset($_POST['satuan'])?$_POST['satuan']:''); ?> m/s = <?php echo (isset($hitung)?$hitung:''); ?> km/h</td>
								<td style="padding: 15px;text-align: center;"><?php echo (isset($_POST['satuan'])?$_POST['satuan']:''); ?> m/s = <?php echo (isset($hitung1)?$hitung1:''); ?> mph</td>
								<td style="padding: 15px;text-align: center;"><?php echo (isset($_POST['satuan'])?$_POST['satuan']:''); ?> m/s = <?php echo (isset($hitung2)?$hitung2:''); ?> ft/s</td>
								<td style="padding: 15px;text-align: center;"><?php echo (isset($_POST['satuan'])?$_POST['satuan']:''); ?> m/s = <?php echo (isset($hitung3)?$hitung3:''); ?> knot</td>
							</tr>
						</table>
				</form>
				<!-- form end -->
				<br>
				<br>
			</div>
			<!-- footer bisa diisi nama & npm masing2 -->
		<p class="m-0 text-center text-black">Copyright by : Kelompok 3</h4>
		</div>
	</div>
	<?php $this->load->view('_partials/js.php') ?>
</body>
</html>
