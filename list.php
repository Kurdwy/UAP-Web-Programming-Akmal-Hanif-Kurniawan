<?php include("config.php"); ?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
  	<title>Data Random</title>
	<link rel="icon" href="yakin.jpg">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
	<nav class="navbar navbar-expand-lg bg-info">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><b> Data Random 2022</b></a>
		</div>
	</nav>
	<div class="container" style="margin-top: 40px">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>DATA MAHASISWA GABUT</b>
					</div>
					<div class="card-body">
						<a href="form-daftar.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
						<table class="table table-bordered" id="myTable">
							<thead align="center">
								<tr>
									<th scope="col">Nama</th>
									<th scope="col">Alamat</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col">Agama</th>
									<th scope="col">Asal Universitas</th>
									<th scope="col">Edit</th>
									<th scope="col">Hapus</th>
								</tr>
							</thead>
		<tbody>
		<?php
		$sql = "SELECT * FROM calon";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['univ_asal']."</td>";
			
			echo "<td align='center'>";
			echo "<a href='form-edit.php?id=".$siswa['id']."'> <img src='edit.png' alt='Edit' width='25px' border=0> </a> ";
			echo "</td>";
			echo "<td align='center'>";
			echo "<a href='hapus.php?id=".$siswa['id']."'> <img src='hapus.png' alt='Hapus' width='20px' border=0> </a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<b>Total Saat Ini : <?php echo mysqli_num_rows($query) ?></b>
	
	</body>
</html>
