<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


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
			<a class="navbar-brand" href="#"><b>Edit Data</b></a>
		</div>
	</nav>
	<div class="container" style="margin-top: 40px; margin-bottom: 20px;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Silahkan Edit Data Anda</b>
					</div>
					<div class="card-body">
	
	<form action="proses-edit.php" method="POST">
		
			
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<div class="form-group">
			<label for="nama">Nama  </label>
			<input type="text" name="nama" placeholder="nama lengkap"class="form-control" autocomplete="off" value="<?php echo $siswa['nama'] ?>" />
		</div>
		<div class="form-group">
			<label for="alamat" style="margin-top: 20px">Alamat </label>
			<textarea name="alamat" class="form-control" autocomplete="off" ><?php echo $siswa['alamat'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="jenis_kelamin" style="margin-top: 20px">Jenis Kelamin </label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<select name="jenis_kelamin"  class="form-control">
				<option <?php echo ($jk == '-') ? "selected": "" ?>>-</option>
				<option <?php echo ($jk == 'Laki-Laki') ? "selected": "" ?>>Laki-Laki</option>
				<option <?php echo ($jk == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
				<option <?php echo ($jk == 'Lainnya') ? "selected": "" ?>>Lainnya</option>
			</select>
		</div>
		<div class="form-group">
			<label for="agama" style="margin-top: 20px">Agama </label>
			<?php $agama = $siswa['agama']; ?>
			<select name="agama"  class="form-control">
				<option <?php echo ($agama == '-') ? "selected": "" ?>>-</option>
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sekolah_asal" style="margin-top: 20px">Asal Unversitas </label>
			<input type="text" name="univ_asal" placeholder="nama universitas" class="form-control" autocomplete="off" value="<?php echo $siswa['univ_asal'] ?>" />
		</div>
		<p>
			<input type="submit" value="Simpan" name="simpan" style="margin-top: 20px" class="btn btn-md btn-success" />
		</p>	
	</form>
	
	</body>
</html>
