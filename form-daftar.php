<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow">
<div class="card-body">

<h3 class="mb-4">Form Pendaftaran Siswa</h3>

<form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required></textarea>
</div>

<div class="mb-3">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
        <option>Laki-laki</option>
        <option>Perempuan</option>
    </select>
</div>

<div class="mb-3">
    <label>Agama</label>
    <input type="text" name="agama" class="form-control" required>
</div>

<div class="mb-3">
    <label>Sekolah Asal</label>
    <input type="text" name="sekolah_asal" class="form-control" required>
</div>

<div class="mb-3">
    <label>Foto</label>
    <input type="file" name="foto" class="form-control">
</div>

<button class="btn btn-primary">Daftar</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>
</div>

</body>
</html>
