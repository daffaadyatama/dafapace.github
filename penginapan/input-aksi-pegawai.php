<?php
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

mysqli_query($koneksi,"insert into pegawai value('$id_pegawai' , '$nama' , '$alamat' , '$telp' )");
header("location:pegawai.php");
?>