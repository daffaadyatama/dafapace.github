<?php
include 'koneksi.php';

$id_reservasi = $_POST['id_reservasi'];
$id_tamu = $_POST['id_tamu'];
$id_kamar = $_POST['id_kamar'];
$id_pegawai = $_POST['id_pegawai'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

mysqli_query($koneksi,"UPDATE reservasi SET id_reservasi='$id_reservasi', id_tamu='$id_tamu',
id_kamar='$id_kamar', id_pegawai='$id_pegawai', checkin='$checkin', checkout='$checkout' WHERE id_reservasi='$id_reservasi'");
header("location: reservasi.php"); 

?>