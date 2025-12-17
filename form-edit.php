<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM calon_siswa WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow">
<div class="card-body">

<h3>Edit Data</h3>

<form action="proses-edit.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $row['id'] ?>">

<input class="form-control mb-2" name="nama" value="<?= $row['nama'] ?>">
<textarea class="form-control mb-2" name="alamat"><?= $row['alamat'] ?></textarea>
<input class="form-control mb-2" name="jenis_kelamin" value="<?= $row['jenis_kelamin'] ?>">
<input class="form-control mb-2" name="agama" value="<?= $row['agama'] ?>">
<input class="form-control mb-2" name="sekolah_asal" value="<?= $row['sekolah_asal'] ?>">

<img src="foto/<?= $row['foto'] ?>" width="80"><br><br>
<input type="file" name="foto" class="form-control mb-3">

<button class="btn btn-primary">Update</button>
</form>

</div>
</div>
</div>

</body>
</html>
