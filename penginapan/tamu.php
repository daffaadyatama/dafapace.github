<html>
Tabel tamu
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
        <td>id_tamu</td>
        <td>nama</td>
        <td>alamat</td>
        <td>telp</td>
        <td>AKSI</td>  

    </tr>

<?php
    include 'koneksi.php';
    $data=mysqli_query($koneksi,"select * from tamu");
    while($tampil=mysqli_fetch_array($data)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_tamu'] ?> </td>
    <td> <?php echo $tampil['nama'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
    <td> <?php echo $tampil['telp'] ?> </td>
    <td> <a href="hapus_tamu.php?id=<?php echo$tampil['id_tamu']; ?>">Hapus</a>
         <a href="edit_tamu.php?id=<?php echo$tampil['id_tamu']; ?>">Edit</a></td>
  

</tr>

<?php
    }
?>

</table>
<a href="input-tamu.php">TAMBAHKAN DATA BARU</a>
</html>