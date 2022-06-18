<!doctype html>
<html lang="en">
  <head>
  	<title>Data Random</title>
	<link rel="icon" href="yakin.jpg">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
	<nav class="navbar navbar-expand-lg bg-info">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><b>Daftar Gabut</b></a>
		</div>
	</nav>
	<div class="container" style="margin-top: 40px; margin-bottom: 20px;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Silahkan Lengkapi Data Berikut</b>
					</div>
					<div class="card-body">
		<form action="proses-pendaftaran.php" method="POST">
		
		<div class="form-group">
			<label for="nama">Nama </label>
			<input type="text" name="nama" placeholder="Nama Lengkap"  class="form-control" autocomplete="off" />
		</div>
		<div class="form-group">
			<label for="alamat" style="margin-top: 20px">Alamat </label>
			<textarea name="alamat" class="form-control" placeholder="Alamat Saat Ini" autocomplete="off" required></textarea>
		</div>
		<div class="form-group">
			<label for="jenis_kelamin" style="margin-top: 20px" >Jenis Kelamin </label>
			<select name="jenis_kelamin" class="form-control" autocomplete="off" >
				<option>-</option>
				<option>Laki-Laki</option>
				<option>Perempuan</option>
				<option>Lainnya</option>
			</select>
		</div>
		<div class="form-group">
			<label for="agama" style="margin-top: 20px">Agama </label>
			<select name="agama" class="form-control" autocomplete="off">
				<option>-</option>
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Atheis</option>
			</select>
		</div>
		<div class="form-group">
			<label for="univ_asal" style="margin-top: 20px">Asal Universitas </label>
			<input type="text" name="univ_asal" placeholder="Nama Universitas" class="form-control" autocomplete="off"/>
		</div>
		
			<input type="submit" value="Daftar" style="margin-top: 20px" name="daftar" class="btn btn-md btn-success" />
		
	</form>

</body>
</html>
