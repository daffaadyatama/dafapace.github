<?php
include 'koneksi.php';

$id_reservasi = $_POST['id_reservasi'];
$no_ktp = $_POST['no_ktp'];
$id_kamar = $_POST['id_kamar'];
$id_pegawai = $_POST['id_pegawai'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

mysqli_query($koneksi,"INSERT into reservasi values('$id_reservasi','$no_ktp','$id_kamar','$id_pegawai','$check_in','$check_out')");
header("location:reservasi.php");
?>