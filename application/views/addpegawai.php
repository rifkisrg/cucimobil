<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aplikasi cuci mobil</title>
	<link href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" rel="stylesheet"/>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" id="input-data-pegawai">
	<div data-role="header">
		<h1>Input data pegawai baru</h1>
	</div>
	<input id="datajson" type="hidden">
	<form class="form-pegawai" id="datapegawai" method="post" name="inputpegawai">
		<div class="ui-grid-solo" style="padding: 0px 20px">
			<div class="ui-block-a">
				<input id="id_pegawai" name="id_pegawai" style="text-align: center" type="hidden">
			</div>
			<div class="ui-block-a">
				<h3 style="text-align: center">Nama</h3>
				<input id="namaPegawaiBaru" name="name" placeholder="Nama pegawai" required style="text-align: center">
			</div>
			<div class="ui-block-a">
				<h3 style="text-align: center">Alamat</h3>
				<input id="alamatPegawaiBaru" name="address" placeholder="Alamat pegawai" required
					   style="text-align: center">
			</div>
			<div class="ui-block-a">
				<h3 style="text-align: center">Nomor telepon</h3>
				<input id="carlyRaeJepsen" name="notelp" placeholder="Nomor telepon" required style="text-align: center"
					   type="number">
			</div>
		</div>
		<div class="ui-grid-solo" style="padding: 0px 20px">
			<div class="ui-block-a">
				<a class="ui-shadow ui-btn ui-corner-all" id="ayo-input" type="submit">submit</a>
			</div>
		</div>
	</form>
</div>
<script src="js/pegawai.js" type="text/javascript"></script>
<script>
	var baseURL= "<?php echo base_url();?>";
    Application.initApplication();
</script>
</body>
</html>
