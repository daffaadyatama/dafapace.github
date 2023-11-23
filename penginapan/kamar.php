<html>
    <head>
        <link rel="stylesheet" href="styletable.css">
    </head>
    <ul>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
			<li><a href="pengunjung.php">Pengunjung</a></li>
		</ul>
DAFTAR KAMAR
<table border="1">
    <tr>
        <td>id_kamar</td>
        <td>tipe_kamar</td>
        <td>harga</td>
        <td>AKSI</td>  

    </tr>

<?php
    include 'koneksi.php';
    $data=mysqli_query($koneksi,"select * from kamar");
    while($tampil=mysqli_fetch_array($data)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil['harga'] ?> </td>
    <td> <a href="hapus_kamar.php?id=<?php echo$tampil['id_kamar']; ?>">Hapus</a>
         <a href="edit-kamar.php?id=<?php echo$tampil['id_kamar']; ?>">Edit</a></td>
  

</tr>

<?php
    }
?>

</table>
<a href="input-kamar.php">TAMBAHKAN DATA BARU</a>
</html>