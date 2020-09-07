<?php  ?>
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

				<h1 style="text-align: center;">Konversi Jarak</h1>
				<p align="center" style="margin-top: -25px;" >======================</p>
				<br>

				<form method="POST">
					<table width="30%" align="center" border="1">
						<tr>
							<td align="center"><select name="pilih">
									<option value="" disabled="selected">-- Select Your Option --</option>
									<option value="km">Kilometer</option>
									<option value="hm">Hektometer</option>
									<option value="dam">Dekameter</option>
									<option value="m">Meter</option>
									<option value="dm">Desimeter</option>
									<option value="cm">Centimeter</option>
									<option value="mm">Milimeter</option>
								</select></td>
							<td align="center"><input type="text" name="masukkan" onkeypress="return Hanyaangka(event)" placeholder="Masukkan Nilai"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="hasil" value="Konversi"></td>
						</tr>
					</table>
				</form>

				<hr>
				<h1 style="text-align: center;">Hasil Konversi</h1>
				<p align="center" style="margin-top: -25px;" >======================</p>
				<br>

				<table width="90%" align="center" border="1">
					<tr align="center"><td>Kilometer</td><td>Hektometer</td><td>Dekameter</td><td>Meter</td><td>Desimeter</td><td>Centimeter</td><td>Milimeter</td></tr>
					<tr align="center">
						<td><?php echo $km; ?></td>
						<td><?php echo $hm; ?></td>
						<td><?php echo $dam; ?></td>
						<td><?php echo $m; ?></td>
						<td><?php echo $dm; ?></td>
						<td><?php echo $cm; ?></td>
						<td><?php echo $mm; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<?php $this->load->view('_partials/js.php') ?>
</body>

<script type="text/javascript">
	function Hanyaangka(evt){
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode >57) && (charCode < 45 || charCode >46))
			return false;
			return true;
	}
</script>
</html>