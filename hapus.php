<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM calon_siswa WHERE id=$id");
header("Location: list-siswa.php");
