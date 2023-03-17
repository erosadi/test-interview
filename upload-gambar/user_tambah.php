<!DOCTYPE html>
<html>
<head>
	<title>Upload file menggunakan php mysqli</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Tambah Data Pegawai</h2>
		<form action="user_act.php" method="post" enctype="multipart/form-data">
			<div class="form-group mb-3">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			<div class="form-group mb-3">
				<label>Kontak :</label>
				<input type="number" class="form-control" placeholder="Masukkan Kontak" name="kontak" required="required">
			</div>
			<div class="form-group mb-3">
				<label>Alamat :</label>
				<textarea class="form-control" name="alamat" required="required" rows="5"></textarea>
			</div>
			<div class="form-group mb-3">
				<label>Foto :</label>
				<input class="form-control" type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>

</body>
</html>