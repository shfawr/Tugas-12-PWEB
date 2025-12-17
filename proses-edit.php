<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

if ($foto != "") {
    move_uploaded_file($tmp, "foto/".$foto);
    mysqli_query($conn, "UPDATE calon_siswa SET foto='$foto' WHERE id=$id");
}

mysqli_query($conn, "UPDATE calon_siswa SET
nama='$nama',
alamat='$alamat',
jenis_kelamin='$jk',
agama='$agama',
sekolah_asal='$sekolah'
WHERE id=$id");

header("Location: list-siswa.php");
