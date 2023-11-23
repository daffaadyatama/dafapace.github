<html>
Tabel Pegawai
<table border="1">
<head>
        <link rel="stylesheet" href="styletable.css">
    </head>
    <ul>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
			<li><a href="pengunjung.php">Pengunjung</a></li>
		</ul>


    <tr>
        <td>id_pegawai</td>
        <td>nama_pegawai</td>
        <td>telepon</td>
        <td>alamat</td>
        <td>AKSI</td>  

    </tr>

<?php
    include 'koneksi.php';
    $data=mysqli_query($koneksi,"select * from pegawai");
    while($tampil=mysqli_fetch_array($data)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['nama_pegawai'] ?> </td>
    <td> <?php echo $tampil['telepon'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
    <td> <a href="hapus_pegawai.php?id=<?php echo$tampil['id_pegawai']; ?>">Hapus</a>
         <a href="edit_pegawai.php?id=<?php echo$tampil['id_pegawai']; ?>">Edit</a></td>
  

</tr>

<?php
    }
?>

</table>
<a href="input-pegawai.php">TAMBAHKAN DATA BARU</a>
</html>