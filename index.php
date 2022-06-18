<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="styleL.css">
	<title>Data Random</title>
	<link rel="icon" href="yakin.jpg">
</head>
<body>
	<section class="sec">
		<div class="circle"></div>

		<div class="content">
				<div class="textBox">
					<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<h1>Pendaftaran berhasil!</h1>";
			} else {
				echo "<h1>Pendaftaran gagal!</h1>";
			}
		?>
	</p>
	<?php endif; ?>
					<h3>Mahasiswa Gabut</h3>
					<h2>Yuk Daftar</h2>
					<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list.php" style="margin-left: 10px">Pendaftar</a></li>
		</ul>
				</div>
				<div class="imgBox">
					
				</div>
		</div>
		
	</section>

	</body>
</html>
