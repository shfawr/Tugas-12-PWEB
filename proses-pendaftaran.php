<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: form-daftar.php");
    exit;
}

$nama    = $_POST['nama'];
$alamat  = $_POST['alamat'];
$jk      = $_POST['jenis_kelamin'];
$agama   = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];

if ($nama=="" || $alamat=="" || $jk=="" || $agama=="" || $sekolah=="") {
    echo "Data wajib diisi semua!";
    exit;
}

$foto = "";

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
    $foto = time() . "_" . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$foto);
}

mysqli_query($conn, "
    INSERT INTO calon_siswa
    (nama, alamat, jenis_kelamin, agama, sekolah_asal, foto)
    VALUES
    ('$nama','$alamat','$jk','$agama','$sekolah','$foto')
");

header("Location: list-siswa.php");
exit;
