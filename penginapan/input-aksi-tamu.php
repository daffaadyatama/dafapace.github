<?php
include 'koneksi.php';

$id_tamu = $_POST['id_tamu'];
$nama = $_POST['nama'];
$telepon = $_POST['alamat'];
$alamat = $_POST['telp'];

mysqli_query($koneksi,"insert into tamu values('$id_tamu','$nama','$alamat','$telp')");
header("location:tamu.php");
?>