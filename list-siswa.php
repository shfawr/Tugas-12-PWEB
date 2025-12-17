<?php
include 'config.php';

// AMBIL DATA DARI DATABASE
$query = mysqli_query($conn, "SELECT * FROM calon_siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow">
<div class="card-body">

<h3 class="mb-3">Data Pendaftar</h3>

<table class="table table-bordered table-striped">
<thead>
<tr>
    <th>No</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Sekolah Asal</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>

<?php
$no = 1;
while ($row = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $no++ ?></td>

    <td>
        <?php if (!empty($row['foto'])) { ?>
            <img src="foto/<?= $row['foto'] ?>" width="70">
        <?php } else { ?>
            -
        <?php } ?>
    </td>

    <td><?= $row['nama'] ?></td>
    <td><?= $row['alamat'] ?></td>
    <td><?= $row['jenis_kelamin'] ?></td>
    <td><?= $row['agama'] ?></td>
    <td><?= $row['sekolah_asal'] ?></td>

    <td>
        <a href="form-edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $row['id'] ?>" 
           class="btn btn-danger btn-sm"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</tbody>
</table>

<a href="index.php" class="btn btn-secondary">Kembali</a>

</div>
</div>
</div>

</body>
</html>
