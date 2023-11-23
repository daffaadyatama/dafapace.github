<html>
Tabel administrasi
<table border="1">
<head>
        <link rel="stylesheet" href="styletable.css">
    </head>
    <ul>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
			<li><a href="tamu.php">Pengunjung</a></li>
		</ul>
    <tr>
        <td>id_reservasi</td>
        <td>no_ktp</td>
        <td>id_kamar</td>
        <td>id_pegawai</td>
        <td>check-in</td>
        <td>check-out</td>  
        <td>AKSI</td>  

    </tr>

<?php
    include 'koneksi.php';
    $data=mysqli_query($koneksi,"select * from reservasi");
    while($tampil=mysqli_fetch_array($data)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_reservasi'] ?> </td>
    <td> <?php echo $tampil['id_tamu'] ?> </td>
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['chekin'] ?> </td>
    <td> <?php echo $tampil['chekout'] ?> </td>
    <td> <a href="hapus_reservasi_hotel.php?id_reservasi=<?php echo$tampil['id_reservasi']; ?>">Hapus</a>
         <a href="edit_reservasi_hotel.php?id_reservasi=<?php echo$tampil['id_reservasi']; ?>">Edit</a></td>
  

</tr>

<?php
    }
?>

</table>
<a href="input-reservasi.php"> <div style="text-align: center;"><button>Tambahkan Data Baru</button></div></a
</html>